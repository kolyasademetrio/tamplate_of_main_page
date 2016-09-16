<?php
$sendto   = "nisharkua@gmail.com";
$backurl = "thanx.html";
$username = $_POST['name'];
$userphone = $_POST['phone'];
$headmail = "Name";

$subject  = "Название: Новое сообщение";
$headers  = "From: " . strip_tags($headmail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($headmail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Получить консультацию</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$userphone."</p>\r\n";
$msg .= "</body></html>";

if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 1000);
//--></script><center>OK!</center>";
} else {
    echo "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 1000);
//--></script><center>BAD</center>";
}

?>