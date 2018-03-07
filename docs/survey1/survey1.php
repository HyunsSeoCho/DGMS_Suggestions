<!DOCTYPE html>
  <html>
    <head>
      <title>도곡중학교 신문고</title>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../../ico/favicon.ico">
      <script type="text/javascript" src="../../encrypt/logout1200.js"></script>
      <style type="text/css">
        body { background-color: #E0FFDB; }
        div { text-align: center }
        .timer { font-size: 15pt; text-align: right; }
        .text { text-align: center; font-family: Arial; }
        .field { text-align: center; font-size: 17pt; font-family: Arial; border: 1px solid gray; }
        .footer { font-size: 10pt; font-family: Dotum; color: #888888; }
        button { font-size: 14px; height: 30px; font-family: Arial; }
      </style>
    </head>
    <body>
      <div class="timer">
        <strong><span id="counter"> </span> 후 자동 로그아웃</strong> <input type="button" value="연장" onclick="counter_reset()" style="align='center'; height:30px; width:60px; font-size:14px; font-family:NanumGothic;">
      </div>
      <div class="text" style="font-size:20pt;">
        <strong>도곡중학교 온라인 신문고 - 진행중</strong>
      </div>
      <p>
        <div class="field">
          <p>접속 IP 주소</p>
          <p><strong><?$ipa = getenv ("REMOTE_ADDR");echo "$ipa";?></strong></p>
        </div>
      </p>
      <div>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc6gLS2bAFhyjyc-6som2sZ8RmoObGMPqjsULx5i2KOr8v3ug/viewform?embedded=true#start=embed" width="760" height="1000" frameborder="0" marginheight="0" marginwidth="0">로드 중...</iframe>
        <p><button onclick="Javascript:location.replace('../../student/');"style="width:120px;">이전 화면으로</button></p>
        <p><button onclick="Javascript:location.replace('../../');" style="width:100px;">로그아웃</button></p>
        <br /><br /><br />
      </div>
      <div class="footer">
        Copyright &copy; DSBS - 도곡 학생 방송, All Rights Reserved.
      </div>
    </body>
  </html>
  <script>
  counter_init();
  </script>
