<?php
    echo $_POST['name'];

    if($_POST['rdo']=== 'Red')
    {
        echo "<body style='background-color: red;'>";
    }
    else if($_POST['rdo']=== 'Blue')
    {
        echo "<body style='background-color: blue;'>";
    }
    else if($_POST['rdo']=== 'Green')
    {
        echo "<body style='background-color: green;'>";
    }
?>