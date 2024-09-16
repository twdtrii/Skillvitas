
<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>kursus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="kursus.css">
</head>
<body>
<header>
    <nav class="navbar">
      <img src="images/Logo-1.png" class="navbar-logo" alt="logo" />
      <ul class="navbar-list">
        <li><a href="#">About</a></li>
        <li><a href="#">Workshop</a></li>
        <li><a href="kursus.php">Kursus</a></li>
      </ul>

      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            <i class="fa-solid fa-circle"></i>
          </div>

          <span><?=$_SESSION['name'];?></span>
            <i class="fa-solid fa-angle-down"></i>
        </div>

        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-user"></i>
              Edit Profile
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="loginskillvitas.php">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Log out
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-circle-question"></i>
              Help & Support
            </a>
          </li>

        </ul>
    </nav>
</header> 
            <!-- end of the header section-->
            <section class="courses-section">
                <div class="wrapper">
                    <h2 class="light">Program Pelatihan Unggulan</h2>

                    <div class="course-programs">
                        <div class="course-program">
                            <img src="images/baganuiux.svg" alt=""/>
                    
                            <div class="info">
                            <h3>UI/UX <br />
                                Design 
                            </h3>
                            </div>
                        </div>
        
                        <div class="course-program">
                            <img src="images/bagantekno.svg" alt=""/>
                    
                            <div class="info">
                            <h3>Teknologi & <br />
                                Software</h3>
                            </div>
                        </div>
        
                        <div class="course-program">
                            <img src="images/baganmedia.svg" alt=""/>
                    
                            <div class="info">
                            <h3>Media & Kreatif</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- end of the header section-->
        <section class="courses-sections">
            <div class="wrapper">
                <h2 class="light">Career Fit Test</h2>
            
                <div class="karir">
                    <p><img src="images/bagancareer.svg" style="float: left; margin:0 70px 4px 0;" /></p> 
                    <h2>Career fit test memiliki tujuan untuk mengukur kemampuan yang anda
                        miliki untuk melanjutkan jenjang karir di industri sesuai bidang yang anda
                        kuasai, serta mencari tahu perkembangan apa saja yang dibutuhkan
                        dalam diri anda untuk memulai karir </h2>
                </div>

                <div class="bidang1">
                    <img src="images/btn-biru.svg" width="600" height="120" alt=""/>
                </div>

                <div class="btn-mulai"></div>
                    <a href="" class="btn1 yellow3">Mulai Test</a>
                </div> 

                <div class="select-menu">
                    <div class="select-btn">
                        <span class="sBtn-text">Pilih Bidang Test</span>
                        <i class="bx bx-chevron-down"></i>
                    </div>

                    <ul class="options">
                        <li class="option">
                            <i class="bx bxs-hot"></i>
                            <span class="option-text">Teknologi</span>
                        </li>

                        <li class="option">
                            <i class="bx bxs-user-voice" style="color: #E1306C;"></i>
                            <span class="option-text">Personality test</span>
                        </li>
                    </ul>
               </div> 
            </div>
        </section>           

        <!-- end of the header section-->   
        <section class="section-card">
                <div class="card card-1">
                    <img src="images/skill1.svg" alt="kursus" class="card__img">
                    <div class="card__details">
                        <ul>
                            <li>Teknologi & Software, UI/UX Designer, +10 Kategori lainnya</li>
                            <li>Pembelajaran mandiri</li>
                            <li>Akses kelas pembelajaran seumur hidup</li>
                            <li>Dapat diakses dan belajar kapanpun dimana pun</li>
                        </ul>
                    </div>
                    <a href="#popup" class="btn2">Lihat Kelas</a>
                </div>
            
                <div class="card card-2">
                    <img src="images/skill2.svg" alt="career" class="card__img">
                    <div class="card__details">
                        <ul>
                            <li>Teknologi & Software, UI/UX Designer, +10 Kategori lainnya</li>
                            <li>Rangkaian kursus dengan terkurasi dan komprehensif</li>
                            <li>Langganan mulai dari 1 bulan</li>
                            <li>Dapat diakses dan belajar kapanpun dimana pun</li>
                        </ul>
                    </div>
                    <a href="#popup" class="btn2">Lihat Kelas</a>
                </div>
            
                <div class="card card-3">
                    <img src="images/skill3.svg" alt="live" class="card__img">
                    <div class="card__details">
                        <ul>
                            <li>Frontend, Backend, UI/UX Desain, Data Analytics</li>
                            <li>Kelas intensif dengan 20 orang per kelas</li>
                            <li>40 sesi interaktif live dengan mentoring</li>
                            <li>Project-based portofolio</li>
                            <li>Job Connect</li>
                            <li>Dapatkan Sertifikat</li>
                        </ul>
                    </div>
                    <a href="#popup" class="btn2">Lihat Kelas</a>
                </div>
            </div>
           
        </section>
        
        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__img">
                    <img src="images/skill1.svg" alt="kursus">
                    <img src="images/skill2.svg" alt="career">
                    <img src="images/skill3.svg" alt="live">
                    <a href="#" class="popup__close">&times;</a>
                </div>
                <div class="popup__header">
                    <h1>Start Kelas!</h1>
                    <h2>Mari Bergabung Bersama Skillvitas</h2>
                </div>
                <div class="popup__text">
                    <p>Skillvitas sangat cocok bagi anda untuk mengembangkan skill kreativitas di berbagai bidang apapun,
                        mulailah menambah skill dengan mengikuti program kami di SKillVitas.
                    </p>
                </div>
                <a href="#" class="popup_btn">Berlangganan</a>
            </div>
        
        </div>

        <!-- end of the header section-->

        <footer>
             <div class="wrapper">
        <div class="links-container">
            <div class="links">
            <h3>Tentang</h3>

            <ul>
                <li>
                    <a href="#">Tentang Kami</a>
                </li>
            
                <li>
                    <a href="#">Bantuan</a>
                </li>
            
                <li>
                    <a href="#">Kontak Kami</a>
                </li>
            
                <li>
                    <a href="#">Kursus</a>
                </li>
            </ul>
        </div>
        
        <div class="links">
            <h3>Lainnya</h3>

            <ul>
                <li>
                    <a href="#">Syarat & Ketentuan</a>
                </li>
                <li>
                    <a href="#">Kebijakan Privasi</a>
                </li>
            </ul>
        </div>

        <div class="social">
            <a href="#">
            </a>
        </div>

        </div>
            <p class="copyright">@2024 PT.Skillvitas Technology Indonesia</p>
        </div>
    </div>
    

</footer>
</body>
    <script src="kursus.js"></script>
</html>