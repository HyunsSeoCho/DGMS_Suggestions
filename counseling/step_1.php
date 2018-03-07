<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>상담예약 - 1단계 | 신문고</title>
    <style type="text/css">
      @import 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed';
      html, body { text-align: center; background-color: #ECF0F1; font-family: 'Open Sans'; }
      div { font-family: 'Open Sans'; text-align: center; }
      .title { font-size: 18pt; }
      .form { text-align: left; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: 0 auto; width: 650px; }
      .desc1 { text-align: left; font-size: 15pt; }
      .submit { font-family: 'Open Sans'; text-align: center; width: 100px; height: 30px; }
      .footer { font-size: 10pt; font-family: 'Roboto Condensed', sans-serif; color: #888888; }
      span.table { text-align: left; border: 1px solid gray; border-radius: 5px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; margin: auto; }
    </style>
    <?
      $conn = mysqli_connect("localhost","disposalphp","6bbbd8e26f4afc495410cf028fa4b8db", "edogok");
      $sql = "SELECT * FROM teacherlist";
      $ret = mysqli_query($conn, $sql);
      while ($teacher = mysqli_fetch_array($ret)) {
        $tg1c1 = $teacher['1학년1반'];
        $tg1c2 = $teacher['1학년2반'];
        $tg1c3 = $teacher['1학년3반'];
        $tg1c4 = $teacher['1학년4반'];
        $tg1c5 = $teacher['1학년5반'];
        $tg1c6 = $teacher['1학년6반'];
        $tg1c7 = $teacher['1학년7반'];
        $tg1c8 = $teacher['1학년8반'];
        $tg2c1 = $teacher['2학년1반'];
        $tg2c2 = $teacher['2학년2반'];
        $tg2c3 = $teacher['2학년3반'];
        $tg2c4 = $teacher['2학년4반'];
        $tg2c5 = $teacher['2학년5반'];
        $tg2c6 = $teacher['2학년6반'];
        $tg2c7 = $teacher['2학년7반'];
        $tg2c8 = $teacher['2학년8반'];
        $tg3c1 = $teacher['3학년1반'];
        $tg3c2 = $teacher['3학년2반'];
        $tg3c3 = $teacher['3학년3반'];
        $tg3c4 = $teacher['3학년4반'];
        $tg3c5 = $teacher['3학년5반'];
        $tg3c6 = $teacher['3학년6반'];
        $tg3c7 = $teacher['3학년7반'];
        $tg3c8 = $teacher['3학년8반'];
        $t1 = $teacher['비담임교과1'];
        $t2 = $teacher['비담임교과2'];
        $t3 = $teacher['비담임교과3'];
        $t4 = $teacher['비담임교과4'];
        $t5 = $teacher['비담임교과5'];
        $t6 = $teacher['비담임교과6'];
        $t7 = $teacher['비담임교과7'];
        $t8 = $teacher['비담임교과8'];
        $t9 = $teacher['비담임교과9'];
        $t10 = $teacher['비담임교과10'];
        $t11 = $teacher['비담임교과11'];
        $t12 = $teacher['비담임교과12'];
        $t13 = $teacher['비담임교과13'];
        $t14 = $teacher['비담임교과14'];
        $t15 = $teacher['비담임교과15'];
        $t16 = $teacher['비담임교과16'];
        $t17 = $teacher['비담임교과17'];
        $t18 = $teacher['비담임교과18'];
        $t19 = $teacher['비담임교과19'];
        $t20 = $teacher['비담임교과20'];
        $t21 = $teacher['비담임교과21'];
        $t22 = $teacher['비담임교과22'];
        $t23 = $teacher['비담임교과23'];
        $t24 = $teacher['비담임교과24'];
        $t25 = $teacher['비담임교과25'];
        $t26 = $teacher['비담임교과26'];
        $t27 = $teacher['비담임교과27'];
        $t28 = $teacher['비담임교과28'];
        $t29 = $teacher['비담임교과29'];
      }
    ?>
  </head>
  <body>
    <div class="title">
      <p><strong>온라인 상담예약 서비스 | 신문고</strong></p>
    </div>
    <p><img src="img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;<strong>▷ 기본 정보 입력</strong>
      </div>
      <br>
      <form action="confirm.php" method="post">
        <div style="text-align: left; margin-left: 30px;">
          <select name="학교" style="width: 100px; height: 30px;">
            <option value="도곡중학교">도곡중학교</option>
          </select>
          <select name="학년" style="width: 70px; height: 30px;">
            <option value="1학년">1학년</option><option value="2학년">2학년</option><option value="3학년">3학년</option>
          </select>
          <select name="반" style="width: 70px; height: 30px;">
            <option value="1반">1반</option><option value="2반">2반</option><option value="3반">3반</option><option value="4반">4반</option><option value="5반">5반</option><option value="6반">6반</option><option value="7반">7반</option><option value="8반">8반</option>
          </select>
          <input type="text" name="성명" placeholder="학생명" maxlength="5" style="text-align: center; width: 100px; height: 24px;" required/>
          <br>&nbsp;
          <br>
          <span class="table" style="text-align: left;">
            <strong>성별</strong>
            <input type="radio" name="성별" value="남성" checked/><label style="font-size: 10pt;">남</label>
            <input type="radio" name="성별" value="여성" /><label style="font-size: 10pt;">여</label>
          </span>
          <br>&nbsp;<br>
          <span class="table">
            <strong>연락처</strong>&nbsp;
            <input type="text" name="전화번호" placeholder="전화번호 [하이픈'-' 없이]" value="" maxlength="11" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]+" style="width: 150px; height: 15px;" required />
            &nbsp;
            <input type="email" name="이메일" placeholder="이메일주소" value="" maxlength="50" pattern=".+[@][a-z].+[.].+" style="width: 200px; height: 15px;" required />
          </span>
          <br><br><br>
          <span class="table">
            <strong>상담 선생님</strong>&nbsp;
            <select name="teacher" style="width: 250px; height: 30px;">
              <option selected>:: 선생님 선택 ::</option>
              <option disabled></option>
              <option disabled>▼▼ 담임 선생님 ▼▼</option>
              <option value="1학년1반">1학년1반 [<?echo("$tg1c1")?>]</option>
              <option value="1학년2반">1학년2반 [<?echo("$tg1c2")?>]</option>
              <option value="1학년3반">1학년3반 [<?echo("$tg1c3")?>]</option>
              <option value="1학년4반">1학년4반 [<?echo("$tg1c4")?>]</option>
              <option value="1학년5반">1학년5반 [<?echo("$tg1c5")?>]</option>
              <option value="1학년6반">1학년6반 [<?echo("$tg1c6")?>]</option>
              <option value="1학년7반">1학년7반 [<?echo("$tg1c7")?>]</option>
              <option value="1학년8반">1학년8반 [<?echo("$tg1c8")?>]</option>
              <option value="2학년1반">2학년1반 [<?echo("$tg2c1")?>]</option>
              <option value="2학년2반">2학년2반 [<?echo("$tg2c2")?>]</option>
              <option value="2학년3반">2학년3반 [<?echo("$tg2c3")?>]</option>
              <option value="2학년4반">2학년4반 [<?echo("$tg2c4")?>]</option>
              <option value="2학년5반">2학년5반 [<?echo("$tg2c5")?>]</option>
              <option value="2학년6반">2학년6반 [<?echo("$tg2c6")?>]</option>
              <option value="2학년7반">2학년7반 [<?echo("$tg2c7")?>]</option>
              <option value="2학년8반">2학년8반 [<?echo("$tg2c8")?>]</option>
              <option value="3학년1반">3학년1반 [<?echo("$tg3c1")?>]</option>
              <option value="3학년2반">3학년2반 [<?echo("$tg3c2")?>]</option>
              <option value="3학년3반">3학년3반 [<?echo("$tg3c3")?>]</option>
              <option value="3학년4반">3학년4반 [<?echo("$tg3c4")?>]</option>
              <option value="3학년5반">3학년5반 [<?echo("$tg3c5")?>]</option>
              <option value="3학년6반">3학년6반 [<?echo("$tg3c6")?>]</option>
              <option value="3학년7반">3학년7반 [<?echo("$tg3c7")?>]</option>
              <option value="3학년8반">3학년8반 [<?echo("$tg3c8")?>]</option>
              <option disabled></option>
              <option disabled>▼▼ 비담임교과 선생님 ▼▼</option>
              <option value="비담임교과1"><?echo("$t1")?></option>
              <option value="비담임교과2"><?echo("$t2")?></option>
              <option value="비담임교과3"><?echo("$t3")?></option>
              <option value="비담임교과4"><?echo("$t4")?></option>
              <option value="비담임교과5"><?echo("$t5")?></option>
              <option value="비담임교과6"><?echo("$t6")?></option>
              <option value="비담임교과7"><?echo("$t7")?></option>
              <option value="비담임교과8"><?echo("$t8")?></option>
              <option value="비담임교과9"><?echo("$t9")?></option>
              <option value="비담임교과10"><?echo("$t10")?></option>
              <option value="비담임교과11"><?echo("$t11")?></option>
              <option value="비담임교과12"><?echo("$t12")?></option>
              <option value="비담임교과13"><?echo("$t13")?></option>
              <option value="비담임교과14"><?echo("$t14")?></option>
              <option value="비담임교과15"><?echo("$t15")?></option>
              <option value="비담임교과16"><?echo("$t16")?></option>
              <option value="비담임교과17"><?echo("$t17")?></option>
              <option value="비담임교과18"><?echo("$t18")?></option>
              <option value="비담임교과19"><?echo("$t19")?></option>
              <option value="비담임교과20"><?echo("$t20")?></option>
              <option value="비담임교과21"><?echo("$t21")?></option>
              <option value="비담임교과22"><?echo("$t22")?></option>
              <option value="비담임교과23"><?echo("$t23")?></option>
              <option value="비담임교과24"><?echo("$t24")?></option>
              <option value="비담임교과25"><?echo("$t25")?></option>
              <option value="비담임교과26"><?echo("$t26")?></option>
              <option value="비담임교과27"><?echo("$t27")?></option>
              <option value="비담임교과28"><?echo("$t28")?></option>
              <option value="비담임교과29"><?echo("$t29")?></option>
            </select>
          </span>
          <br>
          <p><input type="checkbox" id="checkbox" name="checkbox" checked required> <label for="checkbox">개인정보 취급 및 이용에 동의 합니다.</label></p>
          <p style="text-align: center;"><input type="submit" value="작성완료" style="width: 100px; height: 30px;" /></p>
        </form>
      </div>
    </div>
    <div class="footer">
      Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
    </div>
    <? mysqli_close($conn); ?>
  </body>
</html>
