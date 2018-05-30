<?php
 $file = $_POST['link'];
  if (!empty($file) == true){
   exec("youtube-dl --extract-audio --audio-format mp3 --audio-quality 0 -o \"C:/YoutubeMusic/%(title)s.%(ext)s\" $file",$log);
   print " <script> alert('다운로드를 완료했습니다.');</script>";
  }
 else{
  print " <script> alert('링크를 입력해주세요.'); history.go(-1); </script>";
 }
?>
