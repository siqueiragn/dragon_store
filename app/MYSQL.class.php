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
	
    public function getDB(){
    	return $this->database;
    }
	
	public function findFirst($table, $where) {
		$comando = $this->$database->prepare("SELECT * FROM ".$table." WHERE ".$where." LIMIT 1");
		$comando->execute();
		$resultado = $comando->get_result();
		$linha = $resultado->fetch_assoc();
		return $linha;
	}
	
	public function exec($query){
		echo "<br>".$query;
		$comando = $this->database->prepare($query);
		
		if ($comando) {
			mysqli_real_escape_string($this->database, $query);
			$comando->execute();
			$resultado = $comando->get_result();
			return $resultado;
		}
		else {
			echo "<br> Erro no preparo do comando SQL";
		}
		
	}
	
	public function filtrar($variavel) {
		
		$variavel = str_ireplace(' OR ','',$variavel);
		$variavel = str_ireplace(' AND ', '', $variavel);
		$variavel = str_ireplace(';', '', $variavel);
		$variavel = str_ireplace('\'','',$variavel);
		$variavel = str_ireplace('\"','',$variavel);
		$variavel = str_ireplace('DROP ','',$variavel);
		$variavel = str_ireplace('UPDATE ','',$variavel);
		$variavel = str_ireplace('DELETE ', '', $variavel);
		$variavel = str_ireplace('=','',$variavel);
		$variavel = str_ireplace('-','',$variavel);
		return $variavel;
		
	}
	
}

?>