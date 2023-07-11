<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/Ellipse%201.svg" >
    <title>Database Management</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="text-gray-100 bg-white body-font shadow w-full">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <a>
            <img src="../images/db%20logo.svg"  alt="logo" id="image" >
            <p class="p">Database Management</p>
        </a>
        </nav>

        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <form action="../index.php" method="post">
            <input type="search" name="search" id="search_bar" placeholder="Search DB" class="bg-gray-100 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                <input name="action" hidden value="searchDb">
                <button type="submit" id="searchBtn" class="absolute right-0 top-0 mt-3 mr-4">Search</button>
            </form>
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
    </svg>
            </button>
        </div>
    </div>
</header>

<header class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center">

    <h1 class="font-semibold text-lg" id="h1">Add Database</h1>
</header>
<div class="flex items-center bg-gray-100  text-gray-800">
    <div class="p-4 w-full">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded">
                    <a href="../view/insertDb.php">
                    <div id="empty-cover-art" class="py-5 h-full rounded sm:w-full  text-center opacity-50 md:border-solid md:border-2 md:border-gray-400">
                        <center><svg width="48" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg></center>
                        <div class="">
                            <button>Create New Database</button>
                        </div>
                    </a>
        </div>
    </div>
        <br>
        <br>
        <br>
        <div class="table">
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
                <?php foreach ($allDatabase as $databases=>$dbs):?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                   <button ><?= $dbs->Database; ?></button>
                    </td>
                    <td>
                    <form action="../index.php" method="post">
                    <button name="addColumnsDb" value="<?= $dbs->Database;?>" >Add Tables and Columns</button>
                    <input type="hidden" name="action" value="addColumns">
                    <input hidden type="submit">
                    </form>
                    </td>

                    <form action="../index.php" method="post">
                        <td id="addvalue" class="px-6 py-4">
                            <button name="addValuesDb" value="<?= $dbs->Database;?>">Add Values</button>
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
        </div>

</body>
</html>


<style>
    h1 {
        margin-left: 8rem;
        font-size: 3rem;
        color: darkslategray;
    }
   .p{
        color: #0b474d;
        font-size: larger;
        font-weight: 600;
    }
    #h1 {
        color: #0b474d;
        font-weight: bolder;
        font-size: 2.5rem;
        margin-top: 1rem;
        margin-left: 30rem;
    }
    #secondh1{
        color: #0b474d;
        font-weight: bolder;
        font-size: 2.5rem;
        margin-top: -4rem;
        margin-left: 4rem;
        margin-bottom: 0.5rem;
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
   #addvalue{
       background: #0B666A;
       color: white;
       font-weight: bold;
   }
   #addvalue:hover{
       transform:scale(1);
       box-shadow: 0 20px 55px rgba(0,0,0,0.14), 0 15px 20px rgba(0,0,0,0.14);
   }
   #image{
       height: 5rem;
       margin-top: 10px;
       margin-bottom: 10px;
       margin-left: 3rem;
       width: 5rem;
   }
   #search_bar{
       margin-right: -23rem;
       height: 2.8rem;
       background: #0b474d;
       color: white;
       font-size: medium;
       width: 50rem;
       font-size: medium;
       font-weight: normal;
   }
    input::placeholder{
        color: white;
        font-size: medium;
        font-weight: bold;
    }
    #searchBtn{
        background: #0b474d;
        color: white;
        padding: 4px;
        height: 2.5rem;
        border-radius: 7px;
        margin-left: 1rem;
        width: 10rem;
        font-weight: bold;
        margin-top: 2.8rem;
    }
    #searchBtn:hover{
        transform:scale(1);
        box-shadow: 0 20px 55px rgba(0,0,0,0.14), 0 15px 20px rgba(0,0,0,0.14);
    }
</style>