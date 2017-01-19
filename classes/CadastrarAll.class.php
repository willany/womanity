<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UNA Ecossistema</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/sweetalert.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/retina-1.1.0.min.js"></script>
        <script src="../assets/js/sweetalert.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        <script src="../assets/js/validator.min.js"></script>
        <script src="../assets/js/jquery.maskedinput.js" type="text/javascript"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </head>

    <body>
<?php

include_once 'Conexao.class.php';

class CadastrarAll extends Conexao {

    //******Organizacaoes*******//
    private $cnpj;
    private $localizacao;
    private $nome;
    private $sigla;
    private $telefone;
    private $email;
    private $tipo;
    private $inicio_atv;
    private $qtde_pessoas;
    private $recursos_finaceiros;
    private $descricao;
    private $publico_atendido;
    private $politicas_publicas;
    private $monitoramento_atividades;
    private $estrategia_comunicacao;
    private $premiacao_certificacao;
    private $organizacao_pai;
    private $natureza;
    private $usuario_id;
    private $inputnomeong;
    private $justificativa_orcamento;
    private $qtde_beneficiadas;
    private $identifica_organizacao_outros;
    private $fonte_recursos_outros;


    //******Contatos*******//
    private $nome_1;
    private $cargo_1;
    private $email_1;
    private $telefone_1;
    private $celular_1;

    private $nome_2;
    private $cargo_2;
    private $email_2;
    private $telefone_2;
    private $celular_2;

    //******orçamentos*******//
    private $orcamento_2014;
    private $orcamento_2015;
    private $orcamento_2016;

    //Recursos Financeiros lista
    private $recursos_finaceiros_lista;

    //Politicas publicas
    private $politicas_publicas_lista;

    //Funções
    private $funcoes;
    private $numero_beneficiarios;

    //Empoderamento
    private $empoderamento_nome_1;
    private $empoderamento_desc_1;
    private $empoderamento_nome_2;
    private $empoderamento_desc_2;
    private $empoderamento_nome_3;
    private $empoderamento_desc_3;

    //Ação direta
    private $estados;

    //Relaciona
    private $relaciona_1;
    private $relaciona_2;
    private $relaciona_3;

    //Temas
    private $temas;

    //Subtemas
    private $subtemas;

    //Endereço
    private $regiao;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    private $complemento;
    private $cep;

    //Redes Sociais
    private $site;
    private $facebook;
    private $instagram;
    private $twitter;
    private $linkedin;
    private $outros;

    //Indicações
    private $indica_nome_1;
    private $indica_email_1;
    private $indica_telefone_1;
    private $indica_nome_2;
    private $indica_email_2;
    private $indica_telefone_2;
    private $indica_nome_3;
    private $indica_email_3;
    private $indica_telefone_3;


    //organizacoes Sets
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function setLocalizacao($localizacao){
        $this->localizacao = $localizacao;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSigla($sigla){
        $this->sigla = $sigla;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setInicioAtv($inicio_atv){
        $this->inicio_atv = $inicio_atv;
    }
    public function setQtdePessoas($qtde_pessoas){
        $this->qtde_pessoas = $qtde_pessoas;
    }
    public function setRecursosFinaceiros($recursos_finaceiros){
        $this->recursos_finaceiros = $recursos_finaceiros;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setPublicoAtendido($publico_atendido){
        $this->publico_atendido = $publico_atendido;
    }
    public function setPoliticasPublicas($politicas_publicas){
        $this->politicas_publicas = $politicas_publicas;
    }
    public function setMonitoramentoAtividades($monitoramento_atividades){
        $this->monitoramento_atividades = $monitoramento_atividades;
    }
    public function setEstrategiaComunicacao($estrategia_comunicacao){
        $this->estrategia_comunicacao = $estrategia_comunicacao;
    }
    public function setPremiacaoCertificacao($premiacao_certificacao){
        $this->premiacao_certificacao = $premiacao_certificacao;
    }
    public function setOrganizacaoPai($organizacao_pai){
        $this->organizacao_pai = $organizacao_pai;
    }
    public function setNatureza($natureza){
        $this->natureza = $natureza;
    }
    public function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function setInputnomeong($inputnomeong){
        $this->inputnomeong = $inputnomeong;
    }

    public function setJustificativaOrcamento($justificativa_orcamento){
        $this->justificativa_orcamento = $justificativa_orcamento;
    }

    public function setQtdeBeneficiadas($qtde_beneficiadas){
        $this->qtde_beneficiadas = $qtde_beneficiadas;
    }
    public function setIdentificaOrganizacaOutros($identifica_organizacao_outros){
        $this->identifica_organizacao_outros = $identifica_organizacao_outros;
    }

    public function setFonteRecursosOutros($fonte_recursos_outros){
        $this->fonte_recursos_outros = $fonte_recursos_outros;
    }
    

    //organizacoes Gets
    public function getCnpj(){
       return $this->cnpj;
    }
    public function getLocalizacao(){
       return $this->localizacao;
    }
    public function getNome(){
       return $this->nome;
    }
    public function getSigla(){
       return $this->sigla;
    }
    public function getTelefone(){
       return $this->telefone;
    }
    public function getEmail(){
       return $this->email;
    }
    public function getTipo(){
       return $this->tipo;
    }
    public function getInicioAtv(){
       return $this->inicio_atv;
    }
    public function getQtdePessoas(){
       return $this->qtde_pessoas;
    }
    public function getRecursosFinaceiros(){
       return $this->recursos_finaceiros;
    }
    public function getDescricao(){
       return $this->descricao;
    }
    public function getPublicoAtendido(){
       return $this->publico_atendido;
    }
    public function getPoliticasPublicas(){
       return $this->politicas_publicas;
    }
    public function getMonitoramentoAtividades(){
       return $this->monitoramento_atividades;
    }
    public function getEstrategiaComunicacao(){
       return $this->estrategia_comunicacao;
    }
    public function getPremiacaoCertificacao(){
       return $this->premiacao_certificacao;
    }
    public function getOrganizacaoPai(){
       return $this->organizacao_pai;
    }
    public function getNatureza(){
       return $this->natureza;
    }
    public function getUsuarioId(){
       return $this->usuario_id;
    }

     public function getInputnomeong(){
       return $this->inputnomeong;
    }
    
    public function getJustificativaOrcamento(){
       return $this->justificativa_orcamento;
    }

    public function getQtdeBeneficiadas(){
       return $this->qtde_beneficiadas;
    }

    public function getIdentificaOrganizacaOutros(){
        return $this->identifica_organizacao_outros;
    }

    public function getFonteRecursosOutros(){
        return $this->fonte_recursos_outros;
    }


    //contatos Sets
    public function setNome_1($nome_1){
        $this->nome_1 = $nome_1;
    }
    public function setCargo_1($cargo_1){
        $this->cargo_1 = $cargo_1;
    }
    public function setEmail_1($email_1){
        $this->email_1 = $email_1;
    }

    public function setTelefone_1($telefone_1){
        $this->telefone_1 = $telefone_1;
    }
    public function setCelular_1($celular_1){
        $this->celular_1 = $celular_1;
    }

    public function setNome_2($nome_2){
        $this->nome_2 = $nome_2;
    }

    public function setCargo_2($cargo_2){
        $this->cargo_2 = $cargo_2;
    }
    public function setEmail_2($email_2){
        $this->email_2 = $email_2;
    }

    public function setTelefone_2($telefone_2){
        $this->telefone_2 = $telefone_2;
    }
    public function setCelular_2($celular_2){
        $this->celular_2 = $celular_2;
    }

    //Contatos Gets
    public function getNome_1(){
        return $this->nome_1;
    }
    public function getCargo_1(){
        return $this->cargo_1;
    }
    public function getEmail_1(){
        return $this->email_1;
    }
    public function getTelefone_1(){
        return $this->telefone_1;
    }
    public function getCelular_1(){
        return $this->celular_1;
    }

    public function getNome_2(){
        return $this->nome_2;
    }
    public function getCargo_2(){
        return $this->cargo_2;
    }
    public function getEmail_2(){
        return $this->email_2;
    }
    public function getTelefone_2(){
        return $this->telefone_2;
    }
    public function getCelular_2(){
        return $this->celular_2;
    }


    //Orçamentos Sets
    public function setOrcamento_2014($orcamento_2014){
        $this->orcamento_2014 = $orcamento_2014;
    }
    public function setOrcamento_2015($orcamento_2015){
        $this->orcamento_2015 = $orcamento_2015;
    }
    public function setOrcamento_2016($orcamento_2016){
        $this->orcamento_2016 = $orcamento_2016;
    }

    //Orçamentos Gets
    public function getOrcamento_2014(){
        return $this->orcamento_2014;
    }
    public function getOrcamento_2015(){
        return $this->orcamento_2015;
    }
    public function getOrcamento_2016(){
        return $this->orcamento_2016;
    }

    //recursos_finaceiros_lista Gets
    public function setRecursosFinaceirosLista($recursos_finaceiros_lista){
        $this->recursos_finaceiros_lista = $recursos_finaceiros_lista;
    }

    //recursos_finaceiros_lista Gets
    public function getRecursosFinaceirosLista(){
        return $this->recursos_finaceiros_lista;
    }

    //Politicas Publicas lista Gets
    public function setPoliticasPublicasList($politicas_publicas_lista){
        $this->politicas_publicas_lista = $politicas_publicas_lista;
    }

    //Politicas Publicas lista Gets
    public function getPoliticasPublicasList(){
        return $this->politicas_publicas_lista;
    }

    //Funções Gets
    public function setFuncoes($funcoes){
        $this->funcoes = $funcoes;
    }
    public function setNumeroBeneficiarios($numero_beneficiarios){
        $this->numero_beneficiarios = $numero_beneficiarios;
    }

    //Funções Gets
    public function getFuncoes(){
        return $this->funcoes;
    }
    public function getNumeroBeneficiarios(){
        return $this->numero_beneficiarios;
    }

    //Empoderamento Sets
    public function setEmpoderamentoNome_1($empoderamento_nome_1){
        $this->empoderamento_nome_1 = $empoderamento_nome_1.= "_1";
    }
    public function setEmpoderamentoDesc_1($empoderamento_desc_1){
        $this->empoderamento_desc_1 = $empoderamento_desc_1;
    }
    public function setEmpoderamentoNome_2($empoderamento_nome_2){
        $this->empoderamento_nome_2 = $empoderamento_nome_2.= "_2";
    }
    public function setEmpoderamentoDesc_2($empoderamento_desc_2){
        $this->empoderamento_desc_2 = $empoderamento_desc_2;
    }
    public function setEmpoderamentoNome_3($empoderamento_nome_3){
        $this->empoderamento_nome_3 = $empoderamento_nome_3.= "_3";
    }
    public function setEmpoderamentoDesc_3($empoderamento_desc_3){
        $this->empoderamento_desc_3 = $empoderamento_desc_3;
    }


    //Empoderamento Gets
    public function getEmpoderamentoNome_1(){
        return $this->empoderamento_nome_1;
    }
    public function getEmpoderamentoDesc_1(){
        return $this->empoderamento_desc_1;
    }
    public function getEmpoderamentoNome_2(){
        return $this->empoderamento_nome_2;
    }
    public function getEmpoderamentoDesc_2(){
        return $this->empoderamento_desc_2;
    }
    public function getEmpoderamentoNome_3(){
        return $this->empoderamento_nome_3;
    }
    public function getEmpoderamentoDesc_3(){
        return $this->empoderamento_desc_3;
    }


    //atuação direta Gets
    public function setEstados($estados){
        $this->estados = $estados;
    }

    //atuação direta Gets
    public function getEstados(){
        return $this->estados;
    }


    //Realaciona Sets
    public function setRelaciona_1($relaciona_1){
        $this->relaciona_1 = $relaciona_1.= "_1";
    }
    public function setRelaciona_2($relaciona_2){
        $this->relaciona_2 = $relaciona_2.= "_2";
    }
    public function setRelaciona_3($relaciona_3){
        $this->relaciona_3 = $relaciona_3.= "_3";
    }


    //atuação Relaciona Gets
    public function getRelaciona_1(){
        return $this->relaciona_1;
    }
    public function getRelaciona_2(){
        return $this->relaciona_2;
    }
    public function getRelaciona_3(){
        return $this->relaciona_3;
    }

    //Temas Sets
    public function setTemas($temas){
        $this->temas = $temas;
    }

    //Temas Gets
    public function getTemas(){
        return $this->temas;
    }

    //Subtemas Sets
    public function setSubtemas($subtemas){
        $this->subtemas = $subtemas;
    }

    //Subtemas Gets
    public function getSubtemas(){
        return $this->subtemas;
    }


    //Endereço Sets
    public function setRegiao($regiao){
        $this->regiao = $regiao;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function setRua($rua){
        $this->rua = $rua;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }


    //Endereço Relaciona Gets
    public function getRegiao(){
        return $this->regiao;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getCep(){
        return $this->cep;
    }


    //Redes Sociais Sets
    public function setSite($site){
        $this->site = $site;
    }
    public function setFacebook($facebook){
        $this->facebook = $facebook;
    }
    public function setTwitter($twitter){
        $this->twitter = $twitter;
    }
    public function setInstagram($instagram){
        $this->instagram = $instagram;
    }
    public function setLinkedin($linkedin){
        $this->linkedin = $linkedin;
    }
    public function setOutros($outros){
        $this->outros = $outros;
    }

    //Redes Sociais Gets
    public function getSite(){
        return $this->site;
    }
    public function getFacebook(){
        return $this->facebook;
    }
    public function getTwitter(){
        return $this->twitter;
    }
    public function getInstagram(){
        return $this->instagram;
    }
    public function getLinkedin(){
        return $this->linkedin;
    }
    public function getOutros(){
        return $this->outros;
    }


    //Indicações Sets
    public function setIndicaNome_1($indica_nome_1){
        $this->indica_nome_1 = $indica_nome_1.= "_1";
    }
    public function setIndicaEmail_1($indica_email_1){
        $this->indica_email_1 = $indica_email_1;
    }
    public function setIndicaTelefone_1($indica_telefone_1){
        $this->indica_telefone_1 = $indica_telefone_1;
    }
    public function setIndicaNome_2($indica_nome_2){
        $this->indica_nome_2 = $indica_nome_2.= "_2";
    }
    public function setIndicaEmail_2($indica_email_2){
        $this->indica_email_2 = $indica_email_2;
    }
    public function setIndicaTelefone_2($indica_telefone_2){
        $this->indica_telefone_2 = $indica_telefone_2;
    }
    public function setIndicaNome_3($indica_nome_3){
        $this->indica_nome_3 = $indica_nome_3.= "_3";
    }
    public function setIndicaEmail_3($indica_email_3){
        $this->indica_email_3 = $indica_email_3;
    }
    public function setIndicaTelefone_3($indica_telefone_3){
        $this->indica_telefone_3 = $indica_telefone_3;
    }

    //Indicações Gets
    public function getIndicaNome_1(){
        return $this->indica_nome_1;
    }
    public function getIndicaEmail_1(){
        return $this->indica_email_1;
    }
    public function getIndicaTelefone_1(){
        return $this->indica_telefone_1;
    }
    public function getIndicaNome_2(){
        return $this->indica_nome_2;
    }
    public function getIndicaEmail_2(){
        return $this->indica_email_2;
    }
    public function getIndicaTelefone_2(){
        return $this->indica_telefone_2;
    }
    public function getIndicaNome_3(){
        return $this->indica_nome_3;
    }
    public function getIndicaEmail_3(){
        return $this->indica_email_3;
    }
    public function getIndicaTelefone_3(){
        return $this->indica_telefone_3;
    }


    public function inserir_novo(){
        $pdo = parent::getDB();
        try{

            $data_atual = date("Y-m-d");


            $pdo->beginTransaction();

            $inserir_ong = $pdo->prepare("insert into organizacoes (
                cnpj, localizacao, nome, sigla, telefone, email, tipo, inicio_atv, qtde_pessoas, recursos_financeiros,
                descricao,  publico_atendido, politicas_publicas, monitoramento_atividades, estrategia_comunicacao,
                premiacao_certificacao, organizacao_pai, identifica_iniciativa, usuario_id, inputnomeong, justificativa_orcamento, 
                pessoas_benefeciadas, identifica_organizacao_outros, fonte_recursos_outros, created_at)
                                    values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $inserir_ong->bindValue(1, $this->getCnpj());
            $inserir_ong->bindValue(2, $this->getLocalizacao());
            $inserir_ong->bindValue(3, $this->getNome());
            $inserir_ong->bindValue(4, $this->getSigla());
            $inserir_ong->bindValue(5, $this->getTelefone());
            $inserir_ong->bindValue(6, $this->getEmail());
            $inserir_ong->bindValue(7, $this->getTipo());
            $inserir_ong->bindValue(8, $this->getInicioAtv());
            $inserir_ong->bindValue(9, $this->getQtdePessoas());
            $inserir_ong->bindValue(10, $this->getRecursosFinaceiros());
            $inserir_ong->bindValue(11, $this->getDescricao());
            $inserir_ong->bindValue(12, $this->getPublicoAtendido());
            $inserir_ong->bindValue(13, $this->getPoliticasPublicas());
            $inserir_ong->bindValue(14, $this->getMonitoramentoAtividades());
            $inserir_ong->bindValue(15, $this->getEstrategiaComunicacao());
            $inserir_ong->bindValue(16, $this->getPremiacaoCertificacao());
            $inserir_ong->bindValue(17, $this->getOrganizacaoPai());
            $inserir_ong->bindValue(18, $this->getNatureza());
            $inserir_ong->bindValue(19, $this->getUsuarioId());
            $inserir_ong->bindValue(20, $this->getInputnomeong());
            $inserir_ong->bindValue(21, $this->getJustificativaOrcamento());
            $inserir_ong->bindValue(22, $this->getQtdeBeneficiadas());
            $inserir_ong->bindValue(23, $this->getIdentificaOrganizacaOutros());
            $inserir_ong->bindValue(24, $this->getFonteRecursosOutros());
            $inserir_ong->bindValue(25, $data_atual);
            $inserir_ong->execute();
            $organizacao_id = $pdo->lastInsertId();
            $_SESSION['organizacao_id'] = $organizacao_id;

            $inserir_contato = $pdo->prepare("insert into contatos (cargo, email, telefone, celular, tipo, organizacao_id, nome)
                                    values (?, ?, ?, ?, ?, ?, ?)");
            $inserir_contato->bindValue(1, $this->getCargo_1());
            $inserir_contato->bindValue(2, $this->getEmail_1());
            $inserir_contato->bindValue(3, $this->getTelefone_1());
            $inserir_contato->bindValue(4, $this->getCelular_1());
            $inserir_contato->bindValue(5, 1);
            $inserir_contato->bindValue(6, $organizacao_id);
            $inserir_contato->bindValue(7, $this->getNome_1());
            $inserir_contato->execute();

            $inserir_contato->bindValue(1, $this->getCargo_2());
            $inserir_contato->bindValue(2, $this->getEmail_2());
            $inserir_contato->bindValue(3, $this->getTelefone_2());
            $inserir_contato->bindValue(4, $this->getCelular_2());
            $inserir_contato->bindValue(5, 2);
            $inserir_contato->bindValue(6, $organizacao_id);
            $inserir_contato->bindValue(7, $this->getNome_2());
            $inserir_contato->execute();

            $orcamento = $this->getOrcamento_2014();
            $inserir_orcamentos = $pdo->prepare("insert into orcamentos (ano, valor, organizacao_id)
                                    values (?, ?, ?)");
            $inserir_orcamentos->bindValue(1, 2014);
            if ($orcamento == ""){
                $inserir_orcamentos->bindValue(2, '0.00');
            }else{
                $inserir_orcamentos->bindValue(2, str_replace(',', '.',str_replace('.', '',$this->getOrcamento_2014())));
            }
            $inserir_orcamentos->bindValue(3, $organizacao_id);
            $inserir_orcamentos->execute();

            $orcamento = $this->getOrcamento_2015();
            $inserir_orcamentos->bindValue(1, 2015);
            if ($orcamento == ""){
                $inserir_orcamentos->bindValue(2, '0.00');
            }else{
                $inserir_orcamentos->bindValue(2, str_replace(',', '.',str_replace('.', '',$this->getOrcamento_2015())));
            }
            $inserir_orcamentos->bindValue(3, $organizacao_id);
            $inserir_orcamentos->execute();

            $orcamento = $this->getOrcamento_2016();
            $inserir_orcamentos->bindValue(1, 2016);
            if ($orcamento == ""){
                $inserir_orcamentos->bindValue(2, '0.00');
            }else{
                $inserir_orcamentos->bindValue(2, str_replace(',', '.',str_replace('.', '',$this->getOrcamento_2016())));
            }
            $inserir_orcamentos->bindValue(3, $organizacao_id);
            $inserir_orcamentos->execute();


            $inserir_recursos_financeiros_lista = $pdo->prepare("insert into origem_recursos (tipo, organizacao_id)
                                   values (?, ?)");
            $recursos_finaceiros_lista = $this->getRecursosFinaceirosLista();
                foreach ($recursos_finaceiros_lista  as $recurso){
                   $inserir_recursos_financeiros_lista->bindValue(1, $recurso);
                   $inserir_recursos_financeiros_lista->bindValue(2, $organizacao_id);
                   $inserir_recursos_financeiros_lista->execute();
                }

            $inserir_politicas_publicas_lista = $pdo->prepare("insert into politicas_publicas (tipo, organizacao_id)
                                   values (?, ?)");
            $politicas_publicas_lista = $this->getPoliticasPublicasList();
                foreach ($politicas_publicas_lista  as $politica){
                   $inserir_politicas_publicas_lista->bindValue(1, $politica);
                   $inserir_politicas_publicas_lista->bindValue(2, $organizacao_id);
                   $inserir_politicas_publicas_lista->execute();
                }


            $inserir_funcoes = $pdo->prepare("insert into funcoes (tipo, complemento, organizacao_id)
                                   values (?, ?, ?)");
            $funcoes = $this->getFuncoes();

                foreach ($funcoes  as $funcao){
                    if ($funcao == "Atuação direta com mulheres, homens, LGBTT, etc"){
                        $inserir_funcoes->bindValue(1, $funcao);
                        $inserir_funcoes->bindValue(2, $this->getNumeroBeneficiarios());
                        $inserir_funcoes->bindValue(3, $organizacao_id);
                        $inserir_funcoes->execute();
                    }else{
                        $inserir_funcoes->bindValue(1, $funcao);
                        $inserir_funcoes->bindValue(2, 0);
                        $inserir_funcoes->bindValue(3, $organizacao_id);
                        $inserir_funcoes->execute();
                    }
                   
                }

            $inserir_empoderamentos = $pdo->prepare("insert into empoderamento (nome, descricao, organizacao_id)
                                    values (?, ?, ?)");
            $inserir_empoderamentos->bindValue(1, $this->getEmpoderamentoNome_1());
            $inserir_empoderamentos->bindValue(2, $this->getEmpoderamentoDesc_1());
            $inserir_empoderamentos->bindValue(3, $organizacao_id);
            $inserir_empoderamentos->execute();

            $inserir_empoderamentos->bindValue(1, $this->getEmpoderamentoNome_2());
            $inserir_empoderamentos->bindValue(2, $this->getEmpoderamentoDesc_2());
            $inserir_empoderamentos->bindValue(3, $organizacao_id);
            $inserir_empoderamentos->execute();

            $inserir_empoderamentos->bindValue(1, $this->getEmpoderamentoNome_3());
            $inserir_empoderamentos->bindValue(2, $this->getEmpoderamentoDesc_3());
            $inserir_empoderamentos->bindValue(3, $organizacao_id);
            $inserir_empoderamentos->execute();


            $inserir_atuacao_direta = $pdo->prepare("insert into atuacao_direta (estado, organizacao_id)
                                   values (?, ?)");
            $estados = $this->getEstados();
            foreach ($estados  as $estado){

               $inserir_atuacao_direta->bindValue(1, $estado);
               $inserir_atuacao_direta->bindValue(2, $organizacao_id);
               $inserir_atuacao_direta->execute();
            }


            $inserir_relaciona = $pdo->prepare("insert into relacionadas (nome, organizacao_id)
                                   values (?, ?)");
            $inserir_relaciona->bindValue(1, $this->getRelaciona_1());
            $inserir_relaciona->bindValue(2, $organizacao_id);
            $inserir_relaciona->execute();

            $inserir_relaciona->bindValue(1, $this->getRelaciona_2());
            $inserir_relaciona->bindValue(2, $organizacao_id);
            $inserir_relaciona->execute();


            $inserir_relaciona->bindValue(1, $this->getRelaciona_3());
            $inserir_relaciona->bindValue(2, $organizacao_id);
            $inserir_relaciona->execute();


            $inserir_tema = $pdo->prepare("insert into temas (tema, organizacao_id)
                                   values (?, ?)");
            $temas = $this->getTemas();
            foreach ($temas  as $tema){
               $inserir_tema->bindValue(1, $tema);
               $inserir_tema->bindValue(2, $organizacao_id);
               $inserir_tema->execute();
            }

            $inserir_subtema = $pdo->prepare("insert into subtemas (subtema, organizacao_id)
                                   values (?, ?)");
            $subtemas = $this->getSubtemas();
            foreach ($subtemas  as $subtema){
               $inserir_subtema->bindValue(1, $subtema);
               $inserir_subtema->bindValue(2, $organizacao_id);
               $inserir_subtema->execute();
            }

            $inserir_endereco =  $pdo->prepare("insert into enderecos (regiao, estado, cidade, bairro,
                rua, numero, complemento, cep, organizacao_id)
                                   values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $inserir_endereco->bindValue(1, $this->getRegiao());
            $inserir_endereco->bindValue(2, $this->getEstado());
            $inserir_endereco->bindValue(3, $this->getCidade());
            $inserir_endereco->bindValue(4, $this->getBairro());
            $inserir_endereco->bindValue(5, $this->getRua());
            $inserir_endereco->bindValue(6, $this->getNumero());
            $inserir_endereco->bindValue(7, $this->getComplemento());
            $inserir_endereco->bindValue(8, $this->getCep());
            $inserir_endereco->bindValue(9, $organizacao_id);
            $inserir_endereco->execute();


            $inserir_rede_social =  $pdo->prepare("insert into redes_sociais (link, tipo, organizacao_id)
                                   values (?, ?, ?)");
            $inserir_rede_social->bindValue(1, $this->getSite());
            $inserir_rede_social->bindValue(2, 'Site');
            $inserir_rede_social->bindValue(3, $organizacao_id);
            $inserir_rede_social->execute();

            $inserir_rede_social->bindValue(1, $this->getFacebook());
            $inserir_rede_social->bindValue(2, 'Facebook');
            $inserir_rede_social->bindValue(3, $organizacao_id);
            $inserir_rede_social->execute();

            $inserir_rede_social->bindValue(1, $this->getInstagram());
            $inserir_rede_social->bindValue(2, 'Instagram');
            $inserir_rede_social->bindValue(3, $organizacao_id);
            $inserir_rede_social->execute();

            $inserir_rede_social->bindValue(1, $this->getTwitter());
            $inserir_rede_social->bindValue(2, 'Twitter');
            $inserir_rede_social->bindValue(3, $organizacao_id);
            $inserir_rede_social->execute();

            $inserir_rede_social->bindValue(1, $this->getLinkedin());
            $inserir_rede_social->bindValue(2, 'Linkedin');
            $inserir_rede_social->bindValue(3, $organizacao_id);
            $inserir_rede_social->execute();

            $inserir_rede_social->bindValue(1, $this->getOutros());
            $inserir_rede_social->bindValue(2, 'Outros');
            $inserir_rede_social->bindValue(3, $organizacao_id);
            $inserir_rede_social->execute();


            $inserir_indicacao =  $pdo->prepare("insert into indicacoes (nome, email, telefone, organizacao_id)
                                   values (?, ?, ?, ?)");
            $inserir_indicacao->bindValue(1, $this->getIndicaNome_1());
            $inserir_indicacao->bindValue(2, $this->getIndicaEmail_1());
            $inserir_indicacao->bindValue(3, $this->getIndicaTelefone_1());
            $inserir_indicacao->bindValue(4, $organizacao_id);
            $inserir_indicacao->execute();

            $inserir_indicacao->bindValue(1, $this->getIndicaNome_2());
            $inserir_indicacao->bindValue(2, $this->getIndicaEmail_2());
            $inserir_indicacao->bindValue(3, $this->getIndicaTelefone_2());
            $inserir_indicacao->bindValue(4, $organizacao_id);
            $inserir_indicacao->execute();

            $inserir_indicacao->bindValue(1, $this->getIndicaNome_3());
            $inserir_indicacao->bindValue(2, $this->getIndicaEmail_3());
            $inserir_indicacao->bindValue(3, $this->getIndicaTelefone_3());
            $inserir_indicacao->bindValue(4, $organizacao_id);
            $inserir_indicacao->execute();



            $pdo->commit();

            $_SESSION['cadastro'] = true;

            echo "<script type='text/javascript'>

                        sweetAlert({
                          title: '',
                           text: 'Cadastro realizado!',
                           type: 'success'
                          },
                          function(){
                            window.location.href = '../form.php';
                        });

                    </script>";

        }
        catch (Exception $e){
              $pdo->rollback();
              
            $inserir_erro = $pdo->prepare("insert into erro_logs (erro, data, usuario_id)
                               values (?, ?, ?)");
            $inserir_erro->bindValue(1, $e->getMessage());
            $inserir_erro->bindValue(2, $data_atual);
            $inserir_erro->bindValue(3, $this->getUsuarioId());
            $inserir_erro->execute();


               echo "<script type='text/javascript'>

                        sweetAlert({
                          title: 'Erro',
                           text: 'Não foi possível realizar o cadastro!',
                            type: 'error'
                          },
                          function(){
                            window.location.href = '../form.php';
                        });

                    </script>";

        }


   }





   //Editar
   public function editar_registro($organizacao_id){
        $pdo = parent::getDB();
        try{

            $data_atual = date("Y-m-d");

            $pdo->beginTransaction();

            $edit_ong = $pdo->prepare("update organizacoes set cnpj = ? , localizacao = ? , nome = ?, sigla = ?,
                telefone = ?, email = ?, tipo = ?, inicio_atv = ?, qtde_pessoas = ?, recursos_financeiros = ?,
                descricao = ?,  publico_atendido = ?, politicas_publicas = ?, monitoramento_atividades = ?, estrategia_comunicacao = ?,
                premiacao_certificacao = ?, organizacao_pai = ?, identifica_iniciativa = ?, inputnomeong = ?, justificativa_orcamento = ?, 
                pessoas_benefeciadas = ?, identifica_organizacao_outros = ?, fonte_recursos_outros = ?, updated_at = ?
                where usuario_id = ? ");
            $edit_ong->bindValue(1, $this->getCnpj());
            $edit_ong->bindValue(2, $this->getLocalizacao());
            $edit_ong->bindValue(3, $this->getNome());
            $edit_ong->bindValue(4, $this->getSigla());
            $edit_ong->bindValue(5, $this->getTelefone());
            $edit_ong->bindValue(6, $this->getEmail());
            $edit_ong->bindValue(7, $this->getTipo());
            $edit_ong->bindValue(8, $this->getInicioAtv());
            $edit_ong->bindValue(9, $this->getQtdePessoas());
            $edit_ong->bindValue(10, $this->getRecursosFinaceiros());
            $edit_ong->bindValue(11, $this->getDescricao());
            $edit_ong->bindValue(12, $this->getPublicoAtendido());
            $edit_ong->bindValue(13, $this->getPoliticasPublicas());
            $edit_ong->bindValue(14, $this->getMonitoramentoAtividades());
            $edit_ong->bindValue(15, $this->getEstrategiaComunicacao());
            $edit_ong->bindValue(16, $this->getPremiacaoCertificacao());
            $edit_ong->bindValue(17, $this->getOrganizacaoPai());
            $edit_ong->bindValue(18, $this->getNatureza());
            $edit_ong->bindValue(19, $this->getInputnomeong());
            $edit_ong->bindValue(20, $this->getJustificativaOrcamento());
            $edit_ong->bindValue(21, $this->getQtdeBeneficiadas());
            $edit_ong->bindValue(22, $this->getIdentificaOrganizacaOutros());
            $edit_ong->bindValue(23, $this->getFonteRecursosOutros());
            $edit_ong->bindValue(24, $data_atual);
            $edit_ong->bindValue(25, $this->getUsuarioId());
            
            $edit_ong->execute();


            //Delete
            $delete_contatos = $pdo->prepare("delete from contatos where organizacao_id = ?");
            $delete_contatos->bindValue(1, $organizacao_id);
            $delete_contatos->execute();

            $edit_contato = $pdo->prepare("insert into contatos (cargo, email, telefone, celular, tipo, organizacao_id, nome)
                                    values (?, ?, ?, ?, ?, ?, ?)");
            $edit_contato->bindValue(1, $this->getCargo_1());
            $edit_contato->bindValue(2, $this->getEmail_1());
            $edit_contato->bindValue(3, $this->getTelefone_1());
            $edit_contato->bindValue(4, $this->getCelular_1());
            $edit_contato->bindValue(5, 1);
            $edit_contato->bindValue(6, $organizacao_id);
            $edit_contato->bindValue(7, $this->getNome_1());
            $edit_contato->execute();

            $edit_contato->bindValue(1, $this->getCargo_2());
            $edit_contato->bindValue(2, $this->getEmail_2());
            $edit_contato->bindValue(3, $this->getTelefone_2());
            $edit_contato->bindValue(4, $this->getCelular_2());
            $edit_contato->bindValue(5, 2);
            $edit_contato->bindValue(6, $organizacao_id);
            $edit_contato->bindValue(7, $this->getNome_2());
            $edit_contato->execute();


            //Delete
            $delete_orcamentos = $pdo->prepare("delete from orcamentos where organizacao_id = ?");
            $delete_orcamentos->bindValue(1, $organizacao_id);
            $delete_orcamentos->execute();

            $orcamento = $this->getOrcamento_2014();
            $edit_orcamentos = $pdo->prepare("insert into orcamentos (ano, valor, organizacao_id)
                                    values (?, ?, ?)");
            $edit_orcamentos->bindValue(1, 2014);
            if ($orcamento == ""){
                $edit_orcamentos->bindValue(2, '0.00');
            }else{
                $edit_orcamentos->bindValue(2, str_replace(',', '.',str_replace('.', '',$this->getOrcamento_2014())));
            }
            $edit_orcamentos->bindValue(3, $organizacao_id);
            $edit_orcamentos->execute();

            $orcamento = $this->getOrcamento_2015();
            $edit_orcamentos->bindValue(1, 2015);
            if ($orcamento == ""){
                $edit_orcamentos->bindValue(2, '0.00');
            }else{
                $edit_orcamentos->bindValue(2, str_replace(',', '.',str_replace('.', '',$this->getOrcamento_2015())));
            }
            $edit_orcamentos->bindValue(3, $organizacao_id);
            $edit_orcamentos->execute();

            $orcamento = $this->getOrcamento_2016();
            $edit_orcamentos->bindValue(1, 2016);
            if ($orcamento == ""){
                $edit_orcamentos->bindValue(2, '0.00');
            }else{
                $edit_orcamentos->bindValue(2, str_replace(',', '.',str_replace('.', '',$this->getOrcamento_2016())));
            }
            $edit_orcamentos->bindValue(3, $organizacao_id);
            $edit_orcamentos->execute();

            //Delete
            $delete_recursos_financeiros = $pdo->prepare("delete from origem_recursos where organizacao_id = ?");
            $delete_recursos_financeiros->bindValue(1, $organizacao_id);
            $delete_recursos_financeiros->execute();

            $edit_recursos_financeiros_lista = $pdo->prepare("insert into origem_recursos (tipo, organizacao_id)
                                   values (?, ?)");
            $recursos_finaceiros_lista = $this->getRecursosFinaceirosLista();
                foreach ($recursos_finaceiros_lista  as $recurso){
                   $edit_recursos_financeiros_lista->bindValue(1, $recurso);
                   $edit_recursos_financeiros_lista->bindValue(2, $organizacao_id);
                   $edit_recursos_financeiros_lista->execute();
                }


            //Delete
            $delete_politicas_publicas = $pdo->prepare("delete from politicas_publicas where organizacao_id = ?");
            $delete_politicas_publicas->bindValue(1, $organizacao_id);
            $delete_politicas_publicas->execute();


            $edit_politicas_publicas_lista = $pdo->prepare("insert into politicas_publicas (tipo,  organizacao_id) values (?, ?) ");
            $politicas_publicas_lista = $this->getPoliticasPublicasList();
                foreach ($politicas_publicas_lista  as $politica){
                   $edit_politicas_publicas_lista->bindValue(1, $politica);
                   $edit_politicas_publicas_lista->bindValue(2, $organizacao_id);
                   $edit_politicas_publicas_lista->execute();
                }


            // //Delete
            // $delete_funcoes = $pdo->prepare("delete from funcoes where organizacao_id = ?");
            // $delete_funcoes->bindValue(1, $organizacao_id);
            // $delete_funcoes->execute();

            // $edit_funcoes = $pdo->prepare("insert into funcoes (tipo, complemento, organizacao_id)
            //                        values (?, ?, ?)");
            // $funcoes = $this->getFuncoes();

            //     foreach ($funcoes  as $funcao){
            //         if ($funcao == "Atuação direta com mulheres, homens, LGBTT, etc"){
            //             $edit_funcoes->bindValue(1, $funcao);
            //             $edit_funcoes->bindValue(2, $this->getNumeroBeneficiarios());
            //             $edit_funcoes->bindValue(3, $organizacao_id);
            //             $edit_funcoes->execute();
            //         }else{
            //             $edit_funcoes->bindValue(1, $funcao);
            //             $edit_funcoes->bindValue(2, 0);
            //             $edit_funcoes->bindValue(3, $organizacao_id);
            //             $edit_funcoes->execute();
            //         }
                   
            //     }


            //Delete
            $delete_empoderamento = $pdo->prepare("delete from empoderamento where organizacao_id = ?");
            $delete_empoderamento->bindValue(1, $organizacao_id);
            $delete_empoderamento->execute();

            $edit_empoderamentos = $pdo->prepare("insert into empoderamento (nome, descricao, organizacao_id)
                                    values (?, ?, ?)");
            $edit_empoderamentos->bindValue(1, $this->getEmpoderamentoNome_1());
            $edit_empoderamentos->bindValue(2, $this->getEmpoderamentoDesc_1());
            $edit_empoderamentos->bindValue(3, $organizacao_id);
            $edit_empoderamentos->execute();

            $edit_empoderamentos->bindValue(1, $this->getEmpoderamentoNome_2());
            $edit_empoderamentos->bindValue(2, $this->getEmpoderamentoDesc_2());
            $edit_empoderamentos->bindValue(3, $organizacao_id);
            $edit_empoderamentos->execute();

            $edit_empoderamentos->bindValue(1, $this->getEmpoderamentoNome_3());
            $edit_empoderamentos->bindValue(2, $this->getEmpoderamentoDesc_3());
            $edit_empoderamentos->bindValue(3, $organizacao_id);
            $edit_empoderamentos->execute();



            //Delete
            $delete_atuacao_direta = $pdo->prepare("delete from atuacao_direta where organizacao_id = ?");
            $delete_atuacao_direta->bindValue(1, $organizacao_id);
            $delete_atuacao_direta->execute();

            $edit_atuacao_direta = $pdo->prepare("insert into atuacao_direta (estado, organizacao_id)
                                   values (?, ?)");
            $estados = $this->getEstados();
            foreach ($estados  as $estado){

               $edit_atuacao_direta->bindValue(1, $estado);
               $edit_atuacao_direta->bindValue(2, $organizacao_id);
               $edit_atuacao_direta->execute();
            }


            //Delete
            $delete_relacionadas = $pdo->prepare("delete from relacionadas where organizacao_id = ?");
            $delete_relacionadas->bindValue(1, $organizacao_id);
            $delete_relacionadas->execute();

            $edit_relaciona = $pdo->prepare("insert into relacionadas (nome, organizacao_id)
                                   values (?, ?)");
            $edit_relaciona->bindValue(1, $this->getRelaciona_1());
            $edit_relaciona->bindValue(2, $organizacao_id);
            $edit_relaciona->execute();

            $edit_relaciona->bindValue(1, $this->getRelaciona_2());
            $edit_relaciona->bindValue(2, $organizacao_id);
            $edit_relaciona->execute();


            $edit_relaciona->bindValue(1, $this->getRelaciona_3());
            $edit_relaciona->bindValue(2, $organizacao_id);
            $edit_relaciona->execute();



            //Delete
            $delete_temas = $pdo->prepare("delete from temas where organizacao_id = ?");
            $delete_temas->bindValue(1, $organizacao_id);
            $delete_temas->execute();


           $edit_tema = $pdo->prepare("insert into temas (tema, organizacao_id)
                                   values (?, ?)");
            $temas = $this->getTemas();
            foreach ($temas  as $tema){
               $edit_tema->bindValue(1, $tema);
               $edit_tema->bindValue(2, $organizacao_id);
               $edit_tema->execute();
            }


            //Delete
            $delete_subtemas = $pdo->prepare("delete from subtemas where organizacao_id = ?");
            $delete_subtemas->bindValue(1, $organizacao_id);
            $delete_subtemas->execute();

           $edit_subtema = $pdo->prepare("insert into subtemas (subtema, organizacao_id)
                                   values (?, ?)");
            $subtemas = $this->getSubtemas();
            foreach ($subtemas  as $subtema){
               $edit_subtema->bindValue(1, $subtema);
               $edit_subtema->bindValue(2, $organizacao_id);
               $edit_subtema->execute();
            }

            $edit_endereco =  $pdo->prepare("update enderecos set regiao = ?, estado = ?, cidade = ?, bairro = ?,
                rua = ?, numero = ?, complemento = ?, cep = ? where organizacao_id = ? ");
            $edit_endereco->bindValue(1, $this->getRegiao());
            $edit_endereco->bindValue(2, $this->getEstado());
            $edit_endereco->bindValue(3, $this->getCidade());
            $edit_endereco->bindValue(4, $this->getBairro());
            $edit_endereco->bindValue(5, $this->getRua());
            $edit_endereco->bindValue(6, $this->getNumero());
            $edit_endereco->bindValue(7, $this->getComplemento());
            $edit_endereco->bindValue(8, $this->getCep());
            $edit_endereco->bindValue(9, $organizacao_id);
            $edit_endereco->execute();


             //Delete
            $delete_redes_sociais = $pdo->prepare("delete from redes_sociais where organizacao_id = ?");
            $delete_redes_sociais->bindValue(1, $organizacao_id);
            $delete_redes_sociais->execute();

           $edit_rede_social =  $pdo->prepare("insert into redes_sociais (link, tipo, organizacao_id)
                                   values (?, ?, ?)");
            $edit_rede_social->bindValue(1, $this->getSite());
            $edit_rede_social->bindValue(2, 'Site');
            $edit_rede_social->bindValue(3, $organizacao_id);
            $edit_rede_social->execute();

            $edit_rede_social->bindValue(1, $this->getFacebook());
            $edit_rede_social->bindValue(2, 'Facebook');
            $edit_rede_social->bindValue(3, $organizacao_id);
            $edit_rede_social->execute();

            $edit_rede_social->bindValue(1, $this->getInstagram());
            $edit_rede_social->bindValue(2, 'Instagram');
            $edit_rede_social->bindValue(3, $organizacao_id);
            $edit_rede_social->execute();

            $edit_rede_social->bindValue(1, $this->getTwitter());
            $edit_rede_social->bindValue(2, 'Twitter');
            $edit_rede_social->bindValue(3, $organizacao_id);
            $edit_rede_social->execute();

            $edit_rede_social->bindValue(1, $this->getLinkedin());
            $edit_rede_social->bindValue(2, 'Linkedin');
            $edit_rede_social->bindValue(3, $organizacao_id);
            $edit_rede_social->execute();

            $edit_rede_social->bindValue(1, $this->getOutros());
            $edit_rede_social->bindValue(2, 'Outros');
            $edit_rede_social->bindValue(3, $organizacao_id);
            $edit_rede_social->execute();


            $delete_indicacoes = $pdo->prepare("delete from indicacoes where organizacao_id = ?");
            $delete_indicacoes->bindValue(1, $organizacao_id);
            $delete_indicacoes->execute();

            $edit_indicacao =  $pdo->prepare("insert into indicacoes (nome, email, telefone, organizacao_id)
                                   values (?, ?, ?, ?)");
            $edit_indicacao->bindValue(1, $this->getIndicaNome_1());
            $edit_indicacao->bindValue(2, $this->getIndicaEmail_1());
            $edit_indicacao->bindValue(3, $this->getIndicaTelefone_1());
            $edit_indicacao->bindValue(4, $organizacao_id);
            $edit_indicacao->execute();

            $edit_indicacao->bindValue(1, $this->getIndicaNome_2());
            $edit_indicacao->bindValue(2, $this->getIndicaEmail_2());
            $edit_indicacao->bindValue(3, $this->getIndicaTelefone_2());
            $edit_indicacao->bindValue(4, $organizacao_id);
            $edit_indicacao->execute();

            $edit_indicacao->bindValue(1, $this->getIndicaNome_3());
            $edit_indicacao->bindValue(2, $this->getIndicaEmail_3());
            $edit_indicacao->bindValue(3, $this->getIndicaTelefone_3());
            $edit_indicacao->bindValue(4, $organizacao_id);
            $edit_indicacao->execute();


            $pdo->commit();

            $_SESSION['cadastro'] = true;

            echo "<script type='text/javascript'>

                        sweetAlert({
                          title: '',
                           text: 'Editado com sucesso!',
                           type: 'success'
                          },
                          function(){
                            window.location.href = '../form.php';
                        });

                    </script>";

        }
        catch (Exception $e){
              $pdo->rollback();
              //echo $e->getMessage();
            
            $inserir_erro = $pdo->prepare("insert into erro_logs (erro, data, usuario_id)
                               values (?, ?, ?)");
            $inserir_erro->bindValue(1, $e->getMessage());
            $inserir_erro->bindValue(2, $data_atual);
            $inserir_erro->bindValue(3, $this->getUsuarioId());
            $inserir_erro->execute();
            
               echo "<script type='text/javascript'>

                        sweetAlert({
                          title: 'Erro',
                           text: 'Não foi possível editar o cadastro!',
                            type: 'error'
                          },
                          function(){
                            window.location.href = '../form.php';
                        });

                    </script>";

        }
    }
}

?>
</body>
</html>
