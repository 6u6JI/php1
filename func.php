<?php
function main(){
 if (isset($_GET['page'])) {
 	$page=$_GET['page'];

 }
 else {
 	$page=1;

 }

switch ($page) {
	case '1':
		include ('./index.php');
		break;
			case '2':
		include ('./page/sxemy.php');
		break;
	case '3':
		include ('./page/contacts.php');
		break;
    case '4':
        include ('./page/fedback.php');
        break;

	default:
		include ('./page/index.php');
		break;
}

function shema(){
 if (isset($_GET['shema'])) {
 	$shema=$_GET['shema'];

 }
 else {
 	$shema=1;

 }

switch ($shema) {
	case '1':
		include ('./shema/1.php');
		break;
	case '2':
		include ('./shema/2.php');
		break;
    case '3':
        include ('./shema/3.php');
        break;
	default:
		include ('./shema/1.php');
		break;
}
}
function auth($step)
  {
switch($step)
{case '1':
  if (isset($_GET['email']) and isset($_GET['password']) ) {
    $email=$_GET['email'];
    $password=$_GET['password'];
    if ($email=='123@mail.ru' and $password=="123456") {
      echo "Привет ". $email ;


    //создать сессию
    //и в сессию записать инфу что мы зарегены
$_GET['step']= 2;
    }
echo '<script type="text/javascript">setTimeout(function(){location.replace("'.$url['url'].'");}, 15000);</script>';

  }

  break;
  case '2':
    # перенаправить в закрытую часть сайта
    break;
  default :echo '<script type="text/javascript">setTimeout(function(){location.replace("'.$url['url'].'");}, 15000);</script>';

  }
}
function auth_main()
{
  if (isset($_GET['step'])) {
    auth($_GET['step']);
  }
}
?>
