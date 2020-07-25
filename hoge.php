<h1>計算結果</h1>
<?php
  $fuga = $_POST["j"];
  $distance = $_POST["w"];

  print $fuga . "は" . "ハンドボール/ソフトボールを" . $distance . "投げれば良い<br />";

  print "斜方投射で投げますが、前提条件としてボールの最高到達点はおおよそ5mとします。<br />
        また、球速は一般高校生と大学生の平均値である90~110km/hとします<br />";
  oblique();


  function oblique() {
    global $distance;
    if($distance == 21) {
      $s = atan((4*5)/$distance);
      print "<h3>時速90~110kmで投擲角度θは" . $s ."</h3>";
    } elseif ($distance == 25) {
      $s = atan((4*5)/$distance);
      print "<h3>時速90~110kmで投擲角度θは" . $s ."</h3>";
    } elseif ($distance == 31) {
      $s = atan((4*5)/$distance);
      print "<h3>時速90~110kmで投擲角度θは" . $s ."</h3>";
    } else {
      $s = atan((4*5)/$distance);
      print "<h3>時速90~110kmで投擲角度θは" . $s ."</h3>";
    }
  }
  
?>
<hr />
<a href = "index.php">hogeへ</a>