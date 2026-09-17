<?php
require_once __DIR__ . '/partials.php';
render_header();
?>

<style>
/* Ajustes exclusivos da página inicial */
.future-brand-card{
    display:grid;
    place-items:center;
    padding:30px;
    min-height:390px;
}

.future-logo-display{
    width:100%;
    min-height:330px;
    display:grid;
    place-items:center;
    padding:35px;
    border-radius:26px;
    background:rgba(255,255,255,.045);
    border:1px solid rgba(255,255,255,.10);
}

.future-logo-display img{
    width:min(100%,430px);
    max-height:270px;
    object-fit:contain;
    filter:drop-shadow(0 18px 30px rgba(0,0,0,.18));
}

.future-hero-copy .future-lead{
    max-width:720px;
}

.home-contact-strip{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:14px;
}

.home-contact-strip > div{
    padding:18px;
    border-radius:20px;
    background:rgba(255,255,255,.07);
    border:1px solid rgba(255,255,255,.10);
}

.home-contact-strip span{
    display:block;
    margin-bottom:5px;
    font-size:.72rem;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:.1em;
    color:#9fb6d2;
}

.home-contact-strip strong,
.home-contact-strip a{
    color:#fff;
    font-weight:800;
    text-decoration:none;
}

@media(max-width:760px){
    .future-brand-card{
        min-height:auto;
        padding:20px;
    }

    .future-logo-display{
        min-height:230px;
        padding:22px;
    }

    .future-logo-display img{
        max-height:190px;
    }

    .home-contact-strip{
        grid-template-columns:1fr;
    }
}
</style>

<main id="conteudo">

<section id="inicio" class="future-hero">

    <div class="future-layer future-layer-grid" aria-hidden="true"></div>
    <div class="future-layer future-layer-glow" aria-hidden="true"></div>

    <div class="container future-hero-grid">

        <div class="future-hero-copy">

            <span class="eyebrow eyebrow-light">
                Serviços notariais e de registro • Atendimento eletrônico
            </span>

            <h1>
                Cartório <span>Graça Rocha</span>
            </h1>

            <p class="future-subtitle">
                Serventia Extrajudicial do Ofício Único de Anísio de Abreu-PI
            </p>

            <p class="future-lead">
                Consulte informações sobre os serviços da serventia,
                orientações, horários e canais oficiais de atendimento.
                Registre solicitações e acompanhe o andamento por protocolo.
            </p>

            <div class="actions premium-actions">

                <a
                    class="button button-gold"
                    href="solicitacao.php"
                >
                    Criar solicitação
                </a>

                <a
                    class="button button-glass"
                    href="acompanhar.php"
                >
                    Acompanhar protocolo
                </a>

            </div>

            <?php if (str_contains($config['address'], 'PREENCHER')): ?>

            <p class="setup-warning setup-warning-dark">
                <strong>Configuração pendente:</strong>
                alguns dados institucionais ainda precisam ser preenchidos.
            </p>

            <?php endif; ?>

        </div>


        <aside
            class="future-showcase"
            aria-label="Cartório Graça Rocha"
        >

            <div class="future-brand-card">

                <div class="future-logo-display">

                    <img
                        src="assets/logo-cartorio-graca-rocha.png"
                        alt="Cartório Graça Rocha"
                    >

                </div>

            </div>


            <div class="home-contact-strip">

                <div>
                    <span>Atendimento</span>
                    <strong>
                        <?= e($config['hours']) ?>
                    </strong>
                </div>

                <div>
                    <span>Localização</span>
                    <strong>
                        <?= e($config['city']) ?>
                    </strong>
                </div>

                <div>
                    <span>WhatsApp</span>

                    <a
                        href="https://wa.me/<?= e($config['whatsapp']) ?>"
                        target="_blank"
                        rel="noopener"
                    >
                        Falar conosco
                    </a>
                </div>

            </div>

        </aside>

    </div>


    <div
        class="container future-service-strip"
        aria-label="Especialidades da serventia"
    >

        <span>Registro Civil</span>
        <span>Notas</span>
        <span>Protesto</span>
        <span>Registro de Imóveis</span>
        <span>RTD</span>
        <span>RCPJ</span>

    </div>

</section>


<section
    class="premium-pathways future-pathways"
    aria-label="Acessos principais"
>

    <div class="container pathways-grid">

        <a
            class="pathway-card pathway-primary"
            href="solicitacao.php"
        >

            <span class="pathway-kicker">
                Atendimento eletrônico
            </span>

            <strong>
                Enviar manifestação
            </strong>

            <p>
                Registre dúvida, reclamação, elogio ou solicitação
                relacionada à proteção de dados.
            </p>

            <span class="pathway-link">
                Criar protocolo →
            </span>

        </a>


        <a
            class="pathway-card"
            href="acompanhar.php"
        >

            <span class="pathway-kicker">
                Consulta
            </span>

            <strong>
                Acompanhar solicitação
            </strong>

            <p>
                Consulte o andamento e a resposta utilizando
                protocolo e chave de acesso.
            </p>

            <span class="pathway-link">
                Consultar agora →
            </span>

        </a>


        <a
            class="pathway-card"
            href="#documentos"
        >

            <span class="pathway-kicker">
                Orientações
            </span>

            <strong>
                Documentos básicos
            </strong>

            <p>
                Consulte informações iniciais sobre os
                serviços mais procurados.
            </p>

            <span class="pathway-link">
                Ver orientações →
            </span>

        </a>

    </div>

</section>


<section
    id="servicos"
    class="section future-services-section"
>

    <div class="container">

        <div class="premium-section-heading future-heading">

            <div>

                <span class="eyebrow">
                    Serviços
                </span>

                <h2>
                    Atos praticados pela serventia
                </h2>

            </div>

            <p>
                Os documentos e requisitos poderão variar de acordo
                com o ato solicitado e a análise jurídica do caso.
            </p>

        </div>


        <div class="future-services-grid">

            <article class="future-service-card">

                <span class="service-order">
                    01
                </span>

                <div class="future-service-badge">
                    RCPN
                </div>

                <h3>
                    Registro Civil
                </h3>

                <p>
                    Nascimentos, casamentos, óbitos, certidões,
                    averbações, retificações e demais atos
                    relacionados ao estado civil.
                </p>

                <a href="#documentos">
                    Consultar orientações
                </a>

            </article>


            <article class="future-service-card">

                <span class="service-order">
                    02
                </span>

                <div class="future-service-badge">
                    Notas
                </div>

                <h3>
                    Tabelionato de Notas
                </h3>

                <p>
                    Escrituras, procurações, atas notariais,
                    autenticações, reconhecimento de firma e
                    demais atos notariais.
                </p>

                <a href="#documentos">
                    Consultar orientações
                </a>

            </article>


            <article class="future-service-card">

                <span class="service-order">
                    03
                </span>

                <div class="future-service-badge">
                    Protesto
                </div>

                <h3>
                    Protesto de Títulos
                </h3>

                <p>
                    Apontamento, intimação, pagamento, desistência,
                    cancelamento, certidões e informações.
                </p>

                <a href="#documentos">
                    Consultar orientações
                </a>

            </article>


            <article class="future-service-card">

                <span class="service-order">
                    04
                </span>

                <div class="future-service-badge">
                    RI
                </div>

                <h3>
                    Registro de Imóveis
                </h3>

                <p>
                    Registros, averbações, certidões, retificações,
                    regularização fundiária e procedimentos
                    imobiliários.
                </p>

                <a href="#documentos">
                    Consultar orientações
                </a>

            </article>


            <article class="future-service-card">

                <span class="service-order">
                    05
                </span>

                <div class="future-service-badge">
                    RTD
                </div>

                <h3>
                    Títulos e Documentos
                </h3>

                <p>
                    Registro, conservação, publicidade, eficácia
                    perante terceiros e notificações.
                </p>

                <a href="#documentos">
                    Consultar orientações
                </a>

            </article>


            <article class="future-service-card">

                <span class="service-order">
                    06
                </span>

                <div class="future-service-badge">
                    RCPJ
                </div>

                <h3>
                    Pessoas Jurídicas
                </h3>

                <p>
                    Registro e averbação de atos constitutivos,
                    atas, alterações, livros e certidões.
                </p>

                <a href="#documentos">
                    Consultar orientações
                </a>

            </article>

        </div>

    </div>

</section>


<section
    id="documentos"
    class="section section-muted premium-guidance"
>

    <div class="container premium-guidance-grid">

        <div class="guidance-intro">

            <span class="eyebrow">
                Orientações
            </span>

            <h2>
                Documentos básicos
            </h2>

            <p>
                As informações abaixo são iniciais.
                Dependendo do ato, poderão ser solicitados
                documentos complementares.
            </p>

            <a
                class="text-link"
                href="solicitacao.php"
            >
                Ainda tem dúvida? Fale com a serventia →
            </a>

        </div>


        <div class="accordion premium-accordion">

            <details open>

                <summary>
                    Certidões
                </summary>

                <p>
                    Informe o tipo de registro, nome completo,
                    filiação, data aproximada do ato e demais
                    informações que facilitem sua localização.
                </p>

            </details>


            <details>

                <summary>
                    Reconhecimento de firma e autenticação
                </summary>

                <p>
                    Apresente documento de identificação original
                    e o documento objeto do serviço.
                </p>

            </details>


            <details>

                <summary>
                    Procuração pública
                </summary>

                <p>
                    Apresente documentos pessoais, dados do
                    procurador e a descrição dos poderes que
                    deverão constar no instrumento.
                </p>

            </details>


            <details>

                <summary>
                    Registro de imóvel
                </summary>

                <p>
                    Apresente o título e os documentos das partes.
                    O documento será submetido à qualificação
                    registral.
                </p>

            </details>


            <details>

                <summary>
                    Protesto e cancelamento
                </summary>

                <p>
                    Para pagamento, observe as informações da
                    intimação. Para cancelamento, apresente o
                    documento hábil conforme o caso.
                </p>

            </details>


            <details>

                <summary>
                    Pessoas jurídicas e títulos e documentos
                </summary>

                <p>
                    Apresente o instrumento a registrar,
                    documentos de representação e demais
                    documentos pertinentes ao ato.
                </p>

            </details>

        </div>

    </div>

</section>


<section
    id="informacoes"
    class="section premium-institutional"
>

    <div class="container premium-institutional-grid">

        <div class="institutional-brand-panel future-brand-panel">

            <img
                src="assets/logo-cartorio-graca-rocha.png"
                alt="Cartório Graça Rocha"
            >

        </div>


        <div class="institutional-data">

            <span class="eyebrow">
                A serventia
            </span>

            <h2>
                Informações institucionais
            </h2>


            <dl class="premium-data-list">

                <div>

                    <dt>
                        Responsável
                    </dt>

                    <dd>
                        <?= e($config['responsible']) ?>
                        —
                        <?= e($config['responsible_role']) ?>
                    </dd>

                </div>


                <div>

                    <dt>
                        CNS
                    </dt>

                    <dd>
                        <?= e($config['cns']) ?>
                    </dd>

                </div>


                <div>

                    <dt>
                        Endereço
                    </dt>

                    <dd>
                        <?= e($config['address']) ?>,
                        <?= e($config['city']) ?>
                    </dd>

                </div>


                <div>

                    <dt>
                        Horário de atendimento
                    </dt>

                    <dd>
                        <?= e($config['hours']) ?>
                    </dd>

                </div>


                <div>

                    <dt>
                        Plantão do Registro Civil
                    </dt>

                    <dd>
                        <?= e($config['plantao_rcpn']) ?>
                    </dd>

                </div>

            </dl>

        </div>

    </div>

</section>


<section
    id="normas"
    class="section premium-transparency future-transparency"
>

    <div class="container">

        <div
            class="premium-section-heading
                   premium-section-heading-light"
        >

            <div>

                <span class="eyebrow eyebrow-light">
                    Transparência
                </span>

                <h2>
                    Normas e emolumentos
                </h2>

            </div>


            <p>
                Os atos notariais e registrais observam
                a legislação e a tabela estadual vigente.
            </p>

        </div>


        <div class="transparency-grid">

            <article>

                <span>
                    CNJ
                </span>

                <h3>
                    Código Nacional de Normas
                </h3>

                <p>
                    Provimento CNJ nº 149/2023
                    e suas atualizações.
                </p>

            </article>


            <article>

                <span>
                    TJPI
                </span>

                <h3>
                    Código de Normas do Piauí
                </h3>

                <p>
                    Normas aplicáveis aos serviços
                    extrajudiciais no Estado do Piauí.
                </p>

            </article>


            <article>

                <span>
                    Tabela
                </span>

                <h3>
                    Emolumentos
                </h3>

                <p>
                    Consulte os atos, códigos e valores
                    vigentes no Estado do Piauí.
                </p>

            </article>

        </div>

    </div>

</section>


<section class="premium-final-cta future-final-cta">

    <div class="container premium-final-cta-inner">

        <div>

            <span class="eyebrow">
                Atendimento
            </span>

            <h2>
                Precisa falar com a serventia?
            </h2>

            <p>
                Registre sua solicitação ou acompanhe
                um atendimento já aberto.
            </p>

        </div>


        <div class="actions">

            <a
                class="button button-gold"
                href="solicitacao.php"
            >
                Criar solicitação
            </a>

            <a
                class="button button-secondary"
                href="acompanhar.php"
            >
                Acompanhar
            </a>

        </div>

    </div>

</section>

</main>

<?php render_footer(); ?>
