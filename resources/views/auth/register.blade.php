<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#294A4A] relative overflow-hidden min-h-screen">
    <!-- Top ornament section -->
    <div class="fixed top-0 left-0 w-full h-10 md:h-20 bg-cover bg-center"
        style="background-image: url('{{ asset('image/component.png') }}'); z-index: 10;"></div>

    <div class="flex items-center justify-center min-h-screen relative z-20">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="relative bg-[#628F8E] w-full md:w-[450px] flex justify-center rounded-l-xl items-center">
                <div class="hidden md:block text-white text-center">
                    <h1 class="lg:text-2xl font-bold">Selamat Datang di</h1>
                    <h1 class="text-3xl font-extrabold">SILABOE</h1>
                    <h1 class="text-lg">Masuk untuk akses lebih banyak</h1>
                </div>
                <img class="hidden md:block absolute bottom-0 rounded-l-xl" src="{{ asset('image/gambarauth.png') }}">
            </div>

            <!-- Left side -->
            <div class="flex flex-col justify-center py-8 px-6 md:p-14 w-full lg:w-[550px]">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('image/logo.png') }}" alt="Welcome back" class="h-12 w-12" />
                    <span class="font-semibold text-black text-lg">SILABOE</span>
                    <span class="font-semibold text-black">Sistem Informasi Laboratorium TRPL</span>
                </div>

                <form id="registerForm" action="" class="flex flex-col gap-4">
                    <div class="flex justify-between gap-2">
                        <input id="firstName" class="p-2 w-full mt-8 mb-4 rounded-xl border" type="text"
                            name="nama_awal" placeholder="Nama Depan">
                        <input id="lastName" class="p-2 w-full mt-8 mb-4 rounded-xl border" type="text"
                            name="nama_akhir" placeholder="Nama Akhir">
                    </div>
                    <input id="email" class="p-2 w-full mb-4 rounded-xl border" type="email" name="email"
                        placeholder="Masukkan Alamat Email Anda">
                    <div class="relative">
                        <input id="password" class="p-2 rounded-xl border w-full" type="password" name="password"
                            placeholder="Masukkan Password Anda">
                        <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="#628F8E" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>
                    <div class="relative mt-4">
                        <input id="passwordConfirmation" class="p-2 rounded-xl border w-full" type="password"
                            name="password_confirmation" placeholder="Masukkan Password Anda">
                        <svg id="togglePasswordConfirmation" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="#628F8E"
                            class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>
                    <div class="flex justify-between w-full py-4">
                        <div class="lg:mr-24 mr-8">
                            <input type="checkbox" name="ch" id="ch" class="mr-2" />
                            <span class="lg:text-md text-sm">Saya menyetujui kebijakan dan privasi</span>
                        </div>
                    </div>
                    <button type="button" id="registerButton"
                        class="bg-[#628F8E] lg:mt-8 mt-4 rounded-lg text-white py-2 hover:scale-105 duration-300 lg:mx-32 mx-24">Daftar</button>
                </form>
                <div class="text-center mt-4 text-gray-400">
                    Sudah punya akun?
                    <a href="/login" class="text-[#F5CD51] font-bold">Masuk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom ornament section -->
    <div class="fixed bottom-0 left-0 w-full lg:h-20 md:h-20  h-12  bg-cover bg-center"
        style="background-image: url('{{ asset('image/component.png') }}'); z-index: 1;"></div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });

        document.getElementById('togglePasswordConfirmation').addEventListener('click', function(e) {
            const passwordField = document.getElementById('passwordConfirmation');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });

        document.getElementById('registerButton').addEventListener('click', function(e) {
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const passwordConfirmation = document.getElementById('passwordConfirmation').value.trim();
            const checkbox = document.getElementById('ch').checked;

            // Validasi password harus terdiri dari minimal 8 karakter, kombinasi huruf besar, huruf kecil, angka, dan simbol
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[A-Za-z\d!@#$%^&*()]{8,}$/;

            if (!firstName || !lastName || !email || !password || !passwordConfirmation) {
                alert('Semua field harus diisi!');
            } else if (!checkbox) {
                alert('Anda harus menyetujui kebijakan dan privasi!');
            } else if (password !== passwordConfirmation) {
                alert('Password dan Konfirmasi Password harus sama!');
            } else if (!password.match(passwordRegex)) {
                alert(
                    'Password harus terdiri dari setidaknya 8 karakter, Harus mengandung kombinasi huruf besar, huruf kecil, angka, dan simbol.');
            } else {
                // Submit the form
                document.getElementById('registerForm').submit();
            }
        });
    </script>
</body>

</html>
