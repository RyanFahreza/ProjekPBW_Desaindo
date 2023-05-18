<!doctype html>

<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/system.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
    
<body>
  <div class="KotakHeader">
    <a href="{{ route('home') }}"><img src="image/desaindo.png"class="Halut"></a>
    <div class="dropdown">

      <button class="dropbtn"><img src="image/Pengaturan.png" class="dropdown-img"></button>
      <div class="dropdown-content">
        <a href="{{ route('HalamanUpload') }}"><img src="image/penc.png"class="dropdown-content-img"></a>
        <a href="{{ route('keranjang') }}"><img src="image/Keranjang.png"class="dropdown-content-img"></a>
        <a href="{{ route('login') }}"><img src="image/LogOut.png" class="dropdown-content-img"></a>
      </div>
    </div>         
  </div>
  

  <div class="Kotak2">
    <div class="terbaru">TERBARU</div>
    @foreach ($desains as $desain)
    <div class="kotak3">
        <div class="kotakHeader2">
            {{ $desain->username }}
            <button class="like-btn" onclick="toggleLike(this, {{ $desain->id }})" data-id="{{ $desain->id }}">
                <span class="like-icon"></span>
                <span class="like-count">0</span>
            </button>
        </div>
        <div class="kotakdalam"><img src="{{ asset('images/' . $desain->gambar) }}"></div>
        <div style="font-size: 18px;">{{ $desain->deskripsi }}</div>
        <style>
            .like-icon {
                display: block;
                width: 40px;
                height: 40px;
                background-image: url("image/Like.png"); /* ganti dengan URL file gambar tombol like */
                background-repeat: no-repeat;
                background-size: contain;
                background-position: center;
                border-radius: 50%; /* menambahkan properti border-radius: 50% untuk membuat gambar berbentuk bulat */
            }
            .like-btn.clicked .like-icon {
                background-image: url('image/Like\ 2.png'); /* ganti dengan URL file gambar tombol like yang sudah diisi */
                animation: like-animation 0.5s ease-in-out forwards;
            }
        </style>
    </div>
    @endforeach
</div>
    <div class="kotakTren">
      <div class="trending">TRENDING</div>
      @foreach ($trending as $desain)
      <div class="kotak3">
          <div class="kotakHeaderTren">
              {{ $desain->username }}
              <button class="like-btn" onclick="toggleLike(this, {{ $desain->id }})" data-id="{{ $desain->id }}">
                <span class="like-icon"></span>
                <span class="like-count">0</span>
            </button>
          </div>
          <div class="kotakdalam"><img src="{{ asset('images/' . $desain->gambar) }}"></div>
          <div style="font-size: 18px;">{{ $desain->deskripsi }}</div>
      </div>
      @endforeach
    </div>
    <script src="js/like.js"></script>