<?php

require_once "Usuario.class.php";

class Cadastrar extends Conexao {
    
    private $email;
    private $senha;
    private $tipo;
    private $carta_principios;
    private $politica_privacidade;

    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setCartaPrincipios($carta_principios){
        $this->carta_principios = $carta_principios;
    }
    public function setPoliticaPrivacidade($politica_privacidade){
        $this->politica_privacidade = $politica_privacidade;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getCartaPrincipios(){
        return $this->carta_principios;
    }
    public function getPoliticaPrivacidade(){
        return $this->politica_privacidade;
    }


    public function inserir_novo(){
        // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        //$crud = new Crud('usuarios');  

        $pdo = parent::getDB();

        $consultaNome = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? ");
        $consultaNome->bindValue(1, $this->getEmail());
        $consultaNome->execute();

        if ($consultaNome->rowCount() == 0):
           //$crud->inserir("email,password,tipo, carta_principios,politica_privacidade",
           //               "'$this->email', '$this->senha', '$this->tipo', 
           //               '$this->carta_principios', '$this->politica_privacidade'"); 
            
            $inserir_novo = $pdo->prepare("insert into usuarios (email,password,tipo, carta_principios,politica_privacidade)
                                    values (?, ?, ?, ?, ?)");
            $inserir_novo->bindValue(1, $this->getEmail());
            $inserir_novo->bindValue(2, $this->getSenha());
            $inserir_novo->bindValue(3, $this->getTipo());
            $inserir_novo->bindValue(4, $this->getCartaPrincipios());
            $inserir_novo->bindValue(5, $this->getPoliticaPrivacidade());
            $inserir_novo->execute();
        
            $l = new Login;
            $l->setLogin($this->email);
            $l->setSenha($this->senha);

            if($l->logar()):
                header("Location: form.php");
            else:
                $erro = "Erro ao logar";
            endif;
        else:
            //echo "<script type='text/javascript'> alert('Já existe uma conta para este nome e e-mail!'); 
             //   window.location = 'index.php'; </script>";

                echo "<script type='text/javascript'>
                        open_dialog('Erro', 'Já existe uma conta para este e-mail!', 'error');
                    </script>";
        endif;
    }
   
   }
   
?>
