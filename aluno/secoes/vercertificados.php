<div class="container mt-4 h-100 ver-certificados">
    <h2 class="text-center mb-4">Meus Certificados</h2>
    <div class="table-responsive overflow-visible">
        <table class="table shadow table-hover table-sm table-striped">
            <thead>
                <tr>
                    <th class="start">ID</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Horas</th>
                    <th>Status</th>
                    <th>Arquivo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("controller/vercertificados.php");
                ?>
            </tbody>
        </table>
    </div>
</div>