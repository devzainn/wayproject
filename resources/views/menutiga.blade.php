@extends('layouts.layout')

@section('title','Tentang  MRPN Center')

@section('content')

<section class="p-15 items-center">

    <h2 class="font-bold text-[37px] text-[#18463B]">Mengenal MRPN Center</h2>
    <div class="flex mt-3 mb-3 gap-18">

        <p class="text-justify">
            MRPN Center bermula dari pandangan mengenai pentingnya penerapan manajemen risiko di sektor publik, sejalan dengan hadirnya Perpres No. 39 Tahun 2023 mengenai Manajemen Risiko Pembangunan Nasional (MRPN). Pembentukan MRPN Center diinisiasi oleh Indonesia Risk Management Professional Association serta WAY Academy dan juga didukung oleh beberapa lembaga lain yang juga memiliki perhatian yang sama untuk mendorong perkembangan manajemen risiko. Kami berharap kehadiran MRPN Center dapat menjadi wadah yang bisa menjembatani kebutuhan bagi para praktisi, professional, akademisi, dan para pemangku kepentingan yang memiliki perhatian pada penerapan manajemen risiko di sektor publik.
        </p>

        <p class="text-justify">
            Melalui MRPN Center, anda dapat mengakses berbagai referensi penting, termasuk peraturan perundang-undangan, petunjuk teknis, artikel, white paper, serta kajian terbaru terkait manajemen risiko di sektor publik. Selain itu, MRPN Center juga menjadi pusat informasi terkait pelatihan dan sertifikasi manajemen risiko di sektor publik, serta menawarkan akses ke layanan konsultasi dan riset yang bekerja sama dengan berbagai asosiasi dan universitas di Indonesia. Dengan tujuan mendukung penguatan tata kelola dan pengambilan keputusan berbasis risiko dalam rangka pencapaian Pembangunan nasional.
        </p>

    </div>

    <div class="flex gap-10 justify-between mt-15">
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

</section>

<section class="p-15 pt-0">

    <div class="flex items-center">
        <div class="mr-[80px]">
            <img class="w-[250px]" src="{{ asset('images/menudua/woman.png') }}" alt="woman" />
        </div>

        <div class="max-w-[580px]">
            <h2 class="text-[#18463B] font-bold text-[28px]">Saatnya mengambil peran, siapkah Anda?</h2>
            <p class="mt-4">Ukur kesiapan organisasi Anda dalam menerapkan MRPN dengan menggunakan alat bantu sederhana ini.</p>
            <button class="bg-[#18463B] text-white rounded-[50px] p-3 border-2 border-white mt-10 text-[12px] font-bold cursor-pointer">Lakukan Penilaian Sekarang</button>
        </div>
    </div>

</section>

@endsection

