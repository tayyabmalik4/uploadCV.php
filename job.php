<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $adress = $_POST['adress'];
// this is stat to uploading files
    include 'cv.php';

    $email = $_POST['email'];

    $sql = "INSERT INTO `job` (`name`, `cat`, `phone`, `qualification`, `adress`,`cv`, `email`, `timestamp`) VALUES ('$name', '$cat', '$phone', '$qualification', '$adress','$target_file','$email', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if ($result){
        echo "your apply for job has been submitted successfully";
    }
    else{
        echo "something is an error";
    }


}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>job.com</title>
  </head>
  <body>
    <form action = "/loginsystem/job.php" method = "post" enctype="multipart/form-data">
    <!-- <form action = "/loginsystem/job.php" method = "post"> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mt-30">
                                <input class="form-control" type="text" name = "name" placeholder="Your full name">
                            </div>
                            <div class="col-xl-3 col-md-6 mt-30">
                                <select name="cat">
                                    <option selected disabled>Select a category</option>
                                    <option value="Front-end dev">Front-end dev</option>
                                    <option value="Back-end dev">Back-end dev</option>
                                    <option value="Designer">Designer</option>
                                    
                                </select>
                            </div>
                            <div class="col-xl-3 col-md-6 mt-30">
                                <input class="form-control" type="text" placeholder="Phone number" name ="phone">
                            </div>
                            <div class="col-xl-3 col-md-6 mt-30">
                                <input class="form-control" type="text" placeholder="Your Qualification" name = "qualification">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl col-md-6 mt-30">
                                <input class="form-control" type="text" placeholder="Your Address" name ="adress">
                            </div>
                            <div class="col-xl col-md-6 mt-30">
                                <div class="custom-file-upload">
                                    <label class="custom-file-label" for="customFile" name="file"></label>
                                    <input type="file" class="form-control" id="customFile" name ="file">
                                </div>
                            </div>
                            <div class="col-xl col-md-6 mt-30">
                                <input class="form-control" type="email" placeholder="Your email address" name ="email">
                            </div>
                            <div class="col-xl-3 col-md-6 mt-30">
                                <button type="submit" class="btn btn-sm btn-primary shadow w-100">APPLY NOW</button>
                            </div>
                        </div>
                    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>