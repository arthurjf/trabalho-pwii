<div class="container mt-4 h-100 ver-certificados">
    <h2 class="text-center mb-4">Certificados</h2>
    <div class="table-responsive overflow-visible">
        <table class="table shadow table-hover table-sm table-striped">
            <thead>
                <tr>
                    <th class="start">ID</th>
                    <th>Matrícula do Aluno</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Hora</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("controller/visualizacertificados.php");
                ?>
            </tbody>
        </table>
    </div>
</div>