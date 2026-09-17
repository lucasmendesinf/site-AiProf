<?php
$year = date('Y');
$siteBase = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
$siteBase = $siteBase === '/' ? '' : $siteBase;
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$encodedBase = trim($siteBase, '/') === '' ? '' : '/' . implode('/', array_map('rawurlencode', explode('/', trim($siteBase, '/'))));
$absoluteBase = $scheme . '://' . $host . $encodedBase;
// Sistema real (banco de dados/sessão). Local: /Pareceres. Em produção: /app.
$appBase = (strpos($host, 'localhost') !== false) ? '/Pareceres' : '/app';
$loginUrl = $appBase . '/login.php';
$signupUrl = $appBase . '/login.php?signup=1';
?><!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AiProf | Parecer pedagógico com IA para professores e escolas</title>
  <meta name="description" content="Organize registros pedagógicos e use Inteligência Artificial para criar pareceres descritivos completos, personalizados e profissionais. Teste grátis por 7 dias.">
  <meta name="keywords" content="parecer pedagógico, parecer descritivo, parecer com IA, IA para professores, inteligência artificial na educação, relatório pedagógico, sistema para professores, sistema para escolas">
  <meta property="og:title" content="AiProf | Parecer pedagógico com IA">
  <meta property="og:description" content="Mais tempo para ensinar. Menos tempo escrevendo pareceres. Experimente o AiProf grátis por 7 dias.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($absoluteBase . '/', ENT_QUOTES) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($absoluteBase . '/assets/ai-prof-logo.png', ENT_QUOTES) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($absoluteBase . '/', ENT_QUOTES) ?>">
  <meta name="theme-color" content="#236b52">
  <link rel="icon" href="assets/icon-192.png">
  <link rel="stylesheet" href="site.css">
  <script defer src="site.js"></script>
</head>
<body>
  <header class="site-header">
    <a class="brand-link" href="#inicio" aria-label="AiProf - início">
      <img src="assets/ai-prof-logo-transparent.png" alt="AiProf">
    </a>
    <nav class="desktop-nav" aria-label="Navegação principal">
      <a href="#inicio">Início</a>
      <a href="#como-funciona">Como funciona</a>
      <a href="#recursos">Recursos</a>
      <a href="#professores">Para professores</a>
      <a href="#escolas">Para escolas</a>
      <a href="#planos">Planos</a>
      <a href="#duvidas">Dúvidas</a>
    </nav>
    <div class="header-actions">
      <a class="button secondary-button" href="<?= htmlspecialchars($loginUrl, ENT_QUOTES) ?>">Entrar</a>
      <a class="button primary-button" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Teste grátis por 7 dias</a>
      <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-expanded="false">
        <span class="menu-toggle-bar"></span>
        <span class="menu-toggle-bar"></span>
        <span class="menu-toggle-bar"></span>
      </button>
    </div>
  </header>

  <div class="nav-backdrop"></div>
  <nav class="mobile-nav" aria-label="Navegação mobile" aria-hidden="true">
    <a href="#como-funciona">Como funciona</a>
    <a href="#recursos">Recursos</a>
    <a href="#professores">Para professores</a>
    <a href="#escolas">Para escolas</a>
    <a href="#planos">Planos</a>
    <a href="#duvidas">Dúvidas</a>
    <div class="mobile-nav-actions">
      <a class="button secondary-button" href="<?= htmlspecialchars($loginUrl, ENT_QUOTES) ?>">Entrar</a>
      <a class="button primary-button" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Teste grátis por 7 dias</a>
    </div>
  </nav>

  <main id="inicio">
    <section class="hero">
      <div class="hero-copy">
        <p class="eyebrow">MAIS TEMPO PARA ENSINAR</p>
        <h1>Transforme registros pedagógicos em pareceres com Inteligência Artificial</h1>
        <p class="lead">Organize atividades, observações e o desenvolvimento dos seus alunos em um só lugar. O AiProf utiliza essas informações para ajudar você a criar pareceres pedagógicos completos em poucos minutos.</p>
        <div class="cta-row">
          <a class="button primary-button large" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Começar teste grátis</a>
          <a class="button secondary-button large" href="#como-funciona">Conhecer o AiProf</a>
        </div>
        <p class="trust-line">7 dias grátis • Sem necessidade de cartão para começar</p>
      </div>
      <div class="product-preview" aria-label="Representação da interface AiProf">
        <div class="preview-sidebar">
          <img src="assets/ai-prof-logo-transparent.png" alt="">
          <span class="preview-pill active">Início</span>
          <span class="preview-pill">Alunos</span>
          <span class="preview-pill">Atividades</span>
          <span class="preview-pill">Pareceres</span>
        </div>
        <div class="preview-main">
          <div class="preview-top">
            <span>Visão geral</span>
            <b>1º semestre de 2026</b>
          </div>
          <div class="preview-welcome">
            <p class="eyebrow">REGISTROS DA TURMA</p>
            <h2>Bom dia, professora!</h2>
            <p>Vamos acompanhar as descobertas da sua turma hoje?</p>
          </div>
          <div class="preview-stats">
            <article><b>24</b><span>Alunos</span></article>
            <article><b>38</b><span>Atividades</span></article>
            <article><b>12</b><span>Pareceres</span></article>
          </div>
          <div class="preview-panel">
            <h3>Parecer com IA</h3>
            <p>Atividades + Observações + Desenvolvimento + Histórico</p>
            <button type="button">Gerar parecer com IA</button>
          </div>
        </div>
      </div>
    </section>

    <section class="problem section-band">
      <div class="section-heading">
        <p class="eyebrow">O PROBLEMA</p>
        <h2>Fazer pareceres não precisa consumir suas noites.</h2>
        <p>Muitas anotações espalhadas, textos repetitivos e a necessidade de lembrar acontecimentos de meses anteriores deixam o fechamento do período mais pesado do que deveria.</p>
      </div>
      <div class="problem-grid">
        <article>Muitas anotações espalhadas</article>
        <article>Dificuldade para organizar informações dos alunos</article>
        <article>Horas escrevendo pareceres</article>
        <article>Memórias importantes perdidas no tempo</article>
        <article>Textos repetitivos</article>
        <article>Sobrecarga no final de cada período</article>
      </div>
      <div class="soft-panel">
        <h3>O AiProf organiza esse processo durante todo o período letivo.</h3>
        <p>O professor registra gradualmente atividades, experiências, observações e desenvolvimento. Quando chega o momento de criar o parecer, essas informações já estão reunidas para auxiliar a Inteligência Artificial.</p>
      </div>
    </section>

    <section id="como-funciona" class="section">
      <div class="section-heading">
        <p class="eyebrow">COMO FUNCIONA</p>
        <h2>Do registro ao parecer finalizado.</h2>
      </div>
      <div class="steps">
        <article><span>1</span><h3>Cadastre sua turma</h3><p>Organize seus alunos e turmas.</p></article>
        <article><span>2</span><h3>Registre as experiências</h3><p>Cadastre atividades, observações, informações importantes e fotos.</p></article>
        <article><span>3</span><h3>Acompanhe o desenvolvimento</h3><p>Mantenha um histórico individual de cada aluno.</p></article>
        <article><span>4</span><h3>Gere o parecer com IA</h3><p>O AiProf usa os registros do aluno como contexto.</p></article>
        <article><span>5</span><h3>Revise</h3><p>Edite e revise tudo antes da conclusão.</p></article>
        <article><span>6</span><h3>Finalize</h3><p>Gere o documento organizado e pronto para utilização.</p></article>
      </div>
    </section>

    <section class="ai-section">
      <div>
        <p class="eyebrow">INTELIGÊNCIA ARTIFICIAL</p>
        <h2>Inteligência Artificial baseada nos seus próprios registros</h2>
        <p>O AiProf não é apenas um gerador de texto genérico. O diferencial é usar o histórico registrado pelo professor para ajudar a produzir um parecer mais contextualizado, sensível e coerente com a trajetória do aluno.</p>
        <h3>Você registra a história. O AiProf ajuda a transformá-la em um parecer.</h3>
      </div>
      <div class="ai-flow" aria-label="Fluxo da IA no AiProf">
        <span>Atividades</span>
        <span>Observações</span>
        <span>Desenvolvimento</span>
        <span>Histórico</span>
        <strong>IA</strong>
        <b>Parecer</b>
      </div>
    </section>

    <section id="recursos" class="section">
      <div class="section-heading">
        <p class="eyebrow">RECURSOS</p>
        <h2>Ferramentas para acompanhar, organizar e finalizar.</h2>
      </div>
      <div class="feature-grid">
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M18.4 5.6l-2.8 2.8M8.4 15.6l-2.8 2.8"/></svg></span><h3>Pareceres com IA</h3><p>Auxílio na elaboração de pareceres utilizando o histórico registrado.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 6.5h1.6M5 12h1.6M5 17.5h1.6M9.6 6.5h9.4M9.6 12h9.4M9.6 17.5h9.4"/></svg></span><h3>Atividades pedagógicas</h3><p>Registre atividades e experiências desenvolvidas com os alunos.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg></span><h3>Observações individuais</h3><p>Mantenha informações relevantes organizadas por aluno.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M21 16l-5.5-5.5L9 17"/></svg></span><h3>Fotos</h3><p>Associe imagens às atividades e edite fotos, borrando rostos de crianças que não fazem parte do parecer.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"/><path d="M15 7h6v6"/></svg></span><h3>Desenvolvimento</h3><p>Registre e acompanhe diferentes aspectos do desenvolvimento.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.2"/><path d="M2.5 19c0-3.3 2.9-5.5 6.5-5.5s6.5 2.2 6.5 5.5"/><circle cx="17" cy="8.5" r="2.5"/><path d="M15 13.7c2.7.4 4.5 2.2 4.5 5.3"/></svg></span><h3>Turmas e alunos</h3><p>Centralize a organização pedagógica.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg></span><h3>Histórico</h3><p>Mantenha as informações organizadas durante todo o período.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h8l4 4v14H6z"/><path d="M14 3v4h4"/><path d="M9 12h6M9 16h6"/></svg></span><h3>PDF</h3><p>Finalize os pareceres em documentos organizados.</p></article>
        <article><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 18a4 4 0 0 1-.5-7.97A5 5 0 0 1 16 8a4.5 4.5 0 0 1 1 8.9"/><path d="M12 12v7M9.5 16.5 12 14l2.5 2.5"/></svg></span><h3>Integração com Google Drive</h3><p>Conecte sua conta e envie os pareceres gerados diretamente para o Google Drive.</p></article>
      </div>
    </section>

    <section id="professores" class="split-section section-band">
      <div>
        <p class="eyebrow">PARA PROFESSORES</p>
        <h2>Feito para quem está todos os dias em sala de aula.</h2>
        <p>Menos tempo escrevendo, mais organização, histórico individual, informações centralizadas, IA como ferramenta de apoio e redução de tarefas repetitivas.</p>
        <a class="button primary-button" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Experimentar grátis por 7 dias</a>
      </div>
      <ul class="benefit-list">
        <li>Menos tempo escrevendo</li>
        <li>Mais organização</li>
        <li>Histórico individual</li>
        <li>Informações centralizadas</li>
        <li>Mais tempo para atividades pedagógicas</li>
      </ul>
    </section>

    <section id="escolas" class="split-section">
      <div>
        <p class="eyebrow">PARA ESCOLAS</p>
        <h2>Organização pedagógica também para sua escola</h2>
        <p>Estrutura preparada para gerenciar professores, turmas, alunos, registros, pareceres e padronização dos documentos.</p>
        <a class="button secondary-button" href="mailto:contato@aiprof.com.br?subject=AiProf%20para%20escolas">Conhecer o AiProf para escolas</a>
      </div>
      <div class="school-panel">
        <span>Professores</span><span>Turmas</span><span>Alunos</span><span>Registros</span><span>Pareceres</span><span>Documentos</span>
      </div>
    </section>

    <section class="trial-cta">
      <p class="eyebrow">TESTE GRATUITO</p>
      <h2>Conheça o AiProf gratuitamente por 7 dias</h2>
      <p>Crie sua conta e experimente o AiProf por 7 dias para conhecer a plataforma e seus principais recursos.</p>
      <div class="trial-items"><span>7 dias grátis</span><span>Cadastro rápido</span><span>Sem cartão para começar</span></div>
      <a class="button primary-button large" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Começar meus 7 dias grátis</a>
    </section>

    <section id="planos" class="section">
      <div class="section-heading">
        <p class="eyebrow">PLANOS</p>
        <h2>Pronto para a comercialização, sem preços inventados.</h2>
      </div>
      <div class="plans">
        <article class="plan-card">
          <p class="eyebrow">SEMESTRAL</p>
          <h3>Plano Semestral</h3>
          <div class="plan-price"><span class="plan-price-value">R$ 69,90</span><span class="plan-price-period">/semestral</span></div>
          <p class="plan-note">Cobrança a cada 6 meses.</p>
          <ul class="plan-features">
            <li>Cadastro de turmas e alunos</li>
            <li>Registro de atividades pedagógicas</li>
            <li>Observações individuais por aluno</li>
            <li>Histórico organizado por período</li>
            <li>Fotos associadas às atividades</li>
            <li>Geração de parecer em PDF</li>
            <li>Integração com Google Drive</li>
          </ul>
          <a class="button secondary-button" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Começar teste grátis</a>
        </article>
        <article class="plan-card plan-highlight">
          <p class="plan-badge">Mais recursos</p>
          <p class="eyebrow">ANUAL</p>
          <h3>Plano Anual</h3>
          <div class="plan-price"><span class="plan-price-value">R$ 129,90</span><span class="plan-price-period">/anual</span></div>
          <p class="plan-note">Cobrança anual.</p>
          <ul class="plan-features">
            <li>Tudo do plano semestral</li>
            <li class="plan-feature-extra">Edição de imagem e borrão de rosto nas fotos</li>
            <li class="plan-feature-extra">IA para ajudar na escrita do parecer</li>
          </ul>
          <a class="button primary-button" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Começar teste grátis</a>
        </article>
      </div>
      <div class="plans-schools-note">
        <span>Escola com múltiplos professores e turmas?</span>
        <a class="button secondary-button" href="mailto:contato@aiprof.com.br?subject=AiProf%20para%20escolas">Falar sobre AiProf para escolas</a>
      </div>
    </section>

    <section id="duvidas" class="section">
      <div class="section-heading">
        <p class="eyebrow">FAQ</p>
        <h2>Dúvidas frequentes</h2>
      </div>
      <div class="faq-list">
        <details><summary>O AiProf cria o parecer sozinho?</summary><p>O AiProf utiliza Inteligência Artificial como auxílio, usando as informações registradas pelo professor. O conteúdo pode ser revisado e editado.</p></details>
        <details><summary>Preciso cadastrar todas as informações de uma vez?</summary><p>Não. A proposta é registrar as informações ao longo do período.</p></details>
        <details><summary>Posso editar o parecer?</summary><p>Sim. O professor revisa e ajusta tudo antes da finalização.</p></details>
        <details><summary>Posso adicionar fotos?</summary><p>Sim, quando disponível nas atividades e registros do sistema.</p></details>
        <details><summary>O teste é gratuito?</summary><p>Sim. O AiProf possui teste gratuito de 7 dias para novos usuários.</p></details>
        <details><summary>Preciso cadastrar cartão?</summary><p>Não para iniciar o teste.</p></details>
        <details><summary>Já sou cliente. Como acesso?</summary><p>Utilize o botão Entrar localizado no topo do site.</p></details>
        <details><summary>O que acontece depois dos 7 dias?</summary><p>Os dados permanecem na conta, mas recursos relacionados à assinatura poderão ficar limitados até a contratação de um plano.</p></details>
      </div>
    </section>

    <section class="final-cta">
      <h2>Menos tempo escrevendo. Mais tempo acompanhando seus alunos.</h2>
      <p>Conheça uma maneira mais organizada de acompanhar seus alunos e produzir pareceres utilizando Inteligência Artificial.</p>
      <a class="button primary-button large" href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Experimentar AiProf grátis por 7 dias</a>
      <a class="client-link" href="<?= htmlspecialchars($loginUrl, ENT_QUOTES) ?>">Já sou cliente → Entrar</a>
    </section>
  </main>

  <footer class="site-footer">
    <div>
      <img src="assets/ai-prof-logo-transparent.png" alt="AiProf">
      <p>© <?= htmlspecialchars($year, ENT_QUOTES) ?> AiProf — Todos os direitos reservados.</p>
    </div>
    <nav aria-label="Links do rodapé">
      <a href="#inicio">Início</a>
      <a href="#recursos">Recursos</a>
      <a href="#como-funciona">Como funciona</a>
      <a href="#professores">Professores</a>
      <a href="#escolas">Escolas</a>
      <a href="#planos">Planos</a>
      <a href="<?= htmlspecialchars($loginUrl, ENT_QUOTES) ?>">Login</a>
      <a href="<?= htmlspecialchars($signupUrl, ENT_QUOTES) ?>">Criar conta</a>
      <a href="<?= htmlspecialchars($siteBase, ENT_QUOTES) ?>/termos/">Termos de Uso</a>
      <a href="<?= htmlspecialchars($siteBase, ENT_QUOTES) ?>/privacidade/">Política de Privacidade</a>
      <a href="mailto:contato@aiprof.com.br">Contato</a>
    </nav>
  </footer>
</body>
</html>
