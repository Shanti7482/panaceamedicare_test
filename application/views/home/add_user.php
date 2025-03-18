<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$indStates = [
    "Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh", "Goa","Gujarat",
    "Haryana","Himachal Pradesh","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu",
    "Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal","Andaman and Nicobar Islands",
    "Chandigarh","Dadra and Nagar Haveli and Daman and Diu","Lakshadweep", "Delhi", "Puducherry","Ladakh","Jammu and Kashmir"
];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Awardee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />





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


.select2-container {
    width: 90% !important;

    margin-left: 2rem;
    height: 2rem;
}

.select2-container--default .select2-selection--single {
    width: 100%;
    height: 3rem;
    border-radius: 5px;
    font-size: 1.2rem;
    padding-left: 1rem;
    padding-top: 0.5rem;
}

.select2-dropdown .select2-dropdown--below {

    width: 29.5vw;
    padding: 1rem;
}

.select2-selection__arrow {
    height: 90%;
}

.checkbox-group {
    margin-left: 2rem;
}

.custom-file::file-selector-button {
    display: none;
}

.checkbox-group input[type="checkbox"] {
    cursor: pointer;
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
                            <div class="heading">
                                <h4>ADD Awardee</h4>
                            </div>
                        </div>

                        <div class="table-container">
                            <form action="<?=base_url('homecontroller/save_user')?>" method="post"
                                enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 mb-5">
                                            <label for="awardee_name" class="form-label">Awardee Name</label>
                                            <input type="text" class="form-control custom-input-height"
                                                name="awardee_name" id="awardee_name">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="" class="form-label">Awardee
                                                Details</label>
                                            <input type="text" class="form-control custom-input-height"
                                                name="awardee_details" id="awardee_details">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label class="form-label">Select Awards</label>
                                            <div class="checkbox-group col-7">
                                                <div><input type="checkbox" name="award_cat[]" value="1"><label>INDIAN
                                                        DOCTORS PRIDE AWARD</label></div>
                                                <div>
                                                    <input type="checkbox" name="award_cat[]" value="2"><label
                                                        for="">VIBHUSHAN | RATNA
                                                        SAMMAN</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="award_cat[]" value="3"><label
                                                        for="">RCS-SHREE
                                                        SAMMAN</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="award_cat[]" value="4"> <label
                                                        for="">RCS-BHUSHAN
                                                        SAMMAN</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="award_cat[]" value="5"> <label
                                                        for="">RCS-VIBHUSHAN
                                                        SAMMAN</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="award_cat[]" value="6"> <label
                                                        for="">RCS-RATNA
                                                        SAMMAN</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-5">
                                            <label for="state" class="form-label">State</label>
                                            <select name="state" id="state" class="form-control">
                                                <option value="">select your state</option>
                                                <?php foreach ($indStates as $state){ ?>
                                                <option value="<?= $state ?>"><?= $state ?></option>
                                                <?php }?>
                                                <option value="other">Other</option>
                                            </select>
                                            <label for="total_amount" class="form-label"
                                                style="margin-top: 1.8rem">Total Amount</label>
                                            <input type="text" class="form-control custom-input-height"
                                                name="total_amount" id="total_amount">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label class="form-label">Select Payment Type</label>
                                            <div class="row checkbox-group " style="width: 60%;">
                                                <div class="col-12 col-sm-6">
                                                    <input type="radio" name="payment_type" value="0" id="case">
                                                    <label for="case"
                                                        style="margin-left:0.5rem ;cursor: pointer;">case</label>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <input type="radio" name="payment_type" value="1" id="online"><label
                                                        for="online"
                                                        style="margin-left:0.5rem; cursor: pointer;">online</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="paid_amount" class="form-label">Paid Amount</label>
                                            <input type="text" class="form-control custom-input-height"
                                                name="paid_amount" id="paid_amount">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="due_amount" class="form-label">Due Amount</label>
                                            <input type="text" class="form-control custom-input-height"
                                                name="due_amount" id="due_amount">
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <label for="pay_reciept" class="form-label">Pay Reciept</label>
                                            <input type="file" class="form-control custom-input-height custom-file"
                                                name="pay_reciept" id="pay_reciept">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mt-5  text-center submit-btn">
                                    <button type="submit" class="btn btn btn-secondary col-1  custom-btn">Add</button>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#state').select2();


    });
    </script>
</body>

</html>