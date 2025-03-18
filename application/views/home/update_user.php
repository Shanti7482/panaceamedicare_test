<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />




</head>
<style>
body {
    font-family: "Poppins", sans-serif;
    background-color: #f8f9fa;
}

.main-container {
    position: absolute;
    min-height: 100vh;
    width: 100%;
    background-color: #b3b6ba;
    padding: 2rem;
    box-sizing: border-box;

}

.right-container {
    position: relative;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    margin: 0 auto;
    max-width: 1200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;

}

.heading-box {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.add-class {
    position: absolute;
    left: 0;
}

.heading {
    flex-grow: 1;
    text-align: center;
}


.heading {
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;

}


.custom-input-height {
    width: 90%;
    height: 3rem;
    margin-left: 2rem;
}

.mb-5 {
    margin-bottom: 1rem !important;
}

label {
    margin-left: 2rem;
}

.custom-btn:active,
.custom-btn:focus {
    box-shadow: none;
    outline: none;
}

.table-container {
    margin-top: 1rem;
    max-height: 85vh;
    width: 100%;

}

.submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.fixed-box {
    width: 18vw;
    height: 18vw;
    margin-left: 2rem;
    background-color: #b3b6ba;
}
</style>



<body>
    <section>



    </section>
    <section>
        <div class="container-fluid main-container">
            <div class="">
                <div class="container left-container"></div>
                <div class="col-md-12">
                    <div class="container right-container">
                        <div class="heading-box">
                            <div class="add-class">
                                <?php if($status){ ?>
                                <div><a href="#" rel="noopener noreferrer" class="btn btn-secondary"><i
                                            class="fa-duotone fa-solid fa-user-plus"></i></a>
                                </div>
                                <?php }?>
                            </div>
                            <div class="heading">
                                <h4>Upadate Item</h4>
                            </div>
                        </div>

                        <div class="table-container">
                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control custom-input-height"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control custom-input-height"
                                                id="exampleInputPassword1">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputEmail2" class="form-label">Email address</label>
                                            <input type="email" class="form-control custom-input-height"
                                                id="exampleInputEmail2" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputEmail3" class="form-label">Email address</label>
                                            <input type="email" class="form-control custom-input-height"
                                                id="exampleInputEmail3" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputEmail4" class="form-label">Email address</label>
                                            <input type="email" class="form-control custom-input-height"
                                                id="exampleInputEmail4" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputEmail5" class="form-label">Email address</label>
                                            <input type="email" class="form-control custom-input-height"
                                                id="exampleInputEmail5" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="exampleInputEmail5" class="form-label">Email address</label>
                                            <input type="email" class="form-control custom-input-height"
                                                id="exampleInputEmail5" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mt-5 text-center submit-btn">
                                    <button type="submit" form=""
                                        class="btn btn btn-secondary  custom-btn">Update</button>
                                </div>

                            </form>

                        </div>

                        <div class="fixed-box"></div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.6/datatables.min.js"></script>


    <script type="text/javascript">
    </script>
</body>

</html>