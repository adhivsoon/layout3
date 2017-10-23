
<?php
// letak image yang digunakan sebagai counter
$img = "http://localhost/layout3/counter/";

// url to the animated digits
$animated_img = "http://localhost/layout3/counter/sri/";

// Berapa digit yang ditampilkan
$padding = 4;             

// ukuran lebar dan tinggi file image
$width = 40;
$height = 50;

// letak file log
$fpt = "hit_counter.txt"; //

if (!file_exists($fpt)) {
  $count_dat = fopen($fpt,"w+");
  $digits = 0;
  fwrite($count_dat,$digits);
  fclose($count_dat);
}
else {
  $line = file($fpt);
  $digits = $line[0];
  if ($lock_ip==0 || ($lock_ip==1 && checkIP($REMOTE_ADDR)==0)) {
    $count_dat = fopen($fpt,"r+");
    $digits++;
    fwrite($count_dat,$digits);
    fclose($count_dat);
  }
}
$digits = sprintf ("%0".$padding."d",$digits);
$ani_digits = sprintf ("%0".$padding."d",$digits+1);
echo "<table cellpadding=0 cellspacing=0 border=0><tr align=center>\n";
$length_digits = strlen($digits);
for ($i=0; $i < $length_digits; $i++) {
  if (substr("$digits",$i,1) == substr("$ani_digits",$i,1)) {
    $digit_pos = substr("$digits",$i,1);
    echo ("<td><img src=$img$digit_pos.gif width=$width height=$height></td>\n");
  }
  else {
    $digit_pos = substr("$ani_digits",$i,1);
    echo ("<td><img src=$animated_img$digit_pos.gif width=$width height=$height></td>\n");
  }
}
echo "</tr></table>\n";
?>
