<!DOCTYPE html>
  <html>
    <head>
      <title>도곡중학교 신문고</title>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../ico/favicon.ico">
    </head>
    <body bgcolor="#E0FFDB">
      Verifying ...
      <?
      $pwd = $_POST["pcd"];
        if ($pwd == "6489") {
        ?> <script>location.replace("../teacher/encrypted/");</script> <?
        }
        elseif ($pwd == "0293") {
        ?> <script>location.replace("../webmaster/encrypted/");</script> <?
        }
        else {
        ?> <script>location.replace("../err/");</script> <?
        }
      ?>
    </body>
  </html>
