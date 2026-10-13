<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T. Reza | Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            900: '#0a1128',
                            800: '#0f1c3f',
                            700: '#152347',
                            600: '#1a2d5a',
                        },
                        electric: {
                            500: '#2563eb',
                            400: '#3b82f6',
                            300: '#60a5fa',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #0a1128;
            color: #e2e8f0;
        }

        .gradient-text {
            background: linear-gradient(90deg, #60a5fa, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-glow {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(60px);
            z-index: 0;
        }

        .profile-decoration {
            position: absolute;
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 50%;
        }

        .brand-logo {
            filter: grayscale(100%) brightness(0.7);
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        .brand-logo:hover {
            filter: grayscale(0%) brightness(1);
            opacity: 1;
        }

        .project-card {
            background: linear-gradient(145deg, #0f1c3f, #152347);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(37, 99, 235, 0.25);
        }

        .service-card {
            background: linear-gradient(145deg, #0f1c3f, #152347);
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
        }
        .service-card:hover {
            border-color: rgba(59, 130, 246, 0.4);
            transform: translateY(-5px);
        }

        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #3b82f6;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="font-sans antialiased">

    <!-- ==================== NAVBAR ==================== -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-navy-900/80 backdrop-blur-md border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#" class="text-2xl font-bold tracking-tight text-white font-poppins">
                    T. <span class="text-electric-400">REZA</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-10">
                    <a href="#home" class="nav-link text-sm font-medium text-gray-300 hover:text-white transition">BERANDA</a>
                    <a href="#about" class="nav-link text-sm font-medium text-gray-300 hover:text-white transition">TENTANG SAYA</a>
                    <a href="#projects" class="nav-link text-sm font-medium text-gray-300 hover:text-white transition">PROYEK</a>
                    <a href="#services" class="nav-link text-sm font-medium text-gray-300 hover:text-white transition">LAYANAN</a>
                    <a href="#contact" class="nav-link text-sm font-medium text-gray-300 hover:text-white transition">KONTAK</a>
                </div>

                <!-- CTA Button -->
                <a href="#contact" class="hidden md:inline-flex items-center px-6 py-2.5 bg-electric-500 hover:bg-electric-400 text-white text-sm font-semibold rounded-full transition-all duration-300 shadow-lg shadow-electric-500/25">
                    MARI BICARA
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-navy-800 border-t border-white/5">
            <div class="px-6 py-4 space-y-3">
                <a href="#home" class="block text-gray-300 hover:text-white">BERANDA</a>
                <a href="#about" class="block text-gray-300 hover:text-white">TENTANG SAYA</a>
                <a href="#projects" class="block text-gray-300 hover:text-white">PROYEK</a>
                <a href="#services" class="block text-gray-300 hover:text-white">LAYANAN</a>
                <a href="#contact" class="block text-gray-300 hover:text-white">KONTAK</a>
                <a href="#contact" class="inline-block mt-3 px-5 py-2 bg-electric-500 text-white text-sm font-semibold rounded-full">MARI BICARA</a>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO SECTION ==================== -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <div class="hero-glow top-20 -left-40"></div>
        <div class="hero-glow bottom-10 right-0"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <div>
                        <p class="text-electric-400 font-medium tracking-widest text-sm mb-3">HAY! AKU REZA</p>
                        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight text-white font-poppins">
                            SAYA SEORANG <span class="gradient-text">DESIGNER</span>
                        </h1>
                    </div>

                    <p class="text-gray-400 text-lg max-w-lg leading-relaxed">
                        Desainer UI/UX yang passionate dalam menciptakan pengalaman digital yang indah, fungsional, dan berpusat pada pengguna. Mari kita bangun sesuatu yang luar biasa bersama.
                    </p>

                    <div class="flex flex-wrap items-center gap-5">
                        <a href="#contact" class="inline-flex items-center px-8 py-3.5 bg-electric-500 hover:bg-electric-400 text-white font-semibold rounded-full transition-all duration-300 shadow-lg shadow-electric-500/30 hover:shadow-electric-500/50">
                            HUBUNGI SAYA
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>

                        <!-- Social Icons -->
                      <!-- Social Icons (WhatsApp, Instagram, TikTok, Web Pribadi) -->
<div class="flex items-center space-x-3 ml-2">
    <!-- WhatsApp -->
    <a href="https://wa.me/6283831080869?text=Halo,%20saya%20tertarik%20dengan%20jasa%20Anda" target="_blank" title="WhatsApp" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-electric-400 hover:bg-electric-500/10 transition">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- Instagram -->
    <a href="https://instagram.com/nottbiee" target="_blank" title="Instagram" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-electric-400 hover:bg-electric-500/10 transition">
        <i class="fab fa-instagram"></i>
    </a>
    <!-- TikTok -->
    <a href="https://tiktok.com/@levram_j" target="_blank" title="TikTok" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-electric-400 hover:bg-electric-500/10 transition">
        <i class="fab fa-tiktok"></i>
    </a>
    <!-- Website Pribadi -->
    <a href="https://bimbelgambar.id/" target="_blank" title="Website Pribadi" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-electric-400 hover:bg-electric-500/10 transition">
        <i class="fas fa-globe"></i>
    </a>
</div>
                    </div>
                </div>

                <!-- Right - Profile Image -->
                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-80 h-80 lg:w-96 lg:h-96">
                        <div class="profile-decoration w-full h-full -top-4 -right-4"></div>
                        <div class="profile-decoration w-[110%] h-[110%] -top-8 -right-8 border-dashed opacity-40"></div>
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 rounded-full bg-electric-500/20 blur-xl"></div>

                        <div class="relative w-full h-full rounded-full overflow-hidden border-4 border-navy-700 shadow-2xl">
                            <img src="{{ asset('images/profile.png') }}" 
                                 alt="T. Reza" 
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section id="about" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <p class="text-electric-400 font-medium tracking-widest text-sm mb-3">TENTANG SAYA</p>
                    <h2 class="text-4xl lg:text-5xl font-bold text-white font-poppins mb-6 leading-tight">
                        SAYA TERSEDIA UNTUK<br>
                        <span class="gradient-text">PROYEK UI/UX DESIGN</span>
                    </h2>
                    <p class="text-gray-400 leading-relaxed mb-8">
                        Dengan pengalaman bertahun-tahun di industri desain, saya mengkhususkan diri dalam menciptakan antarmuka pengguna yang menakjubkan dan pengalaman pengguna yang mulus. Passion saya adalah mengubah masalah kompleks menjadi solusi yang elegan dan intuitif.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Saya bekerja sama dengan klien dan tim development untuk memastikan setiap piksel memiliki tujuan dan setiap interaksi terasa natural.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($stats as $stat)
                        <div class="bg-navy-800/60 border border-white/5 rounded-2xl p-6 text-center hover:border-electric-500/30 transition">
                            <div class="text-4xl font-bold text-electric-400 mb-2">{{ $stat['number'] }}</div>
                            <div class="text-sm text-gray-400">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PROJECTS SECTION ==================== -->
    <section id="projects" class="py-24 bg-navy-900/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-electric-400 font-medium tracking-widest text-sm mb-3">KARYA SAYA</p>
                <h2 class="text-4xl lg:text-5xl font-bold text-white font-poppins">
                    Proyek <span class="gradient-text">Terbaru</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($projects as $project)
                    <div class="project-card rounded-2xl overflow-hidden group">
                       <div class="relative h-64 overflow-hidden">
    <img src="{{ asset($project['image']) }}" 
         alt="{{ $project['title'] }}"
         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
         onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop'">
    <div class="absolute inset-0 bg-gradient-to-t from-navy-900 via-transparent to-transparent opacity-80"></div>
</div>
                        <div class="p-6">
                            <span class="text-xs font-medium text-electric-400 tracking-wider uppercase">{{ $project['category'] }}</span>
                            <h3 class="text-xl font-semibold text-white mt-2 mb-3">{{ $project['title'] }}</h3>
                            <p class="text-gray-400 text-sm mb-5">{{ $project['description'] }}</p>
                           <a href="{{ route('project.detail', $project['id']) }}" class="inline-flex items-center text-sm font-medium text-electric-400 hover:text-electric-300 transition">
    Lihat Proyek <i class="fas fa-arrow-right ml-2 text-xs"></i>
</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ==================== SERVICES SECTION ==================== -->
    <section id="services" class="py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-electric-400 font-medium tracking-widest text-sm mb-3">YANG SAYA LAKUKAN</p>
                <h2 class="text-4xl lg:text-5xl font-bold text-white font-poppins">
                    Layanan Desain <span class="gradient-text">yang Saya Tawarkan</span>
                </h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($services as $service)
                    <div class="service-card rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-electric-500/10 flex items-center justify-center text-electric-400 text-2xl">
                            <i class="{{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-3">{{ $service['title'] }}</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

   <!-- ==================== CONTACT SECTION ==================== -->
<section id="contact" class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-electric-500/10 via-transparent to-transparent"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl lg:text-5xl font-bold text-white font-poppins mb-6">
            Mari Bekerja <span class="gradient-text">Sama</span>
        </h2>
        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
            Punya proyek yang ingin dikerjakan? Saya saat ini tersedia untuk pekerjaan freelance dan kolaborasi yang menarik.
        </p>
        <!-- Tombol Terhubung ke WhatsApp -->
        <a href="https://wa.me/6283831080869?text=Halo%20Reza,%20saya%20tertarik%20untuk%20memulai%20proyek%20bersama%20Anda." 
           target="_blank" 
           class="inline-flex items-center px-10 py-4 bg-electric-500 hover:bg-electric-400 text-white font-semibold rounded-full transition-all duration-300 shadow-xl shadow-electric-500/30 text-lg">
            Mulai Proyek
            <i class="fab fa-whatsapp ml-3 text-xl"></i>
        </a>
    </div>
</section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="border-t border-white/5 py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-gray-500 text-sm">© {{ date('Y') }} T. Reza. Hak cipta dilindungi.</p>
          <div class="flex space-x-6">
    <a href="https://wa.me/6283831080869" target="_blank" class="text-gray-500 hover:text-electric-400 transition" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="https://instagram.com/nottbiee" target="_blank" class="text-gray-500 hover:text-electric-400 transition" title="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://tiktok.com/@levram_j" target="_blank" class="text-gray-500 hover:text-electric-400 transition" title="TikTok"><i class="fab fa-tiktok"></i></a>
    <a href="https://bimbelgambar.id/" target="_blank" class="text-gray-500 hover:text-electric-400 transition" title="Website Pribadi"><i class="fas fa-globe"></i></a>
</div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>