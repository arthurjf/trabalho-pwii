<div class="container h-100 login">
    <div class="row justify-content-md-center h-100">
        <div class="row rounded shadow-lg col-lg-9 col-md-9 col-sm-12 panel">
            <section class="row title">
                <h2 class="text-center">Sistema de Certificados</h2>
            </section>
            <section class="col-lg-5 item">
                <h2 class="subtitle text-start mb-3">Aluno</h2>
                <form action="controller/loginaluno.php" method="post">
                    <div class="form-group">
                        <input name="txtEmail" type="email" class="form-control" placeholder="E-mail" required />
                    </div>
                    <div class="form-group mt-3">
                        <input name="txtSenha" type="password" class="form-control" placeholder="Senha" required />
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Acessar</button>
                </form>
            </section>
            <div class="col-lg-2 d-none d-lg-block">
                <div class="vr h-100"></div>
            </div>
            <section class="col-lg-5 item">
                <h2 class="subtitle text-start mb-3">Coordenador</h2>
                <form action="controller/logincoordenador.php" method="post">
                    <div class="form-group">
                        <input name="txtEmail" type="email" class="form-control" placeholder="E-mail" required />
                    </div>
                    <div class="form-group mt-3">
                        <input name="txtSenha" type="password" class="form-control" placeholder="Senha" required />
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Acessar</button>
                    <p>Ainda não tem conta? <a href="?secao=cadastrarcoordenador">Registre aqui</a></p>
                </form>
            </section>
        </div>
    </div>
</div>