<!doctype html>

<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/System.css"/>
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
    <div class="koti">
    <div class="KotakKeranjang">
        <div class="terbaru">KERANJANG</div>
        @foreach($desains as $desain)
        <div class="kotakdalam2">
                  <div class="kotakHeader2">
                    {{ $desain->username }}
                  </div>
                  <div class="kotakdalam"><img src="{{ asset('images/'.$desain->gambar) }}"></div>
                  <div class="kotakharga">
                    Harga Saran IDR. {{ $desain->harga }}
                    <button class="High-btn" id="high" onclick="toggleHigh(this)">
                      <span class="High-icon"></span>
                    </button>
                    <script>
                    function toggleHigh(btn) {
                      var icon = btn.querySelector('.High-icon');
                      btn.classList.toggle('clicked');
                      icon.classList.add('animate');
                      setTimeout(function() {
                        icon.classList.remove('animate');
                      }, 500);
                    }
                    </script>
                    
                    <button class="Low-btn" id="low" onclick="toggleLow(this)">
                      <span class="Low-icon"></span>
                    </button>
                    <script>
                    function toggleLow(btn) {
                      var icon = btn.querySelector('.Low-icon');
                      btn.classList.toggle('clicked');
                      icon.classList.add('animate');
                      setTimeout(function() {
                        icon.classList.remove('animate');
                      }, 500);
                    }
                    </script>
                    
                    <button class="fit-btn" id="pas" onclick="togglefit(this)">
                      <span class="fit-icon"></span>
                    </button>
                    <script>
                    function togglefit(btn) {
                      var icon = btn.querySelector('.fit-icon');
                      btn.classList.toggle('clicked');
                      icon.classList.add('animate');
                      setTimeout(function() {
                        icon.classList.remove('animate');
                      }, 500);
                    }
                    </script>
                    
                  
                  </div>
        </div>
        @endforeach
    </div>
    <div class="kotakcatatan">
        <h5>Catatan</h5>
        <p>Harga saran adalah harga pendapat yang diminta oleh
            desainer semisal produk yang didesain akan diperjual belikan
        </p>
        <p><img src="image/Higher-filled.png">Pilih ini apabila anda merasa harga harus lebih mahal</p>
        <p><img src="image/Lower-filled.png">Pilih ini apabila anda merasa harga harus lebih murah</p>
        <p><img src="image/Pas-filled.png">Pilih ini apabila anda merasa harga sudah pas</p>
      </div>
      <style>
        .High-icon {
  display: block;
  width: 30px;
  height: 30px;
  background-image: url('image/Higher.png'); /* ganti dengan URL file gambar tombol like */
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  border-radius: 40%;
  border: 1px solid black;
}
.High-btn.clicked .High-icon {
  background-image: url('image/Higher-filled.png'); /* ganti dengan URL file gambar tombol like yang sudah diisi */
  animation: High-animation 0.5s ease-in-out forwards;
}
.Low-icon {
  display: block;
  width: 30px;
  height: 30px;
  background-image: url('image/Lower.png'); /* ganti dengan URL file gambar tombol like */
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  border-radius: 40%;
  border: 1px solid black;
  margin-right: 40px;
}
.Low-btn.clicked .Low-icon {
  background-image: url('image/Lower-filled.png'); /* ganti dengan URL file gambar tombol like yang sudah diisi */
  animation: Low-animation 0.5s ease-in-out forwards;
}
.fit-icon {
    display: block;
    width: 30px;
    height: 30px;
    background-image: url('image/Pas.png'); /* ganti dengan URL file gambar tombol like */
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    border-radius: 40%;
    border: 1px solid black;
    margin-right: 80px;
  }
  .fit-btn.clicked .fit-icon {
    background-image: url('image/Pas-filled.png'); /* ganti dengan URL file gambar tombol like yang sudah diisi */
    animation: fit-animation 0.5s ease-in-out forwards;
  }
      </style>
    </div>