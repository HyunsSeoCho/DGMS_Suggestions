<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>온라인 상담예약 관리자 | 신문고</title>
  </head>
  <body bgcolor="#ECF0F1">
    <?
      $account = $_POST['account'];
      $pwd = $_POST['pwd'];
      if ($account == "admin") {
        if ($pwd == "uf066262") {
          ?><script>location.replace('setting.php')</script><?
        }
        else {
          ?><script>location.replace('about:blank');alert("잘못된 접근입니다");</script><?
        }
      }
      else {
        ?><script>location.replace('about:blank');alert("잘못된 접근입니다");</script><?
      }
    ?>
    <script>
      setTimeout(cancel(),3000);
      function cancel() {
        location.replace('about:blank');
        alert("로그인 시간이 초과되었습니다");
      }
    </script>
  </body>
</html>
