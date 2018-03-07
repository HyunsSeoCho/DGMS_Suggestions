<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>온라인 상담예약 뷰어 | 신문고</title>
    <style type="text/css">
      @import 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed';
      html, body { text-align: center; background-color: #ECF0F1; font-family: 'Open Sans'; }
      div { font-family: 'Open Sans'; text-align: center; }
      .title { font-size: 18pt; }
      .form { text-align: center; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: 0 auto; width: 1000px; }
      .desc1 { text-align: left; font-size: 15pt; }
      .desc2 { text-align: left; font-size: 13pt; }
      .inputform { text-align: center; font-size: 15pt; }
      .footer { font-size: 10pt; font-family: 'Roboto Condensed', sans-serif; color: #888888; }
      input.submit { font-family: 'Open Sans'; text-align: center; width: 100px; height: 30px; }
    </style>
  </head>
  <body>
    <?
      $timestamp = $_GET['timestamp'];
      $name = $_GET['name'];
    ?>
    <div class="title">
      <p><strong>상담예약 취소 | 신문고</strong></p>
    </div>
    <p><img src="../img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;▷ <strong><?echo "$name"?></strong> 학생의 상담 예약을 취소하시겠습니까?<br>
      </div>
      <div class="desc2">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 반드시 학부모와 협의 후 취소하시기 바랍니다.<br>
      </div>
      <br><br>
      <form action="cancel.php" method="post">
        <input type="hidden" name="timestamp" value="<?echo "$timestamp"?>">
        <input type="submit" value="예, 예약된 내용을 취소합니다." onclick="Javascript:location.replace('about:blank');">
        <input type="reset" value="아니오, 취소하지 않습니다." onclick="Javascript:window.close();">
      </form>
      <br><br>
    </div>
    <br><br>
    <div class="footer">
      Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
    </div>
  </body>
</html>
