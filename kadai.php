<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題1 - 秒の計算</title>
</head>
<body>
  <h1>1日に含まれる秒数を計算</h1>
  <p>
    <?php
      $hoursPerDay = 24;
      $minutesPerHour = 60;
      $secondsPerMinute = 60;
      $secondsPerDay = $hoursPerDay * $minutesPerHour * $secondsPerMinute;

      echo "計算式: {$hoursPerDay} × {$minutesPerHour} × {$secondsPerMinute} = {$secondsPerDay}<br>";
      echo "結果: 1日は {$secondsPerDay} 秒です。";
    ?>
  </p>
</body>
</html>
