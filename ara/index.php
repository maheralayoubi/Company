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
    $nameErr = "مدخلات غير كاملة";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["mail"]) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailErr = "مدخلات غير كاملة";
    } else if ($mail != $mailCheck){
  		$mailCheckErr = "مدخلات غير كاملة";
  	} else {
      $mail = test_input($_POST["mail"]);
    }

  if (empty($_POST["message"])) {
    $messageErr = "مدخلات غير كاملة";
  } else {
    $message = test_input($_POST["message"]);
  }
}

if ((empty($name) || empty($mail) || empty($message) || $mail != $mailCheck) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
$formStatus = "الرجاء إدخال المعلومات التالية";
} else {
$page_flag = 1;
$formStatus = "شكرا لرسالتك. سوف تتلقى ردا في غضون 3 أيام ";
}

if($page_flag == 1) {
    mail($to, "New Inquiry from ${name}", $message, "From: ${mail}");
    $name = $mail = $mailCheck = $message = "";
}
 ?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>KURO</title>
      <meta property="og:title" content="KURO">
      <meta property="og:description" content="هناك العديد من البدع التصميم هنا
        لكننا ننشئ موقع ويب يطابق  مطالب العميل من مرحلة التخطيط  اقتراح التصميم ، وحتى  التنفيذ والتطبيق ">
      <meta name="google-site-verification" content="fwC70MvlUWiV_L38tc_ZAuFkezqqAuPBu17MjvI7NbA" />
      <meta name=”keywords” content=content="keyword" />
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../slider/style.css">
      <link rel="stylesheet" href="../animate.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="../icon_fav.png" type="image/png" sizes="16x16">
   </head>
   <body>
     <div class="loading-video" id="fadeout">
       <video class="vid" autoplay muted>
         <source src="../vid.mp4" type="video/mp4">
      </video>
     </div>
      <nav class="nav slideInLeft" id="lef-nav">
         <div class="burger">
            <img src="../logo.png" alt="">
            <img style="display:none;" src="post.png" alt="">
         </div>
         <ul class="nav__list" id="top-menu">
            <li class="nav__item" class="active">
               <a href="#1">
                  <p class="nav-element nav-about" id="nav-opacity-about" onclick="one()">ABOUT</p>
               </a>
            </li>
            <li class="nav__item">
               <a href="#2">
                  <p class="nav-element" id="nav-opacity-service" onclick="two()">SERVICE</p>
               </a>
            </li>
            <li class="nav__item">
               <a href="#3">
                  <p class="nav-element" id="nav-opacity-works" onclick="three()">WORKS</p>
               </a>
            </li>
            <li class="nav__item">
               <a href="#4">
                  <p class="nav-element" id="nav-opacity-company" onclick="four()">COMPANY</p>
               </a>
            </li>
         </ul>
         <div class="language">
            <p><a style="opacity: 0.3;" href="../index.php">JP</a>/<a style="opacity: 0.3;" href="../eng/index.php">EN</a>/AR</p>
         </div>
         <br>
         <div class="footer">
            <p>Copyright © 2019 KURO. All Rights Reserved.</p>
         </div>
      </nav>
      <!-- Navbar -->
      <div class="w3-top">
        <div id="sp-navbar-background" class="w3-bar w3-black w3-card" style="background-color:#333333!important;">
          <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
          <a href="#" class="w3-bar-item w3-button w3-padding-large"><img src="../SP-logo.png" class="sp-logo-img" alt=""></a>
          <a href="#1" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
          <a href="#2" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SERVICE</a>
          <a href="#3" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WORKS</a>
          <a href="#4" class="w3-bar-item w3-button w3-padding-large w3-hide-small">COMPANY</a>
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
      <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="background-color:#333333!important; margin-top:46px;">
        <a href="#1" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
        <a href="#2" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SERVICE</a>
        <a href="#3" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">WORKS</a>
        <a href="#4" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">COMPANY</a>
        <div class="language-sp"><p><a style="opacity: 0.3;" href="../index.php">JP</a>/<a style="opacity: 0.3;" href="../eng/index.php">EN</a>/AR</p></div>
      </div>

      <section class="panel b-blue" id="1">
         <article class="panel__wrapper">
           <div class="first-sec-img">
             <img class="zero-image fadeInLeft" src="../zero.png" alt="">
             <img class="arrow-image fadeInLeft" src="../arrow.png" alt="">
             <img class="hundred-image fadeIn" src="../1000.png" alt="">
           </div>
           <div class="first-img-sec-sp">
             <img class="first-img-sp fadeIn" src="../First-sec-img-sp.png" alt="">
           </div>
              <p class="first-sec-text fadeIn">أفكار جديدة و مميزة</p>
              <a class="about-link" href="http://kuro-works.com/sub-link/index.php/about-ara/"><button class="first-sec-button fadeIn">المزيد من التفاصيل</button></a>
              <p class="first-sec-text-two fadeIn">أخبار&nbsp;&nbsp;<span style="width:355px;" class="news-line"></span></p>
              <p class="first-sec-text-two-text fadeIn">19/09/03&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;نشر الموقع الرسمي للشركة </p>
         </article>
      </section>
      <section class="panel b-yellow" id="2">
         <article class="panel__wrapper_two">
            <div class="panel__content_two">
              <p class="first-sec-text-two slider-title-sp">الخدمات&nbsp;&nbsp;<span style="width:83%" class="news-line"></span></p>
              <div class="slideshow-container">

                <div class="mySlides fade">
                  <img class="slider-img" src="../pc_service_info_1.png" style="width:100%">
                  <div class="text">
                    <h2>WEB</h2>
                    <div class="slider-text slide-text-ara">
                      <p>هناك العديد من البدع التصميم هناك<br>
                        لكننا ننشئ موقع ويب يطابق<br>
                        مطالب العميل من مرحلة التخطيط<br>
                        اقتراح التصميم ، وحتى<br>
                        التنفيذ والتطبيق </p>
                            <div class="btn">
                              <a href="#">Learn More</a>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="mySlides fade">
                  <img class="slider-img" src="../pc_service_info_2.png" style="width:100%">
                  <div class="text">
                    <h2>PRINT</h2>
                    <div class="slider-text slide-text-ara">
                    <p>يمكننا أيضا التعامل مع المنشورات والنشرات <br>
                      الكتيبات والمواد المطبوعة الأخرى<br>
                      يمكننا تقديم مقترحات للمواد و<br>
                      الطباعة الخاصة وفقا لطلبك</p>
                    <div class="btn">
                      <a href="#">Learn More</a>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="mySlides fade">
                  <img class="slider-img" src="../pc_service_info_3.png" style="width:100%">
                  <div class="text">
                      <h2>OTHER</h2>
                      <div class="slider-text slide-text-ara">
                      <p>يرجى التشاور معنا حول أي<br>
                        العمل بما في ذلك التوضيح<br>
                        تصوير الفيديو ، إنتاج الفيديو ، التصوير الفوتوغرافي <br>
                        نموذج المهمة ، واللافتات الإعلانية</p>
                       <div class="btn">
                         <a href="#">Learn More</a>
                       </div>
                     </div>
                  </div>
                </div>

                <!--<a class="next" onclick="plusSlides(1)">&#10093;</a>-->
                <a class="next" onclick="plusSlides(1)"><svg xmlns="http://www.w3.org/2000/svg" class="next-icon" width="55.56" height="106.56" viewBox="0 0 55.56 106.56">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #e0e0e0;
                        fill-rule: evenodd;
                      }
                    </style>
                  </defs>
                  <path id="big_arrow" class="cls-1" d="M1090.42,1068.84l1.42-1.42,53.74,53.74-1.42,1.42Zm0.98,105.17-1.41-1.41,53.61-53.61,1.41,1.41Z" transform="translate(-1090 -1067.44)"/>
                </svg></a>
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
                <p class="first-sec-text-two works-title-sp">أعمال&nbsp;&nbsp;<span class="news-line works-line"></span></p>
                <img class="third-sec-img" src="../works-1.png" alt="">
                <img class="third-sec-img" src="../works-2.png" alt="">
                <img class="third-sec-img" src="../works-3.png" alt="">
                <img class="third-sec-img" src="../works-4.png" alt="">

              </div>
            </div>
         </article>
      </section>
      <section class="panel b-green" id="4">
        <article class="panel__wrapper_four">
           <div class="panel__content_four">
              <h1 class="panel__headline_four">تواصل معنا</h1>
              <img class="contact-image english-img" src="../pc_contact_logo.png" alt="">
              <div id="contactForm">
             <p class="form-top-message"><?php echo $formStatus ?></p>
              <form class="form" method="post" action="#contactForm">
                <div class="form_input">
                  <label for="name">الاسم
                    <span class="error"><?php if (!empty($nameErr)) {echo $nameErr;} ?>
                    </span>
                  </label>
                  <input type="text" id="name" name="name" placeholder="الاسم" maxlength="30" value="<?php if (!empty($name)) {echo $name;} ?>">
                </div>
                <br>
                <div class="form_input">
                  <label for="mail">عنوان البريد الإلكتروني * مطلوب
                    <span class="error"><?php if (!empty($mailErr)) {echo $mailErr;} ?>
                    </span>
                  </label>
                  <input type="text" id="mail" name="mail" placeholder="عنوان البريد الإلكتروني * مطلوب" maxlength="50" value="<?php if (!empty($mail)) {echo $mail;} ?>">
                </div>
                <br>
                <div class="form_input">
                  <label for="mailCheck">عنوان البريد الإلكتروني (التأكيد) * مطلوب
                    <span class="error"><?php if (!empty($mailCheckErr)) {echo $mailCheckErr;} ?>
                    </span>
                  </label>
                  <input type="text" id="mailCheck" name="mailCheck" placeholder="عنوان البريد الإلكتروني (التأكيد) * مطلوب" maxlength="50" value="<?php if (!empty($mailCheck)) {echo $mailCheck;} ?>">
                </div>
                <br>
                <div class="form_input">
                  <label for="message">تفاصيل الرسالة * مطلوب
                    <span class="error"><?php if (!empty($messageErr)) {echo $messageErr;} ?>
                    </span>
                  </label>
                  <textarea style="height:100px" type="text" id="message" name="message" placeholder="تفاصيل الرسالة * مطلوب" maxlength="500"  value="<?php if (!empty($message)) {echo $message;} ?>"></textarea>
                </div>
                <br>
                <input type="submit" name="submit" value="إرسال">
              </form>
            </div>
           </div>
           <div class="footer-sp">
             <p>Copyright © 2019 KURO. All Rights Reserved.</p>
           </div>
         </article>
      </section>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="../js/index.js"></script>
   </body>
</html>
