<html>

<head>
    <title>Admin Login</title>
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <?
    include "./includes/login.php";
    ?>
</head>

<body class=" position-relative">
    <?php
    // define variables and set to empty values
    $username = $password = $errMsg = "";

    session_start();

    if ($_SESSION["loggedin"] == true && checkIfLoggedIn($_SESSION["username"])) {
        header("location: adminhome");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);

        if ($username && $password) {
            if (authenticate($username, $password)) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                
                setIP($username, $password);
                header("location: adminhome");
            } 
            else {
                $errMsg = "Username or Password is incorrect";
            }
        }
    }

    
    ?>

    <div class="card position-absolute top-50 start-50 translate-middle w-25 h-50">
        <div class="card-body position-absolute top-50 start-50 translate-middle text-center">
            <form method="post" action="admin">
                <legend>Admin Login</legend>
                <hr>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <?
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!$username) {
                ?>
                        <div class="alert alert-danger" role="alert">
                            Please Include a Username!
                        </div>

                <?
                    }
                }
                ?>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <?
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!$password) {
                ?>
                        <div class="alert alert-danger" role="alert">
                            Please Include a Password!
                        </div>

                <?
                    }
                }
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($errMsg) {
                ?>
                        <br>
                        <br>
                        <div class="alert alert-danger" role="alert">
                            <? echo $errMsg; ?>
                        </div>

                <?
                    }
                }
                ?>
            </form>
        </div>
    </div>


    <?php include __DIR__ . "/includes/footer.php"; ?>

</body>

</html>