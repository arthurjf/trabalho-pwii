<?php

abstract class Conexao
{
    protected $host, $user, $pass, $dba, $conn, $sql, $qr, $data, $status, $totalFields, $error;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dba = "db_trabalho";
        self::connect();
    }

    public function connect()
    {
        $this->conn = @mysqli_connect($this->host, $this->user, $this->pass)
            or die("<ins><center>Erro ao acessar o banco de dados: </center></ins></br>" . mysqli_error());

        $this->dba = @mysqli_select_db($this->conn, $this->dba)
            or die("<ins><center>Erro na conexão com o banco de dados: </center></ins>" . mysqli_error());

        mysqli_set_charset($this->conn, "utf8");

        return $this->conn;
    }

    public function execSQL($sql)
    {
        $this->qr = @mysqli_query($this->conn, $sql) or die("<ins><center>Erro ao executar query: $sql </center></ins></br>" . mysqli_error());

        return $this->qr;
    }

    public  function listQr($qr)
    {
        $this->data = @mysqli_fetch_assoc($qr);

        return $this->data;
    }
}
