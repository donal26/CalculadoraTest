<?php 
	class Db extends Sqlite3{

	function __construct($url){
		$this->open($url);
	}

	function connect($url){
		$this->open($url);	
	}

	function execute($sql){
		$this->exec($sql);
	}

	function execute_query($sql){
		$array=[];
		$result=$this->query($sql);
		while( $row= $result->fetchArray(SQLITE3_ASSOC) ){
			$array[]=$row;
		}
		return $array;
	}

	function createDB(){
		$this->execute("CREATE TABLE suscriptions (
			id integer primary key autoincrement,
			initdate date,
			enddate date,
			system varchar(50),
			user_id integer
			 )");
	
	}
}
 ?>