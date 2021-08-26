
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
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            #form2, #img2, #form3, #img3, #form4, #img4{
                display: none;
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
            <form id="planmanager_form">
                <div class="container ">
                    <div class="row">

                        <div class="col-md-6" id="form1">
                            <div class="collage-section">
                                <div class="text-section left">
                                    <br><br>
                                    <p>STEP 1 OF 4</p>
                                    <span style="color:#212121;letter-spacing: -0.02em;font-size: 38px;line-height: 1.25em;font-weight: bold;pointer-events: auto;">
                                        Lets get some information <br>about you.
                                    </span>
                                    <br> <br>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First name</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="emailHelp" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last name</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                                        </div>
                                        <br><br>
                                        <button id="step1" type="button" class="_1fbEI"><span class="_1Qjd7">Continue</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="img1">
                            <div class="right ">
                                <img style="width: 500px;" src="<?=base_url()?>assets/images/plan_manager1.jpg" alt="BG">
                            </div>
                        </div>


                        <div class="col-md-6" id="form2">
                            <div class="collage-section">
                                <div class="text-section left">
                                    <br><br>
                                    <p>STEP 2 OF 4</p>
                                    <span style="color:#212121;letter-spacing: -0.02em;font-size: 38px;line-height: 1.25em;font-weight: bold;pointer-events: auto;">
                                        Lets get some information <br>about you.
                                    </span>
                                    <br> <br>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp" required>
                                    </div>
                                    <br><br>
                                    <button type="button" id="step2" class="_1fbEI"><span class="_1Qjd7">Continue</span></button>
                                    <button type="button" id="back_step1" class="_1fbEI"><span class="_1Qjd7">Back</span></button>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="img2">
                            <div class="right ">
                                <img style="width: 500px;" src="<?=base_url()?>assets/images/plan_manager1.jpg" alt="BG">
                            </div>
                        </div>

                        <div class="col-md-6" id="form3">
                            <div class="collage-section">
                                <div class="text-section left">
                                    <br><br>
                                    <p>STEP 3 OF 4</p>
                                    <span style="color:#212121;letter-spacing: -0.02em;font-size: 38px;line-height: 1.25em;font-weight: bold;pointer-events: auto;">
                                        Qualification requirements.
                                    </span>
                                    <br>
                                    <p>Just a few more steps and you're done!</p>
                                    <br>

                                    <div class="form-group">
                                        <label for="resume">Send us your resume</label>
                                        <input type="file" class="form-control" name="resume" id="resume" aria-describedby="emailHelp" required>
                                    </div>
                                    <br><br>
                                    <button type="button" id="step3" class="_1fbEI"><span class="_1Qjd7">Continue</span></button>
                                    <button type="button" id="back_step2" class="_1fbEI"><span class="_1Qjd7">Back</span></button>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="img3">
                            <div class="right ">
                                <img style="width: 500px;" src="<?=base_url()?>assets/images/installation2.jpg" alt="BG">
                            </div>
                        </div>
                        <div class="col-md-6" id="form4">
                            <div class="collage-section">
                                <div class="text-section left">
                                    <br><br>
                                    <p>STEP 4 OF 4</p>
                                    <span style="color:#212121;letter-spacing: -0.02em;font-size: 38px;line-height: 1.25em;font-weight: bold;pointer-events: auto;">
                                        Submit to get started.
                                    </span>
                                    <br>
                                    <p>Use your email sign in to your career plan and receive more information.</p>
                                    <br>

                                    <div class="form-group">
                                        <label for="email_address">Email</label>
                                        <input type="email" class="form-control" name="email_address" id="email_address" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="number" class="form-control" name="phone_number" id="phone_number" aria-describedby="emailHelp" required>
                                    </div>
                                    <br><br>
                                    <button type="submit" class="_1fbEI"><span class="_1Qjd7">Submit</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="img4">
                            <div class="right ">
                                <img style="width: 500px;" src="<?=base_url()?>assets/images/step4.jpg" alt="BG">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script>
            $(document).ready(function() {
                $("#planmanager_form").submit(function(e) {
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    var form = $(this);
                    //var url = form.attr('action');

                    sucess_add('Information Saved!',1);
                    // $.ajax({
                    //     type: "POST",
                    //     url: "/customer/add_new_customer_from_jobs",
                    //     data: form.serialize(), // serializes the form's elements.
                    //     success: function(data)
                    //     {
                    //         if(data === "Success"){
                    //             sucess_add('Customer Added Successfully!',1);
                    //         }else {
                    //             warning('There is an error adding Customer. Contact Administrator!');
                    //             console.log(data);
                    //         }
                    //     }
                    // });
                });

                $('#step1').click(function(e){
                    if($('#last_name').val()=== "" || $('#first_name').val()=== ""){
                        error('Sorry!','All fields required!','warning');
                    }else{
                        document.getElementById('form2').style.display = "block";
                        document.getElementById('img2').style.display = "block";

                        document.getElementById('form1').style.display = "none";
                        document.getElementById('img1').style.display = "none";
                    }
                });

                $('#step2').click(function(e){
                    if($('#address').val()=== "" ){
                        error('Sorry!','Address field required!','warning');
                    }else{
                        document.getElementById('form3').style.display = "block";
                        document.getElementById('img3').style.display = "block";

                        document.getElementById('form2').style.display = "none";
                        document.getElementById('img2').style.display = "none";
                    }
                });

                $('#step3').click(function(e){
                    if($('#resume').val()=== "" ){
                        error('Sorry!','Please upload your resume!','warning');
                    }else{
                        document.getElementById('form4').style.display = "block";
                        document.getElementById('img4').style.display = "block";

                        document.getElementById('form3').style.display = "none";
                        document.getElementById('img3').style.display = "none";
                    }
                });

                $('#back_step1').click(function(e){
                    document.getElementById('form2').style.display = "none";
                    document.getElementById('img2').style.display = "none";

                    document.getElementById('form1').style.display = "block";
                    document.getElementById('img1').style.display = "block";
                });

                $('#back_step2').click(function(e){
                    document.getElementById('form3').style.display = "none";
                    document.getElementById('img3').style.display = "none";

                    document.getElementById('form2').style.display = "block";
                    document.getElementById('img2').style.display = "block";
                });
            });

            function sucess_add(information,is_reload){
                Swal.fire({
                    title: 'Good job!',
                    text: information,
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#32243d',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if(is_reload === 1){
                        if (result.value) {
                            window.location.href="<?= base_url('plan-manager-completed') ?>";
                        }
                    }
                });
            }

            function error(title,text,icon){
                Swal.fire({
                    title: title,
                    text: text,
                    icon: icon,
                    showCancelButton: false,
                    confirmButtonColor: '#32243d',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok'
                }).then((result) => {

                });
            }
        </script>
    </body>
</html>
