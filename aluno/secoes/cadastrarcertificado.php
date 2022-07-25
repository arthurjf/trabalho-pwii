<div class="container mt-4 h-100">
    <h2 class="text-center">Cadastrar Certificado <?= $_SESSION["nome"] ?></h2>
    <form action="controller/cadastrarcertificado.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="hidden" name="nome" value='<?= $_SESSION["nome"] ?>' />
            <label class="form-label">Descrição</label>
            <input name="txtDescricao" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label class="form-label">Data </label>
            <input name="txtData" type="date" class="form-control" />
        </div>
        <div class="mb-3">
            <label class="form-label">Horas</label>
            <input name="txtHora" type="time" id="appt" required class="form-control" />
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Escolha o pdf do certificado </label>
            <input class="form-control" type="file" id="formFile" name="arquivo">
        </div>
        <div class="mb-3">
            <button name="button" type="submit" value="insert" class="btn btn-primary">Cadastrar Certificado</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>
</div>