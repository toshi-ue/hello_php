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


// // 連想配列(foreach構文)
// $fruits = [
//   'apple' => "りんご",
//   'grape' => "ぶどう",
//   'lemon' => "レモン",
//   'tomato' => "トマト",
//   'peach' => "もも"
// ];

// print($fruits['apple']); // りんご
// print("\n");

// foreach ($fruits as $english => $japanese) {
//   print($english . ':' . $japanese . "\n");
// }



// // if構文


// $hour = date('G');
// print($hour); // 現在の"時"を表示
// print("\n");


// if ($hour < 9) {
//   print('※ 現在受付時間外です');
//   print("\n");
// } else {
//   print('ようこそ');
//   print("\n");
// }

// $x = 'あいうえお';
// if ($x == '') {
//   print('xには文字が入っています');
//   print("\n");
// }

// // 上の書き方と同じ結果になる
// if ($x) {
//   print('xには文字が入っています');
//   print("\n");
// }

// $x = 1;
// if ($x) {
//   print('xは0以外です');
//   print("\n");
// }

// $x = 0;
// if (!$x) {
//   print('xは0です');
//   print("\n");
// }



// // 整数、小数点の操作(ceil, floor, round)

// // ファンクション不使用
// $numerical_value = "○";
// print("3000円のものから100円値引きした場合は" . $numerical_value . "%引きです。");
// print("\n");
// print("\n");

// $numerical_value = 100 / 3000 * 100; // 3.3333333333333
// print("3000円のものから100円値引きした場合は" . $numerical_value . "%引きです。");
// print("\n");
// print("\n");

// // floorファンクション使用(切り捨て)
// $numerical_value = floor(100 / 3000 * 100); // 3
// print("3000円のものから100円値引きした場合は" . $numerical_value . "%引きです。");
// print("\n");
// print("\n");

// // ceilファンクション使用(切り上げ)
// $numerical_value = ceil(100 / 3000 * 100); // 4
// print("3000円のものから100円値引きした場合は" . $numerical_value . "%引きです。");
// print("\n");
// print("\n");

// // roundファンクション使用(四捨五入)
// $numerical_value = round(100 / 3000 * 100, 1); // 3.3
// print("3000円のものから100円値引きした場合は" . $numerical_value . "%引きです。");
// print("\n");
// print("\n");



// // c
// $date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 12); // 2018年 01月 12日
// print($date);
// print("\n");
// print("\n");

// $date = sprintf('%04d年 % 2d月 % 2d日', 2018, 1, 12); // 2018年  1月 12日
// print($date);
// print("\n");
// print("\n");

// $date = sprintf('%04d年 % 2d月 % 2d日 %s', 2018, 1, 12, '金'); // 2018年  1月 12日 金
// print($date);
// print("\n");
// print("\n");



// // file_put_contents(ファイルに内容を書き込む)
// $success = file_put_contents('../my_datas/sample.txt', '2018-06-01 ホームページをリニューアルしました');
// if ($success) {
//   print('ファイルへの書き込みが完了しました');
// } else {
//   print('書き込みに失敗しました。フォルダ権限などを確認してください');
// }



// // file_get_contents(ファイルの読み込み)、追加書き込み
// $contents = file_get_contents('../my_datas/sample.txt');
// print($contents); // 2018-06-01 ホームページをリニューアルしました
// print("\n");
// print("\n");

// readfile('../my_datas/sample.txt'); // 2018-06-01 ホームページをリニューアルしました
// print("\n");
// print("\n");

// $contents .= "2018-06-02 商品を追加しました";
// file_put_contents('../my_datas/sample.txt', $contents);
// print($contents);
// print("\n");
// print("\n");

// $contents = "2018-05-12 ホームページを作成しました\n" . $contents;
// file_put_contents('../my_datas/sample.txt', $contents);
// print($contents);
// print("\n");
// print("\n");



// simplexml_load_fileファンクション(xmlの情報を読み込む), var_dumpファンクション
print("displayed by simplexml_load_file\n");
$xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
foreach ($xmlTree->channel->item as $item) :
  print("<a href=" . $item->link . ">" . $item->title . "</a>\n");
endforeach;
print("\n");
print("\n");

// var_dump
print("displayed by var_dump\n");
var_dump($xmlTree);

?>
</pre>
  </main>
</body>

</html>
