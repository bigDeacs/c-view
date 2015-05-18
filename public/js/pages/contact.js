var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: -28.103621,
				lng: 153.426834,
				zoom: 18,
			  });
			   var marker = map.addMarker({
					lat: -28.103621,
					lng: 153.426834,
		            title: 'C-View Windows'
		        });
			});
        }

    };
}();