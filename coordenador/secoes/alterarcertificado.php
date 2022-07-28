<?php
include_once("../classes/Status.php");

$_POST = $_SESSION;
?>

<div class="container mt-4 h-100">
    <h2 class="text-center">Alterar Certificado</h2>
    <div class="mb-3">
        <label class="form-label">Matrícula do Aluno</label>
        <input name="txtAlunoNome" type="name" class="form-control" value="<?= $_POST["matriculaAluno"] ?>" disabled />
    </div>
    <form action="controller/alteracertificado.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtCertificadoId" value="<?= $_POST["certificadoId"] ?>">
        <input type="hidden" name="txtPessoaNome" value="<?= $_POST["pessoaNome"] ?>">
        <input type="hidden" name="txtURLCertificado" value="<?= $_POST["urlCertificado"] ?>">
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <input name="txtDescricao" type="text" class="form-control" value="<?= $_POST["descricaoCertificado"] ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label">Data</label>
            <input name="txtData" type="date" class="form-control" value="<?= date($_POST["dataCertificado"]) ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label">Horas</label>
            <input name="txtHora" type="time" id="appt" required class="form-control" value="<?= $_POST["horasCertificado"] ?>" />
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="../<?= $_POST["urlCertificado"] ?>" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                </svg> Ver Certificado
            </a>
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="alterar-pdf-checkbox">
                <input class="form-check-input" type="checkbox" name="ckAlterarPDF" value="true" id="alterar-pdf-checkbox" onclick="onClickAlterarPDF()" /> Alterar PDF Certificado
            </label>
        </div>
        <div class="mb-3" id="novo-pdf" style="display:none">
            <label for="formFile" class="form-label">Novo PDF</label>
            <input class="form-control" type="file" id="formFile" name="arquivo">
        </div>
        <div class="mb-3">
            <label class="form-label">Status do Certificado</label>
            <select class="form-select" name="statusId">
                <?php
                foreach (STATUS as $key => $status) {
                    if ($key == $_POST["statusCertificado"]) {
                ?>
                        <option value="<?= $key ?>" selected><?= $status->nome ?></option>
                    <?php
                    } else {
                    ?>
                        <option value="<?= $key ?>"><?= $status->nome ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <button name="button" type="submit" value="insert" class="btn btn-primary">Alterar Certificado</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>
</div>

<script>
    function onClickAlterarPDF() {
        var checkBox = document.getElementById("alterar-pdf-checkbox");
        var novoPDF = document.getElementById("novo-pdf");

        if (checkBox.checked == true) {
            novoPDF.style.display = "block";
        } else {
            novoPDF.style.display = "none";
        }
    }
</script>