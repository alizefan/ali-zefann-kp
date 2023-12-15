<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="style.css">

    <!--icons link-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">

</head>
<body>

    <!--header section-->
    <header>
        <ul class="navbar">
            <li><a class=" active"href="#home" >HOME</a></li>
            <li><a class=" btn1"href="#about-link" >ABOUT ME</a></li>
            <li><a class=" btn1"href="#projects-link">PORTOFOLIO</a></li>
            <li><a class=" btn1"href="#my-skill">MY SKILL</a></li>
            <li><a class=" btn1"href="#contact">FEEDBACK</a></li>
        </ul>
    
    </header>
    <!--home-->

    <section class="home" id ="home">
        <div class="home-text">
            <span>Personal Profile</span>
            <h1> Ali zefan syukur </h1>
            <h3>
             Selamat datang di web personal profile saya,<br>saya adalah seorang pelajar
                yang mengambil jurusan rekayasa perangkat lunak.
            </h3>
        </div>
        <div class="home-img">
            <img src="img/Group 1.png">
        </div>
    </section>
    <section id="about-link">
        <h1 class="title">About Me</h1>
          <div class="about-details-container">
            <div class="about-containers">
                <div class="details-container">
                    <h3>biodata diri</h3>
                    <p>TEMPAT,TANGGAL LAHIR</p>
                    <p>jakarta,28 febuari 2007</p>
                    <p>ALAMAT TINGGAL SAAT INI</p>
                    <p>villa bekasi indah 2 blok j6  no 36</p>
                  </div>
              <div class="details-container">
                <h3>Jenjang Sekolah</h3>
                <p>SDIT<br />darul hasani dari tahun 2012 sampai dengan 2018</p>
                <p>SMPN<br />07 tambun selatan dari tahun 2019 sampai dengan 2021</p>
                <p>SMK<br />Telekomunikasi Telesandi Bekasi dari tahun 2022</p>
              </div>
            </div>
          </div>
        </div>
        <div class="details-container">
            <h1 text align="center">halooo semuanyaa</h1>
            <p>perkenalkan nama saya ali zefan syukur,saya lahir di jakarta pada tanggal 28 febuari
              tahun 2007,saat sd(sekolah dasar) saya bersekolah di sdit darul hasani yang bertempat
              di kp pulo tambun selatan,saya sekolah di sana selama 6 tahun untuk jenjang sd,lalu 
              saat smp(sekolah menengah pertama) pada saya kelas 7 smp saya bersekolah di jakarta
            dan nama sekolah tersebut adalah smpn 101 jakarta setelah naik kelas 8 saya pindah ke smpn
            07 tambun selatan yang bertempat di graha baru sampai dengan saya lulus di jenjang smp,setelah
            lulus smp saya masuk ke smk(sekolah menengah kejuruan) dengan nama smk Telekomunikasi telesandi bekasi
            sekolah tersebut terfokus dalam bidang teknologi.
            </p>
         </div>
    </section>
</br>
</br>
</br>
</br>
</br>
</br>
   <section id="projects-link">
        <h1 class="title">Portofolio</h1>
        <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
            <img
                src="img/pendaftaran.png"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Project 1</h2>
            <h5> jika ingin melihat program di atas klik tombol di bawah</h5>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='pendaftaran_siswa/index.php'"
              >
                Klik di sini
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
            <img
                src="img/login_admin (1).png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Project 2</h2>
            <h5> jika ingin melihat program di atas klik tombol di bawah</h5>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='login.php'"
              >
              klik di sini
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
            <img
                src="img/kalkulator (2).png"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Project 3</h2>
            <h5> jika ingin melihat program di atas klik tombol di bawah</h5>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='kalkulator/index.html'"
              >
                klik di sini
              </button>
            </div>
          </div>
        </div>
        <section class="skill" id="my-skill" >
          <div class="judul"><h1>My Skill</h1></div>
            <div class="container1"><div class="wrapper">
              <div class = "php-first">PHP<span>50%</span></div>
            </div>
            <div class="wrapper">
              <div class = "css-second">CSS<span>50%</span></div>
            </div>
            <div class="wrapper">
              <div class = "htm-third">HTML<span>60%</span></div>
            </div>
            <div class="wrapper">
              <div class = "javascript-fourth">JAVASCRIPT<span>30%</span></div>
            </div>
          </div>
        </section>
 </section>

      <section class="contact" id="contact">
        <div class="center-text" data-aos="fade-down">
          <h2>Feedback</h2>
        </div>
        <div class="contact-form" data-aos="zoom-in">
        <form action="submit_feedback.php" method="post">
          <input type="text" name="name" placeholder=" your name"required>
          <input type="email" name="email" placeholder="email addrres.."required>
          <textarea name="message" id="" cols="30" rows="10" placeholder="write message here"required></textarea>
          <input type="submit" name="" value="send message">
        </form>
        </div>
      </section>
  
      <div class="footer">
        <div class="copyright">
          <p>2023 ali zefan,all right reserved</p>
        </div>
        <a href="#home"class="scroll-top">
          <i class="ri-arrow-up-s-fill"></i>
        </a>
      </div>
    <!--custom js file link-->
    <script src="script.js"></script>
    <script>
    var navbarItems = document.querySelectorAll('.navbar a');

    navbarItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault(); // Hindari navigasi standar

            var targetId = this.getAttribute('href').substring(1);
            var targetSection = document.getElementById(targetId);

            targetSection.scrollIntoView({ behavior: 'smooth' });

            navbarItems.forEach(function(innerItem) {
                innerItem.classList.remove('active');
            });

            this.classList.add('active');
        });
    });

    window.addEventListener('scroll', function() {
        var currentScrollPos = window.scrollY;

        navbarItems.forEach(function(item) {
            var targetId = item.getAttribute('href').substring(1);
            var targetSection = document.getElementById(targetId);

            if (isElementInViewport(targetSection)) {
                navbarItems.forEach(function(innerItem) {
                    innerItem.classList.remove('active');
                });

                item.classList.add('active');
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top <= 50 && // Sesuaikan dengan kebutuhan, 50 adalah margin dari atas
            rect.bottom >= 50 // Sesuaikan dengan kebutuhan, 50 adalah margin dari bawah
        );
      }
      document.addEventListener("DOMContentLoaded", function() {
        var menuBtn = document.querySelector('.menu-btn');
        var menuIcon = document.getElementById('menu-icon');
        var navbar = document.querySelector('.navbar');

        menuBtn.addEventListener('click', function() {
            navbar.classList.toggle('show');
            menuIcon.classList.toggle('bx-x');
        });

        // Tambahkan event listener untuk setiap item menu
        var menuItems = document.querySelectorAll('.menu a');
        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                navbar.classList.remove('show');
                menuIcon.classList.remove('bx-x');
            });
        });
    });
</script> 
</body>
</html>
