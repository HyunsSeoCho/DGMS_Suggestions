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
      .form { text-align: center; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: 0 auto; width: 1000px; }
      .desc1 { text-align: left; font-size: 15pt; }
      .desc2 { text-align: left; font-size: 13pt; }
      .inputform { text-align: center; font-size: 15pt; }
      .footer { font-size: 10pt; font-family: 'Roboto Condensed', sans-serif; color: #888888; }
      input.submit { font-family: 'Open Sans'; text-align: center; width: 100px; height: 30px; }
    </style>
  </head>
  <body>
    <div class="title">
      <p><strong>선생님 제거 | 신문고 관리자</strong></p>
    </div>
    <p><img src="../../img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;▷ <strong>정말로 모든 선생님을 제거 하시겠습니까?</strong><br>
      </div>
      <div class="desc2">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 서버 관리자의 허락하에 사용하시기 바랍니다.<br>
      </div>
      <br><br>
      <input type="button" value="예, 모두 제거합니다." onclick="Javascript:
      password = prompt('암호를 입력하세요.');
      if (password == 'uf066262') {
        location.replace('removeall.php');
      } else {
        window.close();
        alert('취소되었습니다');
      }
      ">
      <input type="button" value="아니오, 제거하지 않고 이전으로 돌아갑니다." onclick="Javascript:window.close();alert('취소되었습니다.');">
      <br><br>
    </div>
    <br><br>
    <div class="footer">
      Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
    </div>
  </body>
</html>
