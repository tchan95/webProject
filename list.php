<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <title>Youtube Mp3 Converter</title>
  </head>
  <body>
    <div class="container">
      <nav><h1>다운로드 목록</h1></nav>
      <div>
        <br>
        <br>
    <?php
    exec("dir c:\YoutubeMusic | findstr .mp3",$find); // 파일 찾기
    $word = 'mp3';

    if(empty($find)){
      echo "다운로드된 파일이 없습니다.";
    }else{
      foreach($find as $value){
        if(stripos($value,$word) != "" && !empty($value)){
          $part = strchr($value,":");
          $part1 = strchr($part," ");
          $part2 = strchr($part1,",");
          $part3 = strchr($part2," ");
          $data = iconv("EUC-KR","UTF-8//IGNORE",$part3);
          echo($data."<br>");
        }
      }
    }
    ?>
    <br>
    <br>
    <br>
      <button type="button" name="bun" onclick="location.href='http://localhost/converter/index.html'">메인화면</button>
    </div>
   </div>
  </body>
</html>
