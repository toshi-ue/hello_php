<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
<!-- ここにプログラムを記述します -->
<?php
// print構文(syntax)
// [PHP+MySQL（MariaDB） Webサーバーサイドプログラミング入門 | Udemy](https://www.udemy.com/course/php7basic/learn/lecture/10401552#content)
// print("print構文");
// print("\n");
// print("PHPを勉強中");
// print("\n");
// print("aaa");
// print("\n");

// // escape sequence
// print("I'm studying \"PHP\"");
// print("\n");
// print("\n");
// print("\n");



// 算術演算子
// [PHP+MySQL（MariaDB） Webサーバーサイドプログラミング入門 | Udemy](https://www.udemy.com/course/php7basic/learn/lecture/10429972#content)
// print("算術演算子\n");
// print(1 + 1);
// print("\n");
// print(123 + 2 * 5);
// print("\n");
// print(123 + 2 * 5 / 3);
// print("\n");
// print("\n");
// print("\n");



// 現在の時刻を表示
// [PHP+MySQL（MariaDB） Webサーバーサイドプログラミング入門 | Udemy](https://www.udemy.com/course/php7basic/learn/lecture/11653566#content)
// [PHP: DateTime::format - Manual](https://www.php.net/manual/ja/datetime.format.php)
// print("現在の時刻を表示");
// print("\n");
// // 秒を表示
// print(date('s秒'));
// print("\n");
// // 曜日を表示、dateファンクション(英語)
// print(date('l'));
// print("\n");
// print("\n");
// print("\n");


// 現在時刻を表示(文字列の連結)
// print('現在は' . date('G時 i分 s秒') . 'です');
// print("\n");
// print("\n");
// print("\n");



// 現在時刻を表示(オブジェクト指向)
// $today = new DateTime();
// print($today->format('G時 i分 s秒'));
// print("\n");
// print("\n");
// print("\n");



// 変数
// print(100 + 200);
// print("\n");
// print(100 + 200 * 1.08);
// print("\n");
// print((100 + 200) * 1.08);
// print("\n");
// //    変数を使えば使い回しがラクちん♪♪
// $sum = 100 + 200;
// $tax = 1.08;
// print("totalPrice" . $sum . "yen");
// print("\n");
// print("totalPrice with Tax" . $sum * $tax . "yen");
// print("\n");
// print("\n");
// print("\n");



// // for, while
// // for構文
// for ($i = 1; $i <= 5; $i++) {
//   print($i . "\n");
// }


// // while構文
// $i = 1;
// while ($i <= 5) {
//   print($i . "\n");
//   // $i = $i + 1;
//   // $i += 1;
//   $i++;
// }
// print("\n");
// print("\n");
// print("\n");

// // カレンダーを表示(timeファンクション、date  )
// print(time()); // 今日のtimestampを取得
// print("\n");
// print(date('n/j(D)')); // e.g. 5/13(Thu)
// print("\n");
// print(time() + 60 * 60 * 24); // 明日のtimestampを取得
// print("\n");
// print(date('n/j(D)', strtotime('+1day'))); // e.g. 5/14(Fri)
// print("\n");
// // for ($i = 1; $i <= 365; $i++) {
// //   $date = strtotime('+' . $i . 'day');
// //   print(date('n/j(D)', $date));
// //   print("\n");
// // }
// for ($i = 1; $i <= 365; $i++) :
//   $date = strtotime('+' . $i . 'day');
//   print(date('n/j(D)', $date));
//   print("\n");
// endfor;
// print("\n");
// print("\n");
// print("\n");



// // カレンダーを表示(日本語)
// $week_name = ['日', '月', '火', '水', '木', '金', '土'];
// print($week_name[date('w')]); //dateファンクションのwフォーマットを使用(date('w')には数字が入る)
// print("\n");

// for ($i = 0; $i < 365; $i++) :
//   $date = strtotime('+' . $i . 'day');
//   // $w = $date->format('w');
//   // print(date('n/j(D)', $date));
//   print(date('n/j', $date) . "(" . $week_name[date('w', $date)] . ")");
//   print("\n");
// endfor;
// print("\n");
// print("\n");
// print("\n");


// 連想配列(foreach構文)
$fruits = [
  'apple' => "りんご",
  'grape' => "ぶどう",
  'lemon' => "レモン",
  'tomato' => "トマト",
  'peach' => "もも"
];

print($fruits['apple']); // りんご
print("\n");

foreach ($fruits as $english => $japanese) {
  print($english . ':' . $japanese . "\n");
}

?>
</pre>
  </main>
</body>

</html>
