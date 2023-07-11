<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Add Values</title>
</head>
<body>
<div class="main_container">
<div class="header">
    <h1 class="mb-2 mt-0 text-5xl font-medium leading-tight text-primary">
        Database Name :
        <?php
        echo($dbNameValue);
        ?>
    </h1>
</div>
</div>
<br>
<table class="table">
    <div class="container">
        <tr class="columnRow">
            <form action="../index.php" method="post">
                <div class="label"><label>Table Name</label></div>
                <input name="tableName" value="<?php
                echo $tables;
                ?>" placeholder="Table Name" type="text">
                <div class="label"><label>Column Name</label></div>
                <input name="columnName[]"  value="<?php
                echo($columnName);
                ?>" placeholder="Column Name" type="text">
                <input name="valueName"  value="" placeholder="Value Name" >
        </tr>
        <button  class="addColumn">Add Value</button>
        <input  name="dbnameForValues" hidden value=" <?php echo($dbNameValue); ?>" >
        <input hidden name="action" value="addValuesToDb">
        <button type="submit" class="addColumn">Submit</button>
        <a href="/"> <button class="addColumn">Back</button></a>
        </form>
    </div>
</body>
</html>


<Style>
    h1{
        background: #0b474d;
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
        background-color: #0b474d;
        height: 2rem;
        width: 15rem;
        border-radius: 6px;
        font-size: large;
        font-weight: 600;
        margin-left: 4rem;
    }
    .addColumn {
        background: #0b474d;
        color: white;
        padding: 4px;
        height: 2.5rem;
        border-radius: 7px;
        margin-left: 1rem;
        width: 10rem;
        font-weight: bold;
    }
    .addColumn:active {
        box-shadow: 2px 2px 5px #0b474d;
    }
    .addColumn:hover{
        transform:scale(1);
        box-shadow: 0 20px 55px rgba(0,0,0,0.14), 0 15px 20px rgba(0,0,0,0.14);
    }
    .table{
        margin-left: 190px;
        margin-top: 10px;
    }
    .columnName{
        margin-top: 10px;
        margin-left: 12.2rem;
    }
    .label{
        margin-left: 8.5rem;
        font-size: large;
        font-weight: 600;
        color: #071952;
    }
</style>


<Script>
    let addColumnBtn = document.querySelector('.addColumn');
    let trRow = document.querySelector('.columnRow');
    let form = document.querySelector('form');

    addColumnBtn.addEventListener('click',(e)=>{
        let input = document.createElement('input');
        input.classList.add('columnName')
        input.innerHTML = "<input type";
        input.placeholder = 'Value';
        input.type = 'text';
        input.name = 'valueName[]';

        let table = document.querySelector('.table');

        let tr = document.createElement('tr');

        tr.appendChild(input);

        // console.log(tr)
        trRow.appendChild(tr)
        table.append(trRow);

        // form.appendChild(tr)
        // trRow.append(form)
        // table.append(trRow)

    })
</Script>