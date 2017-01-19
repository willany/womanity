<?php 
include_once 'Conexao.class.php';

class RelatorioOrganizacaoIndicada extends Conexao {

	public function exibir_relatorio_organizacao_indicada(){
        $pdo = parent::getDB();
        try{
        	$dadosXls = ""; 
			
			$result = $pdo->prepare("SELECT SUBSTRING(i.nome, 1, CHAR_LENGTH(i.nome) - 2) as nome, i.email, i.telefone, o.nome as ong 
										FROM indicacoes i 
										inner join organizacoes o on o.id = i.organizacao_id
										where 
										i.nome not like '_1%'
										and i.nome not like '_2%'
										and i.nome not like '_3%'"); 
			$result->execute();
			$linhas = $result->fetchAll();

			//varremos o array com o foreach para pegar os dados 
			foreach($linhas as $res){ 
				$dadosXls .= " <tr>"; 
				$dadosXls .= " <td>".$res['nome']."</td>"; 
				$dadosXls .= " <td>".$res['email']."</td>"; 
				$dadosXls .= " <td>".$res['telefone']."</td>"; 
				$dadosXls .= " <td>".$res['ong']."</td>"; 
				$dadosXls .= " </tr>"; 
			} 
			echo $dadosXls; 
			exit;
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function baixar_relatorio_organizacao_indicada(){
        $pdo = parent::getDB();
        try{
        	$dadosXls = ""; 
			$dadosXls .= " <table border='1' >"; 
			$dadosXls .= " <tr>"; 
			$dadosXls .= " <th>NOME</th>"; 
			$dadosXls .= " <th>E-MAIL</th>"; 
			$dadosXls .= " <th>TELEFONE</th>"; 
			$dadosXls .= " <th>INDICADO POR</th>"; 
			$dadosXls .= " </tr>";

			//return $stmt->fetchAll(PDO::FETCH_ASSOC);

			$result = $pdo->prepare("SELECT SUBSTRING(i.nome, 1, CHAR_LENGTH(i.nome) - 2) as nome, i.email, i.telefone, o.nome as ong 
										FROM indicacoes i 
										inner join organizacoes o on o.id = i.organizacao_id
										where 
										i.nome not like '_1%'
										and i.nome not like '_2%'
										and i.nome not like '_3%'"); 
			$result->execute();
			$linhas = $result->fetchAll();

			//varremos o array com o foreach para pegar os dados 
			foreach($linhas as $res){ 
				$dadosXls .= " <tr>"; 
				$dadosXls .= " <td>".$res['nome']."</td>"; 
				$dadosXls .= " <td>".$res['email']."</td>"; 
				$dadosXls .= " <td>".$res['telefone']."</td>"; 
				$dadosXls .= " <td>".$res['ong']."</td>"; 
				$dadosXls .= " </tr>"; 
			} 

			$dadosXls .= " </table>"; 
			// Definimos o nome do arquivo que será exportado 
			$arquivo = "MinhaPlanilha.xls"; 
			//Configurações header para forçar o download 
			header('Content-Type: application/vnd.ms-excel'); 
			header('Content-Disposition: attachment;filename="'.$arquivo.'"'); 
			header('Cache-Control: max-age=0'); 
			// Se for o IE9, isso talvez seja necessário 
			header('Cache-Control: max-age=1'); 
			// Envia o conteúdo do arquivo 
			echo $dadosXls; 
			exit;
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
	 
}
?>
