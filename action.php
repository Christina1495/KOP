<?php
include('/sait/header.html');
?>
<?php
/*session_start(); //otkrili sessiju
$_SESSION['city']=($_REQUEST['city']);
$_SESSION['days'] = $_REQUEST['days'];
$_SESSION['Amount_people_old']=($_REQUEST['Amount_people_old']);
$_SESSION['Amount_people_child']=$_REQUEST['Amount_people_child'];
$_SESSION['gender']=$_REQUEST['gender'];*/

    /*echo "город: ".htmlspecialchars($_REQUEST['city'])."  Кол-во дней ".(int)$_REQUEST['days']." Кол-во взрослых".htmlspecialchars($_REQUEST['Amount_people_old']).
        " Кол-во детей".htmlspecialchars($_REQUEST['Amount_people_child'])." Тип поездки:".htmlspecialchars($_REQUEST['gender']);*/
if ($_REQUEST['gender'] == "Деловая поездка")
{?>
    <form name="myForms2" action="action2.php" method="post" class="center-block" style="height: 500px; width: 400px">
        <legend>Количество дней поездки: </legend><input type="text" name="days" />
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
        </fieldset>
        </p>
            <legend>Укажите чем вы планируете заниматься в данной поездке: </legend>
            <Input type = 'checkbox' Name ='plans_of1' value= 'Переговоры'>Переговоры
            <Input type = 'checkbox' Name ='plans_of2' value= 'Деловой ужин'>Деловой ужин
        </fieldset>
        <p><input type="submit"></p>
    </form>
<?}else{?>
    <form name="myForms3" action="action3.php" method="post" class="center-block" style="height: 500px; width: 400px">
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
        </fieldset>
        </p>
        <legend>Укажите чем вы планируете заниматься на отдыхе</legend>
        <Input type = 'checkbox' Name ='plans_fanny1' value= 'Экскурсии'>Экскурсии
        <Input type = 'checkbox' Name ='plans_fanny2' value= 'Пикник'>Пикник
        <Input type = 'checkbox' Name ='plans_fanny3' value= 'Поход'>Поход
        <Input type = 'checkbox' Name ='plans_fanny4' value= 'Пляж/аквапарк'>Пляж/аквапарк
        <Input type = 'checkbox' Name ='plans_fanny5' value= 'Зимние виды спорта'>Зимние виды спорта
        <Input type = 'checkbox' Name ='plans_fanny6' value= 'Концерт'>Концерт
        <Input type = 'checkbox' Name ='plans_fanny7' value= 'Поход в театр'>Поход в театр
        </fieldset>_fanny
        <p><input type="submit"></p>
    </form>
<?}


?>

<?php
include('/sait/footer.html');
?>
