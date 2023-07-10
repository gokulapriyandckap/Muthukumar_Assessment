<?php
require 'controller/userController.php';

$controllers = new userController();


if (isset($_POST['action']))
{
    $action = $_POST['action'];

    switch ($action){
        case 'create';
            $controllers->create($_POST);
            break;
        case 'delete';
            $controllers->dropDatabase($_POST);
            break;
        case 'addColumns';
            $controllers->addColumns($_POST);
            break;
        case 'addColumnsToDb';
            $controllers->addColumnsToDb($_POST);
            break;
        case 'addTable';
            $controllers->addTable($_POST);
            break;
        case 'addTablesToDb';
            $controllers->addTablesToDb($_POST);
            break;
        default:
            $controllers->index();
            break;
    }
}
else
{
    $controllers->index();
}


