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
    print("print構文");
    print("\n");
    print("PHPを勉強中");
    print("\n");
    print("aaa");
    print("\n");

    // escape sequence
    print("I'm studying \"PHP\"");
    print("\n");
    print("\n");
    print("\n");



    // 算術演算子
    // [PHP+MySQL（MariaDB） Webサーバーサイドプログラミング入門 | Udemy](https://www.udemy.com/course/php7basic/learn/lecture/10429972#content)
    print("算術演算子\n");
    print(1 + 1);
    print("\n");
    print(123 + 2 * 5);
    print("\n");
    print(123 + 2 * 5 / 3);
    print("\n");
    print("\n");
    print("\n");



    // 現在の時刻を表示
    // [PHP+MySQL（MariaDB） Webサーバーサイドプログラミング入門 | Udemy](https://www.udemy.com/course/php7basic/learn/lecture/11653566#content)
    // [PHP: DateTime::format - Manual](https://www.php.net/manual/ja/datetime.format.php)
    print("現在の時刻を表示");
    print("\n");
    // 秒を表示
    print(date('s秒'));
    print("\n");
    // 曜日を表示、dateファンクション(英語)
    print(date('l'));
    print("\n");
    print("\n");

    ?>
</pre>
  </main>
</body>

</html>
