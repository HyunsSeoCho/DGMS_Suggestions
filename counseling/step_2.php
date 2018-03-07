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
    <body>
      <?
        $school = $_POST['학교'];
        $grade = $_POST['학년'];
        $class = $_POST['반'];
        $name = $_POST['성명'];
        $gen = $_POST['성별'];
        $contact = $_POST['전화번호'];
        $email = $_POST['이메일'];
        $teacher = $_POST['선생님'];
      ?>
      <form action="../step_4/index.php" method="post">
        <input type="hidden" name="학교" value="<?echo("$school")?>" />
        <input type="hidden" name="학년" value="<?echo("$grade")?>" />
        <input type="hidden" name="반" value="<?echo("$class")?>" />
        <input type="hidden" name="성명" value="<?echo("$name")?>" />
        <input type="hidden" name="성별" value="<?echo("$gen")?>" />
        <input type="hidden" name="전화번호" value="<?echo("$contact")?>" />
        <input type="hidden" name="이메일" value="<?echo("$email")?>" />
        <input type="hidden" name="선생님" value="<?echo("$teacher")?>" />
      </form>

      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:15pt; font-family:NanumGothic;">
            <h2>도곡중학교 학부모 상담 예약 페이지</h2>
            <img src="../img/logo.png" width="300"/><br><br><br>
          <div class="form">
            <div>
	            <strong>●시간 현황 안내</strong>
            </div>
            <div>
              <img src="../img/img_yes.gif" width="16" height="15" alt="" />: 예약 가능 시간 있음
            </div>
            <div>
              <img src="../img/img_little.gif" width="16" height="15" alt="" />: 예약 가능 시간 적음
            </div>
            <div>
              <img src="../img/img_no.gif" width="16" height="15" alt="" />: 예약 가능 시간 없음
            </div>
          </div>
            <br/><br/>
        <table  align="center" width="850" border="0" cellpadding="0" cellspacing="0" style="border-radius: 10px" >
          <tr>
            <td align="center">
              <table border="1" style="background-color:#D9FEFF;" style="border-radius: 10px">
                <tr><td>
                  <table border="0" style="width: 700px" style="border-radius: 10px">
                    <tr><td font-size="12px" >
                    &nbsp;&nbsp;<b>날짜를 선택하실때 이용의 주의점</b><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;1．상담 예약을 하실 날짜를 하단의 표로부터 먼저 선택해 주십시오.<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;2．날짜에 있는 도형을 클릭하시면 시간 등을 지정하실 수 있습니다. <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;3. X표된 날은 선택이 불가능합니다. 다른 날을 지정하여 주십시오. <br />
                    </td></tr>
                  </table>
                </td></tr>
              </table>
            </td>
          </tr>
        </table> <br /><br />


        <table width="650" border="0" cellpadding="0" cellspacing="0" align="center" style="border-radius: 10px">
              <tr>
                <td style="height: 69px"><table width="100%" border="0" cellpadding="4" cellspacing="1" style="background-color:#666666;">
                    <tr align="center" style="background-color:#B5EF8D;">
                      <td style="height: 50px" "colspan: 2"><strong>날짜</strong></td>
                      <td style="height: 50px" "colspan: 2"><strong>잔여시간</strong></td>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#FFFFFF;" "height: 30px">
                            9/1 (목)
                          </td>
                          <td id='Back0002' align="center" style="background-color:#FFFFFF;">
                            <a href="../step_4/day1.html"><img src="../img/img_little.gif" name="Vacant002" id="Vacant002" border="0"></a>
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#EFEFEF;" "height: 30px">
                            9/2 (금)
                          </td>
                          <td id='Back0010' align="center" style="background-color:#EFEFEF;">
                            <img src="../img/img_no.gif">
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#FFFFFF;" "height: 30px">
                            9/5 (월)
                          </td>
                          <td id='Back0020' align="center" style="background-color:#FFFFFF;">
                            <img src="../img/img_no.gif">
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#EFEFEF;" "height: 30px">
                            9/6 (화)
                          </td>
                          <td id='Back0030' align="center" style="background-color:#EFEFEF;">
                            <a href="../step_4/day6.html"><img src="../img/img_yes.gif" name="Vacant030" id="Vacant030" border="0"></a>
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#FFFFFF;" "height: 30px">
                            9/7 (수)
                          </td>
                          <td id='Back0040' align="center" style="background-color:#FFFFFF;">
                            <a href="../step_4/day8.html"><img src="../img/img_yes.gif" name="Vacant040" id="Vacant040" border="0"></a>
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#EFEFEF;" "height: 30px">
                            9/8 (목)
                          </td>
                          <td id='Back0050' align="center" style="background-color:#EFEFEF;">
                            <img src="../img/img_no.gif">
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#FFFFFF;" "height: 30px">
                            9/9 (금)
                          </td>
                          <td id='Back0060' align="center" style="background-color:#FFFFFF;">
                            <a href="../step_4/day9.html"><img src="../img/img_yes.gif" name="Vacant060" id="Vacant060" border="0"></a>
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#EFEFEF;" "height: 30px">
                            9/12 (월)
                          </td>
                          <td id='Back0060' align="center" style="background-color:#EFEFEF;">
                            <a href="../step_4/day12.html"><img src="../img/img_yes.gif" name="Vacant060" id="Vacant060" border="0"></a>
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#FFFFFF;" "height: 30px">
                            9/13 (화)
                          </td>
                          <td id='Back0070' align="center" style="background-color:#FFFFFF;">
                            <a href="../step_4/day13.html"><img src="../img/img_yes.gif" name="Vacant070" id="Vacant070" border="0"></a>
                          </td>
                        </tr>
                        <tr style="background-color:#FFFFFF;">
                          <td align="center" valign="middle" style="background-color:#EFEFEF;" "height: 30px">
                            9/14 (수)
                          </td>
                          <td id='Back0070' align="center" style="background-color:#FFFFFF;">
                            <a href="../step_4/day14.html"><img src="../img/img_yes.gif" name="Vacant070" id="Vacant070" border="0"></a>
                          </td>
                        </tr>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            <div class="footer">
              Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
            </div>
	</body>
</html>
