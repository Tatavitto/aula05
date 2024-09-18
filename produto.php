<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <?php
class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;

    // Construtor para inicializar os atributos
    public function __construct($nome, $descricao, $valor, $imagem) {
	$this->nome = $nome;
	$this->descricao = $descricao;
	$valor = (float) $valor; // "5.3" -> 5.3
	$this->valor = $valor;
	$this->imagem = $imagem;
    }

    // Método para exibir as informações do produto
    public function exibirInformacoes() {
        echo '<div class="card" style="width: 18rem;">';
        echo '  <img src="' . $this->imagem . '" class="card-img-top" alt="' . $this->nome . '" style="height: 200px; object-fit: cover;">';
        echo '  <div class="card-body">';
        echo '    <h5 class="card-title">' . $this->nome . '</h5>';
        echo '    <p class="card-text">' . $this->descricao . '</p>';
        echo '    <p class="card-text">Valor: R$' . number_format($this->valor, 2, ',', '.') . '</p>';
        echo '    <a href="#" class="btn btn-primary">Comprar</a>';
        echo '  </div>';
        echo '</div>';
    }
} 
?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>