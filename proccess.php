<? session_start();
header('Content-type: text/html; charset=utf-8'); 
if (!isset($_COOKIE['forum'])) { 
	$forum = $_GET['forum'];
	if ($forum == 'lolzteam' or 'codew'){
	setcookie("forum",$forum,time()+3600000);
	} else {
		header("Refresh:0;url=http://kassa.rambler.ru");
	}
}
if (isset($_GET['filmname'])) { 
	$filmname = $_GET['filmname'];
	$_SESSION['filmname'] = $filmname;
	setcookie("filmname",$filmname,time()+3600000);
} 
if (isset($_GET['filmimage'])) {
	$filmimage = $_GET['filmimage'];
	$_SESSION['filmimage'] = $filmimage;
	setcookie("filmimage",$filmimage,time()+3600000);
}
if (isset($_GET['filmdesc'])) {
	$filmdesc = $_GET['filmdesc'];
	$_SESSION['filmdesc'] = $fildesc;
	setcookie("filmdesc",$filmdesc,time()+3600000);
}
if (isset($_GET['filmdate'])) {
	$filmdate = $_GET['filmdate'];
	$_SESSION['filmdate'] = $filmdate;
	setcookie("filmdate",$filmdate,time()+3600000);
}
if (isset($_GET['filmkinoteatr'])) {
	$filmkinoteatr = $_GET['filmkinoteatr'];
	$_SESSION['filmkinoteatr'] = $filmkinoteatr;
	setcookie("filmkinoteatr",$filmkinoteatr,time()+3600000);
}
if (isset($_GET['filmaddr'])) {
	$filmaddr = $_GET['filmaddr'];
	$_SESSION['filmaddr'] = $filmaddr;
	setcookie("filmaddr",$filmaddr,time()+3600000);
}
if (isset($_GET['filmgirlname'])) {
	$filmgirlname = $_GET['filmgirlname'];
	$_SESSION['filmgirlname'] = $_GET['filmgirlname'];
	setcookie("filmgirlname",$filmgirlname,time()+3600000);
	header("Refresh:0;url=/kino");
}
if (isset($_GET['sitename'])) {
	$sitename = $_GET['sitename'];
	$_SESSION['sitename'] = $_GET['sitename'];
	setcookie("sitename",$sitename,time()+3600000);
	header("Refresh:0;url=/kino");
}
if (isset($_GET['filmprice'])) {
	$filmprice = $_GET['filmprice'];
	$_SESSION['filmprice'] = $_GET['filmprice'];
	setcookie("filmprice",$filmprice,time()+3600000);
	header("Refresh:0;url=/kino");
}
if (isset($_GET['qiwi'])) {
	$qiwi = $_GET['qiwi'];
	$_SESSION['qiwi'] = $_GET['qiwi'];
	setcookie("qiwi",$qiwi,time()+3600000);
	header("Refresh:0;url=/kino");
}

if ('1' == '1') { echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <link rel="icon" href="/kino.ico" type="image/x-icon">
<link rel="shortcut icon" href="/kino.ico" type="image/x-icon"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Купить билет на '.$_COOKIE['filmname'].' | '.$_COOKIE['sitename'].'</title><script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/fonts_cnt.css?2889730895" />
  <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?27134955434" />
    <link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?25135973930"></link>
    <script type="text/javascript" language="javascript" src="https://vk.com/js/api/common_light.js?2102079137"></script>
  </head>

  <body onload="doResize();" class="VK oauth_centered">
   
    <div class="oauth_wrap">
      <div class="oauth_wrap_inner">
        <div class="oauth_wrap_content" id="oauth_wrap_content">
          <div class="oauth_head">
  <a class="fl_l" href="#" target="_blank">'.$_COOKIE['sitename'].'</a>
  <div id="oauth_head_info" class="oauth_head_info fl_r">
    
  </div>
</div>

<div id="indexcontent" >
  <div class="box_msg_gray box_msg_padded"><b>Проверьте данные и нажмите "оплатить". После оплаты билеты будут выданы здесь.</b></div>
<div style="
    text-align: left;
">
<br>
<center><div>
<div style="
    display: inline-block;
    padding: 10px;
    width: 340px;
    border-top: 1px dashed #62ae87;
    "><span style="
    font-weight: bold;
    ">Название услуги: </span><span>'.$_COOKIE['filmname'].'</span></div><Br><div style="
    display: inline-block;
    padding: 10px;
    border-top: 1px dashed #62ae87;
    width: 340px;
    "><span style="
    font-weight: bold;
    ">Выбрано 2 билета:</span><span style="
"> Ряд 10, место 5. Ряд 10, место 6.</span></div>
<br>
<div style="
    display: inline-block;
    padding: 10px;
    width: 340px;
    border-top: 1px dashed #62ae87;
    "><span style="
    font-weight: bold;
    ">Время сеанса: </span><span>'.$_COOKIE['filmdate'].'</span></div>
<br><div style="
    display: inline-block;
    padding: 10px;
    width: 340px;
    border-top: 1px dashed #62ae87;
    "><span style="
    font-weight: bold;
    ">Кинотеатр: </span><span>'.$_COOKIE['filmkinoteatr'].'</span></div><br>
<div style="
    display: inline-block;
    padding: 10px;
    width: 340px;
    border-top: 1px dashed rgb(98, 174, 135);
    "><span style="
    font-weight: bold;
    ">Адрес: </span><span>'.$_COOKIE['filmaddr'].'</span></div><br>
	<div style="
    display: inline-block;
    padding: 10px;
    width: 340px;
    border-top: 1px dashed rgb(98, 174, 135);
    border-bottom: 1px dashed #62ae87;
    "><span style="
    font-weight: bold;
    ">Стоимость заказа: </span><span>'.$_COOKIE['filmprice'].' руб.</span></div>
	<br><br>
<div style="
    display: inline-block;
    padding: 10px;
    "><span style="
    font-weight: bold;
    ">Создатель заказа:</span><span> '.$_COOKIE['filmgirlname'].'</span></div>
<div style="
    display: block;
    padding: 0px;
    /* float:right; */
    /* border: 1px solid #62ae87; */
    color: black;
    "><form method="get" action="https://w.qiwi.com/payment/form.action" style="text-align: center;" target="_blank">';
	?>
<input type="hidden" name="extra['account']" value="<? echo $_COOKIE['qiwi']; ?>">
<input style="
max-width: 40%;
height: 50px;
font-size: 20px;
font-family: play;
" type="hidden" min="20" name="amountInteger" value="<? echo $_COOKIE['filmprice']; ?>'">
<input type="hidden" name="provider" value="99">

<input type="hidden" name="amountFraction" value="0">
<input type="hidden" name="extra['comment']" value="Билеты <? echo $_COOKIE['filmdate']; ?>. Заказ от <? echo $_COOKIE['filmgirlname']; ?>">
<input type="submit" style="padding: 0 10px;height: 30px;width: 300px;margin-top: 1px;font-family: play;font-size: 15px!important;border: 1px solid #5bbd72 !important;background: #5bbd72 !important;color: #fff!important;" value="Оплатить" target="_blank">
</form></div></div>
<? echo'
<br></div></center>

  
</div>
        </div>
    </div>
  </form>
</div>
        </div>
      </div>
    </div>
	<style>blockquote {
    background: rgba(247, 247, 247, 0.51);
    box-shadow: -1px 0px 0px 1px #e3e4e8;
    font-style: italic;
    margin: 1.5em 10px;
    padding: 0.5em 10px;
}
 
blockquote:before {
    color: #bbb;
    content: "\201C"; /* Непечатаемый символ слева */
    font-size: 3em;
    line-height: 0.1em;
    margin-right: 0.2em;
    vertical-align: -.4em;
}
 a.fl_l {
    text-decoration: none;
    font-family: monospace;
    font-size: 25px;
    color: white;
    font-weight: bold;
}.oauth_centered .oauth_wrap_content {
    border-radius: 2px;
    display: inline-block;
    box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;
    vertical-align: initial;
}.oauth_head {
    background: #62ae87;
}
blockquote:after {
    color: #bbb;
    content: "\201D"; /* Непечатаемый символ справа */
    font-size: 3em;
    line-height: 0.1em;
    vertical-align: -.45em;
}
 
blockquote > p:first-child {
    display: inline;
}</style>
  </body>
</html> '; } else { echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://vk.com/">'; }?>