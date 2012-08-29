<?php

session_start();

	if($_SESSION['valid'] == 0){
	
		header("Location:artwork_divs.php");
	
	}

$man = $_POST['num'];

	if($_GET['num'] != null){
	
		$man = $_GET['num'];
	
	}


		
		/*--------- Esto siempre va para tener la clase llena y utilizarla en la application-------*/

			include "Artwork_classes.php";
	
			$file = file_get_contents("config1.xml");
	
			$info_forest = new SimpleXMLElement($file);
	
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
			
			/*----------- Termina lo mas importante-----------------*/
			
		
		echo "<div class=menubar>";
									
			foreach($artwork_array as $a){
			
				if($a->getName() == $man){

					$c = 1;
				
					foreach($a->media as $m){
					
						switch($c){
					
							case 1: $viewer = "pik_viewer.php?num=$man";break;
						
							case 4: $viewer = "3d.php?num=$man"; break;
							
							case 5: $viewer = "video_test.php?num=$man"; break;
										
						}
					
						echo"
				<a href='$viewer' class=navb>".$m->getType()."</a>";
				#<input class=bm type= 'submit' value= '".$m->getType()."' />
				#<input type='hidden' name='num' value='".$m->getType()."'>
				
						$c++;
					
					}	
				
				}

			}
			
			echo "</div>";
			
			echo

"<html>

	<head>
			
		<link rel='stylesheet' type='text/css' href='manuscript_viewer.css'>
	
	</head>

	<body>

		<div class = 'home_button'>
	
			<a href='artwork_divs.php'>
				
				<img src ='home_button.png' alt='home'/>
			
			</a>
		
		</div>
		
		<div class = 'info_button'>
	
			<a href=#>
				
				<img src ='info_BUTTON.png' alt='info'/>
			
			</a>
	
		</div>
		
		<div class = 'table-of-contents_button'>
	
		<a href='manuscript_viewer.php?num=".$man."'>
		
			<img src ='table-of-contents_BUTTON.png' alt='contents'/>
		
		</a></div>

		<iframe width='960' height='715' src='http://www.youtube.com/embed/jpN-NziGOoM' frameborder='0' allowfullscreen></iframe>";




	

?>