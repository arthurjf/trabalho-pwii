<div class="container h-100 signup">
    <div class="row justify-content-md-center h-100">
        <div class="row rounded shadow-lg col-lg-4 col-md-4 col-sm-12 panel">
            <section class="row title">
                <h2 class="text-center">Cadastrar Coordenador</h2>
                <hr>
            </section>
            <section class="row item">
                <form action="controller/cadastrarcoordenador.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nome completo</label>
                        <input name="txtNome" type="name" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input name="txtEmail" type="email" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input name="txtSenha" type="password" class="form-control" required minlength="4" />
                    </div>
                    <div class="mb-3">
                        <button name="button" type="submit" value="insert" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
                <div class="mb-3">
                    <a href="index.php" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </section>
        </div>
    </div>
</div>