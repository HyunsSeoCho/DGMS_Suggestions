<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>다운로드</title>
    </head>
    <body>
      <?
        $fileName = $_REQUEST['fileName'];
        $DownloadPath = "./2016방송부합격자.zip".$fileName; // 파일 경로
        $fileTmp = strstr($fileName, '^'); // 파일명 임시저장(앞의 '^'를 제거
        $DownFile = substr($fileTmp, 2);
        Header("Content-Type: file/unknown");
        Header("Content-Disposition: attachment; filename=$DownFile");
        Header("Content-Length: ".filesize("$DownloadPath"));
        header("Content-Transfer-Encoding: binary ");
        Header("Pragma: no-cache");
        Header("Expires: 0");
        flush();

        if ($fp = fopen("$downloadPath", "r"))
        {
           print fread($fp, filesize("$DownloadPath"));
        }
        fclose($fp);
      ?>
    </body>
  </html>
