<?php

	include 'Media_classes.php';

	class Artwork{
	
		private $name, $path;
		public $media;	
	
		public function __construct(){
			$name = $path = null;
			$media = array();
		}
		
		public function setName ($n){
			$this-> name = $n;
		}
	
		public function getName (){
			return $this-> name;
		}
	
	
		public function setPath ($n){
			$this-> path = $n;
		}
	
		public function getPath (){
			return $this-> path;
		}
	
		public function setMedia ($n){
			$this-> $media = $n;
		}
	
		public function getMedia (){
			return $this-> $media;
		}
		
	}
	
?>