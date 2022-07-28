<?php
session_start();
$_SESSION["pessoaNome"] = $_POST['txtPessoaNome'];
$_SESSION["matriculaAluno"] = $_POST['txtMatriculaAluno'];
$_SESSION["certificadoId"] = $_POST['txtCertificadoId'];
$_SESSION["descricaoCertificado"] = $_POST['txtDescricaoCertificado'];
$_SESSION["dataCertificado"] = $_POST['txtDataCertificado'];
$_SESSION["horasCertificado"] = $_POST['txtHorasCertificado'];
$_SESSION["urlCertificado"] = $_POST['txtURLCertificado'];
$_SESSION["statusCertificado"] = $_POST['txtStatusCertificado'];

header("location: index.php?secao=alterarcertificado");
exit();
