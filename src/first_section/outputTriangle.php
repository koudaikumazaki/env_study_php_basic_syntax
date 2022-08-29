<!-- コンソールに数字を入力し、底辺と高さが入力値の三角形を表示するプログラムを作成してください。 -->

<?php
  echo "数字を入力してください：";
  $number = fgets(STDIN);
  for ($i=0; $i < $number; $i++) {
    echo str_repeat('$', ($i + 1))."\n";
  }
?>