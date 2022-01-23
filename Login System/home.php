<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $fetch_info['name'] ?> | Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">

    <!-- external css files -->
    <link rel="stylesheet" href="st.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="./login-user.php"><img src="https://see.fontimg.com/api/renderfont4/4VwY/eyJyIjoiZnMiLCJoIjoyMiwidyI6MTAwMCwiZnMiOjIyLCJmZ2MiOiIjRUZFOUU5IiwiYmdjIjoiIzAwMDAwMCIsInQiOjF9/SUNVUkU/youth-touch-demo-regular.png" alt="Lettering fonts"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse navbar" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./login-user.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="./login-user.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="./signup-user.php">Sign up</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-light"><a href="./logout-user.php">Logout</a></button>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Welcome to ICURE</h1>
        <p>We care about your Security</p>
        <h2>Welcome <?php echo $fetch_info['name'] ?></h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>