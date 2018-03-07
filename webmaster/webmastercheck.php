<!DOCTYPE html>
  <html>
    <head>
      <title>도곡중학교 신문고</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="shortcut icon" href="http://ufprod.iptime.org:8000/etc/dogokepeople/favicon.ico">
    </head>
    <body bgcolor="#E0FFDB">
       <?
       $url = 'https://www.google.com/recaptcha/api/siteverify?secret=6LcABx0TAAAAAAa50lG2CyNQQ_UGMk6RLdH-b5gF&response'.$_POST['g-recaptcha-response'];
       $flag = json_decode(file_get_contents($url));
       if (!$flag->success){
         exit;
       }
       ?>
    </body>
  </html>
