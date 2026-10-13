<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $stats = [
            ['number' => '280+', 'label' => 'Proyek Selesai'],
            ['number' => '15+',  'label' => 'Pengalaman Tim'],
            ['number' => '49+',  'label' => 'Kolaborasi Luar Negeri'],
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'Desain Website',
                'category' => 'UI/UX Design',
                'image' => 'images/project-baru.png',
                'description' => 'Landing page modern dengan tema gelap yang elegan dan interaksi yang mulus.',
                'client' => 'TechCorp Global',
                'duration' => '2 Minggu',
                'tools' => 'Figma, Tailwind CSS, Laravel',
            ],
            [
                'id' => 2,
                'title' => 'Desain Aplikasi Mobile',
                'category' => 'App Design',
                'image' => 'images/project-baru1.png',
                'description' => 'Pengalaman mobile yang bersih dan intuitif untuk meningkatkan engagement pengguna.',
                'client' => 'Fintech Start-up',
                'duration' => '1 Bulan',
                'tools' => 'Figma, Illustrator',
            ],
            [
                'id' => 3,
                'title' => 'Dashboard UI',
                'category' => 'Web Application',
                'image' => 'images/project-baru2.jpg',
                'description' => 'Dashboard kaya data dengan chart yang indah dan dukungan dark mode.',
                'client' => 'SaaS Dashboard Inc.',
                'duration' => '3 Minggu',
                'tools' => 'Figma, Chart.js, React',
            ],
            [
                'id' => 4,
                'title' => 'Redesign E-Commerce',
                'category' => 'UI/UX Design',
                'image' => 'images/project-baru3.png',
                'description' => 'Redesign lengkap yang fokus pada konversi dan estetika modern.',
                'client' => 'Fashion Store ID',
                'duration' => '1 Bulan',
                'tools' => 'Figma, UX Research',
            ],
        ];

        $services = [
            [
                'icon' => 'fas fa-paint-brush',
                'title' => 'UI/UX Design',
                'description' => 'Menciptakan antarmuka yang indah dan berpusat pada pengguna untuk aplikasi web dan mobile.',
            ],
            [
                'icon' => 'fas fa-mobile-alt',
                'title' => 'Desain Aplikasi Mobile',
                'description' => 'Merancang pengalaman mobile yang intuitif dan menarik yang disukai pengguna.',
            ],
            [
                'icon' => 'fas fa-laptop-code',
                'title' => 'Desain Website',
                'description' => 'Desain website modern, responsif, dan high-converting dengan dukungan dark mode.',
            ],
            [
                'icon' => 'fas fa-layer-group',
                'title' => 'Design System',
                'description' => 'Membangun design system dan component library yang scalable untuk konsistensi.',
            ],
        ];

        $brands = [
            'logoipsum-1', 'logoipsum-2', 'logoipsum-3', 'logoipsum-4', 'logoipsum-5', 'logoipsum-6'
        ];

        return view('portfolio', compact('stats', 'projects', 'services', 'brands'));
    }

    // Fungsi untuk menampilkan halaman detail proyek secara dinamis & berbeda video/isinya
    public function showProject($id)
    {
        $projects = [
            1 => [
                'title' => 'Desain Website',
                'category' => 'UI/UX Design',
                'image' => 'images/project-1.jpg',
                'video' => 'videos/project-1.mp4', // Video untuk Proyek 1
                'description' => 'Landing page modern dengan tema gelap yang elegan dan interaksi yang mulus.',
                'client' => 'TechCorp Global',
                'duration' => '2 Minggu',
                'tools' => 'Figma, Tailwind CSS, Laravel',
                'details' => 'Proyek ini berfokus pada pembuatan landing page berkonsep modern dark mode untuk meningkatkan konversi pendaftaran produk SaaS klien. Tantangannya adalah menyusun hierarki informasi yang padat agar tetap nyaman dibaca.',
            ],
            2 => [
                'title' => 'Desain Aplikasi Mobile',
                'category' => 'App Design',
                'image' => 'images/project-2.jpg',
                'video' => 'videos/project-2.mp4', // Video untuk Proyek 2
                'description' => 'Pengalaman mobile yang bersih dan intuitif untuk meningkatkan engagement pengguna.',
                'client' => 'Fintech Start-up',
                'duration' => '1 Bulan',
                'tools' => 'Figma, Illustrator',
                'details' => 'Merancang ulang aplikasi dompet digital agar proses transfer dan pengecekan saldo dapat dilakukan kurang dari 3 kali ketukan (3-tap rule) demi kenyamanan pengguna.',
            ],
            3 => [
                'title' => 'Dashboard UI',
                'category' => 'Web Application',
                'image' => 'images/project-3.jpg',
                'video' => 'videos/project-3.mp4', // Video untuk Proyek 3
                'description' => 'Dashboard kaya data dengan chart yang indah dan dukungan dark mode.',
                'client' => 'SaaS Dashboard Inc.',
                'duration' => '3 Minggu',
                'tools' => 'Figma, Chart.js, React',
                'details' => 'Membangun desain antarmuka dashboard analitik kompleks yang memuat berbagai grafik data real-time, tabel interaktif, dan kustomisasi widget modular.',
            ],
            4 => [
                'title' => 'Redesign E-Commerce',
                'category' => 'UI/UX Design',
                'image' => 'images/project-4.jpg',
                'video' => 'videos/project-4.mp4', // Video untuk Proyek 4
                'description' => 'Redesign lengkap yang fokus pada konversi dan estetika modern.',
                'client' => 'Fashion Store ID',
                'duration' => '1 Bulan',
                'tools' => 'Figma, UX Research',
                'details' => 'Melakukan audit UX menyeluruh pada toko online pakaian, memperbaiki alur *checkout* yang sebelumnya rumit, dan mempercantik halaman katalog produk.',
            ],
        ];

        // Jika ID tidak ditemukan, tampilkan error 404
        if (!array_key_exists($id, $projects)) {
            abort(404);
        }

        $project = $projects[$id];

        return view('project-detail', compact('project'));
    }
}