<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP-BASIC-kadai_sort</title>
  </head>
  <body>
    <p>
      <?php
      // 配列$numsを定義
      $nums = [15, 4, 18, 23, 10];
      // Create original function
      function sort_2way($array, $order) {
        //引数$orderがtrueなら
        if ($order === true){
          echo '昇り順でソートします。<br>';
          // sort関数で配列$arrayを上り順でソート
          sort ($array);
          // 配列$arrayの中身を変数$numとして繰り返し出力
          foreach ($array as $num){
            // 変数$numと改行を表示
            echo "{$num} <br>";
          }
        } else {
          // 引数$orderがtrue以外なら(つまりfalseなら)
          echo '降順でソートします。<br>';
          // rsort関数で配列$arrayを降順でソート
          rsort ($array);
          // 配列$arrayの中身を変数$numとして繰り返し出力
          foreach ($array as $num){
            // 変数$numと改行を表示
            echo "{$num} <br>";
        }
      }
    }
    //引数$arrayに配列$numsを代入、引数$orderにtrue/falseを代入して呼び出し
    sort_2way ($nums, true);
    sort_2way ($nums, false);
    
      ?>
    
  </body>
</html>
