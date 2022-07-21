<div class="container h-100">
    <h2 class="text-center">Cadastrar Aluno</h2>
    <form action="controller/cadastraraluno.php" method="post">
        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input name="txtMatricula" type="text" class="form-control" placeholder="Digite a matrícula do aluno" />
        </div>
        <div class="mb-3">
            <label class="form-label">Nome completo</label>
            <input name="txtNome" type="name" class="form-control" placeholder="Digite o nome do aluno" />
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input name="txtEmail" type="email" class="form-control" placeholder="Digite o e-mail do aluno" />
        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input name="txtSenha" type="password" class="form-control" placeholder="Digite a senha do aluno" />
        </div>
        <div class="mb-3">
            <button name="button" type="submit" value="insert" class="btn btn-primary">Cadastrar Aluno</button>
        </div>
        <div class="mb-3">
            <button name="button" type="submit" value="cancel" class="btn btn-outline-danger">Cancelar</button>
        </div>
    </form>
</div>