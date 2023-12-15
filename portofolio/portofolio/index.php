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
        <a href="#"class="logo"><span>Z</span></a>

        <ul class="navbar">
            <li><a href="#home" class="active">home</a></li>
            <li><a href="#about-link" onclick="toggleMenu()">About</a></li>
            <li><a href="#projects-link">Portofolio</a></li>
            <li><a href="#contact">Feedback</a></li>
        </ul>
        <div class="menu-btn">
            <span></span>
            <div class="bx bx-menu" id="menu-icon"></div>

        </div>
    </header>
    <!--home-->

    <section class="home" id ="home">
        <div class="home-text">
            <span>Personal Profile</span>
            <h1> Ali zefan syukur </h1>
            <p> Selamat datang di web personal profile saya,saya adalah seorang pelajar
                yang mengambil jurusan rekayasa perangkat lunak.
            </p>
            <div class="main-btn">
                <a href="#" class="btn">contacts</a>
            </div>
        </div>
        <div class="home-img">
            <img src="img/a.jpg">
        </div>
    </section>
    
    <div class="share">
        <p>akun sosial saya:</p>
        <div class="sosial">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>
    </div>
    <section id="about-link">
        <p class="section__text__p1">Get To Know More</p>
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
                <p>SDIT<br />darul hasani</p>
                <p>SMPN<br />07 tambun selatan</p>
                <p>SMK<br />Telekomunikasi Telesandi Bekasi</p>
              </div>
            </div>
          </div>
        </div>
</br>
</br>
</br>
</br>
</br>
</br>
   <section id="projects-link">
         
        <h1 class="title">Projects</h1>
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
                src="img/web.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Project Two</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='portofolio/index.php'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
            </div>
            <h2 class="experience-sub-title project-title">Project Three</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
        </div>
        <section class="skill">
          <div class="judul"><h1>SKILL BAR</h1></div>
            <div class="container1"><div class="wrapper">
              <div class = "php-first">PHP<span>87%</span></div>
            </div>
            <div class="wrapper">
              <div class = "css-second">CSS<span>50%</span></div>
            </div>
            <div class="wrapper">
              <div class = "htm-third">HTML<span>71%</span></div>
            </div>
            <div class="wrapper">
              <div class = "javascript-fourth">JAVASCRIPT<span>64%</span></div>
            </div>
          </div>
        </section>
 </section>
</br>
</br>
</br>
</br>
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
    
</script>
</body>
</html>
