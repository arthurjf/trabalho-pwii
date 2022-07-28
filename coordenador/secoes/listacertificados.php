<div class="container mt-4 h-100 ver-certificados">
    <h2 class="text-center mb-4">Lista de Certificados</h2>
    <div class="table-responsive overflow-visible">
        <table class="table shadow table-hover table-sm table-striped">
            <thead>
                <tr>
                    <th class="start">Matrícula</th>
                    <th>Nome do Aluno</th>
                    <th>Horas Totais</th>
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
