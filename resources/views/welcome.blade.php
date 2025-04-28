<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perekonomian</title>
    <link rel="icon" href="{{ asset('storage/logo/Perekonomian2.png') }}" type="image/png">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            text-align: center;
            font-size: 2em;
            color: #ffffff;
            animation: colorSlide 3s infinite alternate;
            background: linear-gradient(90deg, #1e3c72,rgb(97, 163, 255), #1e3c72);
            background-size: 300% 100%;
        }

        .ekon {
            animation: colorSlide 5s infinite alternate;
            background: linear-gradient(90deg, #1e3c72,rgb(97, 163, 255), #1e3c72);
        }
        
        @keyframes colorSlide {
            0% {
                background-position: 0% 0;
            }

            100% {
                background-position: 100% 0;
            }
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        footer {
            background-color: #4a90e2;
            padding: 20px;
            text-align: center;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: colorSlide 3s infinite alternate;
            background: linear-gradient(90deg, #1e3c72,rgb(97, 163, 255), #1e3c72);
            background-size: 300% 100%;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin-bottom: 10px;
        }

        .footer-left {
            color: #ffffff;
            font-size: 0.8em;
            text-align: left;
        }

        .footer-right {
            display: flex;
            align-items: center;
        }

        .footer-right iframe {
            margin-left: 20px;
        }

        .footer-copyright {
            opacity: 0.7;
            margin-top: 10px;
        }

        .content {
            text-align: center;
            margin-top: 200px;
        }

        .content h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
            color: #4a90e2;
        }

        .content p {
            font-size: 1.2em;
            color: #666;
        }

        .container {
            background-color: #e0e0e0;
            margin: 40px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 400px;
            scroll-margin-top: 95px;
            box-sizing: border-box;
            overflow: hidden;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.5em;
        }

        #Berita {
            margin-top: 200px;
            max-height: 400px;
            overflow-y: auto;
            scroll-margin-top: 300px;
        }

        #home {
            scroll-margin-top: 250px;
        }

        #dokumentasi {
            scroll-margin-top: 200px;
            margin-bottom: 200px;
        }

        .news-box {
            cursor: pointer;
            transition: transform 0.2s;
            background-color: #ffffff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .news-box:hover {
            transform: scale(1.02);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .news-box h3,
        .news-box p {
            color: #000000;
        }

        .btn-login {
            display: inline-block;
            margin-top: 1px;
            padding: 10px 20px;
            background-color: #4a90e2;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #357ab8;
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .image-gallery div {
            position: relative;
            cursor: pointer;
        }

        .image-gallery img {
            max-width: 250px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        .image-gallery p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px;
            border-radius: 5px;
            display: none;
        }

        .image-gallery div:hover p {
            display: block;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            margin: 15% auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            color: #fff;
            font-size: 35px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .footer-left p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div>
            Perekonomian Sekda Kota Bogor
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#Berita">Berita</a>
            <a href="#dokumentasi">Dokumentasi</a>
        </nav>
    </header>
    <main>
        <div id="home" class="content">
            <h1>Selamat Datang Perekonomian</h1>
            <p style="font-size: 20px;">ini adalah halaman website resmi Perekonomian Sekda Kota Bogor</p>
            <p style="font-size: 15px; margin-top: 50px;">*Login untuk mengupload hasil dokumentasi</p>
            <a href="{{ route('login') }}" class="btn-login">Login</a>
        </div>
    </main>
    <div id="Berita" class="container">
        <h2>Berita</h2>
        <p>Berikut merupakan beberapa berita terkini.</p>
        <a href="https://kotabogor.go.id/index.php/show_post/detail/103947/bogor-hotel-great-sale-solusi-meningkatkan-kunjungan-wisata-ke-kota-bogor-di-era-efisiensi">
            <div class="news-box">
                <h3>Bogor Hotel Great Sale Solusi Meningkatkan Kunjungan Wisata ke Kota Bogor di Era Efisiensi</h3>
                <p>Berkurangnya kegiatan dinas Instansi, Kementerian, dan Lembaga di hampir seluruh Indonesia, termasuk di Kota Bogor, berdampak pada menurunnya okupansi hotel di Kota Bogor.</p>
            </div>
        </a>
        <a href="https://example.com/berita2">
            <div class="news-box">
                <h3>Pemkot Bogor Dorong Optimalisasi Pertanian Kota</h3>
                <p>Penjabat (Pj) Sekretaris Daerah (Sekda) Kota Bogor, Hanafi, menekankan pentingnya memaksimalkan pemanfaatan lahan pertanian yang tersisa di Kota Bogor sebagai upaya menjaga keberlanjutan pangan lokal sekaligus memperkuat ketahanan wilayah.</p>
            </div>
        </a>
        <a href="https://example.com/berita3">
            <div class="news-box">
                <h3>Tingkatkan Keamanan dan Kenyamanan, Pemkot Bogor Bentuk Satgas Pemberantasan Premanisme</h3>
                <p>Surat Keputusan Wali Kota Bogor Nomor 100.3.3.3/KEP.112-BAG.PEM/2025 tentang Pembentukan Satuan Tugas Pemberantasan Premanisme Kota Bogor telah ditetapkan secara resmi.</p>
            </div>
        </a>
    </div>
    <div id="dokumentasi" class="container">
        <h2>Dokumentasi</h2>
        <p>Berikut adalah dokumentasi dari beberapa kegiatan yang dari Bagian Perekonomian Sekretariat Daerah Kota Bogor.</p>
        <div class="image-gallery">
            @foreach ($documents as $document)
            <div onclick="openModal('{{ Storage::url($document->file_path) }}')">
                <img src="{{ Storage::url($document->file_path) }}" alt="{{ $document->file_name }}">
                <p>{{ $document->file_name }}</p>
            </div>
            @endforeach
        </div>

        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="img01">
        </div>

        <script>
            function openModal(src) {
                var modal = document.getElementById("myModal");
                var modalImg = document.getElementById("img01");
                modal.style.display = "block";
                modalImg.src = src;
            }

            function closeModal() {
                var modal = document.getElementById("myModal");
                modal.style.display = "none";
            }
        </script>
    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <p><a href="https://www.instagram.com/bagianperekonomian_kotabogor?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram Perekonomian</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg></p>
                <p style="font-size:15px;">Email admin web: <a href="https://mail.google.com/mail/?view=cm&to=tegardoangwe@gmail.com&su=Halo%20Admin&body=Isi%20email%20di%20sini" target="_blank">Tegar Farhandi Syarief</a></p>
                <p style="font-size:15px;">Email admin web: <a href="https://mail.google.com/mail/?view=cm&to=ibnumalik55555@gmail.com&su=Halo%20Admin&body=Isi%20email%20di%20sini" target="_blank">Muhammad Ibnu Malik</a></p>

            </div>
            <div class="footer-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.416971593563!2d106.7908847743041!3d-6.594986364467616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b632dc7251%3A0xf11998362a5e1c89!2sSekretariat%20Daerah%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1745565243531!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-copyright">
            &copy; Copyright 2025 | Perekonomian Sekda Kota Bogor | By: <a href="https://github.com/Tegarraget">Tegar</a> & Ibnu
        </div>
    </footer>
</body>

</html>