<?php


class db {

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'nanoc125_acesso';

	//senha
	private $senha = '12345!';

	//banco de dados
	private $database = 'nanoc125_cadastro_email';

	public function conecta_mysql(){

		//criar a conexao
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');

		return $con;
	}

}


?>