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
            <h2 class="heading1"> Actor table Data</h2>

        </nav>
        <p id="demo"></p>


        <table class="table  .table-bordered table-hover table-light">

            <thead>
                <th>Actor Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Last update</th>


            </thead>

            <tbody>
                <?php foreach ($records as $rec) {?>
                <tr>
                    <td><?php echo $rec->actor_id; ?></td>
                    <td><?php echo $rec->first_name; ?></td>
                    <td><?php echo $rec->last_name; ?></td>
                    <td><?php echo $rec->last_update; ?></td>

                </tr>
                <?php }?>


            </tbody>
        </table>



    </div>

</body>

</html>