<?php
include_once("../classes/CoordenadorManipulaDados.php");
include_once("../classes/Status.php");

$manipulas = new CoordenadorManipulaDados();
$dados = $manipulas->getHorasAlunos();

if (count($dados) <= 0) {
?>
    <td class="text-center p-3" colspan="5">Nenhum aluno encontrado.</td>
<?php
}

foreach ($dados as $dado) {
?>
    <tr class="item">
        <th class="start"><?= $dado["certificado_id"] ?></th>
        <td><?= $dado["nome"] ?></td>
        <td><?= $dado["matricula"] ?></td>
        <td><?= $dado["email"] ?></td>
        <td><?= $dado["certificado_horas"] ?></td>
    </tr>
<?php
}
?>