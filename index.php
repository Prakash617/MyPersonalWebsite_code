<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prakash Thapa</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="icon" type="image/png" href="/favicon.jpg"/>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/style.css" />
</head>

<body>
  <div class="site-main-wrapper">
    <button class="hamberger">
      <img src="images/hamberger.svg" alt="" srcset="">
    </button>
    <div class="mobile-nav">
      <div class="times"><img src="./images/times.svg" alt=""></div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#blog">Blog</a></li>
      </ul>
    </div>
    <header>
      <div class="container">
        <nav id="main-nav" class="flex items-center justify-between">
          <div class="left flex items-center">
            <div class="logo">
              <h1 style="color: #d7f5fa;">Prakash Thapa</h1>
            </div>
            <div class="nav-list">
              <a href="#">Home</a>
              <a href="#about">About</a>
              <a href="#services">Services</a>
              <a href="#portfolio">Portfolio</a>
              <a href="#blog">Blog</a>
            </div>
          </div>
          <div class="right">
            <button id="contact" class="btn btn-primary"><a href="#contact_container">Contact</a></button>
          </div>
        </nav>
        <div class="hero flex items-center">
          <div class="left justify-center">
            <img src="images/man.png" alt="" srcset="" />
          </div>
          <div class="right">
            <h3>Prakash Thapa</h3>
            <h1>I am creative <span>Designer</span></h1>
            <p>
              Strong in design and integration with intuitive problem-solving skills. Proficient in C++, PYTHON, HTML,
              CSS and JavaScript with backend skills in Django, Php. Passionate about implementing and launching new
              projects. Ability to translate
              business requirements into technical solutions.
            </p>
            <div>

              <button id="cv" class="btn btn-secondary"><a
                  href="https://drive.google.com/file/d/1FPpHYgZlY4XZF-5qgEL9grLh9l4JPZf9/view?usp=sharinglf"> Download
                  CV</a></button>

            </div>
          </div>
        </div>
      </div>
    </header>
    <section id="about" class="about">
      <div class="container flex items-center">
        <div class="left">
          <img src="images/man-2.jpeg" alt="" srcset="" />
        </div>
        <div class="right">
          <h1>About <span>Me</span></h1>
          <h3>Hello! I am Prakash Thapa.</h3>
          <p>
            Self-motivated and highly reliable university student positioned to contribute strongly to customer service
            operations demanding tact, enthusiasm, and an exemplary work ethic.
          </p>
          <div id="social" class="social flex items-center" style="display: flex; flex-direction: row;">

            <a href="https://www.facebook.com/prakash.thapa.73113/"><img src="images/facebook.svg" alt=""
                srcset="" /></a>
            <a href="#"><img src="images/twitter.svg" alt="" srcset="" /></a>
            <a href="https://github.com/Prakash617"><img src="https://img.icons8.com/material-outlined/100/000000/github.png"/></a>
            <a href="https://www.instagram.com/prakashthapa617/"><img src="images/instagram.svg" alt="" srcset="" /></a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div id="services" class="services">
        <div class="container">
          <h1 class="services-heading"><span>Our </span>Services</h1>
          <p>We provide standard clean website and business solution.</p>
        </div>

        <div id="card-wrapper" class="card-wrapper grid">
          <div class="card">
            <img src="images/brush.svg" alt="" srcset="" />
            <h3>Graphic Design</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
              fugiat voluptates in non beatae doloribus.
            </p>
          </div>
          <div class="card">
            <img src="images/code.svg" alt="" srcset="" />
            <h3>Code</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
              fugiat voluptates in non beatae doloribus.
            </p>
          </div>
          <div class="card">
            <img src="images/bag.svg" alt="" srcset="" />
            <h3>Blog</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
              fugiat voluptates in non beatae doloribus.
            </p>
          </div>
          <div class="card">
            <img src="images/desktop.svg" alt="" srcset="" />
            <h3>Desktop</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
              fugiat voluptates in non beatae doloribus.
            </p>
          </div>
          <div class="card">
            <img src="images/media.svg" alt="" srcset="" />
            <h3>Media</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
              fugiat voluptates in non beatae doloribus.
            </p>
          </div>
          <div class="card">
            <img src="images/phone.png" alt="" srcset="" />
            <h3>Phone</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi
              fugiat voluptates in non beatae doloribus.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="freelancer">
      <h1>I am free for Freelancer</h1>
      <p>
        Very highly skilled full stack developer..Please visit my Github Account.
      </p>
      <button id="cv" class="btn btn-secondary"><a
          href="https://drive.google.com/file/d/12onsT77VbYlNFHth2TPJuL5ceYCuevTv/view?usp=sharing">Download
          CV</a></button>
    </section>
    <section class="review">
      <div class="container">
        <h1><span>Our </span>Client</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="slider">
          <div class="slide">
            <img src="images/lady.png" alt="" srcset="" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Reiciendis praesentium doloremque facere, consectetur eligendi
              magni assumenda saepe sit?
            </p>
            <h4>this is me and me . oK</h4>
          </div>
          <div class="slide">
            <img src="images/lady.png" alt="" srcset="" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Reiciendis praesentium doloremque facere, consectetur eligendi
              magni assumenda saepe sit?
            </p>
            <h4>this is me and me . oK</h4>
          </div>
          <div class="slide">
            <img src="images/lady.png" alt="" srcset="" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Reiciendis praesentium doloremque facere, consectetur eligendi
              magni assumenda saepe sit?
            </p>
            <h4>this is me and me . oK</h4>
          </div>
          <div class="slide">
            <img src="images/lady.png" alt="" srcset="" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Reiciendis praesentium doloremque facere, consectetur eligendi
              magni assumenda saepe sit?
            </p>
            <h4>Bhumika Gurung</h4>
          </div>
        </div>
        <div class="slider-dots"></div>
      </div>
    </section>

    <section class="work">
      <div class="container_work">
        <h1><span class="blue">Our </span>Work</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora?
        </p>
        <div class="card_wrapper">
          <div class="cards">
            <div class="overlay"><span>Catagory</span>
              <a href="#">Web Development</a>
            </div>
            <img src="images/ph-1.png" alt="" srcset="" />
          </div>
          <div class="cards">
            <div class="overlay"><span>Catagory</span>
              <a href="#">Game Development</a>
            </div>
            <img src="images/ph-1.png" alt="" srcset="" />
          </div>
          <div class="cards">
            <div class="overlay"><span>Catagory</span>
              <a href="#">Blog Creation</a>
            </div>
            <img src="images/ph-1.png" alt="" srcset="" />
          </div>
          <div class="cards">
            <div class="overlay"><span>Catagory</span>
              <a href="#">Web Development</a>
            </div>
            <img src="images/ph-1.png" alt="" srcset="" />
          </div>
          <div class="cards">
            <div class="overlay"><span>Catagory</span>
              <a href="#">Web Development</a>
            </div>
            <img src="images/ph-1.png" alt="" srcset="" />
          </div>
          <div class="cards">
            <div class="overlay"><span>Catagory</span>
              <a href="#">Web Development</a>
            </div>
            <img src="images/ph-1.png" alt="" srcset="" />
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class='blog'>
      <div class="containers section-heading">
        <h1 class="white"><span class="blue">Our </span>Blog</h1>
        <p class="white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, repellat.</p>
        <div class="card-wrapping">
          <div class="card">
            <div class="img-wrapper">
              <img src="images/article-ph-1.png" alt="" srcset="">
            </div>
            <div class="card-contain">
              <a href="http://">
                <h1>Lorem ipsum dolor sit amet consectetur </h1>
              </a>
              <span>2020,May 2</span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde esse atque a blanditiis quae explicabo
                eum sequi ad, exercitationem dolorum quaerat earum odio dolore consequatur ea quasi facere laudantium
                mollitia.</p>
              <a href="%">Read More</a>
            </div>
          </div>
          <div class="card">
            <div class="img-wrapper">
              <img src="images/article-ph-1.png" alt="" srcset="">
            </div>
            <div class="card-contain">
              <a href="http://">
                <h1>Lorem ipsum dolor sit amet consectetur </h1>
              </a>
              <span>2020,May 2</span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde esse atque a blanditiis quae explicabo
                eum sequi ad, exercitationem dolorum quaerat earum odio dolore consequatur ea quasi facere laudantium
                mollitia.</p>
              <a href="%">Read More</a>
            </div>
          </div>
          <div class="card">
            <div class="img-wrapper">
              <img src="images/article-ph-1.png" alt="" srcset="">
            </div>
            <div class="card-contain">
              <a href="http://">
                <h1>Lorem ipsum dolor sit amet consectetur </h1>
              </a>
              <span>2020,May 2</span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde esse atque a blanditiis quae explicabo
                eum sequi ad, exercitationem dolorum quaerat earum odio dolore consequatur ea quasi facere laudantium
                mollitia.</p>
              <a href="%">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div id="contact_container" class="container">
        <h1><span class="blue">Contact </span>Us</h1>
        <p id="p_contact">We provide the standard clean website for your business solution</p>

        <div class="boxwrapper">
          <div class="box">
            <img src="images//phone-2.svg" alt="">
            <h2>Call us</h2>
            <h6>9861368969</h6>
          </div>
          <div class="box">
            <img src="images//msg.svg" alt="">
            <h2>Email us</h2>
            <h6>prakashthapa617@gmail.com</h6>
          </div>
          <div class="box">
            <img src="images//map.svg" alt="">
            <h2>Visit Office</h2>
            <h6>Boudha,Ktm</h6>
          </div>
        </div>
        <?php echo $alert; ?>
        <form action="#contact_container" method="post">
          <div class="inputwrapper">

            <input id="contact_name" name="name" type="text" placeholder="Your Name">
            <input type="email" name="email" placeholder="Your Email">

          </div>
          <div class="inputwrapper2">
            <input type="text" name="subject" placeholder="Your Subject..">
            <textarea name="" id="" name="message" cols="30" rows="10" placeholder="Your message.."></textarea>
          </div>
          <div>
            <button class="btn btn-primary">Submit</button>
          </div>
      </div>
      </form>
    </section>
    <footer>
      <h1 style="color: #d7f5fa;">Prakash Thapa</h1>
      <div class="footer-social">
        <a href="https://www.facebook.com/prakash.thapa.73113/"><img src="images/facebook.svg" alt=""
          srcset="" /></a>
      <a href="#"><img src="images/twitter.svg" alt="" srcset="" /></a>
      <a href="#"><img src="images/pintrest.svg" alt="" srcset="" /></a>
      <a href="https://www.instagram.com/prakashthapa617/"><img src="images/instagram.svg" alt="" srcset="" /></a>
      </div>
      <div>
        Copyright 2019 &copy; Prakash Thapa Template. All Right Reserved.
      </div>
    </footer>
  </div>


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


  <script src="js/app.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="index.js"></script>
</body>

</html>