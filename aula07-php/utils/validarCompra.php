<?php
    include "head.php";
    include "header.php";
    require "utils/funcoesValidacao.php";

    // variáveis
    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $nroCartao = $_REQUEST["nroCartao"];
    $validade = $_REQUEST["validade"];
    $cvv = $_REQUEST["cvv"];
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"];
    $erros = [];

    validarCompra($nome, $cpf, $nroCartao, $validade, $cvv);
?>
<?php
  // funções
  function validarNome($nome) {
      return strlen($nome) > 0 && strlen($nome) <= 15;
  }

  function validarCpf($cpf) {
      return strlen($cpf) == 11;
  }

  function validarNroCartao($nroCartao) {
      $primeiroNum = substr($nroCartao, 0, 1);
      return  $primeiroNum == 4 || $primeiroNum == 5 || $primeiroNum == 6;
  }

  // Validar se a data inserida é maior que a data atual
  function validarData($data) {
      $dataAtual = date("Y-m");
      return $data >= $dataAtual;
  }

  function validarCvv($cvv) {
      return strlen($cvv) == 3;
  }

  function validarCompra($nome, $cpf, $nroCartao, $data, $cvv) {
      global $erros;

      if (!validarNome($nome)) {
          array_push($erros, "Preencha seu nome");
      }

      if (!validarCpf($cpf)) {
          array_push($erros, "Seu CPF precisa ter 11 caracteres");
      }

      if (!validarNroCartao($nroCartao)) {
          array_push($erros, "Seu cartão precisa começar com 4, 5 ou 6");
      }

      if (!validarData($data)) {
          array_push($erros, "A validade precisa ser maior que a data atual");
      }

      if (!validarCvv($cvv)) {
          array_push($erros, "Seu CVV precisar ter 3 caracteres");
      }
  }
 ?>

    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?php if (count($erros) > 0) : ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span>Preencha seus dados corretamente!</span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($erros as $chave => $valorErro) : ?>
                                <li class="list-group-item">
                                    <?= $valorErro; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="center">
                            <a href="../index.php">Voltar para home</a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span>Compra realizada com sucesso!</span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nome Curso: </strong> <?= $nomeCurso; ?> </li>
                            <li class="list-group-item"><strong>Preço: R$ </strong> <?= $precoCurso; ?> </li>
                            <li class="list-group-item"><strong>Nome Completo: </strong> <?php echo $nome; ?></li>
                        </ul>
                        <div class="center">
                            <a href="../index.php">Voltar para home</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php
  include "footer.php";
 ?>
