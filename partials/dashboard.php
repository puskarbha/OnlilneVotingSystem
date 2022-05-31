<?php
    session_start();

    $data=$_SESSION['data'];
    if($_SESSION['status']==1){
        $status='<b class="text-success">voted</b>';
    }
    else{
        $status='<b class="text-danger">Not voted</b>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Dashboard</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- css file -->
        <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
            <!--Groups-->
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="Group image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5"> Group Name:</strong><br>
                        <strong class="text-dark h5"> Votes:</strong><br>
                     
                    </div>
                </div>
                <hr>
            </div>

            <!-- user profile -->
            <div class="col-md-5">
                <img src="../uploads/<?php echo $data['photo'] ?>" alt="user image" >
                <br> <br>
                <strong class="text-dark h5"> Name:</strong>
                <?php echo $data['username'] ; ?>
                <br><br>
                <strong class="text-dark h5"> Mobile:</strong>
                <?php echo $data['mobile'] ; ?><br><br>
                <strong class="text-dark h5"> Status:</strong>
                <?php echo $status ; ?><br><br>
            </div>
        </div>
    </div>
</body>
</html>