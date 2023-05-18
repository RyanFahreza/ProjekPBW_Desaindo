<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="bg-img">
        <style>
            .bg-img{
                background: url("{{ asset('image/Tools.jpg') }}");
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
            <header>Login</header>
            <form action="{{ route('login') }}" method="POST" onsubmit="return validateForm();">
                @csrf
                <div class="field space">
                    <label for="email"></label>
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" required placeholder="Masukkan Email" id="email"/>
                </div>
                <div class="field space">
                    <label for="password"></label>
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" name="password" id="password" placeholder="Masukkan Password" required>
                    <span class="show">Lihat</span>
                </div>
                <div class="pass">
                    <a href="#">Lupa Password?</a>
                </div>
                <div class="field space">
                    <input type="submit" value="Confirm"/>
                </div>
            </form>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" arian-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" arian-label="Close"></button>
            </div>
            @endif
            <div class="reg">
                <h4 style="color: white;">Tidak punya akun?</h4> <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
