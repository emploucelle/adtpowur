
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" sizes="192x192" href=<?=base_url()?>assets/images/logo.png">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/png"/>
    <script src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js" nomodule=""></script>
    <script src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js" nomodule=""></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch" nomodule=""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php $this->load->view('layout/css/career_css'); ?>
    <style>
        .panel {
            text-align: center;
            border: #2cc36b 2px solid;
            padding: 15px 15px 15px 15px;
        }
        .panel:hover { box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35); }
        .panel-body
        {
            padding: 0px;
            text-align: center;
        }

        .the-price
        {
            background-color: rgba(220,220,220,.17);
            box-shadow: 0 1px 0 #dcdcdc, inset 0 1px 0 #fff;
            padding: 20px;
            margin: 0;
        }

        .the-price h1
        {
            line-height: 1em;
            padding: 0;
            margin: 0;
        }

        .subscript
        {
            font-size: 25px;
        }

        /* CSS-only ribbon styles    */
        .cnrflash
        {
            /*Position correctly within container*/
            position: absolute;
            top: -9px;
            right: 4px;
            z-index: 1; /*Set overflow to hidden, to mask inner square*/
            overflow: hidden; /*Set size and add subtle rounding  		to soften edges*/
            width: 100px;
            height: 100px;
            border-radius: 3px 5px 3px 0;
        }
        .cnrflash-inner
        {
            /*Set position, make larger then 			container and rotate 45 degrees*/
            position: absolute;
            bottom: 0;
            right: 0;
            width: 145px;
            height: 145px;
            -ms-transform: rotate(45deg); /* IE 9 */
            -o-transform: rotate(45deg); /* Opera */
            -moz-transform: rotate(45deg); /* Firefox */
            -webkit-transform: rotate(45deg); /* Safari and Chrome */
            -webkit-transform-origin: 100% 100%; /*Purely decorative effects to add texture and stuff*/ /* Safari and Chrome */
            -ms-transform-origin: 100% 100%;  /* IE 9 */
            -o-transform-origin: 100% 100%; /* Opera */
            -moz-transform-origin: 100% 100%; /* Firefox */
            background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.1) 50%), linear-gradient(0deg, transparent 0%, rgba(1,1,1,.2) 50%);
            background-size: 4px,auto, auto,auto;
            background-color: #aa0101;
            box-shadow: 0 3px 3px 0 rgba(1,1,1,.5), 0 1px 0 0 rgba(1,1,1,.5), inset 0 -1px 8px 0 rgba(255,255,255,.3), inset 0 -1px 0 0 rgba(255,255,255,.2);
        }
        .cnrflash-inner:before, .cnrflash-inner:after
        {
            /*Use the border triangle trick to make  				it look like the ribbon wraps round it's 				container*/
            content: " ";
            display: block;
            position: absolute;
            bottom: -16px;
            width: 0;
            height: 0;
            border: 8px solid #800000;
        }
        .cnrflash-inner:before
        {
            left: 1px;
            border-bottom-color: transparent;
            border-right-color: transparent;
        }
        .cnrflash-inner:after
        {
            right: 0;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }
        .cnrflash-label
        {
            /*Make the label look nice*/
            position: absolute;
            bottom: 0;
            left: 0;
            display: block;
            width: 100%;
            padding-bottom: 5px;
            color: #fff;
            text-shadow: 0 1px 1px rgba(1,1,1,.8);
            font-size: 0.95em;
            font-weight: bold;
            text-align: center;
        }
        .careers{
            height: 300px !important;
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
                <img src="<?=base_url()?>assets/images/3.png" class="img-responsive" alt="Powur" style="width:122px;height:100px;"/>
            </a>
        </div>
    </div>
    <div id="main_MF">
        <div class="container ">
            <div class="row">
                <h1 class="font_0" style="font-size:38px; line-height:1.25em">Choose a&nbsp;<span style="color: #198754;">CAREER</span> that&rsquo;s right for you.</h1>
                    <ul style="margin-left: 100px;">
                        <li>Explore all investment details.</li>
                        <li>Discover the various source of income.</li>
                        <li> No experience necessary.</li>
                        <li> Fulltime and PartTime available.</li>
                    </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 careers">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Call Center
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <img src="<?=base_url()?>assets/images/call_center.jpg" alt="Powur" style="width:230px;"  />
                            </div>
                        </div>
                        <div class="panel-footer" style="padding-bottom: 18px;">
                            <br>
                            <a href="/plan-manager" class="btn btn-success" role="button">Select</a>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Sales
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <img src="<?=base_url()?>assets/images/sales_mini.jpg" alt="Powur" style="width:230px;"  />
                            </div>
                        </div>
                        <br>
                        <div class="panel-footer" style="padding-bottom: 18px;">
                            <a href="/plan-manager" class="btn btn-success" role="button">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Installation & Service
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <img src="<?=base_url()?>assets/images/installation2.jpg" alt="Powur" style="width:230px;"  />
                            </div>
                        </div>
                        <div class="panel-footer">
                            <br>
                            <a href="/plan-manager" class="btn btn-success" role="button">Select</a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Corporate</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <img src="<?=base_url()?>assets/images/corporate.jpeg" alt="Powur" style="width:230px;"  />
                            </div>
                        </div>
                        <div class="panel-footer">
                            <br>
                            <a href="/plan-manager" class="btn btn-success" role="button">Select</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
