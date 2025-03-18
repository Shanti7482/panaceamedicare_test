<?php defined('BASEPATH') or exit("No direct access allowed !");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        font-family: "Poppins", sans-serif;
    }

    .main-container {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #b3b6ba;
    }

    .admin-login-container {
        background-color: #f9f9f9;
        padding: 20px;
        max-width: 42vw;
        margin: 0 auto;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20vh;
        transition: box-shadow 0.3s ease;
    }

    .custom-form {
        margin: 2rem 2rem;
    }

    .admin-login-container:hover {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
    }

    .custom-heading {
        color: #51855f;
        font-weight: 700;
        font-style: italic;
    }

    .custom-input-height {
        height: 3rem;
        margin-left: 2rem;
    }


    .mb-5 {
        margin-bottom: 2.5rem !important;
    }

    .custome-label {
        color: #51855f;
        font-size: 1.3rem;
        font-weight: 500;
        font-style: normal;

    }

    .custom-btn {
        font-size: 1.2rem;
        font-weight: 500;
        padding: 0.3rem 1.5rem;
    }

    .error {
        color: red;
        margin-left: 2rem;

    }
    </style>
</head>

<body>

    <div class='main-container'>
        <div class="container mt-10 admin-login-container">
            <div class="heading text-center mb-4 fs-6 custom-heading">
                <h1>ADMIN LOGIN</h1>
            </div>
            <div class='form-container custom-form'>
                <form class="all_services_common_form" id="admin_login_form"
                    action="<?php echo base_url('Authcontroller/login');?>" method="post">
                    <div class="mb-5 row align-items-center" style="display:none">
                        <label for="user_name" class="col-sm-2 col-form-label custome-label ">Name </label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="enter your name" name="user_name" id="user_name"
                                class="form-control input-group-sm custom-input-height">

                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <label for="user_email" class="col-sm-2 col-form-label custome-label">Username </label>
                        <div class="col-sm-8">
                            <input type="email" placeholder="ak@gmail.com" name="user_email" id="user_email"
                                class="form-control input-group-sm custom-input-height">

                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <label for="user_password" class="col-sm-2 col-form-label custome-label">Password </label>
                        <div class="col-sm-8">
                            <input type="password" placeholder="*********" name="password" id="user_password"
                                class="form-control input-group-sm custom-input-height">

                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-3 mt-5 text-center">
                            <button type="submit" form="admin_login_form"
                                class="btn btn-success btn-primary  custom-btn">Login</button>
                        </div>

                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>





    <script>
    $(document).ready(function() {
        $("#admin_login_form").validate({
            rules: {
                user_name: {
                    required: true
                },
                user_email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                user_name: {
                    required: "Please enter your name"
                },
                user_email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please enter your password"

                }
                // },
                // submitHandler: function(event) {

                //     $.ajax({
                //         type: "post",
                //         url: "<?php echo base_url('Authcontroller/login');?>",
                //         data: $(event).serialize(),
                //         dataType: "json",
                //         success: function(response) {
                //             console.log("------------->", response);
                //             if (response.success) {
                //                 window.location.href =
                //                     "<?php echo base_url('HomeController'); ?>";
                //             } else {
                //                 window.location.href =
                //                     "<?php echo base_url('Authcontroller'); ?>";
                //             }

                //         },
                //         error: function(xhr, status, error) {
                //             console.log("----error-------->  " + error);
                //         }
                //     });

            }
        });
    });
    </script>

</body>

</html>