<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список вещей в поездку</title>
</head>
<body>
<?$b_empty = true;?>
<?if ($b_empty){?>
<form name="myForms" action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    <p>Город:</p><input type="text" name="city" />
    <p>Количество дней поездки: </p><input type="text" name="days" />
    <p>
        <fieldset>
            <legend>Укажите кол-во людей в поездку</legend>
    <p>Количество взрослых:
        <select name="Amount_people_old" >
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
            <option >6</option>
            <option >7</option>
            <option >8</option>
            <option >9</option>
            <option >10</option>
        </select>
    </p>
    <p>Количество детей:
        <select name="Amount_people_child" >
            <option> 0</option>
            <option> 1</option>
            <option> 2</option>
            <option> 3</option>
            <option> 4</option>
            <option> 5</option>
            <option> 6</option>
            <option> 7</option>
            <option> 8</option>
            <option> 9</option>
        </select>
    </p>
    </fieldset></p>
    <fieldset>
        <legend>Укажите кол-во людей в поездку</legend>
        <Input type = 'Radio' Name ='gender' value= 'Деловая поездка'>Деловая поездка
        <Input type = 'Radio' Name ='gender' value= 'Отдых'>Отдых
    </fieldset>
    <p><input type="submit"></p>
    <?$b_empty = false;?>
</form><?}else?>
</body>
</html>

<?php
    echo htmlspecialchars($_REQUEST['city']);
    echo (int)$_REQUEST['days'];
    echo htmlspecialchars($_REQUEST['Amount_people_old']);
echo htmlspecialchars($_REQUEST['Amount_people_child']);
echo htmlspecialchars($_REQUEST['gender']);
?>
