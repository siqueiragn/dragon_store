<?php

class MYSQL
{
  private $database;
    public function __construct($user = 'root',
	$password = '',
	$dbName = 'sistema',
	$dbServer = 'localhost')
    {
        @$this->database = new mysqli($dbServer,$user,$password,$dbName);
      /*	  if ($this->$database->connect_errno) 
			echo "Falha: " . $this->$database->connect_errno;
		else 
			echo "Foi\n";
		*/
    }

	
	public function findFirst($table, $where) {
		$comando = $this->$database->prepare("SELECT * FROM ".$table." WHERE ".$where." LIMIT 1");
		$comando->execute();
		$resultado = $comando->get_result();
		$linha = $resultado->fetch_assoc();
		return $linha;
	}
	
	public function execute($query){
		$comando = $this->database->prepare($query);
		$comando->execute();
	}
	
}

?>