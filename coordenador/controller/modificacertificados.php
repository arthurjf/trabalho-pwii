<?php
include_once("../../classes/CoordenadorManipulaDados.php");

$certificadoId = $_POST["txtCertificadoId"];
$botao = $_POST["button"];

$manipula = new CoordenadorManipulaDados();
$manipula->setTable("tb_certificado");
$manipula->setFieldId("id");
$manipula->setValueId($certificadoId);

$status = $botao == "deferir" ? "1" : "2";

$manipula->setFields("status = " . $status);
$manipula->update();

echo '<script>alert("' . $manipula->getStatus() . '");</script>';
echo "<script>location = '../index.php?secao=gerenciarcertificados'; </script>";
