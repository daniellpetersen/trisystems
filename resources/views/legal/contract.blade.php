<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Contrato de Licenciamento de Uso de Software | TriSystems</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

  <style>
    body {
      background: #0a0a0f;
      color: #e5e7eb;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    .legal {
      padding: 6rem 0;
    }

    .legal-container {
      max-width: 860px;
      margin: auto;
      padding: 0 24px;
    }

    .legal h1 {
      font-size: 2.4rem;
      margin-bottom: 2rem;
    }

    .legal h2 {
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      font-size: 1.25rem;
      color: #a5b4fc;
    }

    .legal p {
      line-height: 1.75;
      color: #cbd5f5;
      margin-bottom: 1rem;
      font-size: .95rem;
    }

    .legal strong {
      color: #ffffff;
    }

    .legal-footer {
      margin-top: 4rem;
      padding-top: 2rem;
      border-top: 1px solid rgba(255,255,255,.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .back-link {
      color: #818cf8;
      text-decoration: none;
      font-size: .9rem;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    .print {
      background: none;
      border: 1px solid rgba(255,255,255,.25);
      color: #e5e7eb;
      padding: 8px 16px;
      border-radius: 10px;
      cursor: pointer;
      font-size: .85rem;
    }

    .print:hover {
      background: rgba(255,255,255,.08);
    }

    @media print {
      body {
        background: white;
        color: black;
      }

      .print,
      .back-link {
        display: none;
      }
    }
  </style>
</head>
<body>

  <main class="legal">
    <div class="legal-container">

      <h1>Contrato de Licenciamento de Uso de Software – TriSystems</h1>

      <p>
        Este Contrato de Licença de Uso de Software (“Contrato”) rege a relação entre a
        <strong>TRISYSTEMS</strong>, doravante denominada <strong>LICENCIANTE</strong>, e a
        pessoa física ou jurídica qualificada no ato da contratação, doravante denominada
        <strong>LICENCIADA</strong>. Ao utilizar o software <strong>TTControl</strong>,
        a LICENCIADA adere integralmente aos termos aqui expostos.
      </p>

      <h2>1. Objeto e Natureza da Licença</h2>
      <p>
        1.1. O objeto deste contrato é a concessão de uso do software de gestão TTControl,
        em qualquer de suas versões, módulos ou modalidades de entrega
        (SaaS, On-Premise ou Híbrido).
      </p>
      <p>
        1.2. A licença é concedida em caráter não exclusivo, intransferível e oneroso,
        sendo o software de propriedade intelectual única da LICENCIANTE.
      </p>
      <p>
        1.3. A utilização do SOFTWARE, ainda que em período de teste (trial) ou parcial,
        implica na aceitação plena deste instrumento.
      </p>

      <h2>2. Modalidades, Valores e Reajustes</h2>
      <p>
        2.1. O SOFTWARE será disponibilizado conforme Proposta Comercial ou Pedido de Compra.
      </p>
      <p>
        2.2. O valor da licença será reajustado anualmente pelo IGP-M/FGV ou,
        na ausência, pelo IPCA/IBGE.
      </p>
      <p>
        2.3. A inadimplência superior a 10 (dez) dias autoriza a suspensão do acesso,
        acrescida de juros de 1% ao mês e multa moratória de 2%.
      </p>

      <h2>3. Propriedade Intelectual e Restrições</h2>
      <p>
        3.1. O SOFTWARE é protegido pelas Leis nº 9.609/98 e nº 9.610/98.
      </p>
      <p>
        3.2. É vedado à LICENCIADA realizar engenharia reversa, remover marcas,
        sublicenciar ou compartilhar o acesso sem autorização prévia.
      </p>
      <p>
        3.3. A violação sujeita a LICENCIADA à multa de R$ 30.000,00 ou
        10x o valor anual do contrato, prevalecendo o maior.
      </p>

      <h2>4. Suporte, Manutenção e Treinamento</h2>
      <p>
        O suporte técnico é prestado remotamente em dias úteis,
        em horário comercial (Brasília).
      </p>
      <p>
        Treinamentos adicionais serão cobrados no valor de
        R$ 100,00 por sessão de até 1h30min.
      </p>

      <h2>5. Privacidade e Proteção de Dados (LGPD)</h2>
      <p>
        A LICENCIADA é a Controladora dos dados inseridos.
        A LICENCIANTE atua como Operadora.
      </p>
      <p>
        Backups diários com retenção de 3 dias são mantidos na modalidade SaaS.
      </p>

      <h2>6. Limitação de Responsabilidade</h2>
      <p>
        A responsabilidade total da LICENCIANTE limita-se ao valor pago
        nos últimos 6 (seis) meses de contrato.
      </p>

      <h2>7. Rescisão e Transição</h2>
      <p>
        O contrato poderá ser rescindido mediante aviso prévio de 30 (trinta) dias.
      </p>
      <p>
        Os dados estarão disponíveis para extração por 30 dias úteis após a rescisão.
      </p>

      <h2>8. Foro</h2>
      <p>
        Fica eleito o Foro da Comarca de Porto Velho/RO,
        com renúncia a qualquer outro, por mais privilegiado que seja.
      </p>

      <div class="legal-footer">
        <a href="{{ url('/') }}" class="back-link">← Voltar ao site</a>
        <button onclick="window.print()" class="print">Imprimir contrato</button>
      </div>

    </div>
  </main>

</body>
</html>
