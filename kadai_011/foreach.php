<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>foreach文を使って連想配列の値とキーを出力しよう</title>
 </head>
 <body>
  <p>
    <?php
    $vegetable = ['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];
    foreach($vegetable as $key => $value){
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
  <p>
    <?php
    $personal_data =['id'=>1,'名前'=>'侍太郎','年齢'=>30];
    foreach($personal_data as $key => $value){
      echo "{$key}:{$value}<br>";
    }
    ?>
    </p>
  </body>
</html>