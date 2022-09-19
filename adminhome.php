<html>

<head>
    <title>Admin Home</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/phpbridge.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script type="text/Javascript">

    function addAlert(id, message)
    {

        var div = document.createElement('div');
        div.innerHTML = "<strong>" + message + "</strong>"
        div.className = "alert alert-success alert-dismissible fade show";
        div.setAttribute("role", "alert");

        var button = document.createElement('button');
        button.className = "btn-close";
        button.setAttribute("data-bs-dismiss", "alert");
        button.setAttribute("aria-label", "Close");

        div.appendChild(button);

        document.getElementById('modal-alert-' + id).appendChild(div);
    }

    </script>

    <?
    include "./includes/functions.php";
    ?>
</head>

<body>
    <?php
    session_start();

    if ($_SESSION["loggedin"] == true && checkIfLoggedIn($_SESSION["username"])) {
    ?>

        <div class="container-fluid w-75 pt-4">
            <div class="row border">
                <div class="col-3 mt-3 mb-2 pt-3 pb-2">
                    <div class="d-flex w-100">
                        <button type="button" class="btn btn-outline-primary add-writeup me-1" data-bs-toggle="modal" data-bs-target="#writeupModal">
                            Add Writeup
                        </button>
                    </div>
                </div>
                <div class="col-2 mt-3 mb-2 pt-3 pb-2">
                </div>
                <div class="col-3 mt-3 mb-2 pt-3 pb-2">
                </div>
                <div class="col-4 mt-3 mb-2 pt-3 pb-2">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>


            <div class="row border pt-3 pb-3 mt-3 mb-3">
                <div class="col-12">
                    <ul class="list-group d-grid gap-3 writeup-list">

                    </ul>
                </div>
            </div>

        </div>

        <?
            include "./includes/addWriteupModal.php";
            
    } else {
        $_SESSION["loggedin"] = false;
        $_SESSION["username"] = "";
        header("location: admin");
    }
        ?>

<script type="text/Javascript">

</script>


<script src="./js/admin.js"></script>


<?php include __DIR__ . "/includes/footer.php"; ?>

</body>

</html>