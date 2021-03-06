<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>온라인 상담예약 관리자 | 신문고</title>
    <style type="text/css">
      @import 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed';
      html, body { text-align: center; background-color: #ECF0F1; font-family: 'Open Sans'; }
      div { font-family: 'Open Sans'; text-align: center; }
      .title { font-size: 18pt; }
      .form { text-align: left; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: auto; width: 600px; }
      .desc1 { text-align: left; font-size: 15pt; }
      .inputform { text-align: center; font-size: 15pt; }
      .footer { font-size: 10pt; font-family: 'Roboto Condensed', sans-serif; color: #888888; }
      input.submit { font-family: 'Open Sans'; text-align: center; width: 100px; height: 30px; }
    </style>
  </head>
  <body>
    <div class="title">
      <p><strong>온라인 상담예약 서비스 관리자 | 신문고</strong></p>
    </div>
    <p><img src="../img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;<strong>▷ 선생님의 존함을 입력해주세요</strong>
      </div>
      <br>&nbsp;<br>
      <div class="inputform">
        <form action="teacher.php" method="post">
          <p><input type="text" class="name" name="teacher" placeholder="성명 / Name" maxlength="10" style="text-align: center; font-size: 14pt; width: 150px; height: 30px;" autofocus required /></p>
          <input type="submit" class="submit" value="확인">
        </form>
      </div>
      &nbsp;
    </div>
    <br><br>
    <div class="footer">
      Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
    </div>
  </body>
</html>
