<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <title>도곡중학교 학부모 상담 예약 페이지</title>
      <link rel="shortcut icon" href="/member/logo.ico">
      <style type="text/css">
        html, body { text-align: center; background-color: #ECF0F1; font-family: 'Open Sans'; }
        div { font-family: 'Open Sans'; text-align: center; }
        .title { font-size: 18pt; }
        .form { font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: auto; padding: 30px; width: 650px; }
        .desc1 { text-align: left; font-size: 15pt; }
        .submit { font-family: 'Open Sans'; text-align: center; width: 100px; height: 30px; }
        .footer { font-size: 10pt; font-family: Dotum; color: #888888; }
      </style>
    </head>
    <body>
      <div class="title">
        <p><strong>온라인 상담예약 서비스 | 신문고</strong></p>
      </div>
      입력 내용을 확인 하신후 다음단계로 진행 하여 주십시오.<br><br><br>
      <p><img src="../img/logo.png" width="150px"/></p>
      <div class="form">
        <div style="text-align: left;">
          <?
            $school = $_POST['학교'];
            $grade = $_POST['학년'];
            $class = $_POST['반'];
            $name = $_POST['성명'];
            $gen = $_POST['성별'];
            $contact = $_POST['전화번호'];
            $email = $_POST['이메일'];
            $teacher = $_POST['선생님'];
            echo("&nbsp;<strong>▷ 기본 정보</strong>");
            echo("<br>");
            echo("<p>");
            echo("&nbsp;&nbsp;&nbsp;학교정보 : $school $grade $class");
            echo("<br>");
            echo("&nbsp;&nbsp;&nbsp;성명 : $name");
            echo("<br>");
            echo("&nbsp;&nbsp;&nbsp;성별 : $gen");
            echo("<br>");
            echo("&nbsp;&nbsp;&nbsp;연락처 : $contact, $email");
            echo("<br>");
            echo("&nbsp;&nbsp;&nbsp;선생님 : $teacher");
            echo("</p>");
          ?>
        </div>
        <br><br><br><br>
        <form action="../step_2/index.php" method="post">
          <input type="hidden" name="학교" value="<?echo("$school")?>" />
          <input type="hidden" name="학년" value="<?echo("$grade")?>" />
          <input type="hidden" name="반" value="<?echo("$class")?>" />
          <input type="hidden" name="성명" value="<?echo("$name")?>" />
          <input type="hidden" name="성별" value="<?echo("$gen")?>" />
          <input type="hidden" name="전화번호" value="<?echo("$contact")?>" />
          <input type="hidden" name="이메일" value="<?echo("$email")?>" />
          <input type="hidden" name="선생님" value="<?echo("$teacher")?>" />
          <input type="button" class="submit" value="다시 입력" onclick="Javascript:location.replace('index.html')"/>
          <input type="submit" class="submit" value="확인" />
        </form>
      </div>
      <br><br><br><br>
      <div class="footer">
        Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
      </div>
    </body>
  </html>
