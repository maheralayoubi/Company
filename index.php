<?php
$to = "n.masaoka@kuroworks.com, m.alayoubi@kuroworks.com, maher91syr@gmail.com";
$name = $mail = $mailCheck = $message = "";
$nameErr = $mailErr = $mailCheckErr = $messageErr = "";
$page_flag = 0;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $mail = test_input($_POST["mail"]);
	$mailCheck = test_input($_POST["mailCheck"]);
  $message = test_input($_POST["message"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "入力に不備があります";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["mail"]) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailErr = "入力に不備があります";
    } else if ($mail != $mailCheck){
  		$mailCheckErr = "入力に不備があります";
  	} else {
      $mail = test_input($_POST["mail"]);
    }

  if (empty($_POST["message"])) {
    $messageErr = "入力に不備があります";
  } else {
    $message = test_input($_POST["message"]);
  }
}

if ((empty($name) || empty($mail) || empty($message) || $mail != $mailCheck) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
$formStatus = "お問い合わせ内容を入力して下さい。";
} else {
$page_flag = 1;
$formStatus = "お問合せ有難うございます。３営業日以内にご返信いたします。";
}

if($page_flag == 1) {
    mail($to, "New Inquiry from ${name}", $message, "From: ${mail}");
    $name = $mail = $mailCheck = $message = "";
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>KURO</title>
    <meta property="og:title" content="KURO" />
    <meta property="og:image" content="works-4.png" />
    <meta
      property="og:description"
      content="流行りのデザインは数多くありますが我々はお客様の要望に合ったサイト
      を企画の段階からご提案させていただきデザイン、実装、運用までいたします。"
    />
    <meta
      name="google-site-verification"
      content="fwC70MvlUWiV_L38tc_ZAuFkezqqAuPBu17MjvI7NbA"
    />
    <meta name="”keywords”" content="content" ="keyword" />
    <link
      rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="slider/style.css" />
    <link rel="stylesheet" href="animate.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="shortcut icon"
      href="icon_fav.png"
      type="image/png"
      sizes="16x16"
    />
  </head>
  <body>
    <!-- Ghaith Animation Start -->

    <div class="kuro-main" id="kuro-main">
      <div class="kuro-wrapper">
        <div class="kuro-letters" id="kuro-letters">
          <svg viewBox="0 0 432 90">
            <polygon
              class="st0"
              points="58.98,43.57 88.37,7.43 29.58,7.43 29.47,7.28 0,43.53 29.47,79.77 88.4,79.77 "
            />
            <path
              class="st0"
              d="M236.53,8.02v40.93h0.02c-0.17,2.74-2.04,4.15-5.62,4.15c-3.58,0-5.46-1.41-5.62-4.15h0.02V8.02h-28v40.93h0.06
c0.1,9.67,4.03,18.24,11.1,24.17c6.06,5.08,14.03,7.88,22.44,7.88c18.99,0,33.34-13.75,33.54-32.05h0.06V8.02H236.53z"
            />
            <polygon
              class="st0"
              points="193.08,79.02 174.3,37.63 191.14,8.02 163.32,8.02 151.36,29.04 151.36,8.02 123.36,8.02 123.36,79.02
151.36,79.02 151.36,53.93 162.75,79.02 "
            />
            <path
              class="st0"
              d="M342.41,33.66c0-12.74-10.04-25.64-29.22-25.64l-35.67,0v70.99h28V58.33l9.01,20.69h30.33l-11.47-26.33
C339.34,47.75,342.41,40.69,342.41,33.66z M305.54,41.22l-0.02-11.2c6.77,0.34,11.2,0,11.2,5.6S312.3,40.87,305.54,41.22z"
            />
            <path
              class="st0"
              d="M406.06,12.46c-11.48-7.17-26.97-7.16-38.54,0.01c-10.56,6.54-15,15.93-15,31.05s4.43,24.51,15,31.05
c5.79,3.59,12.56,5.38,19.32,5.38c6.75,0,13.49-1.79,19.23-5.37c10.6-6.62,14.73-15.94,14.73-31.06S416.66,19.08,406.06,12.46z
 M386.66,49.12c-2.56,0-5.6-0.97-5.6-5.6c0-4.63,3.05-5.6,5.6-5.6c1.53,0,2.94,0.43,3.88,1.17c1.14,0.9,1.72,2.39,1.72,4.43
C392.26,48.15,389.21,49.12,386.66,49.12z"
            />
            <rect id="rect" x="0" y="0" width="88" height="90" fill="#111111">
              <animate
                attributeType="XML"
                attributeName="width"
                from="100"
                to="0"
                begin="3s"
                dur="1s"
                fill="freeze"
              />
            </rect>
            <rect id="rect" x="110" y="0" width="83" height="90" fill="#111111">
              <animate
                attributeType="XML"
                attributeName="width"
                from="100"
                to="0"
                begin="3s"
                dur="1s"
                fill="freeze"
              />
            </rect>
            <rect id="rect" x="196" y="0" width="70" height="90" fill="#111111">
              <animate
                attributeType="XML"
                attributeName="width"
                from="100"
                to="0"
                begin="3s"
                dur="1s"
                fill="freeze"
              />
            </rect>
            <rect id="rect" x="277" y="0" width="70" height="90" fill="#111111">
              <animate
                attributeType="XML"
                attributeName="width"
                from="100"
                to="0"
                begin="3s"
                dur="1s"
                fill="freeze"
              />
            </rect>
            <rect
              id="rect"
              x="350"
              y="0"
              width="200"
              height="90"
              fill="#111111"
            >
              <animate
                attributeType="XML"
                attributeName="width"
                from="200"
                to="0"
                begin="3s"
                dur="1s"
                fill="freeze"
              />
            </rect>
          </svg>
        </div>

        <div class="zeros" id="zeros">
          <h1 data-text="#">#</h1>
          <h1 data-text="0">0</h1>
          <h1 data-text="0">0</h1>
          <h1 data-text="0">0</h1>
          <h1 data-text="0">0</h1>
          <h1 data-text="0">0</h1>
          <h1 data-text="0">0</h1>
        </div>

        <div class="kuro-hashtag" id="hashtag">#</div>
        <div class="numbers-letters" id="numbers-letters">
          <div class="F-letters" id="F-letters">FFFFFF</div>
          <div class="kuro-animation" id="kuro-animation">111111</div>
          <div class="two-numbers">222222</div>
          <div class="three-numbers">333333</div>
          <div class="four-numbers">444444</div>
          <div class="five-numbers">555555</div>
          <div class="six-numbers">666666</div>
          <div class="seven-numbers">777777</div>
          <div class="eight-numbers">888888</div>
          <div class="nine-numbers">999999</div>
          <div class="A-letters">AAAAAA</div>
          <div class="B-letters">BBBBBB</div>
          <div class="C-letters">CCCCCC</div>
          <div class="D-letters">DDDDDD</div>
          <div class="E-letters">EEEEEE</div>
          <div class="F-letters">FFFFFF</div>
        </div>
      </div>
    </div>

    <!-- Ghaith Animation End -->
    <nav class="nav slideInLeft" id="lef-nav">
      <div class="burger">
        <img src="logo.png" alt="" />
        <img style="display: none" src="post.png" alt="" />
      </div>
      <ul class="nav__list" id="top-menu">
        <li class="nav__item" class="active">
          <a href="#1">
            <p
              class="nav-element nav-about"
              id="nav-opacity-about"
              onclick="one()"
            >
              ABOUT
            </p>
          </a>
        </li>
        <li class="nav__item">
          <a href="#2">
            <p class="nav-element" id="nav-opacity-service" onclick="two()">
              SERVICE
            </p>
          </a>
        </li>
        <li class="nav__item">
          <a href="#3">
            <p class="nav-element" id="nav-opacity-works" onclick="three()">
              WORKS
            </p>
          </a>
        </li>
        <li class="nav__item">
          <a href="#4">
            <p class="nav-element" id="nav-opacity-company" onclick="four()">
              COMPANY
            </p>
          </a>
        </li>
      </ul>
      <div class="language">
        <p>
          JP/<a style="opacity: 0.3" href="eng/index.php">EN</a>/<a
            style="opacity: 0.3"
            href="ara/index.php"
            >AR</a
          >
        </p>
      </div>
      <br />
      <div class="footer">
        <p>Copyright © 2019 KURO. All Rights Reserved.</p>
      </div>
    </nav>
    <!-- Navbar -->
    <div class="w3-top">
      <div
        id="sp-navbar-background"
        class="w3-bar w3-black w3-card"
        style="background-color: #333333 !important"
      >
        <a
          class="
            w3-bar-item
            w3-button
            w3-padding-large
            w3-hide-medium
            w3-hide-large
            w3-right
          "
          href="javascript:void(0)"
          onclick="myFunction()"
          title="Toggle Navigation Menu"
          ><i class="fa fa-bars"></i
        ></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large"
          ><img src="SP-logo.png" class="sp-logo-img" alt=""
        /></a>
        <a
          href="#1"
          class="w3-bar-item w3-button w3-padding-large w3-hide-small"
          >ABOUT</a
        >
        <a
          href="#2"
          class="w3-bar-item w3-button w3-padding-large w3-hide-small"
          >SERVICE</a
        >
        <a
          href="#3"
          class="w3-bar-item w3-button w3-padding-large w3-hide-small"
          >WORKS</a
        >
        <a
          href="#4"
          class="w3-bar-item w3-button w3-padding-large w3-hide-small"
          >COMPANY</a
        >
        <!--<div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
              <a href="#" class="w3-bar-item w3-button">Merchandise</a>
              <a href="#" class="w3-bar-item w3-button">Extras</a>
              <a href="#" class="w3-bar-item w3-button">Media</a>
            </div>
          </div>-->
      </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div
      id="navDemo"
      class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top"
      style="background-color: #333333 !important; margin-top: 46px"
    >
      <a
        href="#1"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >ABOUT</a
      >
      <a
        href="#2"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >SERVICE</a
      >
      <a
        href="#3"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >WORKS</a
      >
      <a
        href="#4"
        class="w3-bar-item w3-button w3-padding-large"
        onclick="myFunction()"
        >COMPANY</a
      >
      <div class="language-sp">
        <p>
          JP/<a style="opacity: 0.3" href="eng/index.php">EN</a>/<a
            style="opacity: 0.3"
            href="ara/index.php"
            >AR</a
          >
        </p>
      </div>
    </div>

    <section class="panel b-blue" id="1">
      <article class="panel__wrapper">
        <div class="first-sec-img">
          <img class="zero-image fadeInLeft" src="zero.png" alt="" />
          <img class="arrow-image fadeInLeft" src="arrow.png" alt="" />
          <img class="hundred-image fadeIn" src="1000.png" alt="" />
        </div>
        <div class="first-img-sec-sp">
          <img class="first-img-sp fadeIn" src="First-sec-img-sp.png" alt="" />
        </div>
        <p class="first-sec-text fadeIn">新しいを考えて、実行する。</p>
        <a
          class="about-link"
          href="https://kuro-works.com/sub-link/index.php/about/"
          ><button class="first-sec-button fadeIn">さらに詳しく</button></a
        >
        <p class="first-sec-text-two fadeIn">
          NEWS&nbsp;&nbsp;<span class="news-line"></span>
        </p>
        <p class="first-sec-text-two-text fadeIn">
          19/09/03&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          オフィシャルサイトがリリースしました。
        </p>
      </article>
    </section>
    <section class="panel b-yellow fadeIn" id="2">
      <article class="panel__wrapper_two fadeIn">
        <div class="panel__content_two">
          <p class="first-sec-text-two slider-title-sp">
            SERVICE&nbsp;&nbsp;<span
              style="width: 77.5%"
              class="news-line"
            ></span>
          </p>
          <div class="slideshow-container">
            <div class="mySlides fade">
              <img
                class="slider-img"
                src="pc_service_info_1.png"
                style="width: 100%"
              />
              <div class="text">
                <h2>WEB</h2>
                <div class="slider-text">
                  <p>
                    流行りのデザインは数多くありますが <br />
                    我々はお客様の要望に合ったサイトを <br />
                    企画の段階からご提案させていただき <br />
                    デザイン、実装、運用までいたします。
                  </p>
                  <div class="btn">
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="mySlides fade">
              <img
                class="slider-img"
                src="pc_service_info_2.png"
                style="width: 100%"
              />
              <div class="text">
                <h2>PRINT</h2>
                <div class="slider-text">
                  <p>
                    チラシ、パンフレット、冊子などの <br />
                    印刷物も対応可能です。 <br />
                    お客様の用途にあった素材や <br />
                    特殊印刷のご提案までいたします。
                  </p>
                  <div class="btn">
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="mySlides fade">
              <img
                class="slider-img"
                src="pc_service_info_3.png"
                style="width: 100%"
              />
              <div class="text">
                <h2>OTHER</h2>
                <div class="slider-text">
                  <p>
                    イラスト制作、動画制作、写真撮影、<br />
                    動画撮影、モデルのアサイン<br />
                    広告のバナーから動画まで<br />
                    クリエイティブに関してご相談ください。
                  </p>
                  <div class="btn">
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>

            <!--<a class="next" onclick="plusSlides(1)">&#10093;</a>-->
            <a class="next" onclick="plusSlides(1)"
              ><svg
                xmlns="https://www.w3.org/2000/svg"
                class="next-icon"
                width="55.56"
                height="106.56"
                viewBox="0 0 55.56 106.56"
              >
                <defs>
                  <style>
                    .cls-1 {
                      fill: #e0e0e0;
                      fill-rule: evenodd;
                    }
                  </style>
                </defs>
                <path
                  id="big_arrow"
                  class="cls-1"
                  d="M1090.42,1068.84l1.42-1.42,53.74,53.74-1.42,1.42Zm0.98,105.17-1.41-1.41,53.61-53.61,1.41,1.41Z"
                  transform="translate(-1090 -1067.44)"
                /></svg
            ></a>
          </div>
          <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        </div>
      </article>
    </section>
    <section class="panel b-red" id="3">
      <article class="panel__wrapper_three">
        <div class="panel__content_three">
          <div class="third-sec-images">
            <p class="first-sec-text-two works-title-sp">
              WORKS&nbsp;&nbsp;<span
                style="width: 330px"
                class="news-line works-line"
              ></span>
            </p>
            <img class="third-sec-img" src="works-2.png" alt="" />
            <img class="third-sec-img" src="works-3.png" alt="" />
            <img class="third-sec-img" src="works-4.png" alt="" />
          </div>
        </div>
      </article>
    </section>
    <section class="panel b-green" id="4">
      <article class="panel__wrapper_four">
        <div class="panel__content_four">
          <h1 class="panel__headline_four">CONTACT</h1>
          <img class="contact-image" src="pc_contact_logo.png" alt="" />
          <div id="contactForm">
            <p class="form-top-message"><?php echo $formStatus ?></p>
            <form class="form" method="post" action="#contactForm">
              <div class="form_input">
                <label for="name"
                  >お名前 ※必須
                  <span class="error"
                    ><?php if (!empty($nameErr)) {echo $nameErr;} ?>
                  </span>
                </label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="お名前"
                  maxlength="30"
                  value="<?php if (!empty($name)) {echo $name;} ?>"
                />
              </div>
              <br />
              <div class="form_input">
                <label for="mail"
                  >メールアドレス ※必須
                  <span class="error"
                    ><?php if (!empty($mailErr)) {echo $mailErr;} ?>
                  </span>
                </label>
                <input
                  type="text"
                  id="mail"
                  name="mail"
                  placeholder="メールアドレス"
                  maxlength="50"
                  value="<?php if (!empty($mail)) {echo $mail;} ?>"
                />
              </div>
              <br />
              <div class="form_input">
                <label for="mailCheck"
                  >メールアドレス(確認) ※必須
                  <span class="error"
                    ><?php if (!empty($mailCheckErr)) {echo $mailCheckErr;} ?>
                  </span>
                </label>
                <input
                  type="text"
                  id="mailCheck"
                  name="mailCheck"
                  placeholder="メールアドレス"
                  maxlength="50"
                  value="<?php if (!empty($mailCheck)) {echo $mailCheck;} ?>"
                />
              </div>
              <br />
              <div class="form_input">
                <label for="message"
                  >お問い合わせ内容 ※必須
                  <span class="error"
                    ><?php if (!empty($messageErr)) {echo $messageErr;} ?>
                  </span>
                </label>
                <textarea
                  style="height: 100px"
                  type="text"
                  id="message"
                  name="message"
                  placeholder="お問い合わせ内容"
                  maxlength="500"
                  value="<?php if (!empty($message)) {echo $message;} ?>"
                ></textarea>
              </div>
              <br />
              <input type="submit" name="submit" value="送信" />
            </form>
          </div>
        </div>
        <div class="footer-sp">
          <p>Copyright © 2019 KURO. All Rights Reserved.</p>
        </div>
      </article>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
