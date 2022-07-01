<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>college Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>college Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="function.php" method="POST">

                            <div class="mb-3">
                                <label>college Name</label>
                                <input type="text" name="Name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Joining Year</label>
                                <input type="text" name="Year" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>college Branches</label>
                                <input type="text" name="Branches" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>college Fees</label>
                                <input type="text" name="Fees" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_college" class="btn btn-primary">Save college</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>