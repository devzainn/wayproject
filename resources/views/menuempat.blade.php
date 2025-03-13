@extends('layouts.layout')

@section('title','Program')

@section('content')

<section class="p-15">

    <div class="flex">

        <div class="mr-20">
            <h1 class="font-bold text-[37px] text-[#18463B]">Program MRPN Center</h1>

            <br/>

            <p class="text-justify max-w-[800px]">
                MRPN Center membantu profesional dan organisasi dalam manajemen risiko, tata kelola, dan kepatuhan. Kami menawarkan tiga program utama: Pelatihan dan Sertifikasi untuk meningkatkan kompetensi, Konsultan dan Solusi untuk strategi manajemen risiko, serta Penyelenggaraan Riset untuk menghasilkan wawasan berbasis data. Dengan pendekatan inovatif dan kolaboratif, kami bekerja sama dengan para ahli dan institusi guna memastikan solusi yang relevan. MRPN Center berkomitmen membantu organisasi membangun ketahanan bisnis yang tangguh dan berkelanjutan.
            </p>
        </div>

        <div>
            <img class="w-[250px]" src="{{ asset('images/menuempat/gambarsatu.png') }}" alt="woman" />
        </div>

    </div>

    <div class="flex gap-10 justify-between mt-15">

        <div class="bg-white p-5 rounded-[15px] max-w-[400px]">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/menuempat/iconsatu.png') }}" class="w-[50px]"/>
                <h3 class="font-bold">Mitra Pelatihan dan Sertifikasi</h3>
            </div>
            <p class="text-justify mt-5">
                MRPN Center bekerjasama dengan para mitra pelatihan dan sertifikasi sebagai counterpart organisasi sektor publik dalam mempersiapkan kapasitas dan kapabilitas SDM di bidang manajemen risiko.
            </p>
            <div class="flex flex-wrap gap-3 justify-center m-5">
                <img src="{{ asset('images/menuempat/cardsatu/logosatu.png') }}" class="w-[45%] max-w-[100px] object-contain" alt="logo-satu"/>

                <img src="{{ asset('images/menuempat/cardsatu/logodua.png') }}" class="w-[45%] max-w-[120px] object-contain" alt="logo-dua"/>

                <img src="{{ asset('images/menuempat/cardsatu/logotiga.png') }}" class="w-[45%] max-w-[120px] object-contain" alt="logo-tiga"/>

                <img src="{{ asset('images/menuempat/cardsatu/logoempat.png') }}" class="w-[45%] max-w-[120px] object-contain" alt="logo-empat"/>
            </div>
        </div>

        <div class="bg-white p-5 rounded-[15px] max-w-[400px]">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/menuempat/icondua.png') }}" class="w-[50px]"/>
                <h3 class="font-bold">Mitra Konsultan dan Solusi</h3>
            </div>
            <p class="text-justify mt-5">
                MRPN Center bekerjasama dengan lembaga konsultan dan penyedia Solusi digital untuk membantu lembaga sektor public mempersiapkan infrastruktur dan proses digitalisasi untuk menunjang efektivitas pelaksanaan manajemen risiko pembangunan nasional.
            </p>

            <div class="flex flex-wrap gap-3 justify-center m-5">
                <img src="{{ asset('images/menuempat/carddua/logosatu.png') }}" class="w-[50%] max-w-[150px] object-contain" alt="logo-satu"/>

                <img src="{{ asset('images/menuempat/carddua/logodua.png') }}" class="w-[50%] max-w-[150px] object-contain" alt="logo-dua"/>
            </div>
        </div>

        <div class="bg-white p-5 rounded-[15px] max-w-[400px]">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/menuempat/icontiga.png') }}" class="w-[50px]"/>
                <h3 class="font-bold">Mitra Penyelenggaraan Riset</h3>
            </div>
            <p class="text-justify mt-5">
                MRPN Center bekerjasama dengan asosiasi atau universitas untuk menyelenggarakan kajian/riset terkait dengan pelaksanaan manajemen risiko pembangunan nasional.
            </p>
            <div class="flex flex-wrap gap-3 justify-center m-5">
                <img src="{{ asset('images/menuempat/cardtiga/logosatu.png') }}" class="object-contain" alt="logo-satu"/>
            </div>
        </div>

    </div>
</section>

@endsection

