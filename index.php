<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sistema de Hora </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
    <script src='js/bootstrap.bundle.js'></script>
</head>

<body>
    <div class="container h-100 login">
        <div class="row justify-content-md-center h-100">
            <div class="row rounded shadow-lg col-lg-9 col-md-9 col-sm-12 panel">
                <section class="row title">
                    <h2 class="text-center">Sistema de Certificados</h2>
                </section>
                <section class="col-lg-5 item">
                    <h2 class="subtitle text-start mb-3">Aluno</h2>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mb-3">Acessar</button>
                    </form>
                </section>
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="vr h-100"></div>
                </div>
                <section class="col-lg-5 item">
                    <h2 class="subtitle text-start mb-3">Coordenador</h2>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mb-3">Acessar</button>
                        <p>Ainda não tem conta? <a href="#">Registre aqui</a></p>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>