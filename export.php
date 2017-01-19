<?php
	require_once "classes/RelatorioOrganizacaoIndicada.php";

  	$relatorio = new RelatorioOrganizacaoIndicada;

  	$relatorio->baixar_relatorio_organizacao_indicada();
?>