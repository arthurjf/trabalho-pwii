<?php
include_once("../classes/CoordenadorManipulaDados.php");
include_once("../classes/Status.php");

$manipulas = new CoordenadorManipulaDados();
$dados = $manipulas->getCertificados();

if (count($dados) <= 0) {
?>
    <td class="text-center p-3" colspan="6">Nenhum certificado encontrado.</td>
<?php
}

foreach ($dados as $dado) {
    $tempStatus = $dado["certificado_status"];
?>
    <tr class="item">
        <th class="start"><?= $dado["certificado_id"] ?></th>
        <td><?= $dado["aluno_matricula"] ?></td>
        <td><?= $dado["certificado_descricao"] ?></td>
        <td>
            <div class="<?= STATUS[$tempStatus]->tag ?>"><?= STATUS[$tempStatus]->nome ?></div>
        </td>
        <td><?= $dado["certificado_hora"] ?></td>
        <td>
            <a class="btn d-inline" href="../<?= $dado["certificado_url"] ?>" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                </svg>
            </a>
            <div class="dropdown d-inline">
                <button class="btn mt-1 mb-1" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                    <form action="controller/modificacertificados.php" method="post">
                        <input type="hidden" name="txtCertificadoId" value='<?= $dado["certificado_id"] ?>' />
                        <button name="button" type="submit" value="deferir" class="dropdown-item">Deferir</button>
                        <button name="button" type="submit" value="indeferir" class="dropdown-item">Indeferir</button>
                    </form>
                    <form action="alterarcertificado.php" method="post">
                        <input type="hidden" name="txtPessoaNome" value="<?= $dado["pessoa_nome"] ?>" />
                        <input type="hidden" name="txtMatriculaAluno" value="<?= $dado["aluno_matricula"] ?>" />
                        <input type="hidden" name="txtCertificadoId" value="<?= $dado["certificado_id"] ?>" />
                        <input type="hidden" name="txtDescricaoCertificado" value="<?= $dado["certificado_descricao"] ?>" />
                        <input type="hidden" name="txtDataCertificado" value="<?= $dado["certificado_data"] ?>" />
                        <input type="hidden" name="txtHorasCertificado" value="<?= $dado["certificado_hora"] ?>" />
                        <input type="hidden" name="txtURLCertificado" value="<?= $dado["certificado_url"] ?>" />
                        <input type="hidden" name="txtStatusCertificado" value="<?= $dado["certificado_status"] ?>" />
                        <button name="button" type="submit" value="alterar" class="dropdown-item">Alterar</button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
<?php
}
?>