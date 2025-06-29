<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題016</title>
</head>

<body>
<?php
// クラスを定義
class Food {
    // プロパティを定義
    private $name;
    private $price;

    // メソッドを定義
    public function set_price(int $price) {
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price . '<br>';
    }

    // コンストラクタを定義
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

// インスタンス化
$food = new Food('potato', 250);

// メソッドにアクセス
$food->show_price();
?>
</body>
</html>