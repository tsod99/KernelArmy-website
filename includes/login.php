<?

include __DIR__ . "/functions.php";

function setIP($username, $password)
{
    $user = getUserFromDB(test_input($username));

    setUserIP($user["id"], $_SERVER['REMOTE_ADDR']);
}

function authenticate($username, $password)
{
    $user = getUserFromDB(test_input($username));

    return password_verify(test_input($password), $user["password"]);
}


?>