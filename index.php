<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecossistema</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/sweetalert.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/sweetalert.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/validator.min.js"></script>
        <script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </head>

    <body>
<?php
    session_start();

    require_once "classes/Conexao.class.php";
    require_once "classes/Cadastrar.class.php";

    if (isset($_POST['novo'])):

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
        $senha = filter_input(INPUT_POST, "password", FILTER_SANITIZE_MAGIC_QUOTES);
        $tipo = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_MAGIC_QUOTES);
        $carta_principios = filter_input(INPUT_POST, "carta_principios", FILTER_SANITIZE_MAGIC_QUOTES);
        $politica_privacidade = filter_input(INPUT_POST, "politica_privacidade", FILTER_SANITIZE_MAGIC_QUOTES);

        $i = new Cadastrar;
        $i->setEmail($email);
        $i->setSenha($senha);
        $i->setTipo($tipo);
        $i->setCartaPrincipios($carta_principios);
        $i->setPoliticaPrivacidade($politica_privacidade);
        $i->inserir_novo();

    elseif (isset($_POST['novo_login'])):

        $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

        $l = new Login;
        $l->setLogin($login);
        $l->setSenha($senha);

        if($l->logar()):
            header("Location: form.php");
        else:
            echo "<script type='text/javascript'>
                open_dialog('Erro', 'Login ou senha inválidos!', 'error');
            </script>";
        endif;
    endif;


    if(isset($_SESSION['logado'])):
        header("Location: form.php");
    else:
?>

        <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Ecossistema</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>

                            <form class="navbar-form navbar-right" action="index.php"  method="post">
                                <div class="form-group">
                                  <input type="text" placeholder="usuário" name="login" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="password" placeholder="senha" name="senha" class="form-control">
                                </div>
                                <button type="submit" name="novo_login"  value="Log in" class="btn btn-submit">Log in</button>
                            </form>
                           <!--
                            <span class="li-social">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a> 
                            </span>
                        -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">

                       <h1><strong>Ecossistema de iniciativas </strong>para equidade de gênero e empoderamento da mulher <br></h1>     
                        <div class="description">
                           <!--  <p>
                                <strong>Interconexões para maximizar impacto</strong><br>
                                </br>
                            </p> -->
                            <p class="modal-body" style="text-align: justify;"> 

                             O Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher é uma iniciativa da ONU Mulheres, Womanity Foundation, BrazilFoundation e Instituto C&A.
                             Tem como objetivo principal mapear organizações e iniciativas que trabalham com direitos e empoderamento da mulher para ampliar as interconexões entre elas e seu impacto. 

                             Esta plataforma possibilita o cadastro das organizações e iniciativas para que as informações sejam utilizadas para traçar o perfil de cada
                             organização e identificar conexões entre elas. Em um segundo momento, terá a função de automatizar e perpetuar esse processo, permitindo 
                             que novos atores se cadastrem e indiquem outros. 

                             Para garantir a segurança dos dados, cadastre um login e senha para preencher o questionário. As informações poderão ser atualizadas após o
                             lançamento oficial da plataforma, em novembro/2017.       

                           </p>    
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                        <form role="form" data-toggle="validator" action="index.php" method="post" class="f1">

                            <h3>Cadastro do Ecossistema</h3>
                            <p>Preencha os campos obrigatórios *</p>

                             <!-- Etapas do Formulário: -->
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="10" data-number-of-steps="1" style="width: 100%;"></div>
                                </div>
                                <!-- Etapa 1 : Criar Conta -->
                                <div class="f1-step active" style="width: 95%">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Criar Conta</p>
                                </div>
                                 <!-- Etapa 2 : Formulário Tipo Organizacional -->
                                

                            </div> <!--Fim Etapas do Formuário-->

                            <fieldset>
                                <h4>Configurando sua conta:</h4>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email *</label>
                                    <input type="email" name="email" placeholder="Email *" class="f1-email form-control" id="f1-email" required data-error = "Por favor, informe um e-mail correto.">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Senha *</label>
                                    <input type="password" name="password" placeholder="Senha *" class="f1-password form-control" id="f1-password" data-minlenght="6" required data-error = "Mínimo de seis (6) digitos">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repetir Senha *</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repetir Senha *" 
                                    class="f1-repeat-password form-control" id="f1-repeat-password" data-match="#f1-password" data-match-error="Atenção! As senhas não estão iguais.">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!--Tipo: Ong/Iniciativa-->   
                                <div class="form-group">
                                    <div class="radio">
                                        <p class="text-left"><strong>Você está se inscrevendo como:</strong></p>
                                         <label>
                                            <input type="radio" name="tipo" id="optionsRadios1" value="1" checked >
                                            Organizaçāo<a href = "#" id ="radio1" data-toggle="modal" data-target="#login-modal3"> (?)</a> 
                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id= "login-modal3">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="gridSystemModalLabel">Organização</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p> Formação estruturada com finalidade social coordenada e com uma fronteira relativamente identificável e funcionamento numa base relativamente contínua para alcançar objetivos comuns, tais como empresas, órgão do governo, associações da sociedade civil etc. Podem ou não estar constituídas juridicamente”)
                                                            </p>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </label>
                                        </br>




                                        <label>
                                            <input type="radio" name="tipo" id="optionsRadios2" value="2">
                                        Iniciativa<a href = "#" id ="radio2" data-toggle="modal" data-target="#login-modal4"> (?)</a> 
                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id= "login-modal4">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="gridSystemModalLabel">Iniciativa</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p> Ação, campanha ou projeto com escopo de ação e tempo predefinidos​ visando a promoção de uma causa e/ou desafio relacionado à questão de gênero.
                                                            </p>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </label>
                                    </div>
                                </div>
                                <!--Fim Ong/Inicitiva--> 

                                <!--Checkbox Carta e Princípios-->                                 
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="carta_principios" data-error="Você deve marcar este campo!" value="1" required>
                                            <ul>
                                                Li e concordo com a carta <a href = "#" id ="check1" data-toggle="modal" data-target="#login-modal"> de príncipios e critérios *</a> 
                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id= "login-modal">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="gridSystemModalLabel">Carta de Princípios Gerais</h4>
                                                          </div>
                                                          <div class="modal-body" style="text-align: justify;">
                                                            <p>

<strong> <center>Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher</center></strong> 

<strong>Justificativa</strong> </br> 
Nas várias regiões do Brasil há cada vez mais ações decorrentes de iniciativas pela equidade de gênero e empoderamento de mulheres de diferentes origens, diversas idades, raça-etnias, moradoras das zonas rural e urbana. </br>

As mulheres se organizam por necessidades de sobrevivência, para combater a violência, para proteger suas famílias e outras mulheres, para expressar seus desejos e crenças, para participar de decisões em várias instâncias, para ampliar seus espaços na sociedade, para exercer sua cidadania e fazer valer seus direitos. Os homens têm sido parceiros nessa caminhada.</br>
 
No âmbito governamental foram criadas coordenadorias, secretarias e ministério dedicados a políticas para as mulheres. No mercado do trabalho, as mulheres estão cada vez mais em todas as áreas, na execução de ações das mais simples às mais complexas, participando da criação de projetos à direção de grandes empresas.</br>
 
Há mais possibilidades e oportunidades para as mulheres fazerem escolhas e ocuparem mais e novos espaços na sociedade. No entanto, elas continuam em situação de desigualdade em relação aos homens, desde a remuneração do trabalho até a divisão de tarefas domésticas e do cuidado com os filhos. </br>


As mulheres são as maiores vítimas de violências e de violações de direitos. Os índices crescentes dessa violência fizeram com que o Brasil ganhasse destaque no cenário mundial, estando entre os países com as maiores taxas de homicídios de mulheres, segundo a OMS (Organização Mundial de Saúde). O mais recente Mapa da Violência, referente ao homicídio de mulheres no Brasil [1], revela que mais de 50% dos assassinatos foram cometidos por familiares, sendo a maioria dos autores desses crimes parceiros ou ex-parceiros.</br>
 
Há evidências de que o Brasil obteve avanços significativos no que diz respeito à igualdade de gênero, empoderamento de mulheres, fortalecimento de grupos feministas e políticas públicas destinadas a esse público, especialmente no âmbito institucional e normativo. Ainda assim é fundamental dar continuidade, ampliar e divulgar todas as ações que propiciam e fortalecem a garantia de seus direitos a fim de minimizar a lógica machista, sexista e racista historicamente construída no país e maximizar as articulações e impactos dessas ações.
    
</br> 
</br> 
<strong>Pressupostos</strong> </br> 
Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher tem como referências documentos e acordos nacionais e internacionais. </br> 

- Declaração Universal dos Direitos Humanos (1948)</br> 
- Convenção sobre a Eliminação de Todas as Formas de Discriminação contra as Mulheres - CEDAW (1971)</br> 
- Declaração e Plataforma de Ação de Pequim (1995) revisada em 2010 </br> 
- Declaração e Objetivos do Desenvolvimento Sustentável (2015-2030) - com destaque para o Objetivo 5. Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas </br> 
-  Por um planeta 50-50 em 2030: um passo decisivo pela igualdade de gênero.</br> 
- Princípios de Empoderamento das Mulheres - ONU Mulheres e United Nations Global Compact</br> 
- Documentário “Precisamos falar com os homens” # ElesPorElas - ONU Mulheres</br> 


No contexto nacional, destacam-se os compromissos assumidos pelo Estado brasileiro perante as outras nações no âmbito dos tratados internacionais e os programas daí decorrentes: programa Mulher, Viver sem Violência; saúde materna e assistência às meninas; cuidados às vítimas de violência sexual por profissionais da saúde e segurança pública; saúde para mulheres com deficiência; licença-maternidade para mulheres militares; registro de filhas e filhos sem a presença do pai. </br> 
- Lei Maria da Penha (Lei nº 11.340/06) </br> 
- Lei do Feminicídio (Lei nº 13.104)</br> 

</br> 
</br> 
<strong>Nossos objetivos </strong></br> 
<ul>
<li>Contribuir para a construção e a potencialização de um ecossistema de organizações e iniciativas pelos direitos e empoderamento das mulheres.</li>

<li>Reunir as informações de organizações da sociedade civil, de grupos e coletivos informais, da academia, de setores empresariais e de órgãos públicos nos três níveis de governo.</li>

<li>Revelar as interconexões existentes entre essas organizações e iniciativas e com a sociedade.</li>

<li>Promover novas interconexões para aumentar o impacto dessas iniciativas, por meio de uma plataforma digital interativa.</li>
 </ul>

</br> 
</br> 
<strong>Princípios e elementos norteadores</strong> </br> 
São princípios do Ecossistema de iniciativas pelos direitos das mulheres:</br> 
- Igualdade de direitos e oportunidades;</br> 
- Mulheres e homens juntos nesse processo #ElesPorElas ;</br> 
- Diversidade racial-étnica, sexual, religiosa, política;</br> 
- Representatividade regional e temática;</br> 
- Inclusão e valorização de iniciativas de diferentes tamanhos e envergaduras;</br> 
- Reconhecimento e legitimidade social;</br> 
- Referência de seriedade e compromisso com a causa dos direitos das mulheres.</br> 
 
</br> 
</br> 
<strong>Caminhos percorridos e a percorrer</strong></br> 
Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher é uma iniciativa da ONU Mulheres,  Womanity Foundation, BrazilFoundation e Instituto C&A. O grupo executor é composto por Blossom, Ibeac e a ponteAponte. A WomenWhoCode e Universidade Federal Rural de Pernambuco são responsáveis pelo desenvolvimento tecnológico, realizado inteiramente por mulheres que atuam nesse campo. </br> 

A união dessas diferentes contribuições permite a realização do trabalho a partir de uma concepção colaborativa e horizontal, incluindo a criação do sistema não proprietário da tecnologia e dos dados.</br>

Para mapear esse ecossistema, será utilizada uma plataforma tecnológica que, em um primeiro momento, possibilitará o cadastro das organizações e iniciativas via questionário eletrônico de autopreenchimento. </br>

Essas informações serão utilizadas para traçar o perfil de cada organização, bem como identificar as conexões entre elas. </br>

Em um segundo momento, essa plataforma terá a função de automatizar, tornar inteligente e perpetuar o processo de mapeamento e identificação de conexões, uma vez que permitirá que novos atores se cadastrem e apontem as parcerias e os relacionamentos com as organizações pré-existentes, ou indiquem outras a serem incluídas na plataforma. </br>

Considerando a complexidade e abrangência desse ecossistema, serão acessadas e articuladas redes de organizações de mulheres para atingir áreas remotas e garantir a representatividade geográfica e diversidade das organizações e iniciativas.</br>

Posteriormente, serão selecionadas iniciativas de destaque para aprofundamento das práticas por meio de estudos de caso e grupos focais, constituindo um conjunto inspirador de histórias, escolhidas por sua relevância e referência, a serem divulgadas amplamente.</br>

As iniciativas pelos direitos das mulheres que estiverem de acordo com os pressupostos, princípios e objetivos explicitados nesta Carta de Princípios podem se cadastrar de forma autônoma e gratuita no Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher. A indicação das interconexões e a confirmação das mesmas pelas parcerias indicadas garantem o aceite no Ecossistema.</br>



</br> 
</br> 
<strong>Iniciativas e organizações aptas a participarem do MAPA</strong></br> 
- Organizações da área social especializadas/com projetos no tema mulher;</br> 
- Organizações multilaterais (BID, Banco Mundial, Sistema ONU etc.);</br> 
- Movimentos sociais;</br> 
- Redes sociais;</br> 
- Coletivos;</br> 
- Secretarias e órgãos de governo (federal, estadual e municipal);</br> 
- Think tanks que focam ou tangenciam a temática;</br> 
- Departamentos ligados aos Poderes Legislativo e ao Judiciário;</br> 
- Departamentos de relações internacionais de outros países no Brasil (embaixadas, câmaras de comércio bilaterais etc.) desde que desenvolva ação em território brasileiro com independência;</br> 
- Organizações do Sistema S;</br> 
- Associações, fundações e conselhos setoriais (CNI, Fiesp etc.);</br> 
- Sindicatos;</br> 
- Organizações de fomento à pesquisa (CNPq, Fapesp etc.);</br> 
- Academia;</br> 
- Imprensa e órgãos de comunicação focados na temática;</br> 
- Redes de fomento relacionadas ao tema (exemplo: Mulheres do Brasil e Rede de Mulheres Líderes pela Sustentabilidade);</br> 
- Empresas com ações e projetos focados no público-alvo principal feminino ou investimentos nessa temática (micro, pequeno, médio a grande portes);</br> 
- Institutos e fundações empresariais (responsabilidade social e investimento social privado);</br> 
- Organizações que fomentam o empreendedorismo feminino;</br> 
- Bancos e fundos de investimento;</br> 
- Grupos de mulheres;</br> 
- Consultorias e empresas de pesquisa.</br> 


</br> 
</br> 

<strong>Iniciativas e organizações não-elegíveis </strong></br> 
- Movimentos de cunho ideológico que comprovadamente disseminem ideias e/ou práticas que ferem os Direitos Humanos;</br> 
- Empresas e organizações com processos em trâmite na Justiça referente a valores fundamentais para esta iniciativa (pendência judicial);</br> 
- Empresas, iniciativas e/ou organizações que não tenham como comprovar a sua prática;</br> 
- Organizações com finalidade meio que fazem apenas o repasse ou executam atividades como terceirizadas;</br> 
- Ideias que ainda não foram avante ou testadas ao menos como projeto piloto.</br> 



</br> 
<hr>
<small>
[1] Estudo com base em dados de 2013 do Ministério da Saúde - Elaborado pela Faculdade Latino-Americana de Ciências Sociais (Flacso), com o apoio do Escritório no Brasil da ONU Mulheres, da Organização Pan-Americana da Saúde/Organização Mundial da Saúde (OPAS/OMS) e da Secretaria Especial de Políticas para as Mulheres (SPM) do Ministério das Mulheres, da Igualdade Racial e dos Direitos Humanos
</small>
<hr>

                                                            </p>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>     
                                        </label>
                                    </div>
                                </div>
                                <!--Checkbox Política de Privacidade-->    
       
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="politica_privacidade" data-error="Você deve marcar este campo!"  value="1" required>
                                            <ul>
                                                Li e concordo com a  <a href = "#" id ="check2" data-toggle="modal" data-target="#login-modal2"> Política de Privacidade *</a> 
                                                <p style="text-align: justify;"> <font size="1.5">DECLARO, PESSOALMENTE OU REPRESENTADO OU ASSISTIDO POR MEU(S) PAI(S) OU REPRESENTANTE(S) LEGAL(IS) QUE LI TODA A POLÍTICA DE PRIVACIDADE, INCLUINDO TODOS OS TERMOS E CONDIÇÕES PARA USO E COMPARTILHAMENTO DAS MINHAS INFORMAÇÕES, ESTOU CIENTE E ACEITO TODAS AS CONDIÇÕES, CONCORDANDO, POR LIVRE E ESPONTÂNEA MANIFESTAÇÃO DE VONTADE, COM TODO O PACTUADO.</font></p>
                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id= "login-modal2">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title" id="gridSystemModalLabel">Política de Privacidade</h4>
                                                            </div>
                                                            <div class="modal-body" style="text-align: justify;">
                                                                <p>

<font size="1">Última modificação: 07 de dezembro  de 2016 </font></br>

 <small>
     Esta Política de Privacidade e o website (http://ecossistemamulheres.azurewebsites.net) foram idealizados por Womanity (Membro do Grupo Proponente), com sede em Carouge, Estado de Genebra, na Suíça, inscrita em Suíca no registre du commerce CH-660-142400, neste ato devidamente representada, na forma de seu Estatuto Social, por seus representantes (doravante designada "WOMANITY").
    </br>
    POR FAVOR LEIA ESTA POLÍTICA DE PRIVACIDADE CUIDADOSAMENTE ANTES DE USAR O SITE. AO ACESSAR, NAVEGAR OU USAR O SITE, DE QUALQUER FORMA, VOCÊ (“USUÁRIO” OU “VOCÊ), RECONHECE TER LIDO, ENTENDIDO E CONCORDADO COM TODOS OS TERMOS E CONDIÇÕES AQUI ESTABELECIDOS, OBRIGANDO-SE AUTOMATICAMENTE ÀS DISPOSIÇÕES AQUI APLICÁVEIS.O USUÁRIO ESTÁ, AINDA, EXPRESSANDO, CONFIRMANDO E FORNECENDO SEU CONSENTIMENTO À COLETA, USO E COMPARTILHAMENTO DE TODA E QUALQUER INFORMAÇÃO PRESTADA PELO USUÁRIO ATRAVES DO SITE, BEM COMO, CONCORDANDO COM TODOS OS OUTROS PROCEDIMENTOS DESCRITOS NESTA POLÍTICA DE PRIVACIDADE, CONFORME ABAIXO. </br>

    CASO DESEJE NAVEGAR OU UTILIZAR ESTE SITE E ACESSAR AS SUAS DEMAIS PÁGINAS, CONFIRME SUA INTENÇÃO CLICANDO NO CAMPO “LI E CONCORDO COM A POLÍTICA DE PRIVACIDADE”, LOCALIZADO AO FINAL DA PÁGINA. 
    </br>
    </br>

    <strong>ATENÇÃO</strong></br>
    OS USUÁRIOS MENORES DE 18 ANOS DE IDADE SOMENTE PODERÃO ACEITAR OS TERMOS E CONDIÇÕES DESTA POLÍTICA DE PRIVACIDADE SE DEVIDAMENTE REPRESENTADOS OU ASSISTIDOS, CONFORME PREVISTO NOS ARTS. 1.634 E 1.690 DO CÓDIGO CIVIL, POR SEUS PAIS, REPRESENTANTES OU ASSISTENTES LEGAIS, DEVENDO ESSES SER RESPONSÁVEIS NA ESFERA CÍVEL POR TODO E QUALQUER ATO PRATICADO PELOS MENORES QUANDO DA UTILIZAÇÃO DO SITE. 
    </br>

    AS DISPOSIÇÕES DESTA POLÍTICA DE PRIVACIDADE PODEM SER ALTERADAS A QUALQUER TEMPO PELA WOMANITY, PORTANTO VERIFIQUE-AS NOVAMENTE SEMPRE QUE UTILIZAR ESTE SITE. EM CASO DE NÃO CONCORDÂNCIA QUANTO AOS TERMOS ABAIXO, SUSPENDA IMEDIATAMENTE A NAVEGAÇÃO E NÃO MAIS UTILIZE O SITE. O USUÁRIO TAMBÉM PODERÁ SOLICITAR À WOMANITY O CANCELAMENTO DE SEU LOGIN E SENHA, BEM COMO A EXCLUSÃO DE SUAS INFORMAÇÕES QUE CONTENHAM DADOS PESSOAIS, CONFORME DEFINIDO NA LEGISLAÇÃO EM VIGOR NO BRASIL.
    </br>
    </br>

    <strong>O ECOSSISTEMA DE INICIATIVAS PARA EQUIDADE DE GÊNERO E EMPODERAMENTO DA MULHER</strong>
    </br>
    Esta iniciativa visa à promoção de um ecossistema das iniciativas empreendidas por entidades engajadas na promoção dos direitos e empoderamento das mulheres e equidade de gêneros (“Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher”) colaborativo e eficaz. Para tanto, os dados relacionados ao Usuário, inclusive seus números identificativos, dados locacionais ou identificadores eletrônicos (como telefone, e-mail, número do IP do computador de onde acessou o Site, etc.), data de nascimento, número de identidade, nome do(s) pai(s) ou responsável(eis) legal(is) e seu(s) número(s) do CPF/MF e RG, sendo o Usuário menor de 18 anos de idade, nome dos principais contatos da organização ou iniciativa da qual o Usuário faça parte, suas opiniões, depoimentos e respostas ao questionário contidas no Site, bem como todas as demais informações coletadas do Usuário no Site(“Informações” ou “Dados”) são de fundamental importância para a construção de informações estratégicas que possibilitam identificar as relações  (e ou a falta delas) entre as iniciativas, sobreposições temáticas, questões com poucas iniciativas, além de ser um espaço de visualização das iniciativas mapeadas. </br>

    Os Dados  do Usuário coletados através do Site serão utilizados pelas entidades descritas no Anexo A, que poderá ser alterado de tempos em tempos (“Entidades”), de acordo com esta Política de Privacidade e a WOMANITY se reserva o direito de realizar alterações a esta Política de Privacidade, aqualquer momento,sem necessidade de aviso. No entanto, a WOMANITY tentará enviar comunicado através do Site ou por e-mail a cada mudança. Deste modo, recomendamos que consulte frequentemente sua caixa de mensagens e leia as atualizações da nossa Política de Privacidade de forma a estar sempre atualizado.</br>

    A coleta, o uso e a divulgação ou compartilhamento de sua Informação serão decididos de acordo com a versão desta Política de Privacidade que estiver em vigor no  momento de seu uso ou divulgação. Por favor, entre em contato se tiver quaisquer perguntas sobre nossa Política de Privacidade, através dos dados de contato da WOMANITY informados adiante neste instrumento.</br>
    </br>

    <strong>COLETA E USO DA INFORMAÇÃO</strong>
    </br>

    <strong>1.Informações para criação de login e senha de Usuário</strong></br>

    Para que Você possa acessar certas áreas ou páginas e se cadastrar como Usuário, este Site requer algumas informações pessoais que integram as Informações, tais como nome dos principais contatos da organização ou iniciativa da qual você faça parte, número de telefone e e-mail. Estas informações são usadas pela equipe da iniciativa do WOMANITY e/ou das demais Entidades para que possamos lhe contatar se houver necessidade de mandar novas informações e/ou para uso interno da WOMANITY e/ou das demais Entidades, tais como consultas, entrevistas, pesquisas para melhor entender as Informações e relações dentro do Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher. Dentro da categoria “dados do contato”, apenas o nome dos principais contatos da sua organização ou iniciativa serão informações públicas no Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher e no Site.
    </br>
    </br>
    <strong>COMPARTILHAMENTO DE INFORMAÇÕES</strong>
    </br>
    O Usuário reconhece e concorda que a WOMANITY poderá a compartilhar  as suas Informações com as Entidades ou com terceiros subcontratados que atuam em nosso nome; porém de nenhuma outra forma daremos cessão, transferiremos ou venderemos qualquer informação coletada no Site para terceiros, para fins comerciais, sem a sua expressa e prévia autorização, por escrito, exceto conforme expressamente aqui previsto. A garantia da confidencialidade dos dados pessoais incluídos nas suas Informações  é importante  e, portanto, todas os seus dados pessoais serão tratados em concordância com a legislação em vigor no Brasil.</br>

    O USUÁRIO, DESDE JÁ, AUTORIZA EXPRESSAMENTE A WOMANITY A COLETAR, ARMAZENAR, RECUPERAR E FORNECER AS INFORMAÇÕES DE LOGIN E SENHA ÀS ENTIDADES, BEM COMO ÀS AUTORIDADES PÚBLICAS COMPETENTES QUE AS SOLICITAREM FORMALMENTE, NOS TERMOS DA LEGISLAÇÃO EM VIGOR NO BRASIL. AO CLICLAR NO CAMPO “LI E CONCORDO COM A POLÍTICA DE PRIVACIDADE” O USUÁRIO AUTORIZA EXPRESSAMENTE QUE A WOMANITY COLETE E COMPARTILHE AS DEMAIS INFORMAÇÕES NA PLATAFORMA (SITE) DE ACORDO COM ESTE TERMO, COM A FINALIDADE DE DESENVOLVER UMA BASE DE DADOS DINÂMICA E INTERATIVA COM PROJETOS, PROGRAMAS SOCIAIS, ESTUDOS CORPORATIVOS E GOVERNAMENTAIS, CUJO FOCO SEJA A PROMOÇÃO DA IGUALDADE DE GÊNEROS, DOS DIREITOS E EMPODERAMENTO SOCIOECONÔMICO DAS MULHERES NO BRASIL. AS INFORMAÇÕES DOS USUÁRIOS TAMBÉM PODEM SER AGRUPADAS E UTILIZADAS, INTERNAMENTE PELA WOMANITY E PELAS ENTIDADES, COMO ESTATÍSTICAS GENÉRICAS, VISANDO OBTER UM MELHOR ENTENDIMENTO DO PERFIL DOS USUÁRIOS PARA APERFEIÇOAMENTO DO SITE.
    </br>
    </br>

    <strong>2.  Informações base da pesquisa</strong></br>

    Todas as Informações preenchidas no questionário que será respondido através do Site serão utilizadas para a construção do Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher porém nem todas informações serão publicadas. NEM A WOMANITY NEM NENHUMA DAS ENTIDADES POSSUI A OBRIGAÇÃO DE UTILIZAR, DE QUALQUER MODO, AS SUAS INFORMAÇÕES.</br>

    O Usuário concorda que somente poderá submeter informações verdadeiras, e reconhece que a WOMANITY não tem a obrigação de verificar a precisão das Informações transmitidas pelo Usuário ou qualquer outra pessoa. Deste modo, o Usuário concorda que o conteúdo das Informações é de inteira responsabilidade daquele que as enviou, ou de seus pais ou representantes legais, quando aplicável, estando a WOMANITY totalmente isenta de responder por quaisquer consequências relacionadas a tais Informações. Essas Informações ainda se dividem em três tipos:</br>
    <ol type="a">
        
        <li> Informações divulgadas junto com o perfil da organização ou iniciativa da qual o Usuário faz parte: </li>
        <ol type="i">
            <li> Nomes dos principais contatos da organização ou iniciativa;</li>

            <li> Área de localização da organização ou iniciativa (zona rural ou urbana, cidade, estado, região); </li>

            <li> Nome da organização ou iniciativa e respectivo endereço de e-mail institucional bem como os canais digitais informados tais como websites e redes sociais blogs, etc.);</li>

            <li> Área de atuação, descrição da atuação, início das atividades.</li>
        </ol>

        <li>Informações que não contenham dado pessoal, conforme definindo no Decreto nº 8.771 de 11 de maio de 2016,que serão utilizadas para construir as relações e conexões do Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher também serão visualizadas: eixos de atuação, setor de atuação, relações existentes com outras iniciativas, função dentro do Ecossistemade iniciativas paraequidade de gênero e empoderamento da mulher, tipo de público atendido, sendo que estas informações serão publicadas no Site e poderão ser acessadas por qualquer terceiro. </li>

        <li>Informações que serão utilizadas pela equipe do WOMANITY e/ou das Entidades para análise interna e não serão atreladas diretamente às iniciativas das quais os Usuários são integrantes. São informações que ajudam a compreender melhor o contexto nas quais tais organizações ou iniciativas estão inseridas. Por exemplo, o orçamento informado auxilia a WOMANITY a entender o volume de recurso aportado no campo de Direitos e Empoderamento da Mulher, existência ou não de procedimentos de avaliação de resultados etc. </li>

    </ol>
    </br>
    <strong>SEGURANÇA DAS INFORMAÇÕES</strong></br>

    A WOMANITY se preocupa com a privacidade e a segurança das suas Informações, já que tanto a WOMANITY como o Usuário reconhecem que a Internet, como rede mundial de computadores que permite o acesso por qualquer pessoa, não é um meio totalmente seguro. Para tanto, a WOMANITY disporá de recursos técnicos que visam atenuar os riscos inerentes à Internet. Por outro lado, a fim de potencializar a segurança no Site, a WOMANITY enfatiza que determinados atos praticados pelo Usuário ou por terceiros por ele autorizados, incluindo, entre outros, o uso com propósitos ilegais, informações ou corrupção de dados, violação de direitos intelectuais ou de autoria, envio de mensagens ameaçadoras, conteúdo racista, pornográfico, constrangedor ou semelhante, que incitem o narcotráfico, terrorismo, pedofilia, que ofendam a liberdade de consciência, religião, sexo, ideia e/ou sentimentos de pessoas ou associações, interferência ou interrupção doSite e/ou qualquer tentativa de espalhar quaisquer vírus ou programas indesejáveis poderá resultar na rescisão imediata de qualquer relação entre a WOMANITY e o Usuário, sem prejuízo das cominações legais cabíveis e a WOMANITY reserva-se o direito de recusar acesso ao Site pelo Usuário. 
    </br>
    O Usuário declara, reconhece e aceita que (a) o estágio atual da técnica não permite a elaboração de programas de computador e websites totalmente isentos de vícios ou defeitos e que, assim sendo, a WOMANITY não pode garantir que o Site operará ininterruptamente ou livre de vícios ou defeitos; (b) o Site não foi desenvolvido sob encomenda do Usuário, mas para uso genérico, razão pela qual a WOMANITY não pode garantir que este atenderá quaisquer necessidades específicas do Usuário; e (c) a Internet é uma rede mundial de computadores, à qual qualquer pessoa pode ter acesso e por tal razão, não é um meio totalmente seguro de comunicação. No caso de utilização da Internet pelo Usuário, a WOMANITY não se responsabilizará, em nenhuma hipótese, nem perante o Usuário nem perante terceiros, por prejuízos de qualquer espécie, inclusive, mas sem limitação, aqueles decorrentes de divulgação das Informações do Usuário a terceiros ou extravio de tais Informações decorrentes direta ou indiretamente do uso da Internet pelo Usuário.
    </br>
    O Usuário concorda ainda, em isentar a WOMANITY de qualquer responsabilidade por danos resultantes do uso indevido do Site, pelo Usuário e/ou quaisquer terceiros por ele autorizados, ou que resultem de acidente, modificação ou quaisquer outras condutas e/ou condições não controladas pela WOMANITY. 
    </br>
    </br>
    <strong>E-MAIL </strong></br>

    O envio de e-mails será feito apenas com o consentimento do Usuário e poderá ser desativado a qualquer momento. A WOMANITY é contra o envio de e-mails sem autorização prévia (conhecidos como SPAM). Ao se cadastrar no Site, Você poderá escolher se deseja receber e-mails com informações e promoções da WOMANITY.
    </br>
    </br>

    <strong>PROPRIEDADE INTELECTUAL E USO DO SITE</strong></br>

    O Usuário reconhece e concorda que o Site, assim como todas as marcas, desenhos, ilustrações, insígnias, fotos, imagens, descrições, textos, laytout, símbolos sinais distintivos de qualquer natureza, manuais e qualquer conteúdo (que não sejam Informações do Usuário) contidos no Site são de propriedade exclusiva da WOMANITY e/ou das demais Entidades e que essa Política de Privacidade não lhe confere qualquer direito de titularidade, uso, reprodução, imitação, distribuição, modificação, exibição, criação de trabalhos derivados ou qualquer outra forma de utilização do Site os dos referidos direitos. Desta forma, ao acessar o Site, o Usuário não pleiteará ou reclamará a qualquer tempo, tais direitos, como se fossem seus e, ainda, fica ciente de que a utilização indevida de tais direitos que não sejam Informações do Usuário contidos no Site pode acarretar sanções civis e criminais.
    </br>
    Em atenção à proteção aos direitos do Usuário, fica desde já esclarecido e acordado que não serão aceitas ideias ou sugestões relacionadas a quaisquer planos de trabalho, exceto quando expressamente requisitado e acordado por escrito, previamente, pela ou com a WOMANITY. Conforme legislação em vigor no Brasil, as ideias ou concepções abstratas, planos e esquemas não são passíveis. Deste modo, o Usuário declara, reconhece e aceita que qualquer transmissão de ideias ou concepções poderá ser utilizada por quaisquer terceiros, inclusive pela WOMANITY, sem que a utilização de tais informações gere qualquer obrigação de compensar o Usuário.
    </br>
    </br>

    <strong>COOKIES</strong></br>

    No Site, o uso de cookies é feito apenas para reconhecer um visitante e melhorar a experiência de navegar ou utilizar oSite. Os cookies são pequenos arquivos de dados transferidos de um website para o seu computador e não armazenam dados pessoais. Durante todo este processo mantemos as suas Informações em sigilo absoluto. Vale lembrar as Informações do Usuário são registradas pelo Site de forma automatizada, dispensando manipulação humana.
    </br>
    </br>

    <strong>LINKS/INFORMAÇÕES DE TERCEIROS</strong></br>

    Os textos e informações no Site podem apresentar links para outros sitesde terceiros. A WOMANITY não se responsabiliza por informações publicadas nos links por inexistir vínculo com os mesmos. 
    </br>
    </br>

    <strong>DISPOSIÇÕES GERAIS</strong>
    <ol type="1">
        <li> Fica ressalvado o direito do Usuário em retificar quaisquer de suas Informações. Entretanto, o direito de retificação do Usuário não obstará ou substituirá o direito da WOMANITY em não utilizar tais Informações modificadas ou não no Site, a critério exclusivo da WOMANITY, bem como pleitear as indenizações cabíveis no caso de Informações errôneas ensejarem quaisquer danos e/ou prejuízos à WOMANITY, às demais Entidades ou a terceiros. Para fins desta Política de Privacidade, qualquer retificação das Informações pelo Usuário somente produzirá efeitos após o seu efetivo recebimento pela WOMANITY.</li>

        <li> O Usuário concorda em não usar o Site para efetuar qualquer negócio ou atividade proibida por lei, ou solicitar o desempenho de qualquer negócio ou atividade proibida por lei. A WOMANITY reserva-se o direito de proibir a conduta, comunicações ou conteúdo que considere, por seu exclusivo e absoluto julgamento, violar qualquer lei ou que seja nociva aos Usuários e/ou terceiros que constam no Site, ou aos direitos da WOMANITY, das demais Entidades ou de terceiros. Não obstante, nada nesta Política de Privacidade deve ser considerada uma obrigação da WOMANITY em monitorar individualmente qualquer comunicação feita por meio do Site. Todo e qualquer controle nesse sentido será realizado por amostragem, salvo caso específico. </li>

        <li> A presente Política de Privacidade será válida e vinculará o Usuário e seus sucessores.</li>

        <li> O Usuário declara e garante que o cumprimento desta Política de Privacidade não constitui nem constituirá (i) uma violação ou um conflito com qualquer outro acordo, verbal ou escrito, entre o Usuário e outra pessoa ou entidade, ou qualquer obrigação legal, incluindo, sem limitação, qualquer dever de lealdade ou decisão judicial; nem (ii) uma violação de qualquer direito de exclusividade de qualquer pessoa ou entidade. </li>

        <li> Na hipótese de qualquer termo ou disposição desta Política de Privacidade ser declarada nula, tal nulidade não afetará quaisquer outros termos ou disposições aqui contidos, os quais deverão permanecer em pleno vigor e efeito. A tolerância pela WOMANITY com relação a qualquer violação da presente Política de Privacidade ou sua omissão no exercício de qualquer direito outorgado pela mesma, não será considerado como novação ou renúncia em relação a qualquer violação futura, seja semelhante ou não, ou ao exercício pela WOMANITY de qualquer direito futuro conferido por este instrumento.</li>

        <li> Os presentes termos e condições serão regidos pela legislação brasileira e qualquer controvérsia que possa surgir do acesso ao Site disponibilizado pela WOMANITY ao USUÁRIO será submetida ao Foro da Comarca da Capital do Estado de São Paulo, com renúncia expressa a qualquer outro. </li>

        <li> Qualquer comunicação com a WOMANITY, inclusive caso reste qualquer dúvida sobre esta Política de Privacidade, deverá ser enviada para: </br>
            WOMANITY</br>
            Endereço: 51-55 route des Jeunes, Cidade du Carouge, Genebra, Suíça</br>
            A/C: Tiana Vilar Lins</br>
            Telefones: 41 22 544 39 39</br>
            e-mail: mapamulheres@ponteaponte.com.br</br>
        </li>
        <li> As expressões contidas nesta Política de Privacidade terão os significados que lhes forem atribuídos no corpo deste instrumento, salvo quando o contexto claramente indicar significado diverso ou definição em outra cláusula ou disposição. Para os fins desta Política de Privacidade, todos os termos definidos no singular incluirão o plural e vice-versa quando o contexto assim o indicar, e as palavras que conotam gênero incluirão todos os sexos</li>
    </ol>
    </br>
    <center>
        WOMANITY Todos os direitos reservados.
    </center>

</small>
</br>
</br>

<hr>
<center><small><strong>ANEXO A</strong></small></center>
</br>
<font size="1.5">
    <strong>ENTIDADES</strong></br>
    O USUÁRIO RECONHECE E CONCORDA QUE TODAS AS SUAS INFORMAÇÕES COLETADAS NO SITE SERÃO COMPARTILHADAS COM AS SEGUINTES ENTIDADES E OUTRAS QUE VENHAM A CONTRIBUIR COM A WOMANITY PARA O "ECOSSISTEMA DE INICIATIVAS PARA EQUIDADE DE GÊNERO E EMPODERAMENTO DA MULHER":
    </br>

    <strong>Entidades Proponentes:</strong>
    <ul style="list-style-type: none;" >
        <li>ONU MULHERES</li>
        <li>WOMANITY FOUNDATION</li>
        <li>BRAZILFOUNDATION</li>
    </ul>


    <strong>Executores de Mapeamento:</strong>
    <ul style="list-style-type: none;">
        <li>PONTEAPONTE</li>
        <li>BLOSSOM</li>
        <li>IBEAC</li>
        <li>WOMENWHOCODE</li>
        <li>UFPE</li>
        <li>UFRPE</li>
    </ul>

    <strong>Investidores / Parceiros:</strong>
    <ul  style="list-style-type: none;">
        <li>INSTITUTO C&A</li>
        <li>WOMANITY FOUNDATION </li>
        <li>JWT</li>
        <li>BRAZILFOUNDATION</li>
        <li>ONU MULHERES</li>
    </ul>
</font>
<hr>
                                                                    
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>
                                        </label>
                                    </div>
                                </div>

                                <div class="f1-buttons">
                                    <button type="submit" name="novo" class="btn btn-submit">Cadastrar</button>
                                </div>
                                <?php echo isset($erro) ? $erro : ''; ?>
                            </fieldset>

                          
                        </form>
                    </div>
                </div>                    
            </div>
             <div class="container">
                    <div class="row" >
                        <div class="description">

                        <h3 style="color:white;">Parceiros:</h3>


                   <div class="col-md-3">
                   
                         <img src="assets/img/logo_womanity.png"class="logos"><a href="#"></a>
                   </div>

                    <div class="col-md-3">
               
                         <img src="assets/img/logo_onumulheres.png"class="logos"><a href="#"></a>

                    </div>

                    <div class="col-md-3">

                        <img src="assets/img/logocea.png" class="logos"><a href="#"></a>

                    </div> 

                    <div class="col-md-3">
                   
                    <img src="assets/img/logo_brazil.png"class="logos"><a href="#"></a>

                    </div> 

                    <div class="container footer">
                    <div class="row">
                        <div class="col-sm-12">
                             <p style="color:white;">By Women Who Code Recife &copy; 2016 </p><a href="http://www.womenwhocode.com" target="_blank"></a>
                        </div>

                            </div><!--/ row footer-->

                        </div><!--/container footer-->

                </div><!--/ row-->

              </div>  
        </div>

      </div> 

      <style>

            .logos{

                display: inline-block;
                margin: 25px auto 10px auto;

            }


          </style>
 

    </body>
    <?php
        endif;
    ?>

</html>