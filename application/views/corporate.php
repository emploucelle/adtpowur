
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
        .banner {
            background-color: #ff8d6d;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center top;
            padding-top: 27%;
            position: relative;
            line-height: 0;
            display: block;
            width: 100%;
            background-image: url(https://tbcdn.talentbrew.com/company/29/v2_0/img/banner-it-xl-2.jpg);
        }
    </style>
    <style>
        @media screen and (min-width: 800px)
            .banner .banner-text {
                right: 14px;
                max-width: 66%;
                text-align: right;
            }
            @media screen and (min-width: 550px)
                .banner {
                    padding-top: 31%;
                    background-image: url(https://tbcdn.talentbrew.com/company/29/v2_0/img/banner-it-xl-2.jpg);
                }
    </style>
    <title>ADT POWUR</title>
</head>
<body class='' >
<div id="SITE_CONTAINER">
    <style id="STYLE_OVERRIDES_ID">
        #comp-ken0sqfo4{visibility:hidden !important;}
    </style>
    <div id="page">
        <main id="content" tabindex="-1">
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
            <div class="banner">
                <div class="banner-text">
                    <h1>Corporate</h1>
                </div>
            </div>
            <div class="mid_body"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-section left">
                            <h2>A self-starter. a team player.  </h2>
                            <p class="text">Someone who can support the needs of our company. A career with ADT Solar connects you with all aspects of our business. You’ll join the leading provider in security, home automation, health solutions and solar. Ready to become an Everyday Hero and make a difference by helping others, protect the people and things that matters most?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right visual">
                            <img src="<?=base_url()?>assets/images/corporate2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <a href="<?=base_url('welcome')?>"><button type="button" class="_1fbEI"><span class="_1Qjd7">Start Here</span></button></a>
                    </div>
                </div>
            </div>
            <br><br><br>
        </main>
    </div>
</div>
</body>
</html>
