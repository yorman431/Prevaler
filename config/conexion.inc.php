<?php
  error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
/*
	$host = "localhost:3306";
  $dbName ="prevaler_data_base";
  $username = "prevaler_user";
  $password = "+@3yMCw[]y}@";
*/
	class Connection extends PDO{
		
		var $driver = 'mysql:';
		var $dbConnect;
		
		var $host = 'localhost';
		var $dbName = 'prevaler';
		var $username = 'root';
		var $password = 'root';
		
	/*
		var $host = 'localhost';
		var $dbName = 'diazcrea_prevaler';
		var $username = 'diazcrea_ARMT';
		var $password = '-lg=NN?[}fPb';
		*/
		function __construct(){
			try{
				$this->dbConnect = parent::__construct ("$this->driver host=$this->host; dbname=$this->dbName", $this->username, $this->password);
			}catch (PDOException $e){
				echo ($e->getMessage());
			}
		}
		
		function Close(){
			$this->dbConnect = null;
		}
		
	}
