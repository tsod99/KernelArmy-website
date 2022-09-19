<?php

// Gets DB information from private.php
require("private.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$pdo = new PDO($conn, $username, $password);

// Gets the user that matches the username from the database
function getUserFromDB($username)
{
    global $conn, $pdo;

    $result = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $result->execute([$username]) or die($conn->error);

    return $result->fetchAll();
}

// Sets the users last logged in IP
// $id user id
// $ip logged in ip
function setUserIP($id, $ip)
{
    global $conn, $pdo;
    
    $result = $pdo->prepare("UPDATE admins SET lastip = ? WHERE id = ?");
    $result->execute([$ip, $id]) or die($conn->error);
}

// Adds a recipe to the database
function addWriteupToDB($title, $folderPath, $originalLink, $author, $year, $month, $ctf, $category, $visible)
{
    global $conn, $pdo;
    $result = $pdo->prepare("INSERT INTO writeups (title, folderPath, originalLink, author, ctf, category, month, year, visible) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $result->execute([$title, $folderPath, $originalLink, $author, $ctf, $category, $month, $year, $visible]) or die($conn->error);

    return $result->insert_id;
}

// Adds ingredients to the database
function addTagsToDB($valueString)
{
    global $conn, $pdo;

    $result = $pdo->prepare("INSERT INTO tags (tag, writeupId) VALUES ?");
    $result->execute([$valueString]) or die($conn->error);
}

function getHighestId()
{
    global $conn, $pdo;
    $result = $pdo->prepare("SELECT MAX(id) as maxId FROM writeups");
    $result->execute() or die($conn->error);

    return $result->fetchAll();
}

// Selects a single recipe by id from the database
function getWriteupByIdFromDB($writeupId)
{
    global $conn, $pdo;

    $result = $pdo->prepare("SELECT * FROM writeups WHERE id = ?");
    $result->execute([$writeupId]) or die($conn->error);

    return $result->fetchAll();
}

// Updates recipe in database
function updateWriteupInDB($writeupId, $title, $originalLink, $author, $year, $month, $ctf, $category, $visible)
{
    global $conn, $pdo;
    
    $result = $pdo->prepare("UPDATE writeups SET title = ?, originalLink = ?, author = ?, ctf = ?, category = ?, year = ?, month = ?, visible = ? WHERE id = ?");
    $result->execute([$title, $originalLink, $author, $ctf, $category, $year, $month, $visible, $writeupId]) or die($conn->error);
}

// Deletes all ingredients from the database by recipe id
function deleteTagsFromDB($writeupId)
{
    global $conn, $pdo;
    $result = $pdo->prepare("DELETE FROM tags WHERE writeupId = ?");
    $result->execute([$writeupId]) or die($conn->error);
}

// Deletes all ingredients from the database by recipe id
function deleteWriteupFromDB($writeupId)
{
    global $conn, $pdo;
    $result = $pdo->prepare("DELETE FROM writeups WHERE id = ?");
    $result->execute([$writeupId]) or die($conn->error);
}

// Retrives all recipes from the database
function getAllWriteupsFromDB()
{
    global $conn, $pdo;
    $result = $pdo->prepare("SELECT * FROM writeups");
    $result->execute() or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}

// Gets ingredients that belong to the recipe id
function getTagsByWriteupIdFromDB($writeupId)
{
    global $conn, $pdo;
    $result = $pdo->prepare("SELECT * FROM tags WHERE writeupId = ?");
    $result->execute([$writeupId]) or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}

function getCTFYears()
{
    global $conn, $pdo;
    $result = $pdo->prepare("SELECT DISTINCT year FROM writeups ORDER BY year DESC");
    $result->execute() or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}

function getMonthsByYear($year)
{
    global $conn, $pdo;

    $result = $pdo->prepare("SELECT DISTINCT month FROM writeups WHERE year = ? ORDER BY month DESC");
    $result->execute([$year]) or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll()) {
        $rows[] = $row;
    }

    return $rows;
}

function getCtfsByMonthAndYear($month, $year)
{
    global $conn, $pdo;

    $result = $pdo->prepare("SELECT DISTINCT ctf FROM writeups WHERE year = ? and month = ?");
    $result->execute([$year, $month]) or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}

function getCategoriesByCtfsMonthAndYear($ctf, $month, $year)
{
    global $conn, $pdo;

    $result = $pdo->prepare("SELECT DISTINCT category FROM writeups WHERE ctf = ? and year = ? and month = ?");
    $result->execute([$ctf, $year, $month]) or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}

function getWriteupsByCTFMonthAndYear($ctf, $month, $year)
{
    global $conn, $pdo;
    $result = $pdo->prepare("SELECT title, id FROM writeups WHERE ctf = ? and year = ? and month = ?");
    $result->execute([$ctf, $year, $month]) or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}

function getWriteupsByCategoryCTFMonthAndYear($category, $ctf, $month, $year)
{
    global $conn, $pdo;
    $result = $pdo->prepare("SELECT title, id FROM writeups WHERE category = ? and ctf = ? and year = ? and month = ?");
    $result->execute([$category, $ctf, $year, $month]) or die($conn->error);

    $rows = [];
    
    while($row = $result->fetchAll())
        {
            $rows[] = $row;
        }

    return $rows;
}


?>