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
        echo($dbNameColumn);
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
            <input name="columnName[]"  placeholder="Column Name" type="text">
        <select name="dataType[]">
            <option value="int">Int</option>
            <option value="varchar(255)">Varchar</option>
            <option value="DATETIME">Date Time</option>
            <option value="TEXT">Text</option>
        </select>
    </tr>
        <button  class="addColumn">Add One Column</button>
        <input  name="dbnameForColumn" hidden value=" <?php echo($dbNameColumn); ?>" >
        <input hidden name="action" value="addColumnsToDb">
        <button type="submit" class="addColumn">Submit</button>
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
    let form = document.querySelector('form');

    addColumnBtn.addEventListener('click',(e)=>{
        let input = document.createElement('input');
        input.classList.add('columnName')
        input.innerHTML = "<input type";
        input.placeholder = 'Column Name';
        input.type = 'text';
        input.name = 'columnName[]';

        let table = document.querySelector('.table');

        let tr = document.createElement('tr');

        let select = document.createElement('select');
        select.name ='dataType[]';

        let opt1 = document.createElement('option');
        let opt2 = document.createElement('option');
        let opt3 = document.createElement('option');
        let opt4 = document.createElement('option');

        opt1.text = 'Int';
        opt1.value = 'int';

        opt2.text = 'Varchar';
        opt2.value = 'varchar(255)';

        opt3.text = 'Date Time';
        opt3.value = 'DATETIME';

        opt4.text = 'Text';
        opt4.value = 'TEXT';

        select.add(opt1);
        select.add(opt2);
        select.add(opt3);
        select.add(opt4);

        tr.appendChild(input);
        tr.appendChild(select);

        trRow.appendChild(tr)
        table.append(trRow);
    })
</Script>


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
    }
    select {
        color: white;
        text-align: center;
        background-color:  #0b474d;
        height: 2rem;
        border-radius: 6px;
        font-size: large;
        font-weight: 600;
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
        box-shadow: 2px 2px 5px #3F51B5;
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
        margin-left: 8.2rem;
    }
    }
</Style>
