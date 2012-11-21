<?php
	/* 
		TODO: 
		This is a quick demonstration so I use a fixed array.
		In real world, this will be an SQL query or something, 
		so it will save more performance for application/server
	*/
	$genres = array('Country', 'Pop', 'Rock', 'Hip hop', 'Rap', 'Classical', 'Blues', 'Jazz', 'Heavy Metal', 'Soul', 'R&B', 'Folk', 'Reggae', 'Funk', 'Gothic', 'Disco', 'Freestyle', 'Religious', 'Electronic', 'Opera');
	
	if(isset($_POST['genre']) && $_POST['genre'] != '') {
		$matches = array();
		foreach($genres as $genre) {
			if(strpos(strtolower($genre), strtolower($_POST['genre'])) !== false) {
				$matches[] = $genre;
			}
		}
		echo json_encode($matches);
	}
	
	if(isset($_POST['all'])) {
		echo json_encode($genres);
	}
?>