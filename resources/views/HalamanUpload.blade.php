<!doctype html>

<head>
    <title>Halaman Upload</title>
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
    <div class="upload">
        <div class="updes">UPLOAD DESAIN</div>
        <form method="POST" action="{{ route('UploadDesain') }}" enctype="multipart/form-data">
            @csrf
            <div class="fit space">
                <span class="fa fa-image"></span>
                <input type="file" name="gambar" required>
            </div>
            <div class="fix space">
                <span class="fa fa-pencil-alt"></span>
                <input type="text" name="deskripsi" required placeholder="Deskripsi">
            </div>
            <div class="fix space">
                <span class="fa fa-money-bill"></span>
                <input type="text" name="harga" required placeholder="Masukkan Harga Saran">
            </div>
            <div class="tomupload space">
                <button type="submit">Upload</button>
            </div>
        </form>
    </div>