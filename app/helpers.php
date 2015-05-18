<?php

	function errors_for($attribute, $errors)
	{
		return $errors->first($attribute, '<div class="alert alert-danger" role="alert">:message</div>');
	}
?>