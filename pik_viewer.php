<?php

	session_start();

	if($_SESSION['valid'] == 0){
	
		header("Location:artwork_divs.php");
	
	}

	$man = $_POST['num'];

	if($_GET['num'] != null){
	
		$man = $_GET['num'];
	
	}

if($_GET['p'] == null && $_GET['n'] == null){

	$current = 1;

}

else{

	if($_GET['p'] != null){
	
		$current = $_GET['ppage'];
		
	}
	
	else if($_GET['n'] != null){
	
		$current = $_GET['npage'];
	
	}

}

if($current > 1){

	$pn = $current - 1;

}

else{

	$pn = 1;

}

$nn = $current + 1;

$url = "http://amphoreus.hpcc.uh.edu/tomcat/chsimg/Img?&request=GetBinaryImage&urn=urn:cite:fufolioimg:ChadRGB.Chad".str_pad($current, 3, '0', STR_PAD_LEFT).":0.06,0.147,0.8,0.72";

$urn = "http://furman-classics.appspot.com/CTS?withXSLT=chs-gp&request=GetPassagePlus&urn=e.g. urn:cts:greekLit:tlg0031.tlg001.lichfield001";

echo "<html>
<body>

	<head>
			
		<link rel='stylesheet' type='text/css' href='pik_viewer.css'>
		
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

	<script type='text/javascript'>
   
   function resizeWindow() 
    {
        var windowHeight = getWindowHeight();
        var windowWidth = getWindowWidth();

        document.getElementById('content').style.height = (windowHeight - 4) + 'px';
        document.getElementById('content').style.width = (windowWidth - 4) + 'px';
    }

    function getWindowHeight() 
    {
        var windowHeight=0;
        if (typeof(window.innerHeight)=='number') 
        {
            windowHeight = window.innerHeight;
        }
        else {
            if (document.documentElement && document.documentElement.clientHeight) 
            {
                windowHeight = document.documentElement.clientHeight;
            }
            else 
            {
                if (document.body && document.body.clientHeight) 
                {
                    windowHeight = document.body.clientHeight;
                }
            }
        }
        return (windowHeight/1.25);
    }
    

    function getWindowWidth() 
    {
        var windowWidth=0;
        if (typeof(window.innerWidth)=='number') 
        {
            windowWidth = window.innerWidth;
        }
        else {
            if (document.documentElement && document.documentElement.clientWidth) 
            {
                windowWidth = document.documentElement.clientWidth;
            }
            else 
            {
                if (document.body && document.body.clientWidth) 
                {
                    windowWidth = document.body.clientWidth;
                }
            }
        }
        return (windowWidth/2.7);
    }
    
    function getRealWindowWidth() 
    {
        var windowWidth=0;
        if (typeof(window.innerWidth)=='number') 
        {
            windowWidth = window.innerWidth;
        }
        else {
            if (document.documentElement && document.documentElement.clientWidth) 
            {
                windowWidth = document.documentElement.clientWidth;
            }
            else 
            {
                if (document.body && document.body.clientWidth) 
                {
                    windowWidth = document.body.clientWidth;
                }
            }
        }
        return (windowWidth);
    }
    
    var height = getWindowHeight();
    
    var width = getWindowWidth();
    
    var rwidth = getRealWindowWidth();
    
    $(document).ready(function(){
    
    	$('div.frame').width(width);
    	$('div.frame_2').width(width);
    	
    	$('img.mann').width(width);
    	$('img.mann').height(height);
    	
    	$('div.main_frame').css('left', (rwidth/8));
    	
    	$('div.main_frame').width((width*2)+5);
    	$('div.main_frame').height(height);
    
    	$('div.frame').height(height);
    	$('div.frame_2').height(height);
    
    });
    
    </script>
    
    </head>
    
    <script type='text/javascript'>

		function EvalSound(soundobj, movement) {
	
			var thissound=document.getElementById(soundobj);
	
			thissound.play();
	
			if(movement>0){
				
				location.href=\"pik_viewer.php?n=true&npage=".$nn."&num=$man\";
				
				self.focus();
		
			}
			
			else{
			
 				location.href=\"pik_viewer.php?p=true&ppage=".$pn."&num=$man\";
				
				self.focus();
			
			}
		
		}
	
	</script>

	<audio  id=sound>
  		
  		<source src='bsound.mp3' type='audio/mp3' />

	</audio>
    
    <center><div class='main_frame'>
    
   	<div class = 'frame_2'>

		<a href='".$urn."'></a>

	</div>
	 
    <div class = 'frame'>

		<img class=mann src='".$url."'>

	</div>
	
	<div class = 'previous'>
	
		<input name='p' type = 'submit' value = 'previous' onClick=\"EvalSound('sound',-1);\">

	</div>
	
	<div class = 'next'>

		<input name='n' type ='submit' value = 'next' onClick=\"EvalSound('sound',1);\">


	</div>
	
	</div></center>
    
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
		
		</a></div>";
		
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




			



?>