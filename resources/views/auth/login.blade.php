<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sabhagiriwana17</title>

    <!-- Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="/assets/newtheme/gambar/sabha.png">
    <link rel="apple-touch-icon" href="/assets/newtheme/gambar/sabha.png">

    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            background: #1a1a2e;
            overflow: hidden;
        }

        /* ===== BACKGROUND GAMBAR GUNUNG ===== */
        .mountain-bg {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            background: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
            background-size: cover;
            filter: brightness(0.7) saturate(1.1);
            transform: scale(1.05);
        }

        /* Overlay gelap biar card keliatan */
        .mountain-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.6) 100%);
        }

        /* Efek kabut di bawah */
        .fog {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30%;
            background: linear-gradient(0deg, rgba(255,255,255,0.08) 0%, transparent 100%);
            pointer-events: none;
            z-index: 1;
        }

        /* ===== CARD UTAMA ===== */
        .login-container {
            width: 100%;
            max-width: 430px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 24px;
            padding: 42px 36px 34px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.15);
            animation: fadeUp 0.8s ease;
            position: relative;
            z-index: 2;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* ===== HEADER ===== */
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header .logo-wrapper {
            display: inline-block;
            margin-bottom: 14px;
            position: relative;
        }

        .login-header .logo-wrapper::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 3px;
            background: #c62828;
            border-radius: 10px;
        }

        .login-header .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background: #ffffff;
            padding: 6px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .login-header .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .login-header h1 {
            font-size: 24px;
            font-weight: 800;
            color: #1a1a2e;
            letter-spacing: -0.3px;
            margin-top: 8px;
        }

        .login-header h1 span {
            color: #c62828;
        }

        .login-header h1 .blue-dot {
            color: #1565c0;
        }

        .login-header .subtitle {
            font-size: 14px;
            color: #7a8a9e;
            margin-top: 2px;
            font-weight: 400;
        }

        /* ===== FORM ===== */
        .login-form {
            margin-top: 6px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 5px;
        }

        .form-group label i {
            margin-right: 8px;
            color: #c62828;
            width: 16px;
            font-size: 14px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 16px 12px 44px;
            border: 2px solid rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            color: #1a1a2e;
        }

        .input-wrapper input:focus {
            outline: none;
            border-color: #c62828;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(198, 40, 40, 0.08);
        }

        .input-wrapper input::placeholder {
            color: #b0b8c4;
            font-size: 13px;
        }

        .input-wrapper .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #b0b8c4;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .input-wrapper input:focus ~ .input-icon,
        .input-wrapper input:focus + .input-icon {
            color: #c62828;
        }

        /* ===== PASSWORD TOGGLE ===== */
        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #b0b8c4;
            cursor: pointer;
            font-size: 16px;
            padding: 4px;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #c62828;
        }

        /* ===== OPTIONS ===== */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 4px 0 22px;
        }

        .form-options .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #555;
            cursor: pointer;
            font-weight: 500;
        }

        .form-options .remember input[type="checkbox"] {
            width: 17px;
            height: 17px;
            accent-color: #c62828;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-options .forgot {
            font-size: 13px;
            color: #1565c0;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .form-options .forgot:hover {
            color: #c62828;
            text-decoration: underline;
        }

        /* ===== BUTTON LOGIN ===== */
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #c62828;
            border: none;
            border-radius: 12px;
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .btn-login::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .btn-login:hover::after {
            opacity: 1;
        }

        .btn-login:hover {
            background: #b71c1c;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(198, 40, 40, 0.35);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* ===== DIVIDER ===== */
        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 22px 0 20px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(0, 0, 0, 0.08);
        }

        .divider span {
            font-size: 12px;
            color: #b0b8c4;
            font-weight: 500;
            white-space: nowrap;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ===== SOCIAL LOGIN ===== */
        .social-login {
            display: flex;
            gap: 12px;
        }

        .social-btn {
            flex: 1;
            padding: 11px;
            border: 2px solid rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.9);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 13px;
            color: #555;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .social-btn.google {
            border-color: #ea4335;
            color: #ea4335;
        }

        .social-btn.google:hover {
            background: #ea4335;
            color: #ffffff;
            border-color: #ea4335;
        }

        .social-btn.facebook {
            border-color: #1877f2;
            color: #1877f2;
        }

        .social-btn.facebook:hover {
            background: #1877f2;
            color: #ffffff;
            border-color: #1877f2;
        }

        /* ===== REGISTER LINK ===== */
        .register-link {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
            color: #888;
        }

        .register-link a {
            color: #c62828;
            text-decoration: none;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: #1565c0;
            text-decoration: underline;
        }

        /* ===== ERROR ===== */
        .error-message {
            color: #c62828;
            font-size: 12px;
            margin-top: 4px;
            display: block;
            font-weight: 500;
        }

        .input-wrapper input.is-invalid {
            border-color: #c62828;
            background: #fff5f5;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px 26px;
                border-radius: 18px;
                background: rgba(255, 255, 255, 0.95);
            }

            .login-header .logo {
                width: 68px;
                height: 68px;
            }

            .login-header h1 {
                font-size: 21px;
            }

            .login-header .subtitle {
                font-size: 13px;
            }

            .form-options {
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
            }

            .social-login {
                flex-direction: column;
            }

            .btn-login {
                padding: 13px;
                font-size: 14px;
            }

            .register-link {
                font-size: 13px;
            }
        }

        @media (max-width: 380px) {
            .login-container {
                padding: 24px 16px 20px;
                border-radius: 16px;
            }

            .login-header .logo {
                width: 60px;
                height: 60px;
            }

            .login-header h1 {
                font-size: 19px;
            }

            .input-wrapper input {
                padding: 10px 14px 10px 40px;
                font-size: 13px;
            }
        }

        @media (min-width: 768px) {
            .login-container {
                padding: 46px 40px 38px;
                max-width: 440px;
            }
        }
    </style>
</head>
<body>

    <!-- ===== BACKGROUND GAMBAR GUNUNG ===== -->
    <div class="mountain-bg">
        <!-- Efek kabut -->
        <div class="fog"></div>
    </div>

    <!-- ===== CARD LOGIN ===== -->
    <div class="login-container">
        <!-- HEADER -->
        <div class="login-header">
            <div class="logo-wrapper">
                <div class="logo">
                    <img src="/assets/newtheme/gambar/sabha.png" alt="Sabhagiriwana17">
                </div>
            </div>
            <h1>Selamat <span>Datang</span><span class="blue-dot"></span>!</h1>
            {{-- <p class="subtitle">Silahkan login untuk melanjutkan</p> --}}
        </div>

        <!-- FORM LOGIN -->
        <form action="/masuk" method="POST" class="login-form">
            @csrf

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <div class="input-wrapper">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="@error('email') is-invalid @enderror"
                        placeholder="you@example.com"
                        value="{{ old('email') }}"
                        required
                    >
                    <i class="fas fa-envelope input-icon"></i>
                </div>
                @error('email')
                    <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                @enderror
            </div>

            <!-- PASSWORD -->
            <div class="form-group">
                <label for="password"><i class="fas fa-key"></i> Password</label>
                <div class="input-wrapper">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="@error('password') is-invalid @enderror"
                        placeholder="Masukkan password"
                        required
                    >
                    <i class="fas fa-lock input-icon"></i>
                    <button type="button" class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </button>
                </div>
                @error('password')
                    <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                @enderror
            </div>

            <!-- OPTIONS -->
            {{-- <div class="form-options">
                <label class="remember">
                    <input type="checkbox" name="remember"> Ingat Saya
                </label>
                <a href="#" class="forgot">Lupa Password?</a>
            </div> --}}

            <!-- BUTTON -->
            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt"></i> MASUK
            </button>
        </form>

        <!-- DIVIDER -->
        {{-- <div class="divider">
            <span>atau</span>
        </div> --}}

        <!-- SOCIAL LOGIN -->
        {{-- <div class="social-login">
            <button class="social-btn google">
                <i class="fab fa-google"></i> Google
            </button>
            <button class="social-btn facebook">
                <i class="fab fa-facebook-f"></i> Facebook
            </button>
        </div> --}}

        <!-- REGISTER LINK -->
        <p class="register-link">
            Universitas 17 Agustus 1945 Semarang
        </p>
        {{-- <p class="register-link">
            Belum punya akun? <a href="/registers">Daftar Sekarang</a>
        </p> --}}
    </div>

    <!-- JAVASCRIPT TOGGLE PASSWORD -->
    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.getElementById('toggleIcon');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

</body>
</html>
