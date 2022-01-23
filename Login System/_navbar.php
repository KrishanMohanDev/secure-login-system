<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">
    <style>
        * {
            @import url('https://fonts.googleapis.com/css2?family=Yesteryear&display=swap');
        }

        .navbar {
            box-sizing: border-box;
            background: #6665ee;
        }

        .navbar-brand {
            font-family: "Youth Touch DEMO";
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="./login-user.php"><img src="https://see.fontimg.com/api/renderfont4/4VwY/eyJyIjoiZnMiLCJoIjoyMiwidyI6MTAwMCwiZnMiOjIyLCJmZ2MiOiIjRUZFOUU5IiwiYmdjIjoiIzAwMDAwMCIsInQiOjF9/SUNVUkU/youth-touch-demo-regular.png" alt="Lettering fonts"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./login-user.php">Home</a>
                    </li>
                    <?php
                    ?>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="./logout-user.php" tabindex="-1" aria-disabled="true">Log out</a>
                    </li>
                </ul>
                <a class="nav-link text-white" aria-current="page" href="./signup-user.php">Sign up</a>
                <button type="button" class="btn btn-outline-light" href="./login-user.php">Login</button>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>