<?php

	session_start();
	
	if($_POST['buton'] == true){
	
		$_SESSION['valid'] = 1;
		
	}
	
	if($_SESSION['valid'] == 0){
	
		header("Location:artwork_divs.php");
	
	}

	$man = $_POST['num'];

	if($_GET['num'] != null){
	
		$man = $_GET['num'];
	
	}
	
	echo"<html>

		<head>
			
			<link rel='stylesheet' type='text/css' href='manuscript_viewer.css'>
			
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
			
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
    	
    	$('div.frame_2').css('font-size', ((height*1.25)/60));
    	
    	$('div.main_frame').css('left', (rwidth/8));
    	
    	$('div.main_frame').width((width*2)+5);
    	$('div.main_frame').height(height);
    
    	$('div.frame').height(height);
    	$('div.frame_2').height(height);
    
    });
    
    </script>
    
	
		</head>
		
		<center><div class='main_frame'>
		
		<div class = 'frame'>

			<img class=mann src='Chad_Cover_Image.jpg'>

		<div class='start'>
		
			<a href='pik_viewer.php?num=".$man."'><input type='submit' value='Start'></a>

		
		</div>

		</div>
		
		<div class = 'frame_2'>


		
	<p>
About the Chad Gospels<br /><br /><br />


The Chad Gospels are an eighth century gospel book that currently resides at the Lichfield Cathedral in England. The book is 236 pages with 228 of them containing text and 8 illuminated. It was likely written by one scribe in the 700's and given to the church of St. Teilo before it came to the Lichfield Cathedral between 900 and 1020. 

The book was originally part of a two-volume set that contained the four gospels of the New Testament. However the second volume containing the rest of Luke and John was lost somewhere between the 1500 and 1600’s. 

The Gospels’ pages are velum, which is a material made from animal skin. It is estimated that the first volume of the book required 50-60 animals to be used to make enough pages for Matthew, Mark and Luke 1-3. 

The book was written in Latin in a version of St. Jerome’s Vulgate. In the script, there are 2,000 variations from the original Vulgate, something that has been of interest to scholars.

The Chad Gospels is significant not just because of its age. In its margins are notes written in Latin and also the earliest known Welsh. Page 141 of the manuscript contains some of the most interesting and informative marginal notes.

Part of the draw of this book is the things that are yet to be uncovered about it. Where was it made, and by whom? Where is the missing second half? This manuscript has much still to be discovered about it and much more to be learned from it.

	</p>
		</div>
		
		</div></center>
		
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
		
	    
		
		<div class='menubar'>";
		
		
		$count=0;
		
		$info= array("About","Credits","FoLIO");
		
		while($count<3){
		
			echo "<a href='".$info[$count].".php?num=".$man."' class=navb>".$info[$count]."</a>";
		
			$count++;
		
		}
				
		echo"</div>";
         
         
?>



