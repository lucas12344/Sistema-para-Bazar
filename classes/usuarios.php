<?php

	Class Usuario
	{
		private $pdo;
		public $mdgErro = "";

		public function conectar($nome, $host, $usuario, $senha)
		{
			global $pdo;
			try {
				$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
			} catch (PDOException $e) {
				$msg = $e->getMessage();
			}
			

		}

		public function cadastrar($nome, $email, $sexo, $funcao, $senha)
		{
			global $pdo;

			$sql = $pdo->prepare("SELECT id_usuario FROM users
				WHERE email = :e");
			$sql->bindValue(":e", $email);
			$sql->execute();
			if($sql->rowCount() > 0)
			{
				return false;
			}
			else
			{
				$sql = $pdo->prepare("INSERT INTO users(nome, email, sexo, funcao, senha) VALUES (:n, :e, :x, :f, :s)");

				$sql->bindValue(":n",$nome);
				$sql->bindValue(":e",$email);
				$sql->bindValue(":x",$sexo);
				$sql->bindValue(":f",$funcao);
				$sql->bindValue(":s",$senha);
				$sql->execute();
				return true;
			}

		}

		public function logar($email, $senha)
		{

			global $pdo;

			$sql = $pdo->prepare("SELECT id_usuario FROM users WHERE email = :e AND senha = :s");
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",$senha);
			$sql->execute();

			if($sql->rowCount() > 0)
			{
				$dado = $sql->fetch();
				session_start();
				$_SESSION['id_usuario'] = $dado['id_usuario'];
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	?>