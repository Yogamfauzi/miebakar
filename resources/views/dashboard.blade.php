<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Bakar Mozaki - Kelezatan yang Memukau</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-red': '#DC2626',
                        'brand-yellow': '#FBBF24',
                        'brand-red-dark': '#B91C1C',
                        'brand-yellow-dark': '#F59E0B',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #DC2626 0%, #FBBF24 100%);
        }
        .hero-pattern {
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-brand-red rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xl">M</span>
                    </div>
                    <span class="text-xl font-bold text-gray-800"><span class="text-brand-red">Mie Bakar</span> <span class="text-brand-yellow">Mozaki</span></span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="text-gray-700 hover:text-brand-red transition-colors">Beranda</a>
                    <a href="#menu" class="text-gray-700 hover:text-brand-red transition-colors">Menu</a>
                    <a href="#about" class="text-gray-700 hover:text-brand-red transition-colors">Tentang</a>
                    <a href="#contact" class="text-gray-700 hover:text-brand-red transition-colors">Kontak</a>
                </div>
                <button class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <section id="home" class="min-h-screen gradient-bg hero-pattern flex items-center justify-center pt-20">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="floating mb-8">
                    <div class="mx-auto w-64 h-64 bg-white rounded-full shadow-2xl flex items-center justify-center">
                        <img src="/images/logo.jpg" alt="Logo Mie Bakar Mozaki" class="w-56 h-56 object-contain rounded-full">
                    </div>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 fade-in">
                    <span class="text-brand-red">Mie Bakar</span> <span class="text-brand-yellow">Mozaki</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 fade-in">
                    Cita Rasa Autentik yang Memukau Lidah Anda
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
                </div>
            </div>
        </div>
    </section>

<section id="menu" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Menu <span class="text-brand-red">Spesial</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Nikmati kelezatan mie bakar dengan berbagai varian rasa yang menggugah selera
                </p>
            </div>

            <div class="max-w-2xl mx-auto rounded-lg shadow-xl overflow-hidden">
                <img src="/images/menu.png" alt="Daftar Menu Mie Bakar Mozaki" class="w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-1 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">
                            Tentang <span class="text-brand-red">Mozaki</span>
                        </h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Mie Bakar Mozaki hadir dengan konsep kuliner yang unik dan inovatif. Kami menghadirkan cita rasa mie bakar yang otentik dengan bumbu rahasia yang telah diracik secara khusus.
                        </p>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Setiap porsi mie bakar kami dibuat dengan penuh cinta dan dedikasi untuk memberikan pengalaman kuliner yang tak terlupakan bagi setiap pelanggan.
                        </p>
                        <div class="flex space-x-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-brand-red">1000+</div>
                                <div class="text-gray-600">Pelanggan Puas</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-brand-red">2+</div>
                                <div class="text-gray-600">Tahun Pengalaman</div>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    Kata <span class="text-brand-red">Mereka</span>
                </h2>
                <p class="text-gray-600 text-lg">Testimoni dari pelanggan setia kami</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-brand-yellow">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 italic">"Mie bakar terenak yang pernah saya coba! Bumbunya meresap sempurna dan porsinya sangat mengenyangkan."</p>
                    <div class="font-semibold text-gray-800">- Sarah M.</div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-brand-yellow">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 italic">"Pelayanan ramah dan makanan selalu fresh. Mozaki sudah jadi langganan keluarga kami!"</p>
                    <div class="font-semibold text-gray-800">- Yoga M.</div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-brand-yellow">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 italic">"Varian pedas-nya juara! Cocok banget buat yang suka tantangan rasa pedas."</p>
                    <div class="font-semibold text-gray-800">- Rina A.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 gradient-bg">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Siap Merasakan Kelezatannya?
                </h2>
                <p class="text-xl text-white/90 mb-8">
                    Jangan tunggu lagi! Pesan sekarang dan nikmati pengalaman kuliner yang tak terlupakan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/6281325468281" target="_blank" class="bg-white text-brand-red px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        Pesan Via WhatsApp
                    </a>
                    <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-brand-red transition-all duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        Hubungi <span class="text-brand-red">Kami</span>
                    </h2>
                    <p class="text-gray-600 text-lg">Kami siap melayani Anda dengan sepenuh hati</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center bg-white p-8 rounded-2xl shadow-lg">
                        <div class="w-16 h-16 bg-brand-red rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Alamat</h3>
                        <p class="text-gray-600">Jl. MT. Haryono no.92, Dinoyo, Kec.Lowokwaru<br>Kota Malang</p>
                    </div>

                    <div class="text-center bg-white p-8 rounded-2xl shadow-lg">
                        <div class="w-16 h-16 bg-brand-yellow rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Telepon</h3>
                        <p class="text-gray-600">0822-3262-5849</p>
                    </div>

                    <div class="text-center bg-white p-8 rounded-2xl shadow-lg">
                        <div class="w-16 h-16 bg-brand-red rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Jam Buka</h3>
                        <p class="text-gray-600">Senin - Minggu 10:00 - 20:00 <br> Jum'at Tutup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-brand-red rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-xl">M</span>
                        </div>
                        <span class="text-xl font-bold">Mie Bakar Mozaki</span>
                    </div>
                    <p class="text-gray-400">Menghadirkan cita rasa mie bakar autentik dengan kualitas terbaik untuk kepuasan pelanggan.</p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Menu</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Mie Bakar Original</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Mie Bakar Keju Mozarella</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Tentang</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Sejarah Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Testimoni</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <!-- WhatsApp -->
                        <a href="https://wa.me/6281325468281" target="_blank" class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center hover:bg-green-600 transition-colors group">
                            <img src="/images/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/miebakarmozaki?igsh=eHhiaWVmemVjdTYx" target="_blank" class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center hover:from-purple-600 hover:to-pink-600 transition-colors group">
                            <img src="/images/instagram.png" alt="Instagram" class="w-6 h-6">
                        </a>
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@mie.bakar.mozaki?_t=ZS-8wUHJE8ttOJ&_r=1" target="_blank" class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors group">
                            <img src="/images/tiktok.png" alt="TikTok" class="w-6 h-6">
                        </a>
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/share/1AxvuFsbyX/" target="_blank" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors group">
                            <img src="/images/facebook.png" alt="Facebook" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                &copy; 2025 Mie Bakar Mozaki. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white');
                navbar.classList.remove('bg-white/95');
            } else {
                navbar.classList.add('bg-white/95');
                navbar.classList.remove('bg-white');
            }
        });
    </script>
</body>
</html>