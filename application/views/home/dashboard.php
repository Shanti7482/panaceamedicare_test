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

.custome-heading {

    /*  display: inline-block;*/
    font-family: 'Poppins', sans-serif;
    font-size: 1.8px;
    font-weight: 600;
    color: #4CAF50;
    text-align: center;
    margin-top: 2rem;
    letter-spacing: 0.2rem;
    text-transform: uppercase;
    line-height: 1.4;
}


table {
    width: 100%;
}

thead th {
    background-color: #007bff;
    color: #51855f;
    text-align: center;
    font-weight: bold;
}

tbody td {
    text-align: center;
}

#mytable th:first-child,
#mytable td:first-child {
    text-align: left;
}

.dt-search {
    margin-right: 0.8rem;
}


#mytable th:not(:first-child),
#mytable td:not(:first-child) {
    text-align: center;
}



#dt-length-0 option {
    padding: 0.8rem;
    background-color: #ffffff;
    color: #333;

}

#dt-length-0 option:hover {
    background-color: #f1f1f1;

}



.edit-button {
    display: inline-flex;
    align-items: center;
    font-weight: 700;
    border: none;
    padding: 0.3rem 1rem;
    font-size: 1.2rem;
}

.edit-button i {
    margin-right: 0.5rem;
    font-size: 1.2rem;

}

.edit-button:active,
.edit-button:focus {
    box-shadow: none;
    outline: none;
}


.table-container {
    max-height: 85vh;
    overflow-y: auto;
    overflow-x: auto;
    width: 100%;

}


.table-container::-webkit-scrollbar {
    width: 0.5rem;
}

.table-container::-webkit-scrollbar-thumb {
    background-color: #b3b6ba;
    border-radius: 0.5rem;
}

.table-container::-webkit-scrollbar-track {
    background-color: #f1f1f1;
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
                            <div>
                                <?php if($data['status']){ ?>
                                <div><a href="#" rel="noopener noreferrer" class="btn btn-secondary"><i
                                            class="fa-duotone fa-solid fa-user-plus"></i></a>
                                </div>
                                <?php }?>
                            </div>
                            <div>
                                <h4 class="heading custome-heading">User Data</h4>
                            </div>

                        </div>
                        <div class="scrollspy-example" tabindex="0">
                            <div class="table-container">
                                <table id="mytable" class="display table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>SI NO.</th>
                                            <th>Name</th>
                                            <th>a</th>
                                            <th>b</th>
                                            <th> c</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($x=1;$x<=20;$x++): ?>
                                        <tr>
                                            <td>
                                                <p><?php echo $x; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo "abhisehk"; ?></p>
                                            </td>
                                            <td><?php echo "vivek"; ?></td>
                                            <td><?php echo "rahul"; ?></td>
                                            <td><?php echo "pravin";?></td>
                                            <th><a href="<?=base_url('homecontroller/edit_user/'.$x)?>"
                                                    rel="noopener noreferrer" class="btn btn-primary edit-button"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</a></th>

                                            </td>

                                        </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    $(document).ready(function() {
        $('#mytable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
        });


    });
    </script>
</body>

</html>