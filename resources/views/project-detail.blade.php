<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['title'] }} | Detail Proyek</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { 900: '#0a1128', 800: '#0f1c3f', 700: '#152347' },
                        electric: { 500: '#2563eb', 400: '#3b82f6' }
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #0a1128; color: #e2e8f0; font-family: 'Inter', sans-serif; }
        .gradient-text { background: linear-gradient(90deg, #60a5fa, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="antialiased">

    <!-- Navbar Sederhana / Tombol Kembali -->
    <nav class="max-w-5xl mx-auto px-6 py-8 flex justify-between items-center">
        <a href="{{ url('/') }}" class="inline-flex items-center text-sm text-gray-400 hover:text-white transition">
            <i class="fas fa-arrow-left mr-2"></i> Kembali ke Beranda
        </a>
        <span class="text-xs uppercase tracking-widest text-electric-400 font-semibold px-3 py-1 bg-electric-500/10 rounded-full border border-electric-500/20">
            {{ $project['category'] }}
        </span>
    </nav>

    <!-- Konten Utama Detail Proyek -->
    <main class="max-w-5xl mx-auto px-6 pb-20">
        <!-- Judul Proyek -->
        <h1 class="text-4xl lg:text-5xl font-bold font-poppins text-white mb-6">
            {{ $project['title'] }}
        </h1>
        <p class="text-lg text-gray-400 mb-10 leading-relaxed">
            {{ $project['description'] }}
        </p>

        <!-- Informasi Detail (Grid info) -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 bg-navy-800/60 border border-white/5 rounded-2xl p-6 mb-10">
            <div>
                <span class="block text-xs text-gray-400 uppercase tracking-wider mb-1">Klien</span>
                <span class="text-white font-semibold">{{ $project['client'] }}</span>
            </div>
            <div>
                <span class="block text-xs text-gray-400 uppercase tracking-wider mb-1">Durasi Pengerjaan</span>
                <span class="text-white font-semibold">{{ $project['duration'] }}</span>
            </div>
            <div class="col-span-2 md:col-span-1">
                <span class="block text-xs text-gray-400 uppercase tracking-wider mb-1">Tools / Teknologi</span>
                <span class="text-white font-semibold">{{ $project['tools'] }}</span>
            </div>
        </div>

        <!-- Gambar Utama Proyek -->
       <!-- Video Utama Proyek (Dinamis Berbeda-beda) -->
        <div class="rounded-2xl overflow-hidden border border-white/10 mb-12 shadow-2xl">
            <video autoplay muted loop playsinline controls class="w-full h-auto object-cover">
                <source src="{{ asset($project['video']) }}" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>
        </div>

        <!-- Penjelasan Lengkap -->
        <div class="space-y-6 text-gray-300 leading-relaxed">
            <h2 class="text-2xl font-bold text-white font-poppins">Tentang Proyek Ini</h2>
            <p>{{ $project['details'] }}</p>
            <p>
                Setiap komponen dirancang dengan teliti untuk memastikan konsistensi visual, aksesibilitas yang baik, serta pengalaman navigasi yang intuitif bagi pengguna akhir.
            </p>
        </div>

        <!-- Tombol Aksi Bawah -->
        <div class="mt-12 pt-8 border-t border-white/10 flex flex-wrap items-center justify-between gap-4">
            <a href="{{ url('/') }}" class="inline-flex items-center px-6 py-3 bg-navy-800 hover:bg-navy-700 text-white font-medium rounded-full transition border border-white/10">
                <i class="fas fa-arrow-left mr-2"></i> Lihat Proyek Lainnya
            </a>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20proyek%20{{ $project['title'] }}" target="_blank" class="inline-flex items-center px-8 py-3 bg-electric-500 hover:bg-electric-400 text-white font-semibold rounded-full transition shadow-lg shadow-electric-500/30">
                Diskusikan Proyek Serupa <i class="fab fa-whatsapp ml-2 text-lg"></i>
            </a>
        </div>
    </main>

</body>
</html>