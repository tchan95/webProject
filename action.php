<?php
 $file = $_POST['link'];
 $check = "youtu";
  if (!empty($file) == true){
   if(strpos($file,$check) != false){
   exec("youtube-dl --extract-audio --audio-format mp3 --audio-quality 0 -o \"C:/YoutubeMusic/%(title)s.%(ext)s\" $file",$log);
   print " <script> alert('다운로드를 완료했습니다.');</script>";
   header('Refresh: 1; url=index.html');
 }else{
   print"<script> alert('잘못된 주소입니다. 다시 입력해 주세요.'); history.go(-1); </script>";
  }
 }
 else{
  print " <script> alert('링크를 입력해주세요.'); history.go(-1); </script>";
 }
?>
