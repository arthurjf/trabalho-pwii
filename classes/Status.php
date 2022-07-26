<?php
const STATUS = [
    0 => new Status("Não-classificado", "nao-classificado"),
    1 => new Status("Deferido", "deferido"),
    2 => new Status("Indeferido", "indeferido")
];

class Status
{
    function __construct($nome, $tag)
    {
        $this->nome = $nome;
        $this->tag = $tag;
    }

    public $nome;
    public $tag;
}
