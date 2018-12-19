<?
//date_default_timezone_set("Europe/Kiev");

$boss_mail="irina@geffenmedical.com";
$admine_mail="eliran.schory@geffenmedical.com";
$date=date("d.m.y");
$time=date("H:i");

$headers = "From: GeffenMedical.co.il";

$name=htmlspecialchars($_POST["visitor_name"]);
$email=htmlspecialchars($_POST["visitor_email"]);
$phone=htmlspecialchars($_POST["visitor_phone"]);
$msg=htmlspecialchars($_POST["visitor_message"]);

$msg="
Имя: $name
E-mail: $email
Номер телефона: $phone
Сообщение: $msg
";

mail($boss_mail, "$date $time", $msg, $headers);
mail($admine_mail, "$date $time", $msg, $headers);

exit;
?>