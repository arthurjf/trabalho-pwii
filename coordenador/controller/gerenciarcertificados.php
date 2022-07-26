<?php
include_once("../classes/CoordenadorManipulaDados.php");
include_once("../classes/Status.php");

$manipulas = new CoordenadorManipulaDados();
$dados = $manipulas->getCertificados();

foreach ($dados as $dado) {
    $tempStatus = $dado["certificado_status"];
?>

    <tr class="item">
        <th class="start"><?= $dado["certificado_id"] ?></th>
        <td><?= $dado["pessoa_nome"] ?></td>
        <td><?= $dado["certificado_descricao"] ?></td>
        <td>
            <div class="<?= STATUS[$tempStatus]->tag ?>"><?= STATUS[$tempStatus]->nome ?></div>
        </td>
        <td>
            <div class="dropdown">
                <button class="btn mt-1 mb-1" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">Deferir</a></li>
                    <li><a class="dropdown-item" href="#">Indeferir</a></li>
                    <li><a class="dropdown-item" href="#">Alterar</a></li>
                </ul>
            </div>
        </td>
    </tr>
<?php
}
?>