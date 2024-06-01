<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Médico</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <nav>
        <div>
            <a href="index.php">Home</a>
        </div>
    </nav>
    <section id="main">
        <div id="title">
            <h1>Dados do Cliente</h1>
        </div>
        <div id="campos">
            <form method="post" action="gravardados.php">
                <table style="border:'0';">
                <tr>
                    <td>Nome</td>
                <td><input type="text" name="txtNome" placeholder="xxxxxxxx-x" required></td>
                </tr>
                <tr>
                    <td>CPF</td>
                <td><input type="text" name="txtCPF" required></td>
                </tr>
                <td>
                    <td>Email</td>
                <td><input type="email" name="txtEmail" placeholder="exemplo@exemplo.com" required></td>
                </tr>
                <tr>
                    <td>Telefone</td>
                <td><input type="tel" name="txtTel" placeholder="(00) 0000-0000" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar"></td>
                    <td><input type="reset" value="Limpar"></td>
                </tr>
</table>
    </form>
        </div>
    </section>
<footer>
    <p>Desenvolvido por Gwen Monteiro da Silva e Gabriel Souza de Lima</p>
</footer>
</body>
</html>