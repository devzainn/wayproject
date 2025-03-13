<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beranda</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body class="bg-white">

        <!-- HEADER -->
        <header class="fixed top-0 left-0 right-0 z-20 bg-white shadow-md">
            <nav class="container mx-auto flex justify-between items-center px-4 md:px-8 h-16">
                <a href="#">
                    <img class="w-12 md:w-16 rounded" src="{{ asset('images/logo.png') }}" alt="logo"/>
                </a>

                <ul class="hidden md:flex items-center gap-6">
                    <li><a href="{{ route('beranda') }}" class="text-sm md:text-base">BERANDA</a></li>
                    <li><a href="{{ route('memahami-mrpn') }}" class="text-sm md:text-base">MEMAHAMI MRPN</a></li>
                    <li><a href="{{ route('tentang-mrpn-center') }}" class="text-sm md:text-base">TENTANG MRPN CENTER</a></li>
                    <li><a href="{{ route('program') }}" class="text-sm md:text-base">PROGRAM</a></li>
                    <li><a href="{{ route('kesiapan-mrpn') }}" class="text-sm md:text-base">KESIAPAN MRPN</a></li>
                    <li><a href="{{ route('repositori') }}" class="text-sm md:text-base">REPOSITORI</a></li>
                    <li><a href="{{ route('publikasi') }}" class="text-sm md:text-base">PUBLIKASI</a></li>
                </ul>

                <a href="#" class="text-2xl md:hidden" id="mobile-menu-toggle">
                    <i class="ri-menu-line"></i>
                </a>
            </nav>
        </header>

        <!-- HERO -->
        <section class="relative h-screen bg-cover bg-center flex items-center text-white text-center px-4 md:px-12"
            style="background-image: url('{{ asset('images/bg-hero.png') }}');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 w-full md:w-1/2 mx-auto">
                <h1 class="text-2xl md:text-5xl font-bold">Siap Menyongsong Indonesia 2045</h1>
                <h2 class="text-lg md:text-3xl mt-4 font-semibold">Manajemen Risiko Pembangunan Nasional</h2>
                <div class="mt-10 flex flex-col md:flex-row gap-4 justify-center">
                    <button class="px-6 py-3 bg-[#CE993B] text-white font-semibold rounded-full">Cari Regulasi</button>
                    <button class="px-6 py-3 bg-[#28C8EB] text-white font-semibold rounded-full">Uji Kesiapan Anda</button>
                </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <section class="container mx-auto px-4 md:px-12 py-12 text-center">
            <h1 class="text-xl md:text-3xl font-bold mb-6">Apa itu Manajemen Risiko Pembangunan Nasional (MRPN)?</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                <div>
                    <p>Manajemen Risiko Pembangunan Nasional merupakan kegiatan terkoordinasi...</p>
                    <ul class="list-disc ml-6 mt-4">
                        <li>Mendukung tercapainya sasaran Pembangunan nasional</li>
                        <li>Mendorong Entitas MRPN lebih proaktif...</li>
                        <li>Memberikan keyakinan bagi Entitas MRPN...</li>
                    </ul>
                    <div class="mt-6 flex gap-4">
                        <button class="bg-[#0C5599] text-white px-4 py-2 rounded">Download PDF</button>
                    </div>
                </div>
                <div>
                    <img class="w-full h-auto rounded" src="{{ asset('images/img-lp-1.png') }}" alt="img-lp-1"/>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-[#18463B] text-white py-10 px-6">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <img src="{{ asset('images/logo.png') }}" class="w-20" />
                </div>
                <ul class="space-y-2">
                    <li><a href="{{ route('beranda') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ route('tentang-mrpn-center') }}" class="hover:underline">Tentang MRPN</a></li>
                    <li><a href="{{ route('repositori') }}" class="hover:underline">Regulasi</a></li>
                    <li><a href="{{ route('kesiapan-mrpn') }}" class="hover:underline">Penilaian Kesiapan</a></li>
                    <li><a href="{{ route('publikasi') }}" class="hover:underline">Publikasi</a></li>
                </ul>
                <div>
                    <h2 class="font-bold text-lg">Kontak Kami</h2>
                    <p>Gedung Tifa Arum Realty, lantai 3...</p>
                    <p>Phone: +62 858-8266-1827 (Witri)</p>
                    <p>Email: sekretariat@wayacademy.id</p>
                </div>
            </div>
        </footer>
    </body>
</html>
