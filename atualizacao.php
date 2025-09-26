<?php
  $nome = $_POST['nome'] ?? '';
  $email = $_POST['email'] ?? '';
  $senha = $_POST['senha'] ?? '';
  $idade = $_POST['idade'] ?? '';

  
  echo "<h1>Dados atualizados com sucesso!</h1>";
  echo "<p><strong>Nome:</strong> $nome</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Nova Senha:</strong> $senha</p>";
  echo "<p><strong>Idade:</strong> $idade</p>";

  echo "<br><a href='index.html'>Voltar</a>";
} else {
  echo "<p>Erro: nenhum dado foi enviado.</p>";
}
?>