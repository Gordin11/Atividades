<?php
  include("../model/Pessoa.php");
  $listarPessoa = new Pessoa();
  $retornoDados = $listarPessoa->listar();

  echo "Foram encontrados " . count($retornoDados) . " registros.";//verifica quantos registros tem no vetor
  if (count($retornoDados) > 0){
    ?>
    <table border=1>
      <tr>
        <td>Id</td>
        <td>Descricao</td>
        <td>Valor Renda</td>
        <td>Data</td>
      </tr>
      <?php
      foreach ($retornoDados as $key => $value) {
        echo "<tr><td>" . $value["id"];
        echo "</td><td>" . $value["Descricao"];
        echo "</td><td>" . $value["ValorRenda"];
        echo "</td><td>" . $value["Data"];
        echo "</td></tr>";
      }
      ?>
    </table>
    <?php
  }
?>
