<?

// Requires conn.php so that we can connect to the database
require(__DIR__ . "/conn.php");

// Cleans input and returns cleaned version
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// checks if an admin is logged in and if their ip address matches
function checkIfLoggedIn($username)
{
    // Gets the user from the database
    $user = getUserFromDB(test_input($username));

    // checks the users ip address against the database
    return (strcmp($user["lastip"], $_SERVER['REMOTE_ADDR']) === 0);
}

function generatePassword($password)
{
    return password_hash(test_input($password), PASSWORD_DEFAULT);
}

// Creates an ingredients string to add to the database
// $recipeId recipe id the ingredients correspond to
// $ingredients ingredients to be added
function getTagsString($writeupId, $tags)
{
    $tagsString = "('" . $tags[0] . "', " . $writeupId . ")";

    for ($i = 1; $i < count($tags); $i++)
    {
        $tagsString .= ",\n('" . $tags[$i] . "', " . $writeupId . ")";
    }

    $tagsString .= ";";

    return $tagsString;
}

function getAllWriteups()
{
    $writeups = getAllWriteupsFromDB();
    return $writeups;
}

// Add recipe function
function addWriteup($title, $files, $author, $tags, $link, $writeup, $year, $month, $ctf, $category, $upload)
{
    $newId = (int)getHighestId()['maxId'];

    if ($newId == null) $newId = 1;
    else $newId = $newId + 1;

    mkdir("../uploads/");
    mkdir("../uploads/" . $newId . "/");

    file_put_contents("../uploads/" . $newId . "/readme.md", $writeup);

    // Adds the recipe tp the database
    $writeupId = addWriteupToDB($title, "../uploads/" . $newId . "/", $link, $author, $year, $month, $ctf, $category, $upload);

    return [$writeupId, $month, $title];
}

// Checks if ingredients need to be updated
function checkTagsUpdates($writeupId, $tags)
{
    // Gets all ingredients from the db
    $dBTags = getTagsByWriteupIdFromDB($writeupId);

    // if the count is not the same they need to be updated
    if (count($tags) != count($dBTags)) return true;

    // otherwise loop through all ingredients
    foreach ($tags as $tag)
    {
        // go through all database ingredients left 
        for ($i = 0; $i < count($dBTags); $i++)
        {
            // if the ingredient, component, qty and unit all match then delete the ingredient from the list
            if ($tag == $dBTags[$i]['tag']) 
            {
                array_splice($dBTags, $i, 1);
                break;
            }
        }
    }

    // return if nothing left in the list
    return (count($dBTags) != 0);

}

// Updates the recipe
function updateWriteup($writeupId, $title, $files, $author, $tags, $link, $writeup, $year, $month, $ctf, $category, $upload)
{

    updateWriteupInDB($writeupId, $title, $link, $author, $year, $month, $ctf, $category, $upload);

    // If ingredients need updating
    if (checkTagsUpdates($writeupId, $tags))
    {
        // Delete ingredients 
        deleteTagsFromDB($writeupId);

        // Add the new ingredients
        addTagsToDB(getTagsString($writeupId, $tags));
    }


    mkdir("../uploads/");
    mkdir("../uploads/" . $writeupId . "/");
    file_put_contents("../uploads/" . $writeupId . "/readme.md", $writeup);

}

// Gets the recipe and populates a dictionary
function getWriteupById($writeupId)
{

    $dBWriteup = getWriteupByIdFromDB($writeupId);

    $writeup = [
        'title' => $dBWriteup['title'],
        'author' => $dBWriteup['author'],
        'originalLink' => $dBWriteup['originalLink'],
        'ctf' => $dBWriteup['ctf'],
        'category' => $dBWriteup['category'],
        'month' => $dBWriteup['month'],
        'year' => $dBWriteup['year'],
        'tags' => getTagsByWriteupIdFromDB($writeupId),
        'writeup' => file_get_contents($dBWriteup['folderPath'] . "readme.md")
    ];


    return $writeup;
}

function deleteWriteupById($writeupId)
{
    $writeup = getWriteupByIdFromDB($writeupId);

    if ($writeup['folderPath'] == '../uploads/' . $writeupId . "/")
    {
        system("rm -rf ".escapeshellarg($writeup['folderPath']));
    }

    deleteTagsFromDB($writeupId);
    deleteWriteupFromDB($writeupId);
}

// Gets the website config
function getConfig()
{
    return include(__DIR__ . "/config.php");
}

// Sets the website config
function setConfig($newSettings)
{
    // gets the config
    $config = include(__DIR__ . "/config.php");

    // loop through all the keys in the input
    foreach (array_keys($newSettings) as $setting)
    {
        // if the key is in config then update the config
        if (is_array($config) && array_key_exists($setting, $config))
        {
            $config[$setting] = $newSettings[$setting];
        }
    }

    // write config to the config file
    file_put_contents(__DIR__ . "/config.php", '<?php return ' . var_export($config, true) . ';');
}


?>