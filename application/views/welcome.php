
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1"  />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" sizes="192x192" href=<?=base_url()?>assets/images/logo.png">
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/png"/>
        <!-- Legacy Polyfills -->
        <script src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js" nomodule=""></script>
        <script src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js" nomodule=""></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch" nomodule=""></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <?php $this->load->view('layout/css/career_css'); ?>
        <style>
            ._1fbEI{
                background-color: #196939; /* Green */
                border: 50px;
                border-radius: 25px;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
        <title>ADT POWUR</title>
    </head>
    <body class=''>
        <div id="SITE_CONTAINER">
            <div class="header">
                <div id="bgLayers_comp-keeid8i3" data-hook="bgLayers" class="_3wnIc">
                    <div data-testid="colorUnderlay" class="_3KzuS _3SQN-"></div>
                    <div id="bgMedia_comp-keeid8i3" class="_2GUhU"></div>
                </div>
                <div data-testid="columns" class="_1uldx">
                    <a  href="<?=base_url('/')?>">
                        <img src="<?=base_url()?>assets/images/3.png" class="img-responsive career_logo" alt="Powur"/>
                    </a>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="collage-section">
                            <div class="text-section left">
                                <br><br>
                                <span style="color:#212121;letter-spacing: -0.02em;font-size: 38px;line-height: 1.25em;font-weight: bold;pointer-events: auto;">
                                    Welcome! Your&nbsp;journey <br>starts here.
                                </span>
                                <p class="font_8" style="line-height:1.6em;font-size:17px">Whether this is your first rodeo or your next venture&mdash;we offer&nbsp;
                                    <span style="font-weight: bold;">4 careers</span> that will create real lives and real stories.
                                </p>

                                <div >
                                    <a href="/planform"> <button class="_1fbEI"><span class="_1Qjd7">Start your Journey</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right ">
                            <img style="width: 500px;" src="<?=base_url()?>assets/images/welcome.jpg" alt="BG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
