<div class="container mt-4 h-100 ver-certificados">
    <h2 class="text-center mb-4">Alunos</h2>
    <div class="table-responsive overflow-visible">
        <table class="table shadow table-hover table-sm table-striped">
            <thead>
                <tr>
                    <th class="start">ID</th>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>E-mail</th>
                    <th>Horas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("controller/veralunos.php");
                ?>
            </tbody>
        </table>
    </div>
</div>