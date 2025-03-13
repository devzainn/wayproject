<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body class="bg-white flex flex-col min-h-screen">

        {{-- HEADER --}}
        <header class="relative top-0 left-0 right-0 z-20 bg-gradient-to-b from-[#0CA37F] to-[#0CA37F]/50 transition-colors duration-900 ease-in-out hover:bg-gradient-to-b hover:from-[#18463B] hover:to-[#0CA37F]">

            <nav class="flex justify-between items-center max-w-[1300px] px-5 m-auto h-24 text-white">

                <div>
                    <a href="#">
                        <img class="w-15 rounded-[1vh]" src="{{ asset('images/logo.png') }}" alt="logo"/>
                    </a>
                </div>

                <ul class="md:flex items-center gap-8 hidden">
                    <li>
                        <a href="{{ route('beranda') }}" class="text-[14px]">BERANDA</a>
                    </li>

                    <li>
                        <a href="{{ route('memahami-mrpn') }}" class="text-[14px]">MEMAHAMI MRPN</a>
                    </li>

                    <li>
                        <a href="{{ route('tentang-mrpn-center') }}" class="text-[14px]">TENTANG MRPN CENTER</a>
                    </li>

                    <li>
                        <a href="{{ route('program') }}" class="text-[14px]">PROGRAM</a>
                    </li>

                    <li>
                        <a href="{{ route('kesiapan-mrpn') }}" class="text-[14px]">KESIAPAN MRPN</a>
                    </li>

                    <li>
                        <a href="{{ route('repositori') }}" class="text-[14px]">REPOSITORI</a>
                    </li>

                    <li>
                        <a href="{{ route('publikasi') }}" class="text-[14px]">PUBLIKASI</a>
                    </li>
                </ul>

                <form class="relative flex items-center bg-white rounded-full px-4 ml-4">
                    <label for="mnav-search-input" class="flex items-center text-slate-400">
                        <i class="ri-search-line text-xl"></i>
                    </label>
                    <input type="text" id="mnav-search-input" placeholder="Cari disini"
                    class="outline-none w-[160px] bg-transparent pl-2 py-1 rounded-full text-slate-400">
                </form>

                <a href="#" class="text-2xl md:hidden">
                    <i class="ri-menu-line"></i>
                </a>

            </nav>

        </header>

        <main class="flex-grow">
            @yield('content')
        </main>

        <footer class="bg-gradient-to-r from-[#18463B] to-[#1E8C6E] text-white py-10 px-6">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-start">
                <!-- Logo -->
                <div class="mb-6 md:mb-0">
                    <img src="{{ asset('images/logo.png') }}" class="w-20 h-auto" />
                </div>

                <!-- Menu Links -->
                <ul class="text-sm font-bold space-y-4">
                    <li><a href="{{ route('beranda') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ route('tentang-mrpn-center') }}" class="hover:underline">Tentang MRPN</a></li>
                    <li><a href="{{ route('repositori') }}" class="hover:underline">Regulasi</a></li>
                    <li><a href="{{ route('kesiapan-mrpn') }}" class="hover:underline">Penilaian Kesiapan</a></li>
                    <li><a href="{{ route('publikasi') }}" class="hover:underline">Publikasi</a></li>
                    <li><a href="#" class="hover:underline">Website WAY Academy</a></li>
                </ul>

                <!-- Contact Info -->
                <div class="text-sm">
                    <h2 class="font-bold text-lg mb-3">Kontak Kami</h2>
                    <p class="font-semibold">JAKARTA</p>
                    <p>Gedung Tifa Arum Realty, lantai 3, ruang 304</p>
                    <p>Jl. Kuningan Barat No. 26, Jakarta, 12170</p>

                    <div class="mt-4">
                        <h3 class="font-semibold">Phone:</h3>
                        <p>+62 858-8266-1827 (Witri)</p>
                        <p>+62 813-8898-9969 (Panca)</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="font-semibold">Email:</h3>
                        <p>sekretariat@wayacademy.id</p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
