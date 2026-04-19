<h3 style="text-align:center">Please Wait...</h3>
<?php 

	$request_URL = array_values(array_filter(explode('/',$_SERVER['REQUEST_URI']))); 
	
	if($request_URL[0]  === 'autumn-winter-2019' ) {
		echo '<script>window.location="http://lnjdenim.in/collections/autumn-winter-2020/"</script>';
	} elseif($request_URL[1]  === 'springsummer-2018-19' ) {
		echo '<script>window.location="'.get_permalink(319).'"</script>';
	} elseif($request_URL[1]  === 'autumnwinter-2018-19' ) {
		echo '<script>window.location="'.get_permalink(284).'"</script>';
	} elseif($request_URL[1]  === 'springsummer-2017-18' ) {
		echo '<script>window.location="'.get_permalink(141).'"</script>';
	} elseif($request_URL[1]  === 'autumnwinter-2017-18' ) {
		echo '<script>window.location="'.get_permalink(143).'"</script>';
	} else {
		echo '<script>window.location="'.site_url().'"</script>';
	}
?>
