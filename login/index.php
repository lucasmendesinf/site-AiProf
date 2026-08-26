<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrar no AiProf | Login de clientes</title>
  <meta name="description" content="Acesse sua conta AiProf, incluindo clientes com assinatura ativa, usuários em teste, professores, escolas e administradores.">
  <meta name="theme-color" content="#236b52">
  <link rel="icon" href="../assets/icon-192.png">
  <link rel="stylesheet" href="../site.css">
  <script defer src="../site.js"></script>
</head>
<body>
  <main class="auth-page">
    <section class="auth-card" aria-labelledby="loginTitle">
      <img src="../assets/ai-prof-logo-transparent.png" alt="AiProf">
      <p class="eyebrow">ACESSO DE CLIENTES</p>
      <h1 id="loginTitle">Entrar no AiProf</h1>
      <p>Já possui uma conta? Acesse seu ambiente AiProf.</p>
      <form id="loginForm" novalidate>
        <label>E-mail
          <input id="email" name="email" type="email" autocomplete="email" required>
        </label>
        <label>Senha
          <input id="password" name="password" type="password" autocomplete="current-password" required>
        </label>
        <p id="loginMessage" class="form-message" role="alert"></p>
        <button class="button primary-button" type="submit">Entrar</button>
      </form>
      <p class="auth-alt"><a href="/Pareceres/login.php">Esqueci minha senha</a></p>
      <p class="auth-alt">Ainda não possui uma conta? <a href="../cadastro/">Experimente grátis por 7 dias.</a></p>
      <a class="back-home" href="../">← Voltar ao site</a>
    </section>
  </main>
</body>
</html>
