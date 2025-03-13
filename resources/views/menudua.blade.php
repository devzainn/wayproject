@extends('layouts.layout')

@section('title','Memahami MRPN')

@section('content')

<section class="p-15 flex items-center">
    <div class="mr-20">
        <h1 class="font-bold text-[37px] text-[#18463B]">Apa itu Manajemen Risiko Pembangunan Nasional (MRPN)?</h1>

        <br/>

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
    </div>

    <div>
        <img class="w-[650px]" src="{{ asset('images/menudua/woman.png') }}" alt="woman" />
    </div>
</section>

<section class="p-15 pt-0">
    <h1 class="font-bold text-[37px] text-[#18463B]">Gambaran Perpres No. 39/2024</h1>

    <p class="text-justify">
       Tentang Manajemen Risiko Pembangunan Nasional
    </p>

    <img class="w-full mt-20" src="{{ asset('images/menudua/bagansatu.png') }}" alt="woman" />
</section>

<section class="p-15 pt-0">
    <h1 class="font-bold text-[37px] text-[#18463B]">Struktur Komite MRPN</h1>

    <p class="text-justify text-[20px] text-[#18463B] font-bold">
       Tentang Manajemen Risiko Pembangunan Nasional
    </p>

    <img class="w-full mt-20" src="{{ asset('images/menudua/bagandua.png') }}" alt="woman" />
</section>

<section class="p-15 pt-0 text-center bg-gradient-to-b from-[#0CA37F] to-[#0CA37F]/50">
    <h1 class="font-bold text-[37px] text-[#18463B]">MRPN dan Indonesia Emas</h1>

    <p class="text-[20px] text-[#18463B] font-bold">
       Sarana Visi Menuju Indonesia Emas 2045
    </p>

    <img class="w-full mt-10" src="{{ asset('images/menudua/bagantiga.png') }}" alt="woman" />
</section>

@endsection
