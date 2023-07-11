<?php


if (count($allDatabases) == 0){
    echo '<html>
<body>
<div class="container">
<img class="norResultsImg" src="../images/empty.59d15b3c.gif">
<h2 class="noresultfoundTxt">Oops, Database Not Found :(</h2>
    <a href="/"> <button class="addColumn">Back</button></a>
</div>
</body>
</html>';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Database List</title>
</head>
<body>
<br>
<br>
<h1 id="secondh1">All Databases</h1>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Database name
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($allDatabases as $databases=>$dbs):?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">
                <button ><?= $dbs[0]; ?></button>
            </td>
            <td>
                <form action="../index.php" method="post">
                    <button name="addColumnsDb" value="<?= $dbs[0];?>" >Add Tables and Columns</button>
                    <input type="hidden" name="action" value="addColumns">
                    <input hidden type="submit">
                </form>
            </td>

            <form action="../index.php" method="post">
                <td id="addvalue" class="px-6 py-4">
                    <button name="addValuesDb" value="<?= $dbs[0];?>">Add Values</button>
                    <input type="hidden" name="action" value="AddValues">
            </form>
            </td>


            <form action="../index.php" method="post">
                <td id="delete" class="px-6 py-4">
                    <button name="delete" value="<?= $dbs->Database;?>">Delete</button>
                    <input type="hidden" name="action" value="delete">
            </form>
            </td>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>
    <br>
    <br>
    <a href="/"> <button class="addColumn">Back</button></a>
</div>
</body>
</html>



<style>
    #secondh1{
        color: #0b474d;
        font-weight: bolder;
        font-size: 2.5rem;
        text-align: center;
    }
    table {
        text-align: center;
        align-items: center;
        border-collapse: collapse;
        border: 1px solid black;
        width: 1rem;
    }
    .table{
        text-align: center;
        margin-left: 17rem;
        justify-content: center;
        align-items: center;
    }
    th, td {
        border: 1px solid black;
        text-align: center;
    }
    td{
        background: #0B666A;
        color: white;
        font-weight: bold;
    }
    th{
        color: white;
        background: #35A29F;
    }
    #delete{
        background: #ff474c;
        color: white;
        font-weight: bold;
    }
    .addColumn {
        background: #0B666A;
        color: white;
        padding: 4px;
        height: 2.5rem;
        border-radius: 7px;
        margin-left: 1rem;
        width: 10rem;
        font-weight: bold;
    }
    .addColumn:active {
        box-shadow: 2px 2px 5px #3F51B5;
    }

    .norResultsImg{
        margin-left: 8.5rem;
        width: 62rem;
        height: 33rem;
        margin-top: -4rem;
    }
    .noresultfoundTxt {
        text-align: center;
        font-size: 3rem;
        margin-top: -5rem;
        color: #0b474d;
    }

</style>
