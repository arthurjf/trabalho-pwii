<?php
const STATUS = [
    0 => new Status("Aberto", "nao-classificado"),
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
