<?php 

	class Suscription{

		private $id;
		private $system;
		private $initdate;
		private $endate;
		private $user_id;

		
		function __get($attribute)
		{
			return $this->$attribute;
		}

		function __set($attribute,$value){
			return $this->$attribute= $value;
		}
	}



 ?>