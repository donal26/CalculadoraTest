<?php

class BD extends Sqlite3{

    function __construct(){
       // $this->open("saritabd");
        $this->csirc("saritabd");

    }

    function exec($sql){
        $this->exec($sql);
    }

    function createBD(){
            $this->exec("CREATE TABLE user(id integer primary key autoincrement, name varchar(20), lastname varchar(20))");
            $this->exec("CREATE TABLE suscription(id integer primary key autoincrement, initdate date, enddate date, system varchar(50), userid int) ");
                
    }
}


?>