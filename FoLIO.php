<?php

$man = $_POST['num'];

	if($_GET['num'] != null){
	
		$man = $_GET['num'];
	
	}
	
	
	echo"<html>

		<head>
			
			<link rel='stylesheet' type='text/css' href='manuscript_viewer.css'>
	
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	
		</head>
		
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
    	
    	$('div.frame_2').css('font-size', ((height*1.25)/55));
    	
    	$('div.main_frame').css('left', (rwidth/8));
    	
    	$('div.main_frame').width((width*2)+5);
    	$('div.main_frame').height(height);
    
    	$('div.frame').height(height);
    	$('div.frame_2').height(height);
    
    });
    
    </script>
		
		<div class = 'home_button'>
	
		<a href='artwork_divs.php?num=".$man."'>
			<img src ='home_button.png' alt='home'/>
		</a>
		
		</div>
		
		<div class = 'table-of-contents_button'>
	
		<a href='manuscript_viewer.php?num=".$man."'>
			<img src ='table-of-contents_BUTTON.png' alt='contents'/>
		</a>
		
		</div>
		
		<div class = 'info_button'>
	
		<a href=#>
			<img src ='info_BUTTON.png' alt='info'/>
		</a>
	
		</div>
		
		<center><div class=main_frame>
		
		<div class = 'frame'>

			<img class=mann src='Chad_Cover_Image.jpg'>
			
			<div class='start'>
		
			<a href='pik_viewer.php?num=".$man."'><input type='submit' value='Start'></a>

			</div>

		</div>
		
		<div class = 'frame_2'>


		
	<p>
About FoLIO<br /><br /><br />

FoLIO is a project that “develops a framework for organizing images that allows the specific types of relationships between those images to be represented, manipulated, highlighted, enhanced, and studied.” FoLIO stands for “Framework for Longitudinal Image-based Organization.” 
The project focuses on imaging important manuscripts so that the images can later be manipulated to highlight details that may not have been seen otherwise. This is done through imaging each page in different light spectrums to create a multispectral image of the page. This can expose parts of the manuscripts that have been lost to aging.
This imaging process was used on the images of the Chad Gospels used for the InfoForest App.<br><br> 

<p class=crd>For more information about the project, visit <a href='http://vis.uky.edu/research/imaging/folio/'>http://vis.uky.edu/research/imaging/folio/</a></p>
	</p>
	
		</div>
		
		</div></center>
		
		<div class='menubar'>";
		
		
		$count=0;
		
		$info= array("About","Credits","FoLIO");
		
		while($count<3){
		
			echo "<a href='".$info[$count].".php?num=".$man."' class=navb>".$info[$count]."</a>";
		
			$count++;
		
		}
				
		echo"</div>";
         
         
?>



