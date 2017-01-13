<?php

class Login extends Conexao {

	private $login;
	private $senha;

	public function setLogin($login){
		$this->login = $login;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->senha;
	}

	public function logar(){
		$pdo = parent::getDB();

		$logar = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
		$logar->bindValue(1, $this->getLogin());
		$logar->bindValue(2, $this->getSenha());
		$logar->execute();
		if ($logar->rowCount() == 1):
			
			$dados = $logar->fetch(PDO::FETCH_OBJ);
			$_SESSION['usuario_id'] = $dados->id;
			$_SESSION['usuario_email'] = $dados->email;
			$_SESSION['usuario_tipo'] = $dados->tipo;
			$_SESSION['logado'] = true;

			//verifica se o usuário já realizou algum cadastro
			$verifica = $pdo->prepare("SELECT * FROM organizacoes WHERE usuario_id = ?");
			$verifica->bindValue(1, $dados->id);
			$verifica->execute();

			$res = $verifica->fetch(PDO::FETCH_OBJ);

			if ($verifica->rowCount() >= 1):
				$_SESSION['cadastro'] = true;
				$_SESSION['organizacao_id'] = $res->id;
				echo $verifica->id;
			else:
				$_SESSION['cadastro'] = false;
			endif;
			
			return true;
		else:
			return false;
		endif;
	}

	public static function deslogar() {
		if(isset($_SESSION['logado'])):
			unset($_SESSION['logado']);
			session_destroy();
			header("Location: index.php");
		endif;
	}
}

?>
