<?php
session_start();
echo "祝大家";
if(Lunar_calendar(date("Y/m/d"))=="2017/12/30"){
    $happy=$_SESSION['happy'];
    $happiness=$_SESSION['happiness'];
    unset($_SESSION['annoyance']);
    $url="2018.php?happy=".$happy."&happiness=".$happiness;
    echo " window.location.href = '$url' ";
}
?>