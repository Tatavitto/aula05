<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>novo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Adicionar Novo Produto</h1>
        <form action="cria.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="imagem">URL da Imagem</label>
                <input type="text" class="form-control" id="imagem" name="imagem" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Produto</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>