<!Doctype html>
<html>

<head>


    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>


    <div>
        <nav class="navbar navbar-light bg-primary">
            <h1 class="heading1"> Sakila Database </h1>
            <div>
                <!-- '<a href="' . base_url('Login_form/logout') . '">logout</a>' -->


            </div>
        </nav>

    </div>
    <div class="hovering">
        <nav>
            <h2 class="heading1"> Address table Data</h2>

        </nav>
        <p id="demo"></p>


        <table class="table  .table-bordered table-hover table-light">

            <thead>
                <th>address_id</th>
                <th>address</th>
                <th>address2</th>
                <th>district</th>
                <th>city_id</th>
                <th>Actor Id</th>
                <th>postal_code</th>
                <th>phone</th>
                <th>last_update</th>


            </thead>

            <tbody>
                <?php foreach ($records as $rec) {?>
                <tr>
                    <td><?php echo $rec->address_id; ?></td>
                    <td><?php echo $rec->address; ?></td>
                    <td><?php echo $rec->address2; ?></td>
                    <td><?php echo $rec->district; ?></td>
                    <td><?php echo $rec->city_id; ?></td>
                    <td><?php echo $rec->postal_code; ?></td>
                    <td><?php echo $rec->phone; ?></td>
                    <td><?php echo $rec->last_update; ?></td>


                </tr>
                <?php }?>


            </tbody>
        </table>



    </div>

</body>

</html>