<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>온라인 상담예약 뷰어 | 신문고</title>
    <style type="text/css">
      @import 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed';
      html, body { text-align: center; background-color: #ECF0F1; font-family: 'Open Sans'; }
      div { font-family: 'Open Sans'; text-align: center; }
      .title { font-size: 18pt; }
      .form { text-align: center; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: auto; width: 100%; }
      .desc1 { text-align: left; font-size: 15pt; }
      .inputform { text-align: center; font-size: 15pt; }
      .footer { font-size: 10pt; font-family: 'Roboto Condensed', sans-serif; color: #888888; }
      input.submit { font-family: 'Open Sans'; text-align: center; width: 100px; height: 30px; }
    </style>
  </head>
  <body>
    <?
      $teacher = $_POST['teacher'];
      $conn = mysqli_connect("localhost","disposalphp","6bbbd8e26f4afc495410cf028fa4b8db", "edogok");
      $sql = "SELECT * FROM counseling WHERE 선생님 = '".$teacher."'";
      $ret = mysqli_query($conn, $sql);
      ?>
    <div class="title">
      <p><strong>상담예약 뷰어 | 신문고</strong></p>
    </div>
    <p><img src="../img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;<strong>▷ 총 <? if($ret) { echo mysqli_num_rows($ret), "건의 상담 예약이 있습니다.<br><br>"; } else { echo "데이터 조회에 실패하였습니다."."<br>"; echo "실패 원인 : ".mysqli_error($conn); exit(); }?></strong>
      </div>
      <div style="text-align: center; margin-left: 10%; margin-right: 5%;">
        <?
          echo "<table border=1>";
          echo "<tr>";
          echo "<th>타임스탬프</th><th>상담월</th><th>상담일</th><th>상담시간</th><th>학교</th><th>학년</th><th>반</th><th>성명</th><th>전화번호</th><th>이메일</th><th>상담취소</th>";
          echo "</tr>";
          while ($row = mysqli_fetch_array($ret)) {
            echo "<tr>";
            echo "<td>", $row['Timestamp'], "</td>";
            echo "<td>", $row['상담월'], "</td>";
            echo "<td>", $row['상담일'], "</td>";
            echo "<td>", $row['상담시간'], "</td>";
            echo "<td>", $row['학교'], "</td>";
            echo "<td>", $row['학년'], "</td>";
            echo "<td>", $row['반'], "</td>";
            echo "<td>", $row['성명'], "</td>";
            echo "<td>", $row['전화번호'], "</td>";
            echo "<td>", $row['이메일'], "</td>";
            echo "<td>", "<a href='cancel_confirm.php?timestamp=", $row['Timestamp'], "&", "name=", $row['성명'], "' target=_blank>취소</a></td>";
            echo "</tr>";
          }
          mysqli_close($conn);
          echo "</table>"
        ?>
      </div>
    </div>
    <br><br>
    <div class="footer">
      Copyright © eDogok - 도곡중학교 신문고, All Rights Reserved.
    </div>
  </body>
</html>
