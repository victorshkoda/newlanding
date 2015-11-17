<?header('Content-Type: text/html; charset=utf-8');?>
<?
  include "libmail.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
  <title>Document</title>
</head>
<body>
  <?php
#Здесь будет происходить добавление контакта


$cl_name ="";
$cl_email ="";
$cl_phone ="";
$form_name="";

  $cl_name    = htmlspecialchars($_GET['name']);
  $cl_email   = htmlspecialchars($_GET['email']);
  $cl_phone   = htmlspecialchars($_GET['phone']);
  $form_name   = htmlspecialchars($_GET['form_name']);
  $phrase = htmlspecialchars($_GET['phrase']);
  $referer = htmlspecialchars($_GET['referer']);


$subject = 'Новая Заявка по isfr';
 
// текст письма
$message = '
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>'.$form_name.'</title>
    </head>
    <body>
      <p>имя: '.$cl_name.'</p>
      <p>E-mail: '.$cl_email.'</p>
      <p>телефон.:'.$cl_phone.'</p>
      <br>
      <p>Источник.:'.$referer.'</p>
      <p>Фраза.:'.$phrase.'</p>
    </body>
</html>
';

$m= new Mail; // начинаем 
$m->From( "info@intop.kz" ); // от кого отправляется почта 


$m->To( "sg1144@mail.ru" );


$m->Subject( "Заявка с сайта newlanding" );
$m->Body( $message, "html" );    
$m->Priority(3) ;    // приоритет письма

$m->smtp_on( "cp17.skilltex.kz", "info@intop.kz", "123456aa" ) ; // если указана эта команда, отправка пойдет через SMTP 
$m->Send();    // а теперь пошла отправка
if (1==1) {
     ?>
    <!-- <script>
       window.alert("Сообщение отправлено!");
    </script>\ -->


    <?php
//error_reporting();

/* $root=__DIR__.DIRECTORY_SEPARATOR.'api/';
require $root.'prepare.php'; #Здесь будут производиться подготовительные действия, объявления функций и т.д.
require $root.'auth.php'; #Здесь будет происходить авторизация пользователя
require $root.'account_current.php'; #Здесь мы будем получать информацию об аккаунте
require $root.'fields_info.php'; #Получим информацию о полях
require $root.'contacts_list.php'; #Получим информацию о контактах
require $root.'lead_add.php';
require $root.'contact_add.php'; #Здесь будет происходить добавление контакта */
?>
<?
}
else {
    ?>
    <script>
        window.alert("Сообщение НЕ отправлено, заполните все поля. При возникновении ошибки повторно просьба перезвонить нам лично!");
    </script>
    <?    } ?>
 
<script type="text/javascript">
   window.location = "/thankyou.php"
</script>
</body>
</html>
