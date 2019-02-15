<?
$date = strtotime($_POST["date"]);
$years = $_POST["years"];
$renewal = $_POST["auto-renewal"];
$summn = $_POST["deposit-amount"];
$replenishment = $_POST["deposit-replenishment"];
$summadd = $_POST["amount-per-month"];
$percent=0.1;
$daysn=date("t", $date);
if ($replenishment==="Нет") {
	$summadd = 0;
}
	$date = date_create(date("Y-m",$date));
for($i=0;$i<$years*12;$i++){
	$today= strtotime(date_format($date, 'Y-m-d'));//определяем количество дней в месяце
	$year = date('Y',$today)."<br>";//определяем год
	$daysy = date('z', mktime(0, 0, 0, 12, 31, $year))+1;//и делаем перерасчет количества дней, на случай високосного
	date_add($date, date_interval_create_from_date_string('1 month'));//сдвигаем на следующий месяц
	$summn = round($summn + ($summn + $summadd)*$daysn*($percent / $daysy),2);//cтранная формула, если делается ежемесячный вклад он должен плюсоваться отдельно, а не попадать под низкий коэф от годового процента. А еще формула не зависит от точной даты вклада
}
echo $summn;