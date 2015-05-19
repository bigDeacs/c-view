<?php namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateArticle;
use App\Http\Requests\UpdateArticle;

class ArticlesController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$articles = Article::latest('published_at')->get();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$users = User::orderBy('name', 'ASC')->lists('name', 'id');
		$tags = Tag::lists('name', 'id');
		return view('articles.create', compact('tags', 'users'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateArticle $request)
	{	
		$article = Article::create($request->all());
		if($request->input('tag_list') == null) {
			$article->tags()->sync([]);
		} else {
			$currentTags = array_filter($request->input('tag_list'), 'is_numeric');
			$newTags = array_diff($request->input('tag_list'), $currentTags);	
			foreach($newTags as $newTag)
			{
				if($tag = Tag::create(['name' => $newTag]))
				{
					$currentTags[] = $tag->id;
				}
			}
			$article->tags()->sync($currentTags);
		}
		return redirect('home/articles');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		$article = Article::find($id);
		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$article = Article::find($id);
		$tags = Tag::lists('name', 'id');
		$users = User::orderBy('name', 'ASC')->lists('name', 'id');
		return view('articles.edit', compact('article', 'tags', 'users'));
	}

	public function update(UpdateArticle $request, $id)
	{
		$article = Article::find($id);
		$article->update($request->all());
		$article->save();		
		if($request->input('tag_list') == null) {
			$article->tags()->sync([]);
		} else {
			$currentTags = array_filter($request->input('tag_list'), 'is_numeric');
			$newTags = array_diff($request->input('tag_list'), $currentTags);	
			foreach($newTags as $newTag)
			{
				if($tag = Tag::create(['name' => $newTag]))
				{
					$currentTags[] = $tag->id;
				}
			}
			$article->tags()->sync($currentTags);
		}
		return redirect()->route('articles.show', [$article->id]);
	}

	public function activate($id)
	{
		$article = Article::find($id);
		$article->status = 1;
		$article->save();
		return redirect('home/articles');
	}

	public function deactivate($id)
   	{
   		$article = Article::find($id);
   		$article->status = 0;
		$article->save();
      	return redirect('home/articles');
   	}

}
