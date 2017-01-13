<?php

include_once 'Conexao.class.php';

class Editar extends Conexao {

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
    private $qtde_beneficiadas;
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

    public function setInputnomeong($inputnomeong){
        $this->inputnomeong = $inputnomeong;
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
    public function setQtdeBeneficiadas($qtde_beneficiadas){
        $this->qtde_beneficiadas = $qtde_beneficiadas;
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
    public function setJustificativaOrcamento($justificativa_orcamento){
        $this->justificativa_orcamento = $justificativa_orcamento;
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
     public function getInputnomeong(){
       return $this->inputnomeong;
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
    public function getQtdeBeneficiadas(){
       return $this->qtde_beneficiadas;
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
    public function getJustificativaOrcamento(){
       return $this->justificativa_orcamento;
    }
    public function getIdentificaOrganizacaoOutros(){
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
        $this->empoderamento_nome_1 = $empoderamento_nome_1;
    }
    public function setEmpoderamentoDesc_1($empoderamento_desc_1){
        $this->empoderamento_desc_1 = $empoderamento_desc_1;
    }
    public function setEmpoderamentoNome_2($empoderamento_nome_2){
        $this->empoderamento_nome_2 = $empoderamento_nome_2;
    }
    public function setEmpoderamentoDesc_2($empoderamento_desc_2){
        $this->empoderamento_desc_2 = $empoderamento_desc_2;
    }
    public function setEmpoderamentoNome_3($empoderamento_nome_3){
        $this->empoderamento_nome_3 = $empoderamento_nome_3;
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
        $this->relaciona_1 = $relaciona_1;
    }
    public function setRelaciona_2($relaciona_2){
        $this->relaciona_2 = $relaciona_2;
    }
    public function setRelaciona_3($relaciona_3){
        $this->relaciona_3 = $relaciona_3;
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
        $this->indica_nome_1 = $indica_nome_1;
    }
    public function setIndicaEmail_1($indica_email_1){
        $this->indica_email_1 = $indica_email_1;
    }
    public function setIndicaTelefone_1($indica_telefone_1){
        $this->indica_telefone_1 = $indica_telefone_1;
    }
    public function setIndicaNome_2($indica_nome_2){
        $this->indica_nome_2 = $indica_nome_2;
    }
    public function setIndicaEmail_2($indica_email_2){
        $this->indica_email_2 = $indica_email_2;
    }
    public function setIndicaTelefone_2($indica_telefone_2){
        $this->indica_telefone_2 = $indica_telefone_2;
    }
    public function setIndicaNome_3($indica_nome_3){
        $this->indica_nome_3 = $indica_nome_3;
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

	public function busca($organizacao_id){

		$pdo = parent::getDB();

		$consulta = $pdo->prepare("
            select 
				distinct 
				contato_1.nome as nome_1, contato_1.cargo as cargo_1, contato_1.email as email_1,
			    contato_1.telefone as telefone_1, contato_1.celular as celular_1,
			    contato_2.nome as nome_2, contato_2.cargo as cargo_2, contato_2.email as email_2,
			    contato_2.telefone as telefone_2, contato_2.celular as celular_2,
			    ong.cnpj, ong.localizacao, ong.nome, ong.sigla, ong.telefone, ong.email, ong.tipo, ong.inicio_atv, 
			    ong.qtde_pessoas, ong.pessoas_benefeciadas, ong.recursos_financeiros, ong.descricao,  ong.publico_atendido, 
			    ong.politicas_publicas, ong.monitoramento_atividades, ong.estrategia_comunicacao,
				ong.premiacao_certificacao, ong.organizacao_pai, ong.identifica_iniciativa, ong.inputnomeong, 
                ong.justificativa_orcamento, ong.identifica_organizacao_outros, ong.fonte_recursos_outros, 
                endereco.rua, endereco.numero, endereco.complemento, endereco.bairro,
                endereco.cidade, endereco.estado, endereco.cep, endereco.regiao
			from organizacoes ong
			left join contatos contato_1 on contato_1.organizacao_id = ong.id and contato_1.tipo = 1
			left join contatos contato_2 on contato_2.organizacao_id = ong.id and contato_2.tipo = 2
			left join atuacao_direta on atuacao_direta.organizacao_id = ong.id
			left join empoderamento on empoderamento.organizacao_id = ong.id
			left join enderecos endereco on endereco.organizacao_id = ong.id
			left join funcoes funcao on funcao.organizacao_id = ong.id
			left join indicacoes indicacao on indicacao.organizacao_id = ong.id
			left join origem_recursos origem_recurso on origem_recurso.organizacao_id = ong.id
			left join politicas_publicas politica_publica on politica_publica.organizacao_id = ong.id
			left join redes_sociais rede_social on rede_social.organizacao_id = ong.id
			left join relacionadas relacionada on relacionada.organizacao_id = ong.id
			left join temas tema on tema.organizacao_id = ong.id
			left join subtemas subtema on subtema.organizacao_id = ong.id
			where ong.id = ?");
		$consulta->bindValue(1, $organizacao_id);
        $consulta->execute();

        //passando os valores encontrados para um array
        $result =  $consulta->fetch(PDO::FETCH_BOTH);

        //Setando os valores nas variaveis
        $this->setNome_1($result['nome_1']);
        $this->setCargo_1($result['cargo_1']);
        $this->setEmail_1($result['email_1']);
        $this->setTelefone_1($result['telefone_1']);
        $this->setCelular_1($result['celular_1']);

        $this->setNome_2($result['nome_2']);
        $this->setCargo_2($result['cargo_2']);
        $this->setEmail_2($result['email_2']);
        $this->setTelefone_2($result['telefone_2']);
        $this->setCelular_2($result['celular_2']);

        $this->setCnpj($result['cnpj']);
        $this->setLocalizacao($result['localizacao']);
        $this->setNome($result['nome']);
        $this->setSigla($result['sigla']);
        $this->setTelefone($result['telefone']);
        $this->setEmail($result['email']);
        $this->setTipo($result['tipo']);
        $this->setInicioAtv($result['inicio_atv']);
        $this->setQtdePessoas($result['qtde_pessoas']);
        $this->setQtdeBeneficiadas($result['pessoas_benefeciadas']);
        $this->setRecursosFinaceiros($result['recursos_financeiros']);
        $this->setDescricao($result['descricao']);
        $this->setPublicoAtendido($result['publico_atendido']);
        $this->setPoliticasPublicas($result['politicas_publicas']);
        $this->setMonitoramentoAtividades($result['monitoramento_atividades']);
        $this->setEstrategiaComunicacao($result['estrategia_comunicacao']);
        $this->setPremiacaoCertificacao($result['premiacao_certificacao']);
        $this->setOrganizacaoPai($result['organizacao_pai']);
        $this->setNatureza($result['identifica_iniciativa']);
        $this->setInputnomeong($result['inputnomeong']);
        $this->setJustificativaOrcamento($result['justificativa_orcamento']);
        $this->setIdentificaOrganizacaOutros($result['identifica_organizacao_outros']);
        $this->setFonteRecursosOutros($result['fonte_recursos_outros']);


        $this->setRegiao($result['regiao']);
        $this->setEstado($result['estado']);
        $this->setCidade($result['cidade']);
        $this->setBairro($result['bairro']);
        $this->setRua($result['rua']);
        $this->setNumero($result['numero']);
        $this->setComplemento($result['complemento']);
        $this->setCep($result['cep']);


        $orcamentos_query_2014 = $pdo->prepare("select 
                                        ano, truncate(valor,2) as valor
                                    from orcamentos
                                    where organizacao_id = ? and ano = ?");
        $orcamentos_query_2014->bindValue(1, $organizacao_id);
        $orcamentos_query_2014->bindValue(2, 2014);
        $orcamentos_query_2014->execute();

        //passando os valores encontrados para um array
        $orcamentos_2014 =  $orcamentos_query_2014->fetch(PDO::FETCH_BOTH);

        $orcamentos_query_2015 = $pdo->prepare("select 
                                        ano, truncate(valor,2) as valor
                                    from orcamentos
                                    where organizacao_id = ? and ano = ?");
        $orcamentos_query_2015->bindValue(1, $organizacao_id);
        $orcamentos_query_2015->bindValue(2, 2015);
        $orcamentos_query_2015->execute();

        //passando os valores encontrados para um array
        $orcamentos_2015 =  $orcamentos_query_2015->fetch(PDO::FETCH_BOTH);

        $orcamentos_query_2016 = $pdo->prepare("select 
                                        ano, truncate(valor,2) as valor
                                    from orcamentos
                                    where organizacao_id = ? and ano = ?");
        $orcamentos_query_2016->bindValue(1, $organizacao_id);
        $orcamentos_query_2016->bindValue(2, 2016);
        $orcamentos_query_2016->execute();

        //passando os valores encontrados para um array
        $orcamentos_2016 =  $orcamentos_query_2016->fetch(PDO::FETCH_BOTH);


        $this->setOrcamento_2014(str_replace('.',',',$orcamentos_2014['valor']));
        $this->setOrcamento_2015(str_replace('.',',',$orcamentos_2015['valor']));
        $this->setOrcamento_2016(str_replace('.',',',$orcamentos_2016['valor']));


        //*****popular checkbox******//
        
        $recuros_financeiros_query = $pdo->prepare("select 
                                                        tipo
                                                    from origem_recursos
                                                    where organizacao_id = ?");
        $recuros_financeiros_query->bindValue(1, $organizacao_id);
        $recuros_financeiros_query->execute();

        //passando os valores encontrados para um array
        $recuros_financeiros =  $recuros_financeiros_query->fetchAll(PDO::FETCH_ASSOC);
        $array_recuros_financeiros = [];
        foreach ($recuros_financeiros as $row){
           array_push($array_recuros_financeiros, $row);
        }
        $this->setRecursosFinaceirosLista($array_recuros_financeiros);


        //*****popular checkbox******//
        
        $temas_query = $pdo->prepare("select 
                                        tema
                                    from temas
                                    where organizacao_id = ?");
        $temas_query->bindValue(1, $organizacao_id);
        $temas_query->execute();


        //passando os valores encontrados para um array
        $temas =  $temas_query->fetchAll(PDO::FETCH_ASSOC);
        $array_temas = [];
        foreach ($temas as $row){
           array_push($array_temas, $row);
        }
        $this->setTemas($array_temas);


        //*****popular checkbox******//
        
        $funcoes_query = $pdo->prepare("select 
                                        tipo
                                    from funcoes
                                    where organizacao_id = ?");
        $funcoes_query->bindValue(1, $organizacao_id);
        $funcoes_query->execute();


        //passando os valores encontrados para um array
        $funcoes =  $funcoes_query->fetchAll(PDO::FETCH_ASSOC);
        $array_funcoes = [];
        foreach ($funcoes as $row){
           array_push($array_funcoes, $row);
        }
        $this->setFuncoes($array_funcoes);

        $funcoes_query = $pdo->prepare("select 
                                        complemento
                                    from funcoes
                                    where organizacao_id = ?
                                    and complemento != 0");
        $funcoes_query->bindValue(1, $organizacao_id);
        $funcoes_query->execute();

        $funcoes = $funcoes_query->fetch(PDO::FETCH_BOTH);
        $this->setNumeroBeneficiarios($funcoes['complemento']);

        //*****popular checkbox******//
        
        $politicas_publicas_query = $pdo->prepare("select 
                                        tipo
                                    from politicas_publicas
                                    where organizacao_id = ?");
        $politicas_publicas_query->bindValue(1, $organizacao_id);
        $politicas_publicas_query->execute();


        //passando os valores encontrados para um array
        $politicas_publicas =  $politicas_publicas_query->fetchAll(PDO::FETCH_ASSOC);
        $array_politicas_publicas = [];
        foreach ($politicas_publicas as $row){
           array_push($array_politicas_publicas, $row);
        }
        $this->setPoliticasPublicasList($array_politicas_publicas);


        
        $empoderamento_1_query = $pdo->prepare("select 
                                                    nome, descricao 
                                                from empoderamento 
                                                where organizacao_id = ?
                                                and nome like '%_1' ");
        $empoderamento_1_query->bindValue(1, $organizacao_id);
        $empoderamento_1_query->execute();


        //passando os valores encontrados para um array
        $empoderamento_1 =  $empoderamento_1_query->fetch(PDO::FETCH_BOTH);

        $this->setEmpoderamentoNome_1($empoderamento_1['nome']);
        $this->setEmpoderamentoDesc_1($empoderamento_1['descricao']);

        
        $empoderamento_2_query = $pdo->prepare("select 
                                                    nome, descricao 
                                                from empoderamento 
                                                where organizacao_id = ?
                                                and nome like '%_2' ");
        $empoderamento_2_query->bindValue(1, $organizacao_id);
        $empoderamento_2_query->execute();


        //passando os valores encontrados para um array
        $empoderamento_2 =  $empoderamento_2_query->fetch(PDO::FETCH_BOTH);

        $this->setEmpoderamentoNome_2($empoderamento_2['nome']);
        $this->setEmpoderamentoDesc_2($empoderamento_2['descricao']);


        $empoderamento_3_query = $pdo->prepare("select 
                                                    nome, descricao 
                                                from empoderamento 
                                                where organizacao_id = ?
                                                and nome like '%_3' ");
        $empoderamento_3_query->bindValue(1, $organizacao_id);
        $empoderamento_3_query->execute();


        //passando os valores encontrados para um array
        $empoderamento_3 =  $empoderamento_3_query->fetch(PDO::FETCH_BOTH);

        $this->setEmpoderamentoNome_3($empoderamento_3['nome']);
        $this->setEmpoderamentoDesc_3($empoderamento_3['descricao']);

         $redes_sociais_query = $pdo->prepare("select 
                                                    link, tipo 
                                                from redes_sociais 
                                                where organizacao_id = ? ");
        $redes_sociais_query->bindValue(1, $organizacao_id);
        $redes_sociais_query->execute();

        //passando os valores encontrados para um array
        $redes_sociais =  $redes_sociais_query->fetchAll();

        foreach($redes_sociais as $rede){

            if($rede['tipo'] == 'Facebook'){
               $this->setFacebook($rede['link']); 
            }
            if($rede['tipo'] == 'Site'){
               $this->setSite($rede['link']); 
            }
            if($rede['tipo'] == 'Instagram'){
               $this->setInstagram($rede['link']); 
            }
            if($rede['tipo'] == 'Twitter'){
               $this-> setTwitter($rede['link']); 
            }
            if($rede['tipo'] == 'Linkedin'){
               $this->setLinkedin($rede['link']); 
            }
            if($rede['tipo'] == 'Outros'){
               $this->setOutros($rede['link']); 
            }
        }


        $indicacoes_1_query = $pdo->prepare("select 
                                                    nome, email, telefone 
                                                from indicacoes 
                                                where organizacao_id = ?
                                                and nome like '%_1' ");
        $indicacoes_1_query->bindValue(1, $organizacao_id);
        $indicacoes_1_query->execute();


        //passando os valores encontrados para um array
        $indicacoes_1 =  $indicacoes_1_query->fetch(PDO::FETCH_BOTH);

        $this->setIndicaNome_1($indicacoes_1['nome']);
        $this->setIndicaEmail_1($indicacoes_1['email']);
        $this->setIndicaTelefone_1($indicacoes_1['telefone']);


        $indicacoes_2_query = $pdo->prepare("select 
                                                    nome, email, telefone 
                                                from indicacoes 
                                                where organizacao_id = ?
                                                and nome like '%_2' ");
        $indicacoes_2_query->bindValue(1, $organizacao_id);
        $indicacoes_2_query->execute();


        //passando os valores encontrados para um array
        $indicacoes_2 =  $indicacoes_2_query->fetch(PDO::FETCH_BOTH);

        $this->setIndicaNome_2($indicacoes_2['nome']);
        $this->setIndicaEmail_2($indicacoes_2['email']);
        $this->setIndicaTelefone_2($indicacoes_2['telefone']);

        $indicacoes_3_query = $pdo->prepare("select 
                                                    nome, email, telefone 
                                                from indicacoes 
                                                where organizacao_id = ?
                                                and nome like '%_3' ");
        $indicacoes_3_query->bindValue(1, $organizacao_id);
        $indicacoes_3_query->execute();


        //passando os valores encontrados para um array
        $indicacoes_3 =  $indicacoes_3_query->fetch(PDO::FETCH_BOTH);

        $this->setIndicaNome_3($indicacoes_3['nome']);
        $this->setIndicaEmail_3($indicacoes_3['email']);
        $this->setIndicaTelefone_3($indicacoes_3['telefone']);



        $relacionada_1_query = $pdo->prepare("select 
                                                    nome
                                            from relacionadas 
                                            where organizacao_id = ?
                                            and nome like '%_1' ");
        $relacionada_1_query->bindValue(1, $organizacao_id);
        $relacionada_1_query->execute();


        //passando os valores encontrados para um array
        $relacionada_1 =  $relacionada_1_query->fetch(PDO::FETCH_BOTH);

        $this-> setRelaciona_1($relacionada_1['nome']);


        $relacionada_2_query = $pdo->prepare("select 
                                                    nome
                                            from relacionadas 
                                            where organizacao_id = ?
                                            and nome like '%_2' ");
        $relacionada_2_query->bindValue(1, $organizacao_id);
        $relacionada_2_query->execute();


        //passando os valores encontrados para um array
        $relacionada_2 =  $relacionada_2_query->fetch(PDO::FETCH_BOTH);
        $this-> setRelaciona_2($relacionada_2['nome']);


        $relacionada_3_query = $pdo->prepare("select 
                                                    nome
                                            from relacionadas 
                                            where organizacao_id = ?
                                            and nome like '%_3' ");
        $relacionada_3_query->bindValue(1, $organizacao_id);
        $relacionada_3_query->execute();


        //passando os valores encontrados para um array
        $relacionada_3 =  $relacionada_3_query->fetch(PDO::FETCH_BOTH);
        $this-> setRelaciona_3($relacionada_3['nome']);

        

        //*****popular checkbox******//
        
        $subtemas_query = $pdo->prepare("select 
                                        subtema
                                    from subtemas
                                    where organizacao_id = ? ");
        $subtemas_query->bindValue(1, $organizacao_id);
        $subtemas_query->execute();


        //passando os valores encontrados para um array
        $subtemas =  $subtemas_query->fetchAll(PDO::FETCH_ASSOC);
        $array_subtemas = [];
        foreach ($subtemas as $row){
           array_push($array_subtemas, $row);
        }
        $this->setSubtemas($array_subtemas);



        $atuacao_direta_query = $pdo->prepare("select 
                                        estado
                                    from atuacao_direta
                                    where organizacao_id = ? ");
        $atuacao_direta_query->bindValue(1, $organizacao_id);
        $atuacao_direta_query->execute();


        //passando os valores encontrados para um array
        $atuacao_direta =  $atuacao_direta_query->fetchAll(PDO::FETCH_ASSOC);
        $array_atuacao_direta = [];
        foreach ($atuacao_direta as $row){
           array_push($array_atuacao_direta, $row);
        }
        $this->setEstados($array_atuacao_direta);


	
	}

}
	
?>
