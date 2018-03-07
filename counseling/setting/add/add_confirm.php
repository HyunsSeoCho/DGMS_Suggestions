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
    </style>
    <?
      $tg1c1 = $_POST['tg1c1'];
      $tg1c2 = $_POST['tg1c2'];
      $tg1c3 = $_POST['tg1c3'];
      $tg1c4 = $_POST['tg1c4'];
      $tg1c5 = $_POST['tg1c5'];
      $tg1c6 = $_POST['tg1c6'];
      $tg1c7 = $_POST['tg1c7'];
      $tg1c8 = $_POST['tg1c8'];
      $tg2c1 = $_POST['tg2c1'];
      $tg2c2 = $_POST['tg2c2'];
      $tg2c3 = $_POST['tg2c3'];
      $tg2c4 = $_POST['tg2c4'];
      $tg2c5 = $_POST['tg2c5'];
      $tg2c6 = $_POST['tg2c6'];
      $tg2c7 = $_POST['tg2c7'];
      $tg2c8 = $_POST['tg2c8'];
      $tg3c1 = $_POST['tg3c1'];
      $tg3c2 = $_POST['tg3c2'];
      $tg3c3 = $_POST['tg3c3'];
      $tg3c4 = $_POST['tg3c4'];
      $tg3c5 = $_POST['tg3c5'];
      $tg3c6 = $_POST['tg3c6'];
      $tg3c7 = $_POST['tg3c7'];
      $tg3c8 = $_POST['tg3c8'];
      $t1 = $_POST['t1'];
      $t2 = $_POST['t2'];
      $t3 = $_POST['t3'];
      $t4 = $_POST['t4'];
      $t5 = $_POST['t5'];
      $t6 = $_POST['t6'];
      $t7 = $_POST['t7'];
      $t8 = $_POST['t8'];
      $t9 = $_POST['t9'];
      $t10 = $_POST['t10'];
      $t11 = $_POST['t11'];
      $t12 = $_POST['t12'];
      $t13 = $_POST['t13'];
      $t14 = $_POST['t14'];
      $t15 = $_POST['t15'];
      $t16 = $_POST['t16'];
      $t17 = $_POST['t17'];
      $t18 = $_POST['t18'];
      $t19 = $_POST['t19'];
      $t20 = $_POST['t20'];
      $t21 = $_POST['t21'];
      $t22 = $_POST['t22'];
      $t23 = $_POST['t23'];
      $t24 = $_POST['t24'];
      $t25 = $_POST['t25'];
      $t26 = $_POST['t26'];
      $t27 = $_POST['t27'];
      $t28 = $_POST['t28'];
      $t29 = $_POST['t29'];
    ?>
  </head>
  <body>
    <div class="title">
      <p><strong>선생님 추가 | 신문고 관리자</strong></p>
    </div>
    <p><img src="../../img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;▷ <strong>정말로 아래의 모든 선생님을 추가 하시겠습니까?</strong><br>
      </div>
      <div class="desc2">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 서버 관리자의 허락하에 사용하시기 바랍니다.<br>
      </div>
      <br><br>
      1학년 1반 [<?echo("$tg1c1")?> 선생님]<br>
      1학년 2반 [<?echo("$tg1c2")?> 선생님]<br>
      1학년 3반 [<?echo("$tg1c3")?> 선생님]<br>
      1학년 4반 [<?echo("$tg1c4")?> 선생님]<br>
      1학년 5반 [<?echo("$tg1c5")?> 선생님]<br>
      1학년 6반 [<?echo("$tg1c6")?> 선생님]<br>
      1학년 7반 [<?echo("$tg1c7")?> 선생님]<br>
      1학년 8반 [<?echo("$tg1c8")?> 선생님]<br>
      2학년 1반 [<?echo("$tg2c1")?> 선생님]<br>
      2학년 2반 [<?echo("$tg2c2")?> 선생님]<br>
      2학년 3반 [<?echo("$tg2c3")?> 선생님]<br>
      2학년 4반 [<?echo("$tg2c4")?> 선생님]<br>
      2학년 5반 [<?echo("$tg2c5")?> 선생님]<br>
      2학년 6반 [<?echo("$tg2c6")?> 선생님]<br>
      2학년 7반 [<?echo("$tg2c7")?> 선생님]<br>
      2학년 8반 [<?echo("$tg2c8")?> 선생님]<br>
      3학년 1반 [<?echo("$tg3c1")?> 선생님]<br>
      3학년 2반 [<?echo("$tg3c2")?> 선생님]<br>
      3학년 3반 [<?echo("$tg3c3")?> 선생님]<br>
      3학년 4반 [<?echo("$tg3c4")?> 선생님]<br>
      3학년 5반 [<?echo("$tg3c5")?> 선생님]<br>
      3학년 6반 [<?echo("$tg3c6")?> 선생님]<br>
      3학년 7반 [<?echo("$tg3c7")?> 선생님]<br>
      3학년 8반 [<?echo("$tg3c8")?> 선생님]<br>
      비담임교과1[<?echo("$t1")?> 선생님]<br>
      비담임교과2[<?echo("$t2")?> 선생님]<br>
      비담임교과3[<?echo("$t3")?> 선생님]<br>
      비담임교과4[<?echo("$t4")?> 선생님]<br>
      비담임교과5[<?echo("$t5")?> 선생님]<br>
      비담임교과6[<?echo("$t6")?> 선생님]<br>
      비담임교과7[<?echo("$t7")?> 선생님]<br>
      비담임교과8[<?echo("$t8")?> 선생님]<br>
      비담임교과9[<?echo("$t9")?> 선생님]<br>
      비담임교과10[<?echo("$t10")?> 선생님]<br>
      비담임교과11[<?echo("$t11")?> 선생님]<br>
      비담임교과12[<?echo("$t12")?> 선생님]<br>
      비담임교과13[<?echo("$t13")?> 선생님]<br>
      비담임교과14[<?echo("$t14")?> 선생님]<br>
      비담임교과15[<?echo("$t15")?> 선생님]<br>
      비담임교과16[<?echo("$t16")?> 선생님]<br>
      비담임교과17[<?echo("$t17")?> 선생님]<br>
      비담임교과18[<?echo("$t18")?> 선생님]<br>
      비담임교과19[<?echo("$t19")?> 선생님]<br>
      비담임교과20[<?echo("$t20")?> 선생님]<br>
      비담임교과21[<?echo("$t21")?> 선생님]<br>
      비담임교과22[<?echo("$t22")?> 선생님]<br>
      비담임교과23[<?echo("$t23")?> 선생님]<br>
      비담임교과24[<?echo("$t24")?> 선생님]<br>
      비담임교과25[<?echo("$t25")?> 선생님]<br>
      비담임교과26[<?echo("$t26")?> 선생님]<br>
      비담임교과27[<?echo("$t27")?> 선생님]<br>
      비담임교과28[<?echo("$t28")?> 선생님]<br>
      비담임교과29[<?echo("$t29")?> 선생님]<br>
      <br><br>
      <form action="add.php" method="post">
        <input type="hidden" name="tg1c1" value="<?echo("$tg1c1")?> 선생님" />
        <input type="hidden" name="tg1c2" value="<?echo("$tg1c2")?> 선생님" />
        <input type="hidden" name="tg1c3" value="<?echo("$tg1c3")?> 선생님" />
        <input type="hidden" name="tg1c4" value="<?echo("$tg1c4")?> 선생님" />
        <input type="hidden" name="tg1c5" value="<?echo("$tg1c5")?> 선생님" />
        <input type="hidden" name="tg1c6" value="<?echo("$tg1c6")?> 선생님" />
        <input type="hidden" name="tg1c7" value="<?echo("$tg1c7")?> 선생님" />
        <input type="hidden" name="tg1c8" value="<?echo("$tg1c8")?> 선생님" />
        <input type="hidden" name="tg2c1" value="<?echo("$tg2c1")?> 선생님" />
        <input type="hidden" name="tg2c2" value="<?echo("$tg2c2")?> 선생님" />
        <input type="hidden" name="tg2c3" value="<?echo("$tg2c3")?> 선생님" />
        <input type="hidden" name="tg2c4" value="<?echo("$tg2c4")?> 선생님" />
        <input type="hidden" name="tg2c5" value="<?echo("$tg2c5")?> 선생님" />
        <input type="hidden" name="tg2c6" value="<?echo("$tg2c6")?> 선생님" />
        <input type="hidden" name="tg2c7" value="<?echo("$tg2c7")?> 선생님" />
        <input type="hidden" name="tg2c8" value="<?echo("$tg2c8")?> 선생님" />
        <input type="hidden" name="tg3c1" value="<?echo("$tg3c1")?> 선생님" />
        <input type="hidden" name="tg3c2" value="<?echo("$tg3c2")?> 선생님" />
        <input type="hidden" name="tg3c3" value="<?echo("$tg3c3")?> 선생님" />
        <input type="hidden" name="tg3c4" value="<?echo("$tg3c4")?> 선생님" />
        <input type="hidden" name="tg3c5" value="<?echo("$tg3c5")?> 선생님" />
        <input type="hidden" name="tg3c6" value="<?echo("$tg3c6")?> 선생님" />
        <input type="hidden" name="tg3c7" value="<?echo("$tg3c7")?> 선생님" />
        <input type="hidden" name="tg3c8" value="<?echo("$tg3c8")?> 선생님" />
        <input type="hidden" name="t1" value="<?echo("$t1")?> 선생님" />
        <input type="hidden" name="t2" value="<?echo("$t2")?> 선생님" />
        <input type="hidden" name="t3" value="<?echo("$t3")?> 선생님" />
        <input type="hidden" name="t4" value="<?echo("$t4")?> 선생님" />
        <input type="hidden" name="t5" value="<?echo("$t5")?> 선생님" />
        <input type="hidden" name="t6" value="<?echo("$t6")?> 선생님" />
        <input type="hidden" name="t7" value="<?echo("$t7")?> 선생님" />
        <input type="hidden" name="t8" value="<?echo("$t8")?> 선생님" />
        <input type="hidden" name="t9" value="<?echo("$t9")?> 선생님" />
        <input type="hidden" name="t10" value="<?echo("$t10")?> 선생님" />
        <input type="hidden" name="t11" value="<?echo("$t11")?> 선생님" />
        <input type="hidden" name="t12" value="<?echo("$t12")?> 선생님" />
        <input type="hidden" name="t13" value="<?echo("$t13")?> 선생님" />
        <input type="hidden" name="t14" value="<?echo("$t14")?> 선생님" />
        <input type="hidden" name="t15" value="<?echo("$t15")?> 선생님" />
        <input type="hidden" name="t16" value="<?echo("$t16")?> 선생님" />
        <input type="hidden" name="t17" value="<?echo("$t17")?> 선생님" />
        <input type="hidden" name="t18" value="<?echo("$t18")?> 선생님" />
        <input type="hidden" name="t19" value="<?echo("$t19")?> 선생님" />
        <input type="hidden" name="t20" value="<?echo("$t20")?> 선생님" />
        <input type="hidden" name="t21" value="<?echo("$t21")?> 선생님" />
        <input type="hidden" name="t22" value="<?echo("$t22")?> 선생님" />
        <input type="hidden" name="t23" value="<?echo("$t23")?> 선생님" />
        <input type="hidden" name="t24" value="<?echo("$t24")?> 선생님" />
        <input type="hidden" name="t25" value="<?echo("$t25")?> 선생님" />
        <input type="hidden" name="t26" value="<?echo("$t26")?> 선생님" />
        <input type="hidden" name="t27" value="<?echo("$t27")?> 선생님" />
        <input type="hidden" name="t28" value="<?echo("$t28")?> 선생님" />
        <input type="hidden" name="t29" value="<?echo("$t29")?> 선생님" />
        <input type="submit" value="예, 모두 추가합니다." onclick="Javascript:
        password = prompt('암호를 입력하세요.');
        if (password == 'uf066262') {
          location.replace('add.php');
        } else {
          window.close();
          alert('취소되었습니다');
        }
        ">
      </form>
      <input type="button" value="아니오, 추가하지 않고 이전으로 돌아갑니다." onclick="Javascript:window.close();alert('취소되었습니다.');" />
      <br><br>
    </div>
    <br><br>
    <div class="footer">
      Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
    </div>
  </body>
</html>
