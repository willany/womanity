<?php
    session_start();
	require_once "CadastrarAll.class.php";

    //Tipo do form

    $form_type = $_POST['form_type'];

	//organizacao
    $cnpj =  filter_input(INPUT_POST, "inputcnpj", FILTER_SANITIZE_MAGIC_QUOTES);
    $localizacao = filter_input(INPUT_POST, "zona", FILTER_SANITIZE_MAGIC_QUOTES);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_MAGIC_QUOTES);
    $sigla = filter_input(INPUT_POST, "sigla", FILTER_SANITIZE_MAGIC_QUOTES);
    $telefone = filter_input(INPUT_POST, "organizacao-telefone", FILTER_SANITIZE_MAGIC_QUOTES);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
    $tipo = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_MAGIC_QUOTES);
    $inicio_atv = filter_input(INPUT_POST, "anoatividade", FILTER_SANITIZE_MAGIC_QUOTES);
    $qtde_pessoas = filter_input(INPUT_POST, "pessoas_envolvidas", FILTER_SANITIZE_MAGIC_QUOTES);
    $qtde_beneficiadas = filter_input(INPUT_POST, "pessoas_beneficiadas", FILTER_SANITIZE_MAGIC_QUOTES);
    $recursos_finaceiros = filter_input(INPUT_POST, "recursos", FILTER_SANITIZE_MAGIC_QUOTES);
    $descricao = filter_input(INPUT_POST, "sobre", FILTER_SANITIZE_MAGIC_QUOTES);
    $publico_atendido = filter_input(INPUT_POST, "publico_alvo", FILTER_SANITIZE_MAGIC_QUOTES);
    $politicas_publicas = filter_input(INPUT_POST, "organizaçāo_politica_publica", FILTER_SANITIZE_MAGIC_QUOTES);
    $monitoramento_atividades = filter_input(INPUT_POST, "inputAvaliacaoOng", FILTER_SANITIZE_MAGIC_QUOTES);
    $estrategia_comunicacao = filter_input(INPUT_POST, "inputComunicacaoOng", FILTER_SANITIZE_MAGIC_QUOTES);
    $premiacao_certificacao = filter_input(INPUT_POST, "inputPremiacaoOng", FILTER_SANITIZE_MAGIC_QUOTES);
    $organizacao_pai = filter_input(INPUT_POST, "organizacao_pai", FILTER_SANITIZE_MAGIC_QUOTES);
    $natureza = filter_input(INPUT_POST, "identifica", FILTER_SANITIZE_MAGIC_QUOTES);
    $inputnomeong = filter_input(INPUT_POST, "inputnomeong", FILTER_SANITIZE_MAGIC_QUOTES);
    $justificativa_orcamento = filter_input(INPUT_POST, "justificativa_orcamento", FILTER_SANITIZE_MAGIC_QUOTES);
    $usuario_id = $_SESSION['usuario_id'];
    $identifica_organizacao_outros = filter_input(INPUT_POST, "identifica_organizacao_outros", FILTER_SANITIZE_MAGIC_QUOTES);
    $fonte_recursos_outros = filter_input(INPUT_POST, "fonte_recursos_outros", FILTER_SANITIZE_MAGIC_QUOTES);

    

    //contato 1
    $nome_1 = filter_input(INPUT_POST, "nome1", FILTER_SANITIZE_MAGIC_QUOTES);
    $cargo_1 = filter_input(INPUT_POST, "cargo_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $email_1 = filter_input(INPUT_POST, "email_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $telefone_1 = filter_input(INPUT_POST, "telefone_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $celular_1 = filter_input(INPUT_POST, "celular_1", FILTER_SANITIZE_MAGIC_QUOTES);
    //contato 2
    $nome_2 = filter_input(INPUT_POST, "nome2", FILTER_SANITIZE_MAGIC_QUOTES);
    $cargo_2 = filter_input(INPUT_POST, "cargo_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $email_2 = filter_input(INPUT_POST, "email_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $telefone_2 = filter_input(INPUT_POST, "telefone_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $celular_2 = filter_input(INPUT_POST, "celular_2", FILTER_SANITIZE_MAGIC_QUOTES);


    //Orçamento
    $orcamento_2014 = filter_input(INPUT_POST, "orcamento_2014", FILTER_SANITIZE_MAGIC_QUOTES);
    $orcamento_2015 = filter_input(INPUT_POST, "orcamento_2015", FILTER_SANITIZE_MAGIC_QUOTES);
    $orcamento_2016 = filter_input(INPUT_POST, "orcamento_2016", FILTER_SANITIZE_MAGIC_QUOTES);

    //Recursos Financeiros
    $recursos_finaceiros_lista = $_POST['recursos_origem'];

    //Politicas publicas lista
    $politicas_publicas_lista = $_POST['politicas_publicas_lista'];

    // $funcoes = $_POST['funcao'];
    $numero_beneficiarios = filter_input(INPUT_POST, "numero_beneficiarios", FILTER_SANITIZE_MAGIC_QUOTES);

    //Iniciantivas com empoderamento
    $empoderamento_nome_1 = filter_input(INPUT_POST, "organizacao-relaciona1", FILTER_SANITIZE_MAGIC_QUOTES);
    $empoderamento_desc_1 = filter_input(INPUT_POST, "sobre_iniciativas1", FILTER_SANITIZE_MAGIC_QUOTES);
    $empoderamento_nome_2 = filter_input(INPUT_POST, "organizacao-relaciona2", FILTER_SANITIZE_MAGIC_QUOTES);
    $empoderamento_desc_2 = filter_input(INPUT_POST, "sobre_iniciativas2", FILTER_SANITIZE_MAGIC_QUOTES);
    $empoderamento_nome_3 = filter_input(INPUT_POST, "organizacao-relaciona3", FILTER_SANITIZE_MAGIC_QUOTES);
    $empoderamento_desc_3 = filter_input(INPUT_POST, "sobre_iniciativas3", FILTER_SANITIZE_MAGIC_QUOTES);

    //atuacao direta
    $estados = $_POST['organizacao_estado'];

    //Se relaciona
    $relaciona_1 = filter_input(INPUT_POST, "relaciona1", FILTER_SANITIZE_MAGIC_QUOTES);
    $relaciona_2 = filter_input(INPUT_POST, "relaciona2", FILTER_SANITIZE_MAGIC_QUOTES);
    $relaciona_3 = filter_input(INPUT_POST, "relaciona3", FILTER_SANITIZE_MAGIC_QUOTES);

    //Temas
    $temas = $_POST['temas'];

    //Subtemas
    $subtemas = $_POST['subtemas'];

    //Endereço
    $regiao =  filter_input(INPUT_POST, "regiao", FILTER_SANITIZE_MAGIC_QUOTES);
    $estado =  filter_input(INPUT_POST, "estado", FILTER_SANITIZE_MAGIC_QUOTES);
    $cidade =  filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_MAGIC_QUOTES);
    $bairro =  filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_MAGIC_QUOTES);
    $rua =  filter_input(INPUT_POST, "rua", FILTER_SANITIZE_MAGIC_QUOTES);
    $numero =  filter_input(INPUT_POST, "numero", FILTER_SANITIZE_MAGIC_QUOTES);
    $complemento =  filter_input(INPUT_POST, "complemento", FILTER_SANITIZE_MAGIC_QUOTES);
    $cep =  filter_input(INPUT_POST, "cep", FILTER_SANITIZE_MAGIC_QUOTES);

    //Redes sociais
    $site =  filter_input(INPUT_POST, "site", FILTER_SANITIZE_MAGIC_QUOTES);
    $facebook =  filter_input(INPUT_POST, "facebook", FILTER_SANITIZE_MAGIC_QUOTES);
    $instagram =  filter_input(INPUT_POST, "instagram", FILTER_SANITIZE_MAGIC_QUOTES);
    $twitter =  filter_input(INPUT_POST, "twitter", FILTER_SANITIZE_MAGIC_QUOTES);
    $linkedin =  filter_input(INPUT_POST, "linkedin", FILTER_SANITIZE_MAGIC_QUOTES);
    $outros =  filter_input(INPUT_POST, "outros", FILTER_SANITIZE_MAGIC_QUOTES);

    //Indicações
    $indica_nome_1 =  filter_input(INPUT_POST, "indica_nome_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_email_1 =  filter_input(INPUT_POST, "indica_email_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_telefone_1 =  filter_input(INPUT_POST, "indica_telefone_1", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_nome_2 =  filter_input(INPUT_POST, "indica_nome_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_email_2 =  filter_input(INPUT_POST, "indica_email_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_telefone_2 =  filter_input(INPUT_POST, "indica_telefone_2", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_nome_3 =  filter_input(INPUT_POST, "indica_nome_3", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_email_3 =  filter_input(INPUT_POST, "indica_email_3", FILTER_SANITIZE_MAGIC_QUOTES);
    $indica_telefone_3 =  filter_input(INPUT_POST, "indica_telefone_3", FILTER_SANITIZE_MAGIC_QUOTES);



    $novo = new CadastrarAll;
        //ong
        $novo->setCnpj($cnpj);
        $novo->setLocalizacao($localizacao);
        $novo->setNome($nome);
        $novo->setSigla($sigla);
        $novo->setTelefone($telefone);
        $novo->setEmail($email);
        $novo->setTipo($tipo);
        $novo->setInicioAtv($inicio_atv);
        $novo->setQtdePessoas($qtde_pessoas);
        $novo->setQtdeBeneficiadas($qtde_beneficiadas);
        $novo->setRecursosFinaceiros($recursos_finaceiros);
        $novo->setDescricao($descricao);
        $novo->setPublicoAtendido($publico_atendido);
        $novo->setPoliticasPublicas($politicas_publicas);
        $novo->setMonitoramentoAtividades($monitoramento_atividades);
        $novo->setEstrategiaComunicacao($estrategia_comunicacao);
        $novo->setPremiacaoCertificacao($premiacao_certificacao);
        $novo->setOrganizacaoPai($organizacao_pai);
        $novo->setNatureza($natureza);
        $novo->setUsuarioId($usuario_id);
        $novo->setJustificativaOrcamento($justificativa_orcamento);
        $novo->setInputnomeong($inputnomeong);
        $novo->setIdentificaOrganizacaOutros($identifica_organizacao_outros);
        $novo->setFonteRecursosOutros($fonte_recursos_outros);
      

        //contato
        $novo->setNome_1($nome_1);
        $novo->setCargo_1($cargo_1);
        $novo->setEmail_1($email_1);
        $novo->setTelefone_1($telefone_1);
        $novo->setCelular_1($celular_1);
        $novo->setNome_2($nome_2);
        $novo->setCargo_2($cargo_2);
        $novo->setEmail_2($email_2);
        $novo->setTelefone_2($telefone_2);
        $novo->setCelular_2($celular_2);

        //orçamentos
        $novo->setOrcamento_2014($orcamento_2014);
        $novo->setOrcamento_2015($orcamento_2015);
        $novo->setOrcamento_2016($orcamento_2016);

        //Recursos Financeiros
        $novo->setRecursosFinaceirosLista($recursos_finaceiros_lista);

        //Politicas Publicas List
        $novo->setPoliticasPublicasList($politicas_publicas_lista);

        // $novo->setFuncoes($funcoes);
        $novo->setNumeroBeneficiarios($numero_beneficiarios);

        //Iniciantivas com empoderamento
        $novo->setEmpoderamentoNome_1($empoderamento_nome_1);
        $novo->setEmpoderamentoDesc_1($empoderamento_desc_1);
        $novo->setEmpoderamentoNome_2($empoderamento_nome_2);
        $novo->setEmpoderamentoDesc_2($empoderamento_desc_2);
        $novo->setEmpoderamentoNome_3($empoderamento_nome_3);
        $novo->setEmpoderamentoDesc_3($empoderamento_desc_3);

        //atuacao direta
        $novo->setEstados($estados);

        //Relaciona
        $novo->setRelaciona_1($relaciona_1);
        $novo->setRelaciona_2($relaciona_2);
        $novo->setRelaciona_3($relaciona_3);

        //Temas
        $novo->setTemas($temas);

        //Subtemas
        $novo->setSubtemas($subtemas);

        //Endereço
        $novo->setRegiao($regiao);
        $novo->setEstado($estado);
        $novo->setCidade($cidade);
        $novo->setBairro($bairro);
        $novo->setRua($rua);
        $novo->setNumero($numero);
        $novo->setComplemento($complemento);
        $novo->setCep($cep);

        //Redes sociais
        $novo->setSite($site);
        $novo->setFacebook($facebook);
        $novo->setTwitter($twitter);
        $novo->setInstagram($instagram);
        $novo->setLinkedin($linkedin);
        $novo->setOutros($outros);

        //Indicações
        $novo->setIndicaNome_1($indica_nome_1);
        $novo->setIndicaEmail_1($indica_email_1);
        $novo->setIndicaTelefone_1($indica_telefone_1);
        $novo->setIndicaNome_2($indica_nome_2);
        $novo->setIndicaEmail_2($indica_email_2);
        $novo->setIndicaTelefone_2($indica_telefone_2);
        $novo->setIndicaNome_3($indica_nome_3);
        $novo->setIndicaEmail_3($indica_email_3);
        $novo->setIndicaTelefone_3($indica_telefone_3);

    if ($form_type == "editar"){
        $novo->editar_registro($_SESSION['organizacao_id']);
    }else{
        $novo->inserir_novo();
    }


?>
