<h1>なんちゃって物理エンジン</h1>
<hr />
<h2>説明</h2>
<p>これはハンドボールやソフトボール投げで遠くに飛ばしたいけどどう投げればいいのかわからない人を助けるためのツールです。<br />
  海に向かって石を投げる時とかありますよね、そんなときにも使えます。</p>
<h2>処理内容</h2>
<p>セレクタ方目標を選択してもらい、文科省より提示されている大学1,2年生のハンドボール投げの得点基準より自分が飛ばすべき距離を決定するような条件分岐になっている。<br />
  数値のデータは作成者が直にプログラム内に打ち込んでおり、APIなどの使用はしていない。<br />
  その後、選び出されたデータと一般男性の平均球速を用いてどのくらいの角度で投擲すれば目的を達成できるかを計算している。<br />
  また、どのような記録が優れているかが分かりにくいため、実際の野球選手が投げるとどのくらい飛ぶのかを算出している。<br />
  こちらは日本の投手の球速の幅を120km/h~160km/hと仮定した場合、各球速でどのような結果(理論値)が出るかを算出している。<br />
</p>
<form action="hoge.php" method="post">
  <h2>計算しよう！</h2>
  <p>以下の内容を全て埋めてください。</p>
  名前<input type="text" name="j" placeholder="お名前は？"><br />
  目標
  <select name="w">
    <option value="default">選んでください</option>
    <option value=21>そこまで投げなくてもいい</option>
    <option value=25>平均ぐらい</option>
    <option value=31>そこそこ優れている</option>
    <option value="great">優れすぎてやばい</option>
  </select><br />
  <br />
  <input type="submit" value="計算する">
</form>
<?php
print "ちなみにプロ野球選手が投げるとこんな感じになります!<br />
  ※野球選手(プロと高校生)がボールを投げるととんでもない距離になりかねないので投擲角度30°にします。<br />
  また、以下の値は理論値であり実際にこうなるかはわかりません。<br />";
for ($a = 120; $a <= 160; $a = $a + 10) {
  $m = $a * cos(1 / 6);
  print "初速が" . $a . "にたいし、到達距離は" . $m . "m<br />";
}
?>