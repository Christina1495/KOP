<?php
include('sait/header.html');
?>
    <form name="myForms" action="action.php" method="post"  class="center-block" style="height: 500px; width: 400px" >
        <legend>Город</legend>
        <input type="text" name="city"  class="form-control"/>
    <fieldset>
        <legend>Укажите кол-во людей в поездку</legend>
        <Input type = 'Radio' Name ='gender' value= 'Деловая поездка' >Деловая поездка
        <Input type = 'Radio' Name ='gender' value= 'Отдых'>Отдых
    </fieldset>
        <br>
    <p><input type="submit" class="btn btn-info"></p>
    </form>
<?php
include('sait/footer.html');
?>