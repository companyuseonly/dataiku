<?php
    $folderPath = "../../";
    $pageTitle = "Dataiku Cloud ";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Dataiku Cloud ";
    
    include($folderPath . "Components/header.php");
?>

<section data-bg="<?php echo $folderPath ?>assets/uploads/2022/10/Flow_best-1920x622.png"
    class="page-title wide-text js-color-change rocket-lazyload">
    <span class="overlay"
        style="background-image: linear-gradient(1800deg,rgba(0,0,0,0.3),rgba(35,40,56,0.5));">
    </span>
</section>

<section class="form-section small">
    <div class="container">
        <div class="holder">
            <div class="form-holder">
                <div class="heading">
                    <h1>The Dataiku Product Demo</h1>

                    <div class="subtitle">
                        <p>This 12-minute introductory demo shows how Dataiku, The Universal AI Platform™,
                            gives organizations control over their AI talent, processes, and technologies to
                            unleash the creation of analytics, models, and agents. Dive into Dataiku’s
                            end-to-end capabilities to see how you can empower everyone in your organization
                            with AI and GenAI.</p>
                    </div>
                </div>

                <script charset="utf-8" type="text/javascript" src="<?php echo $folderPath ?>assets/js.hsforms.net/forms/v2.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: "2123903",
                        formId: "3b336f1e-2293-47ee-86a1-5cdc6625c435",

                        onFormReady: function($form) {
                            window.initCustomForms($form);
                            console.log("Demo Form - onFormReady");
                        },
                        onFormSubmitted: function($form) {
                            console.log("Demo Form - onFormSubmitted");
                            analytics.track("Demo Form", {});
                        },
                        onFormSubmit: function($form) {
                            document.querySelector('input[name=wt1_id]').value = getCookie("__wt1vic");
                        },
                        onFormReady: function() {

                            jcf.setOptions({
                                wrapNative: false,
                                fakeDropInBody: false,
                                maxVisibleItems: 6,
                                useCustomScroll: true
                            });

                            jcf.replaceAll();
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</section>

<?php include($folderPath . "Components/footer.php"); ?>