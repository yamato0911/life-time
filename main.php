<?php 

date_default_timezone_set('Asia/Tokyo');

function day_diff($date1, $date2) {

    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
 
    $seconddiff = abs($timestamp2 - $timestamp1);
 
    $daydiff = $seconddiff / (60 * 60 * 24);
 
    return $daydiff;
 
}



if(isset($_POST['birthyear'])){
    $birthyear = $_POST['birthyear'];
}
if(isset($_POST['birthmonth'])){
    $birthmonth = $_POST['birthmonth'];
}
if(isset($_POST['birthday'])){
    $birthday = $_POST['birthday'];
}
if(isset($_POST['sleeptime'])){
    $sleepTime = $_POST['sleeptime'];
}
if(isset($_POST['poortime'])){
    $poorTime = $_POST['poortime'];
}

function answer(){
    if($poorTime <= 0){
        echo '素晴らしい';
    } elseif($poorTime <= 3){
        echo '時間を有効活用できていますね';
    } elseif($poorTime <= 5){
        echo "時間の使い方を見直しましょう";
    } else {
        echo "ニートですか？";
    }
}

// -------------------------変数グループ-------------------------

$oneDay = 24;
$today = date("Y年m月d日");
$now = date("Ymd");
$birthMonth = str_pad($birthmonth,2,0,STR_PAD_LEFT);
$birthDay = str_pad($birthday,2,0,STR_PAD_LEFT);
$birth = $birthyear . $birthMonth . $birthDay;
$birthdate = date("Ymd",strtotime($birth));
$nowYear = floor(($now-$birthdate) / 10000) . '歳';
$remainYear = 100 - $nowYear;
$passedDay = day_diff($now, $birthdate) . "<br />";
$time_passed['send_time'] = $remainYear;
$time = "+" . $time_passed['send_time'] . "year";
$futureYear = date("Ymd",strtotime($time));
$lifedHour = $passedDay * $oneDay;
$futureDay = day_diff($futureYear, $now);
$lifeHour = $futureDay * $oneDay;
$activeHour = $lifeHour - ($sleepTime * $futureDay);
$activeDay = $activeHour / 24;
$activeYear = floor($activeDay / 365);
$wasteTime = floor(($poorTime * $futureDay) / 24);




?>

