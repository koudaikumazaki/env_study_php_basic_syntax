<!-- 数字を入力し、入力値が3で割り切れる場合はFizz、5で割り切れる場合はBuzz、3でも5でもで割り切れる場合はFizzBuzz、3でも5でも割り切れない場合は数字を出力するプログラムを作成してください。 -->
<?php
  echo "数字を入力してください：";
  $number = fgets(STDIN);
  if ($number % 15 == 0) {
    echo "FizzBuzz\n";
  } elseif ($number % 5 == 0) {
    echo "Buzz\n";
  } elseif ($number % 3 == 0) {
    echo "Fizz\n";
  } else {
    echo $number;
  }
?>