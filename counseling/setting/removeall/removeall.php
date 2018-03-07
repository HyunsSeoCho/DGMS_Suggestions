<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>온라인 상담예약 뷰어 | 신문고</title>
    <style type="text/css">
      html, body { background-color: #ECF0F1; }
    </style>
  </head>
  <body>
    <?
      $conn = mysqli_connect("localhost","disposalphp","6bbbd8e26f4afc495410cf028fa4b8db", "edogok");
      $sql = "DELETE FROM teacherlist";
      $ret = mysqli_query($conn, $sql);
      if($ret) {
        mysqli_close($conn);
        ?> <script> location.replace('about:blank'); opener.parent.location.reload(); window.close(); alert('선생님 목록의 모든 선생님들이 제거되었습니다!'); </script> <?
      } else {
        mysqli_close($conn);
        ?> <script> location.replace('about:blank'); opener.parent.location.reload(); window.close(); alert('제거에 실패하였습니다. 관리자에게 문의하세요.'); </script> <?
      }
    ?>
  </body>
</html>
