<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            if (password != confirmPassword) {
                alert("Password tidak sesuai");
                return false; // membatalkan pengiriman formulir
            }
            return true; // melanjutkan pengiriman formulir
        }

        function validateCheckbox() {
            var checkbox = document.getElementById("remember");
            if (!checkbox.checked) {
                alert("Mohon centang kotak persetujuan terlebih dahulu.");
                return false; // membatalkan pengiriman formulir
            }
            return true; // melanjutkan pengiriman formulir
        }

        function validateForm() {
            if (validateCheckbox() && validatePassword()) {
                return true; // memungkinkan pengiriman formulir
            }
            return false; // membatalkan pengiriman formulir
        }
    </script>
</head>
<body>
    <div class="bg-img">
        <style>
            .bg-img{
                background: url("image/Tools.jpg");
                height: 100vh;
                background-size: cover;
                background-position: center;
            }
            .bg-img:after{
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background: rgba(255, 255, 255, 0.174);
            }
        </style>
        <div class="content">
            <header>Registrasi</header>
            <form action="{{ route('register') }}" method="post" onsubmit="return validateForm();">
                @csrf
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="username" required placeholder="Masukkan Username"/>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" required placeholder="Masukkan Email"/>
                </div>
                <div class="field space">
                    <label for="password"></label>
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" class="pass-key" id="password" placeholder="Masukkan Password" required>
                    <span class="show">Lihat</span>
                </div>
                <div class="field space">
                    <label for="confirm-password"></label>
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password_confirmation" id="confirm-password" class="pass-key" required placeholder="KonfirmasiPassword"/>
                    <span class="show">Lihat</span>
                </div>
                <div class="space">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Kami mungkin akan mengambil data dari anda</label>
                </div>
                <div class="field space">
                    <input type="submit" value="Confirm"/>
                </div>
            </form>
        </div>
        <form action="{{ route('register') }}" method="POST" onsubmit="return validateForm();">
    </div>
    <script src="js/script.js"></script>
</body>
</html>
