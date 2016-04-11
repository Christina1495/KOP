<?php
include('/sait/header.html');
?>
<div class = "center-block" style="width: 600px; margin-top: 20px"><a onclick="print(); return false;"><span class="glyphicon glyphicon-print"></span></a></div>
<?php
/*session_start();kcmd vmkfjfnvfffk
echo "город: ".htmlspecialchars($_SESSION['city'])."  Кол-во дней ".(int)$_SESSION['days']." Кол-во взрослых".htmlspecialchars($_SESSION['Amount_people_old']).
    " Кол-во детей".htmlspecialchars($_SESSION['Amount_people_child'])." Тип поездки:".htmlspecialchars($_SESSION['gender']);*/
if ($_REQUEST['plans_of1'] && $_REQUEST['plans_of2'] ){?>
    <div class = "center-block" style="width: 600px; margin-top: 20px">
        <ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-credit-card">Важные документы</span></h2>
            <li class="active">
                <span class="badge pull-right">1</span>
                Паспорт
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Медицинские страховки (международный полис)
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Авиабилеты. Электронные распечатать
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Водительские права, международное водительское удостоверение.
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Если едете на своей машине: документы на машину, страховка грин карт
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Брони гостиниц, подтверждения апартаментов и т.п.
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Свои записи: маршрут, телефоны, адреса, контакты
            </li><li class="active">
                <span class="badge pull-right">1</span>
                Деньги на кредитных картах, наличные в рублях и в валюте.
            </li>
        </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-plus-sign">Лекарства</span></h2>

        <li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от головной боли
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            ﻿при хронических заболеваниях возьмите те лекарства, которые вам прописал врач.
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            обезболивающие
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от расстройства желудка
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от спазмов
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            аспирин
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            бактерицидный пластырь
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            гигиеническая помада
        </li>
        </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-exclamation-sign">Лекарства</span></h2>

        <li class="active">
            <span class="badge pull-right"><?=($_REQUEST['Amount_people_old']+$_REQUEST['Amount_people_child'])?></span>
            Зубные щетки и паста
        </li><li class="active">
            <span class="badge pull-right">2</span>
            Бритва и средства для бритья
        </li><li class="active">
            <span class="badge pull-right">3</span>
            Расческа,Дезодорант
        </li><li class="active">
            <span class="badge pull-right">10</span>
            Влажные салфетки и одноразовые платочки
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']/2?></span>
            Шампунь, гель для душа, мыло.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Маникюрные принадлежности (пилочка, ножницы).
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Помада/блеск для губ, устойчивая тушь для ресниц, маленькое зеркальце
            Заколки, резинки для волос
        </li><li class="active">
            <span class="badge pull-right">?</span>
            Крема, которыми вы пользуетесь в маленьком объеме.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Фен (если нет в отеле)
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            Носки
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            Нижнее белье
        </li><li class="active">
            <span class="badge pull-right">3</span>
            футболка
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Джинсы
        </li>
    </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-user">Предметы по выбору</span></h2>
        <li class="active">
            <span class="badge pull-right">2</span>
            ﻿деловой костюм/строгое платье
        </li>
        <li class="active">
            <span class="badge pull-right">2</span>
            туфли
        </li>
    </ul>
    </div><?}else{
if ($_REQUEST['plans_of1']){?>
<div class = "center-block" style="width: 600px; margin-top: 20px">
<ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-credit-card">Важные документы</span></h2>
        <li class="active">
            <span class="badge pull-right">1</span>
            Паспорт
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Медицинские страховки (международный полис)
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Авиабилеты. Электронные распечатать
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Водительские права, международное водительское удостоверение.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Если едете на своей машине: документы на машину, страховка грин карт
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Брони гостиниц, подтверждения апартаментов и т.п.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Свои записи: маршрут, телефоны, адреса, контакты
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Деньги на кредитных картах, наличные в рублях и в валюте.
        </li>
    </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-plus-sign">Лекарства</span></h2>

        <li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от головной боли
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            ﻿при хронических заболеваниях возьмите те лекарства, которые вам прописал врач.
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            обезболивающие
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от расстройства желудка
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от спазмов
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            аспирин
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            бактерицидный пластырь
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            гигиеническая помада
        </li>
    </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-exclamation-sign">Лекарства</span></h2>

        <li class="active">
            <span class="badge pull-right"><?=($_REQUEST['Amount_people_old']+$_REQUEST['Amount_people_child'])?></span>
            Зубные щетки и паста
        </li><li class="active">
            <span class="badge pull-right">2</span>
            Бритва и средства для бритья
        </li><li class="active">
            <span class="badge pull-right">3</span>
            Расческа,Дезодорант
        </li><li class="active">
            <span class="badge pull-right">10</span>
            Влажные салфетки и одноразовые платочки
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']/2?></span>
            Шампунь, гель для душа, мыло.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Маникюрные принадлежности (пилочка, ножницы).
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Помада/блеск для губ, устойчивая тушь для ресниц, маленькое зеркальце
            Заколки, резинки для волос
        </li><li class="active">
            <span class="badge pull-right">?</span>
            Крема, которыми вы пользуетесь в маленьком объеме.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Фен (если нет в отеле)
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            Носки
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            Нижнее белье
        </li><li class="active">
            <span class="badge pull-right">3</span>
            футболка
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Джинсы
        </li>
    </ul><ul class="nav nav-pills nav-stacked"><h2><span class="glyphicon glyphicon-user">Предметы по выбору</span></h2>
        <li class="active">
            <span class="badge pull-right">1</span>
            ﻿деловой костюм/строгое платье
        </li>
        <li class="active">
            <span class="badge pull-right">1</span>
            туфли
        </li>
    </ul>
</div><?}else{
if ($_REQUEST['plans_of2']){?>

    <div class = "center-block" style="width: 600px; margin-top: 20px">
       <ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-credit-card">Важные документы</span></h2>
        <li class="active">
            <span class="badge pull-right">1</span>
            Паспорт
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Медицинские страховки (международный полис)
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Авиабилеты. Электронные распечатать
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Водительские права, международное водительское удостоверение.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Если едете на своей машине: документы на машину, страховка грин карт
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Брони гостиниц, подтверждения апартаментов и т.п.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Свои записи: маршрут, телефоны, адреса, контакты
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Деньги на кредитных картах, наличные в рублях и в валюте.
        </li>
    </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-plus-sign">Лекарства</span></h2>

        <li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от головной боли
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            ﻿при хронических заболеваниях возьмите те лекарства, которые вам прописал врач.
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            обезболивающие
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от расстройства желудка
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            от спазмов
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            аспирин
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            бактерицидный пластырь
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            гигиеническая помада
        </li>
    </ul><ul class="nav nav-pills nav-stacked"> <h2><span class="glyphicon glyphicon-exclamation-sign">Лекарства</span></h2>

        <li class="active">
            <span class="badge pull-right"><?=($_REQUEST['Amount_people_old']+$_REQUEST['Amount_people_child'])?></span>
            Зубные щетки и паста
        </li><li class="active">
            <span class="badge pull-right">2</span>
            Бритва и средства для бритья
        </li><li class="active">
            <span class="badge pull-right">3</span>
            Расческа,Дезодорант
        </li><li class="active">
            <span class="badge pull-right">10</span>
            Влажные салфетки и одноразовые платочки
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']/2?></span>
            Шампунь, гель для душа, мыло.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Маникюрные принадлежности (пилочка, ножницы).
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Помада/блеск для губ, устойчивая тушь для ресниц, маленькое зеркальце
            Заколки, резинки для волос
        </li><li class="active">
            <span class="badge pull-right">?</span>
            Крема, которыми вы пользуетесь в маленьком объеме.
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Фен (если нет в отеле)
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            Носки
        </li><li class="active">
            <span class="badge pull-right"><?=(int)$_REQUEST['days']?></span>
            Нижнее белье
        </li><li class="active">
            <span class="badge pull-right">3</span>
            футболка
        </li><li class="active">
            <span class="badge pull-right">1</span>
            Джинсы
        </li>
    </ul> <ul class="nav nav-pills nav-stacked"><h2><span class="glyphicon glyphicon-user">Предметы по выбору</span></h2>
        <li class="active">
            <span class="badge pull-right">1</span>
            ﻿деловой костюм/строгое платье
        </li>
        <li class="active">
            <span class="badge pull-right">1</span>
            туфли
        </li>
    </ul>
    </div><?}}}
?>
