<div class="container h-100 mt-4">
    <h2>COORDENADOR</h2>
    <hr>
    <h4>Bem-vindo(a) <?= $_SESSION["nome"] ?> a área do Coordenador</h4>
    <section class="acessorapido mt-5">
        <h2>ACESSO RÁPIDO</h2>
        <hr>
        <div class="row justify-content-between">
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <a class="btn btn-primary" href="#">
                        <div class="card-body">
                            <h5 class="card-title">Ver certificados</h5>
                        </div>
                    </a>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <a class="btn btn-primary" href="?secao=gerenciarcertificados">
                        <div class="card-body">
                            <h5 class="card-title">Gerenciar certificados</h5>
                        </div>
                    </a>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <a class="btn btn-primary" href="?secao=cadastraraluno">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Aluno</h5>
                        </div>
                    </a>
                </div>
            </article>
        </div>
    </section>
</div>