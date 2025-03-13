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

        {{-- HEADER --}}
        <header class="fixed top-0 left-0 right-0 z-20 bg-transparent transition-colors duration-900 ease-in-out hover:bg-gradient-to-b hover:from-[#18463B] hover:to-[#0CA37F]">

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
                        <a href="{{ route('repositori') }}" class="text-[14px]">PUBLIKASI</a>
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

        <main>
            {{-- HERO --}}
            <section class="relative h-screen bg-cover bg-center flex items-center text-center px-4 pd:px-12" style="background-image: url('{{ asset('images/bg-hero.png') }}');" >
                <div class="absolute inset-0 bg-black/35"></div>
                <div class="relative z-10 md:w-1/2 pl-10 md:pl-12 text-left text-white max-w-[1300px] md:px-5">
                    <h1 class="text-2xl md:text-5xl/15 font-bold ">Siap Menyongsong Indonesia 2045</h1>
                    <h2 class="text-xl md:text-3xl mt-5 font-bold">Manajemen Risiko Pembangunan Nasional</h2>

                    <div class="mt-20 flex gap-5">
                        <button class="px-6 py-3 bg-[#CE993B] text-white font-semibold rounded-[30px] cursor-pointer">Cari Regulasi</button>

                        <button class="px-6 py-3 bg-[#28C8EB] text-white font-semibold rounded-[30px] cursor-pointer">Uji Kesiapan Anda</button>
                    </div>
                </div>
            </section>

            {{-- section 2 --}}
            <section class="relative p-10 items-center overflow-hidden">

                {{-- <svg class="absolute bottom-[-20px]  left-0 w-full wave-animation-top" width="1512" height="580" viewBox="0 0 1512 580" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="wave-path-top" d="M0 0H1512V500C1512 500 1392 470 1238.5 485C1055.77 500 985.979 530 806.5 550C629.535 570 485 510 308.5 510C165.559 510 0 600 0 600V0Z" fill="#0CA37F" fill-opacity="0.2"/>
                </svg>

                <svg class="absolute  bottom-[-20px] left-0 w-full wave-animation-bottom" width="1512" height="580" viewBox="0 0 1512 580" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="wave-path-bottom" d="M0 0H1512V470C1512 470 1392 445 1238.5 460C1055.77 475 985.979 510 806.5 530C629.535 550 485 490 308.5 490C165.559 490 0 580 0 580V0Z" fill="#0CA37F" fill-opacity="0.1"/>
                </svg> --}}

                <h1 class="font-bold text-[32px] text-center m-10 relative z-10">Apa itu Manajemen Risiko Pembangunan Nasional (MRPN)?</h1>

                <div class="flex bg-white p-2 relative z-10 items-stretch">
                    <div class="p-3 ">
                        <p class="text-justify">
                            Manajemen Risiko Pembangunan Nasional merupakan kegiatan terkoordinasi untuk mengarahkan dan mengendalikan entitas MRPN sehubungan dengan adanya Risiko Pembangunan Nasional. Penerapan MRPN dilakukan berdasarkan Perpres 39/2024.
                        </p>


                        <br/>

                        <p class="text-justify">
                            Tujuan diterapkannya MRPN antara lain adalah untuk:
                        </p>
                        <ul class="list-disc ml-6 text-justify">
                            <li>Mendukung tercapainya sasaran Pembangunan nasional</li>
                            <li>Mendorong Entitas MRPN lebih proaktif dan antisipatif terhadap perubahan organisasi dan lingkungan</li>
                            <li>Memberikan keyakinan bagi Entitas MRPN dalam menghadapi ketidakpastian untuk mencapai sasaran Pembangunan nasional </li>
                        </ul>

                        <div class="flex gap-2 justify-end p-5 items-center">
                            <p>Pepres 39/2024</p>
                            <button class="bg-[#0C5599] p-2 border-2 border-white rounded-[7px]">Download PDF</button>
                        </div>
                    </div>

                    <div class="h-auto flex items-stretch ml-5">
                        <a href="#">
                            <img class="object-cover rounded-[1vh]" src="{{ asset('images/img-lp-1.png') }}" alt="img-lp-1"/>
                        </a>
                    </div>

                </div>
            </section>


            <section class="flex h-screen bg-gradient-to-b from-white via-[#E7F6F2] via-25% via-[#0CA37F] via-50% to-white">

                <div class="p-15">

                    <h2 class="font-bold text-[30px]">Mengenal MRPN Center</h2>
                    <div class="flex mt-3 mb-3 gap-18">

                        <p class="text-justify">
                            MRPN Center bermula dari pandangan mengenai pentingnya penerapan manajemen risiko di sektor publik, sejalan dengan hadirnya Perpres No. 39 Tahun 2023 mengenai Manajemen Risiko Pembangunan Nasional (MRPN). Pembentukan MRPN Center diinisiasi oleh Indonesia Risk Management Professional Association serta WAY Academy dan juga didukung oleh beberapa lembaga lain yang juga memiliki perhatian yang sama untuk mendorong perkembangan manajemen risiko. Kami berharap kehadiran MRPN Center dapat menjadi wadah yang bisa menjembatani kebutuhan bagi para praktisi, professional, akademisi, dan para pemangku kepentingan yang memiliki perhatian pada penerapan manajemen risiko di sektor publik.
                        </p>

                        <p class="text-justify">
                            Melalui MRPN Center, anda dapat mengakses berbagai referensi penting, termasuk peraturan perundang-undangan, petunjuk teknis, artikel, white paper, serta kajian terbaru terkait manajemen risiko di sektor publik. Selain itu, MRPN Center juga menjadi pusat informasi terkait pelatihan dan sertifikasi manajemen risiko di sektor publik, serta menawarkan akses ke layanan konsultasi dan riset yang bekerja sama dengan berbagai asosiasi dan universitas di Indonesia. Dengan tujuan mendukung penguatan tata kelola dan pengambilan keputusan berbasis risiko dalam rangka pencapaian Pembangunan nasional.
                        </p>

                    </div>

                    <div class="flex gap-10 justify-between mt-15 mb-80">
                        <div class="bg-white p-5 rounded-[15px] max-w-[400px]">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/icon-lp-1.png') }}" class="w-[50px]"/>
                                <h3 class="font-bold">Akses Mudah ke Regulasi & Kebijakan</h3>
                            </div>
                            <p class="text-justify mt-5">
                                MRPN Center menyediakan kumpulan regulasi, peraturan, dan pedoman resmi terkait manajemen risiko nasional dari berbagai instansi pemerintah, seperti Bappenas, Kemenkeu, LKPP, dan OJK.
                            </p>
                        </div>

                        <div class="bg-white p-5 rounded-[15px] max-w-[400px]">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/icon-lp-1.png') }}" class="w-[50px]"/>
                                <h3 class="font-bold">Wawasan Mendalam & Pembelajaran Berbasis Data</h3>
                            </div>
                            <p class="text-justify mt-5">
                                Pelajari praktik terbaik, studi kasus, dan analisis mendalam mengenai penerapan manajemen risiko dalam proyek pembangunan nasional.
                            </p>
                        </div>

                        <div class="bg-white p-5 rounded-[15px] max-w-[400px]">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/icon-lp-1.png') }}" class="w-[50px]"/>
                                <h3 class="font-bold">Komunits & Kolaborasi</h3>
                            </div>
                            <p class="text-justify mt-5">
                                Terhubung dengan para profesional, akademisi, dan pengambil kebijakan melalui forum diskusi, webinar, dan kegiatan edukatif lainnya.
                            </p>
                        </div>

                    </div>

                </div>

            </section>
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
