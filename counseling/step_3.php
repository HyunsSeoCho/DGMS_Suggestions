<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="/member/logo.ico">
      <style type="text/css">
        html, body { text-align: center; background-color: #ECF0F1; font-family: 'Open Sans'; }
        div { text-align: center }
        .title { text-align: center; font-size: 22pt; font-family: Gothic; }
        .text { text-align: center; font-size: 14pt; font-family: Arial; }
        .form { text-align: left; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; margin: 0 auto; width: 650px; }
        span.table { text-align: left; border: 1px solid gray; border-radius: 5px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; margin: auto; }
        .footer { font-size:11pt; font-family:Dotum; color:#888888; }
      </style>
      <title>도곡중학교 학부모 상담 예약 페이지</title>
    </head>
    <body bgcolor="#E0FFDB">
      <?
      $DAY1TIME1="YES";
      $DAY1TIME2="YES";
      $DAY1TIME3="YES";
      $DAY1TIME4="YES";
      $DAY1TIME5="YES";
      $DAY1TIME6="YES";
      $DAY1TIME7="YES";
      $DAY2TIME1="YES";
      $DAY2TIME2="YES";
      $DAY2TIME3="YES";
      $DAY2TIME4="YES";
      $DAY2TIME5="YES";
      $DAY2TIME6="YES";
      $DAY2TIME7="YES";
      ?>
      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:15pt; font-family:NanumGothic;">
            <h2>도곡중학교 학부모 상담 예약 페이지</h2>
            <img src="../img/logo.png" width="300"/><br><br><br>
          </td>
        </tr>
      </table>

            <br/><br/>
      <form action="final.php">
        <table width="650" border="1px" cellpadding="0" cellspacing="0" align="center" style="border-radius: 10px">
          <tr>
            <td  style="background-color:#B5EF8D;"> 시간 구분</td>
            <td style="background-color:#B5EF8D;">8/27 (금)</td>
            <td style="background-color:#B5EF8D;">8/29 (월)</td>
            <td style="background-color:#B5EF8D;">8/20 (화)</td>
          </tr>
          <tr>
            <td style="background-color:#B5EF8D;"><b>1교시</b> (08:50~09:35)</td>
            <td style="background-color:#EFEFEF;">-</td>
            <td style="background-color:#EFEFEF;"> <input type="radio" name="time" value="DAY1" id="TIME1" enabled="<? echo("$DAY1TIME1") ?>"></td>
            <td style="background-color:#EFEFEF;"> <input type="radio" name="time" value="DAY2" id="TIME1" enabled="<? echo("$DAY1TIME1") ?>"></td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>2교시</b> (09:45~10:40)</td>
            <td style="background-color:#FFFFFF;">-</td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY1" id="TIME2" enabled="<? echo("$DAY1TIME2") ?>"></td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY2" id="TIME2" enabled="<? echo("$DAY2TIME2") ?>"></td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>3교시</b> (10:40~11:25)</td>
            <td style="background-color:#EFEFEF;">-</td>
            <td style="background-color:#EFEFEF;"> <input type="radio" name="time" value="DAY1" id="TIME3" enabled="<? echo("$DAY1TIME3") ?>"></td>
            <td style="background-color:#EFEFEF;"> <input type="radio" name="time" value="DAY2" id="TIME3" enabled="<? echo("$DAY2TIME3") ?>"></td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>4교시</b> (11:35~12:20)</td>
            <td style="background-color:#FFFFFF;">-</td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY1" id="TIME4" enabled="<? echo("$DAY1TIME4") ?>"></td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY2" id="TIME4" enabled="<? echo("$DAY2TIME4") ?>"></td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>점심시간</b> (12:20~13:20)</td>
            <td style="background-color:#EFEFEF;">-</td>
            <td style="background-color:#EFEFEF;">-</td>
            <td style="background-color:#EFEFEF;">-</td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>5교시</b> (13:20~14:05)</td>
            <td style="background-color:#FFFFFF;">-</td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY1" id="TIME5" enabled="<? echo("$DAY1TIME5") ?>"></td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY2" id="TIME5" enabled="<? echo("$DAY1TIME5") ?>"></td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>6교시</b> (14:15~15:00)</td>
            <td style="background-color:#EFEFEF;">-</td>
            <td style="background-color:#EFEFEF;"> <input type="radio" name="time" value="DAY1" id="TIME6" enabled="<? echo("$DAY1TIME6") ?>"></td>
            <td style="background-color:#EFEFEF;"> <input type="radio" name="time" value="DAY2" id="TIME6" enabled="<? echo("$DAY2TIME6") ?>"></td>
          </tr>
          <tr>
            <td  style="background-color:#B5EF8D;"><b>7교시</b> (15:00~15:55)</td>
            <td style="background-color:#FFFFFF;">-</td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY1" id="TIME7" enabled="<? echo("$DAY1TIME1") ?>"></td>
            <td style="background-color:#FFFFFF;"> <input type="radio" name="time" value="DAY1" id="TIME7" enabled="<? echo("$DAY2TIME7") ?>"></td>
          </tr>
        </table>
      </form> <br /><br />
      <div class="footer">
        Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
      </div>
	</body>
</html>
