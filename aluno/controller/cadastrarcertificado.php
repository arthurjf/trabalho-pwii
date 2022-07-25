<?php
include_once("../../classes/AlunoManipulaDados.php");
function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}
$nome = $_POST["nome"];
$descricao = $_POST['txtDescricao'];
$data = $_POST['txtData'];
$hora = $_POST['txtHora'];


$nomearquivo = $_FILES['arquivo']['name'];
$urlbanco = "certificados/".$nome."/" . $nomearquivo;

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urllocalsalvo = "../../certificados/".$nome."/" . $nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);



$cadastra = new AlunoManipulaDados();
$cadastra->setTable("tb_certificado");
$cadastra->setFields("descricao,data,hora,url,status");
$cadastra->setDados("'$descricao','$data','$hora','$urlbanco',0");
$cadastra->insert();

echo '<script>alert("' . $cadastra->getStatus() . '");</script>';
echo "<script>location = '../index.php'; </script>";
?>