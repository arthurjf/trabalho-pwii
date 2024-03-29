<div class="container h-100 login">
    <div class="row justify-content-md-center h-100">
        <div class="row rounded shadow-lg col-lg-4 col-md-4 col-sm-12 panel">
            <section class="row title">
                <h2 class="text-center">Sistema de Certificados</h2>
                <hr>
            </section>
            <ul class="nav nav-tabs mb-3 tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Coordenador</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Aluno</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <section class="item">
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
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <section class="item">
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
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
        </div>
    </div>
</div>