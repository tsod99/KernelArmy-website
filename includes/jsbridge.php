<?php
    header('Content-Type: application/json');

    include "./functions.php";

    $aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        session_start();

        switch($_POST['functionname']) {

            case 'addWriteup':
                if ($_SESSION["loggedin"] == true && checkIfLoggedIn($_SESSION["username"]))
                {
                    if (is_array($_POST['arguments']) && count($_POST['arguments']) === 11)
                        $aResult['result'] = addWriteup($_POST['arguments'][0], $_POST['arguments'][1], $_POST['arguments'][2], $_POST['arguments'][3], 
                            $_POST['arguments'][4], $_POST['arguments'][5], $_POST['arguments'][6], $_POST['arguments'][7], $_POST['arguments'][8], $_POST['arguments'][9]
                            , $_POST['arguments'][10]);
                }
                else
                {
                    $aResult['result'] = "Not Logged In";
                }
                
                break;

                

            case 'updateWriteup':
                if ($_SESSION["loggedin"] == true && checkIfLoggedIn($_SESSION["username"]))
                {
                    if (is_array($_POST['arguments']) && count($_POST['arguments']) === 12)
                        $aResult['result'] = updateWriteup((int) $_POST['arguments'][11], $_POST['arguments'][0], $_POST['arguments'][1], $_POST['arguments'][2], $_POST['arguments'][3], 
                            $_POST['arguments'][4], $_POST['arguments'][5], $_POST['arguments'][6], $_POST['arguments'][7], $_POST['arguments'][8], $_POST['arguments'][9]
                            , $_POST['arguments'][10]);
                }
                else
                {
                    $aResult['result'] = "Not Logged In";
                }
                
                break;

            case 'deleteWriteupById':
                if ($_SESSION["loggedin"] == true && checkIfLoggedIn($_SESSION["username"]))
                {
                    $aResult['result'] = deleteWriteupById($_POST['arguments']);
                }
                else
                {
                    $aResult['result'] = "Not Logged In";
                }
                
                break;

            case 'getAllWriteups':
                $aResult['result'] = getAllWriteups();
                break;

            case 'getWriteupById':
                $aResult['result'] = getWriteupById((int)$_POST['arguments']);
                break;

            case 'getConfig':
                $aResult['result'] = getConfig();
                break;

            case 'getCTFYears':
                $aResult['result'] = getCTFYears();
                break;

            case 'getMonthsByYear':
                $aResult['result'] = getMonthsByYear($_POST['arguments']);
                break;

            case 'getCtfsByMonthAndYear':
                $aResult['result'] = getCtfsByMonthAndYear($_POST['arguments'][0], $_POST['arguments'][1]);
                break;

            case 'getCategoriesByCtfsMonthAndYear':
                $aResult['result'] = getCategoriesByCtfsMonthAndYear($_POST['arguments'][0], $_POST['arguments'][1], $_POST['arguments'][2]);
                break;

            case 'getWriteupsByCTFMonthAndYear':
                $aResult['result'] = getWriteupsByCTFMonthAndYear($_POST['arguments'][0], $_POST['arguments'][1], $_POST['arguments'][2]);
                break;

            case 'getWriteupsByCategoryCTFMonthAndYear':
                $aResult['result'] = getWriteupsByCategoryCTFMonthAndYear($_POST['arguments'][0], $_POST['arguments'][1], $_POST['arguments'][2], $_POST['arguments'][3]);
                break;

            case 'generatePassword':
                $aResult['result'] = generatePassword($_POST['arguments']);
                break;

            case 'setConfig':
                if ($_SESSION["loggedin"] == true && checkIfLoggedIn($_SESSION["username"]))
                {
                    $aResult['result'] = setConfig(($_POST['arguments']));
                }
                else
                {
                    $aResult['result'] = "Not Logged In";
                }
                
                break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);
