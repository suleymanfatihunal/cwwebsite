<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Süleyman Fatih Ünal</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
    <link rel="manifest" href="images/icon/site.webmanifest">
  </head>

  <body>
    <header class="header">
      <a href="index.php" class="logo">
        <img src="images/logo.png" alt="logo" width="130px" />
      </a>
      <input type="checkbox" name="" id="check">
      <label for="check" class="icons">
        <i class="bx bx-menu" id="menu-icon"></i>
        <i class='bx bx-x' id="close-icon"></i>
      </label>
      <nav class="navbar">
        <a href="#home" id="link-home" style="--i:0">Anasayfa</a>
        <a href="#about" id="link-about" style="--i:1">Hakkında</a>
        <a href="#services" id="link-services" style="--i:2">Servisler</a>
        <a href="#portfolio" id="link-portfolio" style="--i:3">Portfolyo</a>
        <a href="#contact" id="link-contact" style="--i:4">İletişim</a>
      </nav>
    </header>
    <section class="home" id="home">
      <div class="home-content">
        <h3>Merhaba, It's Me</h3>
        <h1>Süleyman Fatih Ünal</h1>
        <h3>And I'm a <span class="multiple-text"></span></h3>
        <p>
          Merhaba, lise öğrencisiyim ve yazılım geliştirme konusunda ilgiliyim. Web siteleri oluşturuyor ve yazılım projeleri üzerinde çalışarak kendimi geliştiriyorum. Gelecekte yazılım alanında daha fazla deneyim kazanmayı hedefliyorum.
        </p>
        <div class="social-media">
          <a href="https://www.linkedin.com/in/suleymanfatihunal"
            ><i class="bx bxl-linkedin"></i
          ></a>
          <a
            href="https://www.instagram.com/suleymanfatihunal/"
            class="instagram"
            ><i class="bx bxl-instagram"></i
          ></a>
        </div>
        <a href="cv/cv.pdf" target="_blank" class="btn">Download Cv</a>
      </div>
      <div class="home-img">
        <img src="images/home.png" alt="" />
      </div>
    </section>
    <section class="about" id="about">
      <div class="about-img">
        <img src="images/about.png" alt="" />
      </div>
      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Frontend Developer</h3>
        <p>
          Merhaba! Ben Süleyman Fatih ÜNAL, lise öğrencisiyim ve bilgisayar sistemleriyle büyük bir ilgiyle ilgileniyorum. Kendi web siteleri oluşturuyor ve basit masaüstü programlar yazarak yazılım dünyasında kendimi geliştirmeye çalışıyorum. Bilgisayar teknolojilerine olan merakımı sürekli olarak beslemeye çalışıyorum ve iletişim yeteneklerimi geliştiriyorum.Üniversiteye başlamak için heyecanlıyım ve bu süre zarfında bilgisayar sistemleri, program geliştirme ve teknolojiyle ilgili becerilerimi daha da ileriye taşımak istiyorum. Bu alanda daha fazla deneyim kazanarak gelecekteki kariyerimin sağlam bir temelini oluşturmayı hedefliyorum.
        </p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>
    <section class="services" id="services">
      <h2 class="heading">Our <span>Services</span></h2>
      <div class="services-container">
        <div class="services-box">
          <i class='bx bxs-paint' ></i>
          <h3>Grafik Tasarım</h3>
          <p>
            Kişisel veya şirketiniz için tasarım işlerinizi yapabilirim. 
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class='bx bxs-paint'></i>
          <h3>Web Sitesi</h3>
          <p>Kişisel veya şirketiniz için web siteleri yapabilirim.</p>
          <a href="#" class="btn">Read More</a>
      </div>
    </section>
    <section class="portfolio" id="portfolio">
      <h2 class="heading" >Latest <span>Project</span></h2>
      <div class="portfolio-container">
          <div class="portfolio-box">
              <img src="images/portfolio1.jpg">
              <div class="portfolio-layer">
                  <h4>Randevu Alma Sitesi</h4>
                  <p>Kullanıcının rahatça randevu alabileceği kullanışlı bir randevu alma sitesidir.</p>
                  <a href="https://github.com/suleymanfatihunal"  target="_blank"><i class='bx bx-link-external'></i></a>
              </div>
          </div>
        <div class="portfolio-box">
            <img src="images/portfolio2.jpg">
            <div class="portfolio-layer">
                <h4>Araba Galerisi Sitesi</h4>
                <p>Kullanıcılarınıza araçlarınızı tanıtabileceğiniz ve sizinle iletişime geçebilecekleri bir sitedir.</p>
                <a href="https://github.com/suleymanfatihunal" target="_blank"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
      <div class="portfolio-box">
          <img src="images/portfolio3.jpg">
          <div class="portfolio-layer">
              <h4>Diğer Projelerim</h4>
              <p>İşletmeler ve kişisel kullanım için siteler.
                 Daha fazlası için github hesabıma bakabilirsiniz.
              </p>
              <a href="https://github.com/suleymanfatihunal"  target="_blank"><i class='bx bx-link-external'></i></a>
          </div>
      </div>
  </div>
 </section>
 <section class="contact" id="contact">
  <h2 class="heading">Contact <span>me</span></h2>
  <form action="form.php" method="post">
    <div class="input-box">
      <input type="text" name="adsoyad" placeholder="Ad Ve Soyad"  required>
      <input type="email" name="email" placeholder="E-posta Adresi" required>
    </div>
    <textarea name="konu" id="" cols="30" rows="10" placeholder="Mesajınız" required></textarea>
    <input type="submit"  name="gonder" value="Send Message" class="btn">
  </form>
 </section>
    <footer class="footer">
      <div class="footer-text">
      <p>Copyright &copy; 2023 by Süleyman | All Rights Reserved.</p>
      </div>
      <div class="footer-iconTop">
      <a href="#home"><i class=" bx bx-up-arrow-alt"></i></a>
     </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/script.js"></script>
  </body>
</html>
