<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Cadastro do Cliente</h1>
    </header>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nome">Nome completo:</label>
            <input type="text" name="nome">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf">
            <label for="email">EMAIL:</label>
            <input type="email" name="email">
            <label for="data-nascimento">Data de Nascimento:</label>
            <input type="date" name="data-nascimento">
            <input type="submit" value="Salvar">
        </form>

        <?php
        include("ClienteDAO.php");
        include("Cliente.php");
        include("Database.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = test_input($_POST["nome"]);
            $email = test_input($_POST["email"]);
            $cpf = test_input($_POST["cpf"]);
            $data_nascimento = test_input($_POST["data-nascimento"]);

            $cliente = new Cliente();
            $cliente->set_nome($nome);
            $cliente->set_email($email);
            $cliente->set_cpf($cpf);
            $cliente->set_data_nascimento($data_nascimento);

            $clienteDAO = new ClienteDAO();

            try {
                $clienteDAO->save($cliente);
                echo "<h3 id='success'>Cliente salvo!</h3>";
            } catch (Exception $e) {
                echo "<h3 id='error'>Ocorreu um erro ao tentar salvar o cliente.</h3>";
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    </section>


</body>

</html>