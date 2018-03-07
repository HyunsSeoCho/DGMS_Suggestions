<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="/member/logo.ico">
      <style type="text/css">
        div.type { text-align: center }
      </style>
      <title>도곡중학교 학부모 상담 예약 페이지</title>
    </head>
    <body bgcolor="#E0FFDB">
      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:15pt; font-family:NanumGothic;">
            <img src="logo.png" width="300"/><br><br><br>
            <h2>도곡중학교 학부모 상담 예약 페이지</h2>
	<br>
            입력 내용을 확인 하신후 다음단계로 진행 하여 주십시오.<br>
          </td>
        </tr>
      </table>
      <br><br><br><br>
      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:12pt; font-family:NanumGothic;">
            <?
            echo("<fieldset>");
            echo("<strong>1. 기본 정보</strong>");
            echo("<br>");
            echo("학교정보 : ".$_POST['학년']." ".$_POST['반'].");
            echo("<br>");
            echo("이름 : ".$_POST['이름']."");
            echo("<br>");
            echo("성별 : ".$_POST['성별']."");
            echo("<br>");
            echo("생년월일 : ".$_POST['생년월일']."");
            echo("<br>");
            echo("연락처 : ".$_POST['전화번호']."");
            echo("<br>");
            echo("</fieldset>");
            ?>
          </td>
        </tr>
      </table>
      <br><br><br><br>
      <p>
        <div data-role='content'>
          <div class="type">
          <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
            <tr>
              <td align="center" width="100%" style="font-size:10pt; font-family:NanumGothic;">
                <a rel="license" href="./teacherlist1.aspx"><img alt="Creative Commons License" style="border-width:0" src="./button1.html" /></a>
              </td>
            </tr>
          </table>
          <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
            <tr>
              <td align="center" width="100%" style="font-size:10pt; font-family:NanumGothic;">
                <a rel="license" href="./teacherlist2.aspx"><img alt="Creative Commons License" style="border-width:0" src="./button1.html" /></a>
              </td>
            </tr>
          </table>
          </div>
        </div>
      </p>
      <p>
          <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
            <tr>
              <td align="center" width="100%" style="font-size:10pt; font-family:NanumGothic;">
                <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />This work by  <a xmlns:cc="http://creativecommons.org/ns#" href="http://nid.naver.com/nidlogin.login?mode=form&url=http://note.naver.com/note/sendForm.nhn?targetUserId=solasys528&svcType=1&popup=1" property="cc:attributionName" rel="cc:attributionURL">Hyunseo Cho</a> and <a xmlns:cc="http://creativecommons.org/ns#" href="http://nid.naver.com/nidlogin.login?mode=form&url=http://note.naver.com/note/sendForm.nhn?targetUserId=raykim123&svcType=1&popup=1" property="cc:attributionName" rel="cc:attributionURL">Hyunwoo Kim</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
              </td>
            </tr>
          </table>
      </p>
    </body>
  </html>
