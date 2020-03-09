<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <!-- Page info -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!-- Responsive -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>

<body>
<!--=======================
  No script
========================-->
  <noscript>
    コンテンツ内にJavaScriptを使用しているコンテンツがあります。<br>
    ご利用のブラウザでJavaScriptの機能を無効にされている場合は、<br>
    一部のコンテンツが正しく表示されない、もしくは正しく機能しないことがあります。<br>
    ブラウザの設定でJavaScriptを有効にしてください。
  </noscript>
<!--=======================
Header
========================-->
  <header>
    <div class="container">
      <h1><a href="#">LOGOS</a></h1>
      <nav>
        <div class="navItem"><a href="#LIFE">LIFE</a></div>
        <div class="navItem"><a href="#WORK">WORK</a></div>
        <div class="navItem"><a href="#JOURNEY">JOURNEY</a></div>
      </nav>
      <div class="navBtn">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>