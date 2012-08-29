<?php

	class Media{
	
		private $type, $sources;
		
		public function __construct(){
			$type = $sources = null;
		}
		
		public function setType($n){
			$this-> type = $n;
		}
		
		public function getType(){
			return $this-> type;
		}

		public function setSources($n){
			$this-> sources = $n;
		}
		
		public function getSource(){
			return $this-> sources;
		}
	}


?>