<?php
    $folderPath = "../../";
    $pageTitle = "Dataiku Cloud ";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Dataiku Cloud ";

    include($folderPath . "Components/header.php");
?>

<div class="breadcrumbs dark bot40">
    <div class="container updated">
        <ul>
            <!-- Breadcrumb NavXT 7.4.1 -->
            <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Dataiku." href="<?php echo $folderPath ?>index.php" class="home"><span
                            property="name"><?php echo $coName ?></span></a>
                    <meta property="position" content="1">
                </span></li>
            <li class="post post-page"><span property="itemListElement" typeof="ListItem"><a property="item"
                        typeof="WebPage" title="Go to Product." href="../index.php" class="post post-page"><span
                            property="name">Product</span></a>
                    <meta property="position" content="2">
                </span></li>
            <li class="post post-page current-item"><span class="post post-page current-item"><?php echo $coName ?> for AI &#038;
                    ML</span></li>
        </ul>
    </div>
</div>

<section class="margin-top-48 mob8">
    <div class="container updated mob8">
        <div class="six columns right40">
            <h1 class="top40 font90">
                Dataiku for AI &amp; ML </h1>
            <p class="top40 font25">
                Amplify the impact and productivity of data science teams with Dataiku’s end-to-end platform for AI and
                machine learning, bringing robust tooling for model design, development, and delivery.
            </p>
            <p class="top40 bot10">
                <a class="button border right24 mob8-top width215" href="../get-started/" target="_self">Start
                    Your Dataiku Free Trial</a>

                <a class="button border revert mob8-top width215" href="<?php echo $folderPath ?>home/contact-us/"
                    target="_self">Contact Us</a>
            </p>
        </div>
        <div class="six columns top10 pad-mob80-top">
            <a class="lightboxlaunch" onclick="launchLightbox('C3xEBhzwJv2NMGrbvHs4Fd')">
                <div class="vidyard-video">
                    <div data-bg="<?php echo $folderPath ?>assets/uploads/2024/03/Dataiku-for-AI-ML-1-1.png"
                        class="main-button-products-heading rocket-lazyload"
                        style=" background-size: contain; auto; background-repeat: no-repeat;">
                        <script>
                            function launchLightbox(val) {
                                var players = VidyardV4.api.getPlayersByUUID(val);
                                var player = players[0];
                                player.showLightbox();
                            }
                        </script>
                        <svg width="87" height="87" viewbox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="vidyard-circle" fill-rule="evenodd" clip-rule="evenodd"
                                d="M43.5 87C67.5244 87 87 67.5244 87 43.5C87 19.4756 67.5244 0 43.5 0C19.4756 0 0 19.4756 0 43.5C0 67.5244 19.4756 87 43.5 87Z"
                                fill="#221C35" fill-opacity="0.5" />

                            <path class="vidyard-icon" fill-rule="evenodd" clip-rule="evenodd"
                                d="M61.4841 43.396C62.2211 43.7646 62.2211 44.8164 61.4841 45.1849L33.0838 59.385C32.4189 59.7175 31.6366 59.234 31.6366 58.4906L31.6366 30.0903C31.6366 29.3469 32.4189 28.8634 33.0838 29.1959L61.4841 43.396Z"
                                fill="white" />
                        </svg>
                        <div id="product-video">
                            <!--Replace [UUID] with Player UUID -->
                            <img class="vidyard-player-embed" data-uuid="C3xEBhzwJv2NMGrbvHs4Fd" data-v="4"
                                data-type="lightbox" data-autoplay="1">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="mob8">
    <div class="container product-page-new-container-shadow top40">
        <div class="twelve columns">
            <div class="row">
                <div class="five columns pad20">
                    <h3>Build, Deploy, & Monitor in One Unified Environment</h3>
                </div>
                <div class="seven columns pad20">
                    <p>From data access and preparation through modeling, app development, production deployment, and
                        maintenance, whether traditional machine learning, Generative AI, or a combination of both,
                        Dataiku is a one-stop shop for data scientists of all skill levels.

                        Data science teams that use Dataiku accelerate their work so that they can take on more — and
                        more interesting — projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $testimonialMode = "2"; include($folderPath . "Components/testimonial.php"); ?>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    High-Velocity Data Science Meets Robust Oversight </h3>
            </div>
            <div class="four columns">
            </div>
        </div>
    </div>

    <!--product-item-->
    <div class="product-key-capability">

        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/uploads/2024/03/Dataiku-for-AI-ML-1.png"
                class="image rocket-lazyload" style=""></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>

                        <a href="<?php echo $folderPath ?>#">Enjoy an All-in-One Code
                            Environment</a>

                    </h3>
                    <p><span style="font-weight: 400;">Dataiku provides a standardized development environment for data
                            scientists who prefer code over visual tools. Data scientists can effortlessly operate from
                            notebooks and IDEs, efficiently manage virtual environments, organize code with versatile
                            libraries, and foster collaboration through seamless Git integration for version
                            control.</span></p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>#"
                        target="_blank">

                        <span class="icon"></span>
                        See Dataiku Code Studios in Action</a>


                </div>
            </div>
        </div>

    </div>
    <div class="product-key-capability">

        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/uploads/2024/02/Deploy-and-Scale-Anywhere.png"
                class="image rocket-lazyload" style=""></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>

                        <a href="../key-capabilities/optionality-with-dataiku/">Access Always-On Data &amp;
                            Compute Resources</a>

                    </h3>
                    <p><span style="font-weight: 400;">Want to spend more time doing data science and less time setting
                            up backend resources? Dataiku makes dealing with large AI and machine learning data
                            workloads a breeze. Take advantage of elastic and highly scalable computing systems   with
                            Dataiku’s modern pushdown architecture.</span></p>
                    <a class="learn-more uppercase" href="../key-capabilities/optionality-with-dataiku/"
                        target="_blank">

                        <span class="icon"></span>
                        See How Dataiku Leverages Your Existing Infrastructure</a>


                </div>
            </div>
        </div>

    </div>
    <div class="product-key-capability">

        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/uploads/2024/03/Dataiku-for-AI-ML-2.png"
                class="image rocket-lazyload" style=""></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>

                        <a href="<?php echo $folderPath ?>#">Discover &amp; Reuse Assets
                            for Maximum Efficiency</a>

                    </h3>
                    <p><span style="font-weight: 400;">Data scientists of all types — from citizens to experts — can
                            leverage automatic feature generation and other capabilities to expedite this important yet
                            time-consuming task. Data teams can discover, explore, and reuse reference datasets
                            containing curated features in Dataiku’s central feature store, reducing the time spent
                            reinventing the wheel.</span></p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>#"
                        target="_blank">

                        <span class="icon"></span>
                        Discover Feature Stores in Dataiku</a>


                </div>
            </div>
        </div>

    </div>
    <div class="product-key-capability">

        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/uploads/2023/11/Gen-AI-screen-update.png"
                class="image rocket-lazyload" style=""></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>

                        <a href="../key-capabilities/generative-ai/">Build Enterprise-Ready Generative AI
                            Applications</a>

                    </h3>
                    <p><span style="font-weight: 400;">With Dataiku&#8217;s LLM Mesh, Prompt Studios, and
                            retrieval-augmented generation (RAG) capabilities, data scientists can quickly enrich their
                            models and projects with Generative AI, using all of the latest large language models (LLMs)
                            and services, all in an IT-approved environment.</span></p>
                    <p><span style="font-weight: 400;">Dedicated LLM Mesh components for AI service routing, PII
                            screening, LLM response moderation, performance and cost tracking, and auditing of entire
                            application flows means maximum control and performance.</span></p>
                    <a class="learn-more uppercase" href="../key-capabilities/generative-ai/" target="_self">

                        <span class="icon"></span>
                        Go In Depth On Generative AI Capabilities in Dataiku</a>


                </div>
            </div>
        </div>

    </div>
    <div class="product-key-capability">

        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/uploads/2024/03/Dataiku-for-AI-ML-3.png"
                class="image rocket-lazyload" style=""></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>

                        <a href="../key-capabilities/machine-learning/">Save Time With AutoML or Go Deep With
                            Custom ML</a>

                    </h3>
                    <p><span style="font-weight: 400;">Build and evaluate production-ready models fast with Dataiku
                            AutoML, which also includes built-in guardrails and white-box explainability for citizen
                            data scientists</span></p>
                    <p><span style="font-weight: 400;">Advanced data scientists can extend Dataiku’s AutoML capabilities
                            by programmatically developing custom models or by importing models developed with MLFlow.
                            Regardless of where a model is developed, Dataiku remains the central platform for model
                            deployment and management.</span></p>
                    <a class="learn-more uppercase" href="../key-capabilities/machine-learning/"
                        target="_self">

                        <span class="icon"></span>
                        Explore Machine Learning with Dataiku</a>


                </div>
            </div>
        </div>

    </div>
    <div class="product-key-capability">

        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/uploads/2024/02/api-deployer-1024x502-1.png"
                class="image rocket-lazyload" style=""></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>

                        <a href="<?php echo $folderPath ?>#">Deploy, Monitor &amp; Automate the AI
                            Lifecycle</a>

                    </h3>
                    <p><span style="font-weight: 400;">Deliver continuous, high-quality outputs for business
                            applications with one central place for machine learning model and AI project deployment,
                            monitoring, and management in production. With Dataiku, data scientists, machine learning
                            engineers, and operators can scale their work without succumbing to the burden of project
                            upkeep with automated drift monitoring, maintenance,  and much more. </span></p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>#" target="_self">

                        <span class="icon"></span>
                        Deep Dive on MLOps with Dataiku</a>


                </div>
            </div>
        </div>

    </div>
    <!--product-item-->
    <!--product-item-->
</div>

<?php $hookMode = "4"; include($folderPath . "Components/hooks.php"); ?>

<section class="top80 mob16">
    <div class="container updated">
        <div class="five columns right40">
            <div class="row">
                <div></div>
            </div>
            <h4 class="mob8 h2 margin-bot-48 right40">
                Built for Speed &amp; Scale </h4>
        </div>
        <div class="seven columns mob16">
            <div class="row">
                <div class="six-key-capability columns right40 mob8 margin-bot-64">
                    <h5 class="bot10"> Agentic &amp; Generative AI</h5>
                    <p class="bot10">Scale not only machine learning but agentic and generative AI workflows with
                        ease. Dataiku offers a secure large language model (LLM) gateway plus no-code and full-code
                        development tools.</p>
                    <a class="learn-more uppercase" href="../key-capabilities/generative-ai/"
                        target="_self">DISCOVER DATAIKU <span class="icon"></span>
                    </a>
                </div>
                <div class="six-key-capability columns mob8 margin-bot-64">
                    <h5 class="bot10"> Optionality</h5>
                    <p class="bot10">With Dataiku, you have options. Whether you&#039;re leveraging existing
                        infrastructure or adopting new tools, seamlessly integrate with your ecosystem while having
                        the flexibility to evolve your stack.</p>
                    <a class="learn-more uppercase" href="../key-capabilities/optionality-with-dataiku/"
                        target="_self">DISCOVER DATAIKU <span class="icon"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="six-key-capability columns top40 right40 mob8 margin-bot-64">
                    <h5 class="bot10"> </h5>
                    <p class="bot10"></p>
                </div>
                <div class="six-key-capability columns top40 mob8 margin-bot-64">
                    <h5 class="bot10"> </h5>
                    <p class="bot10"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>