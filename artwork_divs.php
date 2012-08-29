<?php

session_start();

$_SESSION['valid'] = 0;

echo "

		<head>
			
			<link rel='stylesheet' type='text/css' href='artwork_buttons.css'>
	
		</head>
		
	<body>

			<div id='bg'>
				<img src='body_BG.jpg' alt=''>
			</div>

			<div class= 'manuscripts'>

			</div>";
		
			include "Artwork_classes.php";
	
			$file = file_get_contents("config1.xml");
	
-			$info_forest = new SimpleXMLElement($file);
	
			$artwork_array = array();
	
			$count = 0;
			
			foreach($info_forest->manuscript as $a){
				
				$artwork_array[$count] = new Artwork();
				
				$artwork_array[$count]->setName($a->name);
				
				$artwork_array[$count]->setPath($a->path);
		
				$count2 = 0;
		
				foreach($a->media->mediatype as $m){
			
					$artwork_array[$count]->media[$count2] = new Media();
			
					$artwork_array[$count]->media[$count2]->setType($m->type);
			
					$artwork_array[$count]->media[$count2]->setSources($m->path);
			
					$count2++;
				
				}
		
				$count++;
			
			}
			
			echo "<div class = 'bm'>
				
			</div>
			
			
		</body>";
			
			foreach($artwork_array as $man){
			
				echo"
				<form action= 'manuscript_viewer.php' method= 'post'>
	
				<input class=bm type= 'submit' name='buton' value= '".$man->getName()."' />
	
				<input type='hidden' name='num' value='".$man->getName()."'>
	
				</form>";
			
			}

		

?>
		
			
			
		
