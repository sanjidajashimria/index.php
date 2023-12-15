>?php
$api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/
    maxresdefault.jpg";


 $videourl = "https://youtu.be/qtGEQISc0nQ?si=_hGg_Avk3I9cZ1jM";
 $mainurl = explode('?si=,$videourl');
 $videoarray = explode('/',$mainurl[0]);
 $videoid=and($videoarray);
 print_r(videoid);
 ?>
