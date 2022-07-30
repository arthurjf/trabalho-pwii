<div class="container h-100 mt-4">
    <h2>Aluno</h2>
    <hr>
    <h4>Bem-vindo(a) <?= $_SESSION["nome"] ?> a área do aluno</h4>
    <section class="acessorapido mt-5">
        <h2>ACESSO RÁPIDO</h2>
        <hr>
        <div class="row d-line">
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <a class="btn btn-primary" href="?secao=vercertificados">
                        <div class="card-body">
                            <h5 class="card-title">Meus Certificados</h5>
                        </div>
                    </a>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <a class="btn btn-primary" href="?secao=cadastrarcertificado">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Certificados</h5>
                        </div>
                    </a>
                </div>
            </article>
        </div>
    </section>
</div>