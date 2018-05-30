<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <title>Youtube Mp3 Converter</title>
  </head>
  <body>
    <div>
      <header><h1>다운로드 목록</h1></header><br>
      <p></p>
      <p></p>
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
          echo($part3."<br>");
        }
      }
    }
    ?>
    <br>
    <br>
    <br>
      <button type="button" name="bun" onclick="location.href='http://localhost/converter/index.html'">메인화면</button>
   </div>
  </body>
</html>
