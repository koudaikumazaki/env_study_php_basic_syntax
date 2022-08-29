<!-- 5個の数字を入力し、奇数と偶数に分けるプログラムを作成してください。 -->
<?php
  $evenArray = [];
  $oddArray = [];
  for ($i=0; $i < 5; $i++) {
    echo "数字を入力してください（".($i + 1)."回目）：";
    $number = fgets(STDIN);
    if ($number % 2 == 0) {
      array_push($evenArray, $number);
    } else {
      array_push($oddArray, $number);
    }
  }
  echo "■ 奇数\n";
  foreach ($oddArray as $number) {
    echo $number;
  }
  echo "\n";
  echo "■ 偶数\n";
  foreach ($evenArray as $number) {
    echo $number;
  }
?>