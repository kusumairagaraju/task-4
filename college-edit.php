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

    <title>college Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>college Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $college_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM college WHERE id='$college_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $college = mysqli_fetch_array($query_run);
                                ?>
                                <form action="function.php" method="POST">
                                    <input type="hidden" name="college_id" values="<?= $college['id']; ?>">

                                    <div class="mb-3">
                                        <label>college Name</label>
                                        <input type="text" name="Name" value="<?=$college['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Joining Year</label>
                                        <input type="text" name="Year" value="<?=$college['Year'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>college Branches</label>
                                        <input type="text" name="Branches" value="<?=$college['Branches'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>college Fees</label>
                                        <input type="text" name="Fees" value="<?=$college['Fees'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_college" class="btn btn-primary">
                                            Update college
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
Footer
