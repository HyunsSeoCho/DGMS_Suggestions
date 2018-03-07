<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>온라인 상담예약 뷰어 | 신문고</title>
  </head>
  <body bgcolor="#ECF0F1">
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
      $conn = mysqli_connect("localhost","disposalphp","6bbbd8e26f4afc495410cf028fa4b8db", "edogok");
      $sql = "INSERT INTO edogok. teacherlist (`1학년1반`, `1학년2반`, `1학년3반`, `1학년4반`, `1학년5반`, `1학년6반`, `1학년7반`, `1학년8반`, `2학년1반`, `2학년2반`, `2학년3반`, `2학년4반`, `2학년5반`, `2학년6반`, `2학년7반`, `2학년8반`, `3학년1반`, `3학년2반`, `3학년3반`, `3학년4반`, `3학년5반`, `3학년6반`, `3학년7반`, `3학년8반`, `비담임교과1`, `비담임교과2`, `비담임교과3`, `비담임교과4`, `비담임교과5`, `비담임교과6`, `비담임교과7`, `비담임교과8`, `비담임교과9`, `비담임교과10`, `비담임교과11`, `비담임교과12`, `비담임교과13`, `비담임교과14`, `비담임교과15`, `비담임교과16`, `비담임교과17`, `비담임교과18`, `비담임교과19`, `비담임교과20`, `비담임교과21`, `비담임교과22`, `비담임교과23`, `비담임교과24`, `비담임교과25`, `비담임교과26`, `비담임교과27`, `비담임교과28`, `비담임교과29`) VALUES ('".$tg1c1."', '".$tg1c2."', '".$tg1c3."', '".$tg1c4."', '".$tg1c5."', '".$tg1c6."', '".$tg1c7."', '".$tg1c8."', '".$tg2c1."', '".$tg2c2."', '".$tg2c3."', '".$tg2c4."', '".$tg2c5."', '".$tg2c6."', '".$tg2c7."', '".$tg2c8."', '".$tg3c1."', '".$tg3c2."', '".$tg3c3."', '".$tg3c4."', '".$tg3c5."', '".$tg3c6."', '".$tg3c7."', '".$tg3c8."', '".$t1."', '".$t2."', '".$t3."', '".$t4."', '".$t5."', '".$t6."', '".$t7."', '".$t8."', '".$t9."', '".$t10."', '".$t11."', '".$t12."', '".$t13."', '".$t14."', '".$t15."', '".$t16."', '".$t17."', '".$t18."', '".$t19."', '".$t20."', '".$t21."', '".$t22."', '".$t23."', '".$t24."', '".$t25."', '".$t26."', '".$t27."', '".$t28."', '".$t29."')";
      $ret = mysqli_query($conn, $sql);
      if($ret) {
        mysqli_close($conn);
        ?> <script> location.replace('about:blank'); opener.parent.location.reload(); window.close(); alert('새로운 선생님들이 등록되었습니다!'); </script> <? exit();
      } else {
        mysqli_close($conn);
        ?> <script> location.replace('about:blank'); opener.parent.location.reload(); window.close(); alert('등록에 실패하였습니다. 관리자에게 문의하세요.'); </script> <? exit();
      }
    ?>
  </body>
</html>
