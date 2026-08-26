<?php
$siteBase = rtrim(str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME'] ?? ''))), '/');
$siteBase = $siteBase === '/' ? '' : $siteBase;
?><!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comece seus 7 dias grátis | AiProf</title>
  <meta name="description" content="Crie sua conta no AiProf e comece o teste gratuito de 7 dias sem cartão.">
  <meta name="theme-color" content="#236b52">
  <link rel="icon" href="../assets/icon-192.png">
  <link rel="stylesheet" href="../site.css">
  <script defer src="../site.js"></script>
</head>
<body>
  <main class="auth-page">
    <section class="auth-card" aria-labelledby="signupTitle">
      <img src="../assets/ai-prof-logo-transparent.png" alt="AiProf">
      <p class="eyebrow">TESTE GRATUITO</p>
      <h1 id="signupTitle">Comece seus 7 dias grátis</h1>
      <p>Crie sua conta e experimente o AiProf para organizar registros pedagógicos e gerar pareceres com apoio da IA.</p>
      <form id="signupForm" novalidate>
        <label>Nome
          <input id="name" name="name" type="text" autocomplete="name" required>
        </label>
        <label>E-mail
          <input id="email" name="email" type="email" autocomplete="email" required>
        </label>
        <label>Senha
          <input id="password" name="password" type="password" autocomplete="new-password" minlength="6" required>
        </label>
        <label>Confirmar senha
          <input id="confirmPassword" name="confirmPassword" type="password" autocomplete="new-password" minlength="6" required>
        </label>
        <label class="check-label">
          <input id="terms" type="checkbox" required>
          <span>Li e aceito os termos de uso e responsabilidade.</span>
        </label>
        <p id="signupMessage" class="form-message" role="alert"></p>
        <button class="button primary-button" type="submit">Criar conta e iniciar teste</button>
      </form>
      <p class="auth-alt">Já possui uma conta? <a href="../login/">Entrar no AiProf</a></p>
      <a class="back-home" href="../">← Voltar ao site</a>
    </section>
  </main>
</body>
</html>
