
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Add Columns</title>
</head>
<body>
<div class="main_container">
    <div class="header">
        <h1 class="mb-2 mt-0 text-5xl font-medium leading-tight text-primary">
            Database Name :
            <?php
            echo($dbNameTable);
            ?>
        </h1>
    </div>
    <br>
    <br>
    <table class="table">
        <div class="container">
            <tr class="columnRow">
                <form action="../index.php" method="post">
                    <input name="tableName"  placeholder="Table Name" type="text">
            </tr>
            <button  class="addColumn">Add One Table</button>
            <input  name="dbnameForTable" hidden value=" <?php echo($dbNameTable); ?>" >
            <input hidden name="action" value="addTablesToDb">
            <button  class="addColumn">Submit</button>
            <a href="/"> <button class="addColumn">Back</button></a>
            </form>
        </div>
    </table>
</div>
</body>
</html>

<Script>
    let addColumnBtn = document.querySelector('.addColumn');
    let trRow = document.querySelector('.columnRow');

    addColumnBtn.addEventListener('click',(e)=>{
        let input = document.createElement('input');
        input.placeholder = 'Table Name';
        input.type = 'text';
        input.name = 'tableName';

        let table = document.querySelector('.table');

        let tr = document.createElement('tr');



        tr.appendChild(input);

        trRow.appendChild(tr)
        table.append(trRow);
    })
</Script>


<Style>
    h1{
        background: linear-gradient(45deg, #97239b, #9701ff);
        color: white;
    }
    .main_container{
        text-align: center;
    }
    .container{
        text-align: center;
        display: flex;
    }
    input{margin-right: 1rem;
        color: white;
        text-align: center;
        background-color: #082b69;
        height: 2rem;
        width: 15rem;
        border-radius: 6px;
        font-size: large;
        font-weight: 600;
    }
    select {
        color: white;
        text-align: center;
        background-color: #082b69;
        height: 2rem;
        border-radius: 6px;
        font-size: large;
        font-weight: 600;
    }
    .addColumn {
        background: #3F51B5;
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

</Style>
