<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="assets/img/profil7.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>RESEPSIONIS</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="assets/img/profil7.jpg" style="height: 30px;"><span class="text-success">Hotel MTCENZO</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">TENTANG KAMI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rooms">KAMAR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">FASILITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">GALERI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reviews">TESTIMONI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">KONTAK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login/login.php">LOGIN</a>
              </li>
    </nav>
    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <div data-aos="fade-up">
            <h1>Selamat Datang di Hotel MTCENZO</h1>
            <p>Pengalaman menginap yang luar biasa menanti Anda</p>
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container" style="display: flex; align-items: center;">
            <img src="assets/img/FOTO1.jpg" alt="Luxury hotel room at Hotel MTCENZO" style="width: 30%; height: auto; margin-right: 10px;">
            <div data-aos="fade-left" style="max-width: 50%;">
                <h2 style="font-family: 'ElegantFont', sans-serif; font-size: 2em; margin-bottom: 10px;">Tentang Kami</h2>
                <p style="font-family: 'StandardFont', sans-serif; line-height: 1.9;">
                    Hotel MTCENZO adalah hotel bintang lima yang menawarkan kenyamanan dan layanan terbaik bagi tamu-tamunya. Terletak di lokasi strategis, hotel kami adalah pilihan sempurna untuk pelancong bisnis maupun wisatawan. Dengan fasilitas modern dan layanan yang ramah, kami memastikan setiap momen di Hotel MTCENZO adalah pengalaman yang tak terlupakan.
                </p>
            </div>
        </div>
    </section>
    <!-- Rooms Section -->
    <section id="rooms">
        <div class="container">
            <h2>Kamar</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO1.jpg" alt="Room 1">
                        <h3>Kamar Deluxe</h3>
                        <p>Kamar yang luas dengan fasilitas lengkap untuk kenyamanan Anda.</p>
                        <p class="price">Harga: Rp 1.000.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO2.jpg" alt="Room 2">
                        <h3>Kamar Suite</h3>
                        <p>Nikmati kemewahan dan ruang ekstra di kamar suite kami.</p>
                        <p class="price">Harga: Rp 2.000.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO3.jpg "alt="Room 3">
                        <h3>Kamar Superior</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 1.500.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO4.jpg" alt="Room 3">
                        <h3>Kamar Junior Suite</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 1.800.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO5.jpg" alt="Room 3">
                        <h3>Kamar Family Room/Triple</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 2.200.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO6.jpg" alt="Room 3">
                        <h3>Kamar Connecting</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 2.500.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO7.jpg" alt="Room 3">
                        <h3>Kamar Murphy</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 2.000.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO8.jpg" alt="Room 3">
                        <h3>Kamar Smoking/Non Smoking Room</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 1.200.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-card">
                        <img src="assets/img/FOTO9.jpg" alt="Room 3">
                        <h3>Kamar Cabana</h3>
                        <p>Kombinasi sempurna antara kenyamanan dan kemewahan.</p>
                        <p class="price">Harga: Rp 2.800.000/malam</p>
                        <button class="book-button">Pesan Sekarang</button>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    
    


    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Fasilitas</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-wifi"></i>
                        <h3>Wi-Fi Gratis</h3>
                        <p>Wi-Fi kecepatan tinggi tersedia di seluruh area hotel.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-swimming"></i>
                        <h3>Kolam Renang</h3>
                        <p>Kolam renang outdoor yang menyegarkan untuk Anda nikmati.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-shop"></i>
                        <h3>Restoran</h3>
                        <p>Nikmati hidangan lezat dari chef kami di restoran hotel.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-parking"></i>
                        <h3>Parkir Gratis</h3>
                        <p>Tempat parkir yang luas dan aman tersedia untuk tamu kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-spa"></i>
                        <h3>SPA dan Pijat</h3>
                        <p>Relaksasi dan perawatan tubuh di pusat SPA kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-gym"></i>
                        <h3>Gym</h3>
                        <p>Fasilitas gym dengan peralatan modern untuk menjaga kebugaran.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-megaphone"></i>
                        <h3>Ruang Pertemuan</h3>
                        <p>Ruang pertemuan dan konferensi dengan fasilitas lengkap.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-car"></i>
                        <h3>Mobil Sewa</h3>
                        <p>Temukan kenyamanan dengan layanan sewa mobil kami untuk perjalanan Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-telephone"></i>
                        <h3>Layanan Kamar 24 Jam</h3>
                        <p>Pelayanan kamar 24 jam untuk kebutuhan dan kenyamanan Anda.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section id="gallery">
        <div class="container">
            <h2>Galeri</h2>
            <div class="row">
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI1.jpg" alt="Gallery 1"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI2.jpg" alt="Gallery 2"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI3.jpg" alt="Gallery 3"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI4.jpg" alt="Gallery 3"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI5.jpg" alt="Gallery 3"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI6.jpg" alt="Gallery 3"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI7.jpg" alt="Gallery 3"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI8.jpg" alt="Gallery 3"></div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div data-aos="zoom-in"><img src="assets/img/GALERI9.jpg" alt="Gallery 3"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews">
        <div class="container">
            <h2>Testimoni</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO1.jpg" alt="John Doe" class="review-photo">
                        <h3>John Doe</h3>
                        <p>Pengalaman menginap yang luar biasa! Layanan dan fasilitasnya sangat memuaskan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO2.jpg" alt="Jane Smith" class="review-photo">
                        <h3>Jane Smith</h3>
                        <p>Hotel yang indah dengan lokasi yang sangat strategis. Pasti akan kembali lagi suata hari nanti!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO3.jpg" alt="Robert Brown" class="review-photo">
                        <h3>Robert Brown</h3>
                        <p>Kamar yang sangat nyaman dan pelayanan yang ramah dan baik. Sangat direkomendasikan!</p>
                    </div>
                </div>
                <!-- Additional Reviews -->
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO4.jpg" alt="Alice Johnson" class="review-photo">
                        <h3>Alice Johnson</h3>
                        <p>Fasilitas yang modern dan bersih. Pengalaman menginap yang sangat menyenangkan!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO5.jpg" alt="Michael Lee" class="review-photo">
                        <h3>Michael Lee</h3>
                        <p>Staf yang sangat membantu dan lokasi yang ideal. Hotel ini benar-benar memenuhi semua kebutuhan saya.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO6.jpg" alt="Emily Davis" class="review-photo">
                        <h3>Emily Davis</h3>
                        <p>Sangat puas dengan pelayanan dan kualitas kamar. Tempat yang sempurna untuk berlibur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO7.jpg" alt="David Wilson" class="review-photo">
                        <h3>David Wilson</h3>
                        <p>Kesan pertama yang luar biasa. Hotel ini memiliki semua yang Anda butuhkan untuk pengalaman yang nyaman.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO8.jpg" alt="Linda Martinez" class="review-photo">
                        <h3>Linda Martinez</h3>
                        <p>Lingkungan yang tenang dan pelayanan yang sangat baik. Akan merekomendasikan kepada teman-teman saya.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="assets/img/FOTO19.jpg" alt="James Anderson" class="review-photo">
                        <h3>James Anderson</h3>
                        <p>Kualitas layanan yang sangat baik dan kamar yang luas. Saya akan menginap lagi di sini.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
   <!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div data-aos="fade-right"
     data-aos-offset="400"
     data-aos-easing="ease-in-sine">
        <h2>Kontak</h2>
        <div class="row">
            <div class="col-md-6">
                <form class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="assets/img/profil7.jpg" alt="Contact Image" class="img-fluid">
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <p>&copy; 2024 Hotel MTCENZO. All Rights Reserved.</p>
        <div class="footer-item">
            <i class="fas fa-envelope"></i>
            <p>Email: <a href="mailto:info@hotelmtcenzo.com">info@hotelmtcenzo.com</a></p>
        </div>
        <div class="footer-item">
            <i class="fas fa-phone-alt"></i>
            <p>Telepon: <a href="tel:+6285861280264">+62 858 612 802 64</a></p>
        </div>
        <div class="footer-item">
            <i class="fas fa-map-marker-alt"></i>
            <p>Alamat: Jl. Raya Kamojang No. 12, Samarang, Garut, Indonesia</p>
        </div>
        <div class="footer-item">
            <i class="fab fa-whatsapp"></i>
            <p>WhatsApp: <a href="https://wa.me/6285861280264">+62 858 612 802 64</a></p>
        </div>
        
    </div>
</footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
