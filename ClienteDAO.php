<?php

class ClienteDAO
{
    private $pdo;

    function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function save(Cliente $cliente)
    {
        $sql = "INSERT INTO cliente (nome, cpf, email, data_nascimento) VALUES (:nome, :cpf, :email, :data_nascimento)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nome' => $cliente->get_nome(),
            'cpf' => $cliente->get_cpf(),
            'email' => $cliente->get_email(),
            'data_nascimento' => $cliente->get_data_nascimento()
        ]);
    }
}
