<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tri Systems</title>

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/projects.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/team.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

</head>
<body>
<header id="navbar" class="navbar">
  <div class="navbar-container">
    <div class="navbar-inner">

      <!-- Logo -->
      <button class="logo" id="logoScrollTop">
        <img src="{{ asset('assets/images/logo-tri.png') }}" alt="TriSystems" />
        <span class="logo-text">
          <span class="white">Tri</span>
          <span class="gradient">Systems</span>
        </span>
      </button>

      <!-- Desktop Nav -->
      <nav class="nav-desktop">
        <button data-target="about" aria-label="Ir para a seção Sobre">
          Sobre
        </button>

        <button data-target="services" aria-label="Ir para a seção Serviços">
          Serviços
        </button>

        <button data-target="projects" aria-label="Ir para a seção Projetos">
          Projetos
        </button>

        <button data-target="contact" aria-label="Ir para a seção Contato">
          Contato
        </button>
      </nav>

      <!-- CTA -->
      <div class="cta-desktop">
        <button class="btn-primary" data-target="contact">Iniciar Projeto</button>
      </div>

      <!-- Mobile Toggle -->
      <button class="mobile-toggle" id="mobileToggle">
        ☰
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu -->
<div id="mobileMenu" class="mobile-menu">
  <nav>
    <button data-target="about">Sobre</button>
    <button data-target="services">Serviços</button>
    <button data-target="projects">Projetos</button>
    <button data-target="contact">Contato</button>
    <button class="btn-primary" data-target="contact">Iniciar Projeto</button>
  </nav>
</div>

<section id="hero" class="hero">
  <div class="grid"></div>
  <div class="particles"></div>

  <div class="orb orb-indigo"></div>
  <div class="orb orb-violet"></div>
  <div class="orb orb-cyan"></div>

  <div class="content">
    <span class="badge">
      ✨ Transformando ideias em realidade digital
    </span>

    <h1 class="title">
      <span class="white">Tri</span>
      <span class="gradient">Systems</span>
    </h1>

    <p class="subtitle">
      Desenvolvemos soluções de software inovadoras que impulsionam o crescimento
      do seu negócio. Tecnologia de ponta com design excepcional.
    </p>

    <div class="cta">
      <a href="#contact" class="btn primary">
        Iniciar Projeto →
      </a>

      <a href="#projects" class="btn outline">
        Ver Projetos
      </a>
    </div>
  </div>
</section>

<section id="about" class="about">
  <div class="about-lines">
    <div class="line top"></div>
    <div class="line bottom"></div>
  </div>

  <div class="about-container">
    <div class="about-header reveal">
      <span class="about-eyebrow">Quem Somos</span>

      <h2 class="about-title">
        Construindo o
        <span class="gradient"> Futuro Digital</span>
      </h2>

      <p class="about-description">
        A TriSystems nasceu da paixão por criar soluções tecnológicas que fazem a diferença.
        Combinamos expertise técnica com visão estratégica para transformar desafios em oportunidades.
      </p>
    </div>

    <div class="about-grid">
      <div class="about-card reveal" style="--delay: 0s">
        <div class="card-glow"></div>
        <div class="card">
          <div class="icon">💡</div>
          <h3>Inovação</h3>
          <p>Buscamos constantemente as tecnologias mais avançadas para entregar soluções únicas.</p>
        </div>
      </div>

      <div class="about-card reveal" style="--delay: 0.15s">
        <div class="card-glow"></div>
        <div class="card">
          <div class="icon">🎯</div>
          <h3>Precisão</h3>
          <p>Cada linha de código é escrita com atenção aos detalhes e foco na qualidade.</p>
        </div>
      </div>

      <div class="about-card reveal" style="--delay: 0.3s">
        <div class="card-glow"></div>
        <div class="card">
          <div class="icon">🚀</div>
          <h3>Performance</h3>
          <p>Sistemas rápidos, escaláveis e otimizados para o máximo desempenho.</p>
        </div>
      </div>

      <div class="about-card reveal" style="--delay: 0.45s">
        <div class="card-glow"></div>
        <div class="card">
          <div class="icon">🛡️</div>
          <h3>Segurança</h3>
          <p>Proteção de dados e práticas de desenvolvimento seguro em primeiro lugar.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="services" class="services">
  <div class="services-pattern"></div>

  <div class="services-container">
    <div class="services-header reveal">
      <span class="services-eyebrow">Nossos Serviços</span>

      <h2 class="services-title">
        Soluções
        <span class="gradient"> Completas</span>
      </h2>

      <p class="services-description">
        Do conceito à implementação, oferecemos todo o suporte necessário
        para transformar sua visão em realidade.
      </p>
    </div>

    <div class="services-grid">
      <div class="service-card reveal" style="--delay: 0s">
        <div class="card-bg gradient-blue"></div>
        <div class="card">
          <div class="icon gradient-blue">🌐</div>
          <h3>Desenvolvimento Web</h3>
          <p>Aplicações web modernas, responsivas e de alta performance com as tecnologias mais recentes.</p>
        </div>
      </div>

      <div class="service-card reveal" style="--delay: .1s">
        <div class="card-bg gradient-violet"></div>
        <div class="card">
          <div class="icon gradient-violet">📱</div>
          <h3>Apps Mobile</h3>
          <p>Aplicativos nativos e híbridos para iOS e Android com experiência de usuário excepcional.</p>
        </div>
      </div>

      <div class="service-card reveal" style="--delay: .2s">
        <div class="card-bg gradient-indigo"></div>
        <div class="card">
          <div class="icon gradient-indigo">🗄️</div>
          <h3>Sistemas Backend</h3>
          <p>APIs robustas, microserviços e arquiteturas escaláveis para suportar seu crescimento.</p>
        </div>
      </div>

      <div class="service-card reveal" style="--delay: .3s">
        <div class="card-bg gradient-cyan"></div>
        <div class="card">
          <div class="icon gradient-cyan">☁️</div>
          <h3>Cloud Solutions</h3>
          <p>Infraestrutura em nuvem otimizada para performance, segurança e redução de custos.</p>
        </div>
      </div>

      <div class="service-card reveal" style="--delay: .4s">
        <div class="card-bg gradient-pink"></div>
        <div class="card">
          <div class="icon gradient-pink">🎨</div>
          <h3>UI/UX Design</h3>
          <p>Interfaces elegantes e intuitivas que encantam usuários e elevam sua marca.</p>
        </div>
      </div>

      <div class="service-card reveal" style="--delay: .5s">
        <div class="card-bg gradient-amber"></div>
        <div class="card">
          <div class="icon gradient-amber">📊</div>
          <h3>Consultoria Tech</h3>
          <p>Análise e planejamento estratégico para digitalização e otimização de processos.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="projects" class="projects">
  <div class="projects-line"></div>

  <div class="projects-container">
    <div class="projects-header reveal">
      <span class="projects-eyebrow">Portfólio</span>

      <h2 class="projects-title">
        Nossos
        <span class="gradient"> Projetos</span>
      </h2>

      <p class="projects-description">
        Cada projeto é uma oportunidade de criar algo extraordinário.
        Acompanhe nossa jornada de inovação.
      </p>
    </div>

    <div class="projects-grid">
      <!-- Card 1 -->
      <div class="project-card reveal" style="--delay: 0s">
        <div class="card">
          <div class="card-image gradient-indigo">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&h=500&fit=crop" alt="">
            <span class="badge badge-progress">⏳ Em Andamento</span>
          </div>

          <div class="card-content">
            <h3>Projeto em Desenvolvimento</h3>
            <p>Sistema inovador atualmente em fase de construção. Detalhes completos em breve.</p>

            <div class="tags">
              <span class="tag">Em Andamento</span>
              <span class="tag">Confidencial</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="project-card reveal" style="--delay: .15s">
        <div class="card">
          <div class="card-image gradient-cyan">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&h=500&fit=crop" alt="">
            <span class="badge badge-soon">Em Breve</span>
          </div>

          <div class="card-content">
            <h3>Próximo Projeto</h3>
            <p>Espaço reservado para o próximo grande projeto da TriSystems.</p>

            <div class="tags">
              <span class="tag">Em Breve</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="project-card reveal" style="--delay: .3s">
        <div class="card">
          <div class="card-image gradient-violet">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop" alt="">
            <span class="badge badge-soon">Em Breve</span>
          </div>

          <div class="card-content">
            <h3>Futuro Projeto</h3>
            <p>Mais uma oportunidade de inovação em desenvolvimento.</p>

            <div class="tags">
              <span class="tag">Em Breve</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="projects-cta reveal" style="--delay: .5s">
      <p>Tem um projeto em mente? Vamos conversar sobre como podemos ajudar.</p>
      <button class="btn-primary" data-target="contact">
        Solicitar Orçamento
      </button>
    </div>
  </div>
</section>

<section id="team" class="team">
  <!-- Linha divisória (igual às outras sections) -->
  <div class="team-line"></div>

  <!-- Background glow -->
  <div class="team-glow">
    <div class="glow glow-indigo"></div>
    <div class="glow glow-violet"></div>
  </div>

  <div class="team-container">
    <!-- Header -->
    <div class="team-header reveal">
      <h2>Pessoas reais por trás do código</h2>
      <p>
        Somos três amigos que unem tecnologia, produto e negócio
        para transformar ideias em soluções sólidas.
      </p>
    </div>

    <!-- Cards -->
    <div class="team-grid">
      <div class="team-card reveal" style="--delay:.0s">
        <div class="avatar float">
          <img src="{{ asset('assets/images/luan.png') }}" alt="Luan">
        </div>
        <h3>Luan</h3>
        <p>Desenvolvimento & Arquitetura</p>
        <span class="card-accent"></span>
      </div>

      <div class="team-card reveal" style="--delay:.15s">
        <div class="avatar float slow">
          <img src="{{ asset('assets/images/daniel.png') }}" alt="Daniel">
        </div>
        <h3>Daniel</h3>
        <p>Produto & Estratégia</p>
        <span class="card-accent"></span>
      </div>

      <div class="team-card reveal" style="--delay:.3s">
        <div class="avatar float slower">
          <img src="{{ asset('assets/images/ewerton.png') }}" alt="Ewerton">
        </div>
        <h3>Ewerton</h3>
        <p>Negócios & Relacionamento</p>
        <span class="card-accent"></span>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <!-- Linha divisória padrão (igual às outras sections) -->
  <div class="contact-line"></div>

  <!-- Background glows -->
  <div class="contact-glow">
    <div class="glow glow-indigo"></div>
    <div class="glow glow-violet"></div>
  </div>

  <div class="contact-container">
    <!-- Header -->
    <div class="contact-header reveal">
      <span class="contact-eyebrow">Contato</span>

      <h2 class="contact-title">
        Vamos
        <span class="gradient"> Conversar</span>
      </h2>

      <p class="contact-description">
        Pronto para transformar sua ideia em realidade? Entre em contato e
        descubra como podemos ajudar seu negócio a crescer.
      </p>
    </div>

    <div class="contact-grid">
      <!-- Info -->
      <div class="contact-info reveal" style="--delay:.15s">
        <div class="info-card">
          <div class="icon">✉️</div>
          <div>
            <span>Email</span>
            <strong>contato@trisystems.com</strong>
          </div>
        </div>

        <div class="info-card">
          <div class="icon">📞</div>
          <div>
            <span>Telefone</span>
            <strong>+55 (00) 00000-0000</strong>
          </div>
        </div>

        <div class="info-card">
          <div class="icon">📍</div>
          <div>
            <span>Localização</span>
            <strong>Brasil</strong>
          </div>
        </div>

        <div class="social">
          <p>Siga-nos</p>
          <div class="social-links">
            <button>LinkedIn</button>
            <button>GitHub</button>
            <button>Instagram</button>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="contact-form reveal" style="--delay:.3s">
        <div class="form-card">
          <form id="contactForm">
            <div class="form-grid">
              <div>
                <label>Nome</label>
                <input name="name" required placeholder="Seu nome">
              </div>
              <div>
                <label>Email</label>
                <input name="email" type="email" required placeholder="seu@email.com">
              </div>
            </div>

            <div>
              <label>Assunto</label>
              <input name="subject" required placeholder="Sobre o que gostaria de falar?">
            </div>

            <div>
              <label>Mensagem</label>
              <textarea name="message" rows="5" required placeholder="Conte-nos sobre seu projeto..."></textarea>
            </div>

            <button type="submit" class="btn-primary">
              <span class="btn-text">Enviar Mensagem</span>
              <span class="btn-loading">Enviando...</span>
            </button>
          </form>

          <div id="successMessage" class="success hidden">
            <div class="success-icon">✔</div>
            <h3>Mensagem Enviada!</h3>
            <p>Retornaremos em breve. Obrigado pelo contato!</p>
            <button id="sendAnother" class="btn-outline">
              Enviar outra mensagem
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <!-- Main Footer -->
  <div class="footer-main">
    <div class="footer-container">
      <div class="footer-grid">

        <!-- Company -->
        <div class="footer-company">
          <div class="footer-logo">
            <div class="logo-box">
              <img src="{{ asset('assets/images/logo-tri.png') }}" alt="TriSystems" />
            </div>
            <span class="logo-text">
              <span class="white">Tri</span>
              <span class="gradient">Systems</span>
            </span>
          </div>

          <p class="footer-description">
            Transformando ideias em soluções digitais inovadoras.
            Tecnologia de ponta com excelência em cada projeto.
          </p>

          <div class="footer-social">
            <a href="#" aria-label="LinkedIn">in</a>
            <a href="#" aria-label="GitHub">gh</a>
            <a href="#" aria-label="Instagram">ig</a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3>Links Rápidos</h3>
          <ul>
            <li><button data-target="about">Sobre Nós</button></li>
            <li><button data-target="services">Serviços</button></li>
            <li><button data-target="projects">Projetos</button></li>
            <li><button data-target="contact">Contato</button></li>
          </ul>
        </div>

        <!-- Services -->
        <div>
          <h3>Serviços</h3>
          <ul>
            <li><button data-target="services">Desenvolvimento Web</button></li>
            <li><button data-target="services">Apps Mobile</button></li>
            <li><button data-target="services">Sistemas Backend</button></li>
            <li><button data-target="services">UI/UX Design</button></li>
          </ul>
        </div>

        <!-- Contact -->
        <div>
          <h3>Contato</h3>
          <ul class="footer-contact">
            <li>📧 <a href="mailto:contato@trisystems.com">contato@trisystems.com</a></li>
            <li>📞 <a href="tel:+5500000000000">+55 (00) 00000-0000</a></li>
            <li>📍 <span>Brasil</span></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- Bottom -->
  <div class="footer-bottom">
    <div class="footer-container bottom-bar">
      <p id="copyright"></p>

      <div class="bottom-links">
        <button>Política de Privacidade</button>
        <button>Termos de Uso</button>
      </div>
    </div>
  </div>

  <!-- Scroll to Top -->
  <button id="scrollTop" class="scroll-top" aria-label="Voltar ao topo">
    ↑
  </button>
</footer>

<script src="{{ asset('assets/js/navbar.js') }}" defer></script>
<script src="{{ asset('assets/js/hero.js') }}" defer></script>
<script src="{{ asset('assets/js/about.js') }}" defer></script>
<script src="{{ asset('assets/js/services.js') }}" defer></script>
<script src="{{ asset('assets/js/projects.js') }}" defer></script>
<script src="{{ asset('assets/js/team.js') }}" defer></script>
<script src="{{ asset('assets/js/contact.js') }}" defer></script>
<script src="{{ asset('assets/js/footer.js') }}" defer></script>

</body>
</html>
