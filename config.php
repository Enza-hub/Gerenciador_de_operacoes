<?php
	$servidor= "localhost";
	$dbname= "gerencia";
	$dbusuario= "root";
	$dbsenha= "";
	$link= mysql_connect($servidor, $dbname, $dbusuario, $dbsenha);

	if (!$link) {
		echo "conexão falhou!"; exit();
		
	}

	$servidor= "localhost";
	$dbname= "gerencia";
	$dbusuario= "root";
	$dbsenha= "";
	$link= mysql_connect($servidor, $dbname, $dbusuario, $dbsenha);
	$db= mysql_select_db($gerencia, $link);
	if (!$link) {
		echo "Erro ao conectar ao banco de dados!"; exit();
	}

$SQL= "SELECT*FROM tb_gerenciador";
$RS= mysql_query($SQL);
while ($RF= mysql_fetch_array($RS)) {
	echo'<pre>';
	print_r($RF);
	echo '</pre>';
}

CREATE DATABASE gerencia
CREATE TABLE tb_gerenciador( ID INT Primary KEY AUTO_INCREMENT, Cliente Varchar (150) NOT NULL, Moeda_origem_BRL FLOAT NOT NULL, Moeda_convertida_USD FLOAT, Valor_taxa FLOAT)
SELECT * FROM `tb_gerenciador`
SELECT * FROM `tb_gerenciador`
INSERT INTO `tb_gerenciador` (`ID`, `Cliente`, `Moeda_origem_BRL`, `Moeda_convertida_USD`, `Valor_taxa`) VALUES (NULL, 'Martim Pereira', '200.10', NULL, NULL);
INSERT INTO `tb_gerenciador` (`ID`, `Cliente`, `Moeda_origem_BRL`, `Moeda_convertida_USD`, `Valor_taxa`) VALUES (NULL, 'Martim Pereira', '200.10', NULL, NULL)
SELECT * FROM `tb_gerenciador`
INSERT INTO `tb_gerenciador` (`ID`, `Cliente`, `Moeda_origem_BRL`, `Moeda_convertida_USD`, `Valor_taxa`) VALUES (NULL, 'Sarah Cardoso', '1300,25', NULL, NULL);
INSERT INTO `tb_gerenciador` (`ID`, `Cliente`, `Moeda_origem_BRL`, `Moeda_convertida_USD`, `Valor_taxa`) VALUES (NULL, 'Sarah Cardoso', '1300.25', NULL, NULL)
SELECT * FROM `tb_gerenciador`
SELECT * FROM `tb_gerenciador` ORDER BY `tb_gerenciador`.`ID` ASC
SELECT * FROM `tb_gerenciador` ORDER BY `tb_gerenciador`.`ID` DESC
SELECT * FROM `tb_gerenciador` ORDER BY `tb_gerenciador`.`ID` ASC
INSERT INTO `tb_gerenciador` (`ID`, `Cliente`, `Moeda_origem_BRL`, `Moeda_convertida_USD`, `Valor_taxa`) VALUES (NULL, 'Vitória Alves', '105.50', NULL, NULL), (NULL, 'Erick Rodrigues', '69.90', NULL, NULL), (NULL, 'Victor Gomes', '84.90', NULL, NULL), (NULL, 'Mariana Ferreira', '499.00', NULL, NULL), (NULL, 'Laurie Bell', '3054.90', NULL, NULL), (NULL, 'Steven Campbell', '25.50', NULL, NULL), (NULL, 'Douglas Sousa', '768.89', NULL, NULL)
SELECT * FROM `tb_gerenciador`
SELECT Cliente, Moeda_origem_BRL*0.19 AS 'Moeda_convertida_USD' FROM tb_gerenciador
SELECT Cliente, Moeda_origem_BRL*0.19 AS 'Moeda_convertida_USD' FROM tb_gerenciador
SELECT * FROM `tb_gerenciador`
SELECT Cliente, Moeda_origem_BRL, Moeda_origem_BRL*0.19 AS 'Moeda_convertida_USD' FROM tb_gerenciador
SELECT Cliente, Moeda_origem_BRL, Moeda_origem_BRL*0.19 AS 'Moeda_convertida_USD' FROM tb_gerenciador
SELECT Cliente, Moeda_origem_BRL, Moeda_convertida_USD*1.1 AS 'Valor_taxa' FROM tb_gerenciador
SELECT Cliente, Moeda_origem_BRL, Moeda_origem_BRL*0.19 AS 'Moeda_convertida_USD' FROM tb_gerenciador
ALTER TABLE `tb_gerenciador` ADD `Data_de_operação` DATE NOT NULL AFTER `Cliente`;
ALTER TABLE `tb_gerenciador` ADD `Data_de_operação` DATE NOT NULL AUTO_INCREMENT AFTER `Cliente`, ADD PRIMARY KEY (`Data_de_operação`);

?