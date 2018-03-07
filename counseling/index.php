<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>승인중 ...</title>
    </head>
    <body bgcolor="#ECF0F1">
      <?
      $authcode = $_POST['authcode'];
      if($authcode == "dlswmd") {
        ?><script>location.replace('step_1.php');</script><?
      } else {
        ?><script>location.replace('err');</script><?
        }
      ?>
    </body>
  </html>
