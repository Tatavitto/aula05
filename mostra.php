<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Produtos Adicionados</h1>

        <?php
        session_start();
        include('produto.php');
        if (isset($_SESSION['produtos']) && !empty($_SESSION['produtos'])) {
            foreach ($_SESSION['produtos'] as $produto_serializado) {
                $produto = unserialize($produto_serializado);
                $produto->exibirInformacoes();
                echo '<hr>';
            }
        } else {
            echo "<p>Nenhum produto foi adicionado ainda.</p>";
        }
        ?>

        <a href="novo.php" class="btn btn-secondary mt-3">Adicionar Novo Produto</a>
    </div>
</body>
</html>
