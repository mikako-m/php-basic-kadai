<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    echo "昇順にソートします。<br>";
    $nums = [15,4,18,23,10];
    sort($nums);
    
    foreach($nums as $value){
      echo "$value <br>";
    }
    echo "降順にソートします。<br>";
    $nums = [15,4,18,23,10];
    rsort($nums);
    
    foreach($nums as $value){
      echo "$value <br>";
    }
    ?>
  </p>
</body>
</html>