<?php

class db {

	//host
	private $host = 'https://br510.hostgator.com.br:2083/cpsess5601632039/3rdparty/phpMyAdmin/index.php#PMAURL-60:index.php?db=&table=&server=1&target=&token=2488336485598a1152d55c2bef0e73cd';

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

		//verficar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}

		return $con;
	}

}

?>