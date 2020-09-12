<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by 陳暘和</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="../css/success_style.css">

</head>

<body>
<?php
      $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
      $furi = htmlspecialchars($_POST['furigana'], ENT_QUOTES, 'UTF-8');
      $sex = htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8');
      $birth_y= htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
      $birth_m= htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
      $birth_d= htmlspecialchars($_POST['day'], ENT_QUOTES, 'UTF-8');
      $country = htmlspecialchars($_POST['nationality'], ENT_QUOTES, 'UTF-8');
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
      $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
      ?>
    </h2>
  <!-- partial:index.partial.html -->
  <nav class="navbar fixed-top navbar-top navbar-expand-md">
    <div class="container"><a class="navbar-brand nav-link hlink" href="#hd">YHC-BANK</a>
      <div class="navbar-collapse collapse">
        <ul class="ml-auto navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#section_intro">
              <div class="btn btn-primary">ログイン </div>
            </a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="jumbotron rounded-0" id="hd">
    <div class="container" data-0="transform: translateY(-50px)" data-500="transform: translateY(50px)">
      <h1>YHC-BANK </h1>
      <hr />
      <h4>信頼できる銀行</h4><img class="svg" src="https://chenyangho.github.io/catthing/img/Savings-bro.png" alt="" /><img class="img2" src="https://chenyangho.github.io/catthing/img/Credit card-bro.png" alt="" />
    </div>
  </header>
  <section id="section_intro">
    <div class="container">
        <div class="bank">
          <p>YHC-BANK</p><img class="img1" src="https://cdn.icon-icons.com/icons2/1804/PNG/512/iconfinder-481-university-bank-campus-court-4212926_114964.png" alt="" />
        </div>
        <div class="id">
          <div class="name">
            <p>氏名 :<?php echo $name ;?></p>
          </div>
          <div class="namefuri">
            <p>フリガナ :<?php echo $furi ;?></p>
          </div>
          <div class="sex">
            <p>性別 :<?php echo $sex ;?></p>
          </div>
          <div class="bir">
            <p>生年月日 :<?php echo $birth_y + "/" + $birth_m + "/" + $birth_d ;?></p>
          </div>
          <div class="mail">
            <p>メールアドレス :<?php echo $email ;?></p>
          </div>
          <div class="country">
            <p>国籍 :<?php echo $country ;?></p>
          </div>
          <div class="password">
            <p>パスワード :<?php echo $password ;?></p>
          </div>
        </div>
    </div>
  </section>
  <footer class="jumbotron rounded-0" id="footer">
    <div class="container">
      <h2>ご利用いただきありがとうございます。</h2>
      <hr />
    </div>
  </footer>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
  <script src="./script.js"></script>

</body>

</html>