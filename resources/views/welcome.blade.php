<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioCatalog - Sistem Katalog Portofolio Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F172A',
                        secondary: '#1E293B',
                        accent: '#0EA5E9',
                        light: '#F8FAFC',
                        muted: '#64748B'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased">
    
     Navigation 
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold text-primary">PortfolioCatalog</a>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#fitur" class="text-sm text-gray-600 hover:text-primary transition-colors">Fitur</a>
                    <a href="#showcase" class="text-sm text-gray-600 hover:text-primary transition-colors">Showcase</a>
                    <a href="#tentang" class="text-sm text-gray-600 hover:text-primary transition-colors">Tentang</a>
                    <a href="#kontak" class="text-sm text-gray-600 hover:text-primary transition-colors">Kontak</a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="/login" class="hidden sm:inline-block text-sm text-gray-600 hover:text-primary transition-colors">Masuk</a>
                    <a href="/register" class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-secondary transition-colors">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

     Hero Section 
    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-3xl">
                <p class="text-sm text-muted mb-4">Selamat datang</p>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary leading-tight mb-6 text-balance">
                    Kelola dan tampilkan portofolio Anda dengan cara yang lebih baik
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-2xl">
                    Platform katalog portofolio modern yang membantu Anda mengorganisir, mengelola, dan memamerkan karya-karya terbaik Anda dengan tampilan yang profesional dan elegan.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="inline-flex items-center justify-center bg-primary text-white px-8 py-3 rounded-lg font-medium hover:bg-secondary transition-colors">
                        Mulai Sekarang
                    </a>
                    <a href="#showcase" class="inline-flex items-center justify-center border border-gray-300 text-primary px-8 py-3 rounded-lg font-medium hover:border-primary transition-colors">
                        Lihat Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

     Features Section 
    <section id="fitur" class="py-20 px-4 sm:px-6 lg:px-8 bg-light">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-primary mb-4">Fitur Unggulan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Semua yang Anda butuhkan untuk membuat katalog portofolio yang menakjubkan</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                 Feature 1 
                <div class="bg-white p-8 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Galeri Visual</h3>
                    <p class="text-gray-600 leading-relaxed">Tampilkan karya Anda dalam galeri yang indah dengan tata letak yang responsif dan modern.</p>
                </div>

                 Feature 2 
                <div class="bg-white p-8 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Kategorisasi Mudah</h3>
                    <p class="text-gray-600 leading-relaxed">Organisir proyek Anda dengan sistem tag dan kategori yang fleksibel dan mudah digunakan.</p>
                </div>

                 Feature 3 
                <div class="bg-white p-8 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Responsif Sempurna</h3>
                    <p class="text-gray-600 leading-relaxed">Portofolio Anda terlihat sempurna di semua perangkat, dari desktop hingga smartphone.</p>
                </div>

                 Feature 4 
                <div class="bg-white p-8 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Performa Cepat</h3>
                    <p class="text-gray-600 leading-relaxed">Loading cepat dan performa optimal untuk pengalaman pengguna yang terbaik.</p>
                </div>

                 Feature 5 
                <div class="bg-white p-8 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Manajemen Proyek</h3>
                    <p class="text-gray-600 leading-relaxed">Kelola semua proyek Anda dalam satu tempat dengan antarmuka yang intuitif.</p>
                </div>

                 Feature 6 
                <div class="bg-white p-8 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Mudah Dibagikan</h3>
                    <p class="text-gray-600 leading-relaxed">Bagikan portofolio Anda dengan mudah melalui link yang dapat dikustomisasi.</p>
                </div>
            </div>
        </div>
    </section>

     Showcase Section 
    <section id="showcase" class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <p class="text-sm text-muted mb-2">Karya Pilihan</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-primary mb-4">Contoh Portofolio</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                 Portfolio Item 1 
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] mb-4">
                        <img src="/placeholder.svg?height=400&width=600" alt="Project 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Redesign Website Korporat</h3>
                    <p class="text-sm text-gray-600 mb-3">Transformasi digital untuk perusahaan teknologi terkemuka</p>
                    <div class="flex gap-2">
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Design</span>
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Web</span>
                    </div>
                </div>

                 Portfolio Item 2 
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] mb-4">
                        <img src="/placeholder.svg?height=400&width=600" alt="Project 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Aplikasi Mobile Banking</h3>
                    <p class="text-sm text-gray-600 mb-3">Desain UI/UX untuk aplikasi perbankan modern</p>
                    <div class="flex gap-2">
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Mobile</span>
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">UI/UX</span>
                    </div>
                </div>

                 Portfolio Item 3 
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] mb-4">
                        <img src="/placeholder.svg?height=400&width=600" alt="Project 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Brand Identity Startup</h3>
                    <p class="text-sm text-gray-600 mb-3">Identitas visual lengkap untuk startup teknologi</p>
                    <div class="flex gap-2">
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Branding</span>
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Design</span>
                    </div>
                </div>

                 Portfolio Item 4 
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] mb-4">
                        <img src="/placeholder.svg?height=400&width=600" alt="Project 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Platform E-Commerce</h3>
                    <p class="text-sm text-gray-600 mb-3">Pengembangan toko online dengan fitur lengkap</p>
                    <div class="flex gap-2">
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">E-Commerce</span>
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Development</span>
                    </div>
                </div>

                 Portfolio Item 5 
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] mb-4">
                        <img src="/placeholder.svg?height=400&width=600" alt="Project 5" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Dashboard Analytics</h3>
                    <p class="text-sm text-gray-600 mb-3">Interface analitik data untuk enterprise</p>
                    <div class="flex gap-2">
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Dashboard</span>
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Data</span>
                    </div>
                </div>

                 Portfolio Item 6 
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 aspect-[4/3] mb-4">
                        <img src="/placeholder.svg?height=400&width=600" alt="Project 6" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Aplikasi Social Media</h3>
                    <p class="text-sm text-gray-600 mb-3">Platform berbagi konten dengan fitur interaktif</p>
                    <div class="flex gap-2">
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Social</span>
                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">Mobile</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

     About Section 
    <section id="tentang" class="py-20 px-4 sm:px-6 lg:px-8 bg-light">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-primary mb-6 text-balance">Mengapa memilih PortfolioCatalog?</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Kami memahami bahwa portofolio adalah representasi dari karya dan profesionalisme Anda. PortfolioCatalog dirancang untuk memberikan Anda kontrol penuh atas bagaimana karya Anda ditampilkan.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Dengan antarmuka yang intuitif dan fitur-fitur canggih, Anda dapat fokus pada apa yang Anda lakukan terbaik - menciptakan karya luar biasa - sementara kami menangani sisanya.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-accent flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-primary mb-1">Setup dalam hitungan menit</h4>
                                <p class="text-sm text-gray-600">Mulai dengan cepat tanpa perlu pengetahuan teknis</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-accent flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-primary mb-1">Kustomisasi tanpa batas</h4>
                                <p class="text-sm text-gray-600">Sesuaikan tampilan sesuai brand dan gaya Anda</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-accent flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-primary mb-1">Dukungan pelanggan terbaik</h4>
                                <p class="text-sm text-gray-600">Tim kami siap membantu Anda kapan saja</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-2xl bg-gradient-to-br from-accent/20 to-primary/20 p-8">
                        <div class="w-full h-full bg-white rounded-xl shadow-2xl flex items-center justify-center">
                            <img src="/placeholder.svg?height=500&width=500" alt="Dashboard Preview" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     CTA Section 
    <section id="kontak" class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-primary mb-6 text-balance">
                Siap untuk memulai perjalanan Anda?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan profesional kreatif yang telah mempercayai PortfolioCatalog untuk menampilkan karya terbaik mereka.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center bg-primary text-white px-8 py-3 rounded-lg font-medium hover:bg-secondary transition-colors">
                    Coba Gratis Sekarang
                </a>
                <a href="#" class="inline-flex items-center justify-center border border-gray-300 text-primary px-8 py-3 rounded-lg font-medium hover:border-primary transition-colors">
                    Hubungi Kami
                </a>
            </div>
            <p class="text-sm text-gray-500 mt-6">Tidak perlu kartu kredit • Setup dalam 5 menit</p>
        </div>
    </section>

     Footer 
    <footer class="bg-primary text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">PortfolioCatalog</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Platform katalog portofolio modern untuk profesional kreatif.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Produk</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Fitur</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Harga</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Template</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Integrasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Dukungan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Dokumentasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Status</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">API</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-300">© 2025 PortfolioCatalog. Semua hak dilindungi.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll for navigation links
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

        // Add scroll effect to navigation
        let lastScroll = 0;
        const nav = document.querySelector('nav');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll <= 0) {
                nav.classList.remove('shadow-md');
            } else {
                nav.classList.add('shadow-md');
            }
            
            lastScroll = currentScroll;
        });
    </script>

</body>
</html>