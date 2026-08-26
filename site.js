const toggle = document.querySelector('.menu-toggle');
const mobileNav = document.querySelector('.mobile-nav');
const navBackdrop = document.querySelector('.nav-backdrop');

if (toggle && mobileNav) {
  const setNavOpen = open => {
    toggle.setAttribute('aria-expanded', String(open));
    toggle.classList.toggle('is-active', open);
    mobileNav.classList.toggle('is-open', open);
    mobileNav.setAttribute('aria-hidden', String(!open));
    if (navBackdrop) navBackdrop.classList.toggle('is-open', open);
    document.body.classList.toggle('nav-open', open);
  };

  toggle.addEventListener('click', () => {
    setNavOpen(toggle.getAttribute('aria-expanded') !== 'true');
  });

  mobileNav.addEventListener('click', event => {
    if (!event.target.closest('a')) return;
    setNavOpen(false);
  });

  if (navBackdrop) navBackdrop.addEventListener('click', () => setNavOpen(false));

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') setNavOpen(false);
  });
}

async function readJson(response) {
  const text = await response.text();
  if (!text.trim()) throw new Error('O servidor não retornou resposta.');
  try {
    return JSON.parse(text);
  } catch (error) {
    throw new Error('O servidor retornou uma resposta inválida.');
  }
}

function bindAuthForms() {
  const loginForm = document.querySelector('#loginForm');
  const signupForm = document.querySelector('#signupForm');
  const apiUrl = '/Pareceres/api.php?resource=auth';
  const appUrl = '/Pareceres/index.php';

  if (signupForm) {
    signupForm.addEventListener('submit', async event => {
      event.preventDefault();
      const message = document.querySelector('#signupMessage');
      const button = signupForm.querySelector('button[type="submit"]');
      message.textContent = '';
      button.disabled = true;
      button.textContent = 'Criando conta...';
      try {
        const response = await fetch(apiUrl, {
          method: 'POST',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify({
            action: 'register_trial',
            name: document.querySelector('#name').value,
            email: document.querySelector('#email').value,
            phone: '',
            password: document.querySelector('#password').value,
            confirmPassword: document.querySelector('#confirmPassword').value,
            termsAccepted: document.querySelector('#terms').checked
          })
        });
        const data = await readJson(response);
        if (!response.ok) throw new Error(data.error || 'Não foi possível criar sua conta.');
        message.style.color = '#236b52';
        message.textContent = data.message || 'Conta criada com sucesso.';
        window.location.href = appUrl;
      } catch (error) {
        message.style.color = '#b33636';
        message.textContent = error.message || 'Não foi possível criar sua conta.';
      } finally {
        button.disabled = false;
        button.textContent = 'Criar conta e iniciar teste';
      }
    });
  }

  if (loginForm) {
    loginForm.addEventListener('submit', async event => {
      event.preventDefault();
      const message = document.querySelector('#loginMessage');
      const button = loginForm.querySelector('button[type="submit"]');
      message.textContent = '';
      button.disabled = true;
      button.textContent = 'Entrando...';
      try {
        const response = await fetch(apiUrl, {
          method: 'POST',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify({
            action: 'login',
            email: document.querySelector('#email').value,
            password: document.querySelector('#password').value
          })
        });
        const data = await readJson(response);
        if (!response.ok) throw new Error(data.error || 'Não foi possível entrar.');
        window.location.href = appUrl;
      } catch (error) {
        message.textContent = error.message || 'Não foi possível entrar.';
      } finally {
        button.disabled = false;
        button.textContent = 'Entrar';
      }
    });
  }
}

bindAuthForms();

function initScrollReveal() {
  const targets = document.querySelectorAll(
    '.problem-grid article, .steps article, .feature-grid article, .plans article, .benefit-list li, .school-panel span, .faq-list details, .soft-panel, .ai-flow span, .ai-flow strong, .ai-flow b'
  );
  if (!targets.length) return;
  if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    targets.forEach(el => el.classList.add('reveal', 'is-visible'));
    return;
  }
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
  targets.forEach((el, index) => {
    el.classList.add('reveal');
    el.style.transitionDelay = `${(index % 4) * 60}ms`;
    observer.observe(el);
  });
}

initScrollReveal();
