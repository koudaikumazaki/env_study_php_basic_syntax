<!-- コンソール上で2つの数字と計算方式を選択し、4則計算のできる計算機を作成してください。 -->
<?php
  echo "1個目の数字を入力してください：";
  $first_number = fgets(STDIN);
  echo "2個目の数字を入力してください：";
  $second_number = fgets(STDIN);
  echo "計算方式を選択してください。1:和、2:差、3:積、4:商";
  $calculation_method = fgets(STDIN);
  switch ($calculation_method) {
    case '1':
      $answer = $first_number + $second_number;
      echo "計算結果：${answer}\n";
      break;
    case '2':
      $answer = $first_number - $second_number;
      echo "計算結果：${answer}\n";
      break;
    case '3':
      $answer = $first_number * $second_number;
      echo "計算結果：${answer}\n";
      break;
    case '4':
      $answer = $first_number / $second_number;
      echo "計算結果：${answer}\n";
      break;
    default:
      echo "エラーです。\n";
      break;
  }
?>