<?php
    session_start();
    require 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>College CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>College Details
                            <a href="college-create.php" class="btn btn-primary float-end">Add colleges</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>college Name</th>
                                    <th>Joining Year</th>
                                    <th>Branches</th>
                                    <th>Fees</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM college";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $college)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $college['id']; ?></td>
                                                <td><?= $college['Name']; ?></td>
                                                <td><?= $college['Year']; ?></td>
                                                <td><?= $college['Branches']; ?></td>
                                                <td><?= $college['Fees']; ?></td>
                                                <td>
                                                    <a href="college-view.php?id=<?= $college['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="college-edit.php?id=<?= $college['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="function.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_college" value="<?=$college['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>