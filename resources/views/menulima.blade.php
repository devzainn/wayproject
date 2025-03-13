@extends('layouts.layout')

@section('title', 'Kesiapan MRPN')

@section('content')

<section class="p-15">

    <div class="flex">
        <div class="w-[800px] mr-30" id="mainContent">
            <div>
                <h1 class="font-bold text-[30px] text-[#18463B]">Seberapa siapkah organisasi Anda menerapkan MRPN? </h1>
                <br/>
                <p class="text-justify">
                    Manajemen risiko yang efektif membutuhkan kesiapan yang matang. Penilaian Kesiapan di MRPN Center membantu Anda mengevaluasi sejauh mana kesiapan organisasi dalam menerapkan Manajemen Risiko Pembangunan Nasional.
                </p>
                <div class="flex justify-end mt-10">
                    <button id="startButton" onclick="showForm()" class="bg-[#18463B] text-white rounded-[50px] p-3 border-2 border-white text-[12px] font-bold cursor-pointer">
                        Lakukan Penilaian Sekarang
                    </button>
                </div>
            </div>

            <div id="infoSection" >
                <h1 class="font-bold text-[30px] text-[#18463B]">Bagaimana Cara Kerjanya?</h1>
                <h2 class="font-bold text-[20px] mt-5">Jawab Pertanyaan Evaluasi</h2>
                <p class="text-justify text-[18px]">
                    Isi beberapa pertanyaan terkait penerapan manajemen risiko di organisasi Anda, mencakup ketersediaan prosedur, fungsi, maupun SDM dalam melaksanakan manajemen risiko.
                </p>
                <h2 class="font-bold text-[20px] mt-5">Dapatkan Skor Kesiapan</h2>
                <p class="text-justify text-[18px]">
                    Sistem akan menganalisis jawaban Anda dan memberikan skor kesiapan dalam skala 0-3, yang dikategorikan sebagai berikut:
                </p>
                <ul class="list-disc ml-6 text-justify">
                    <li>🔴 Belum Siap (<1) → Perlu peningkatan signifikan dalam penerapan manajemen risiko.</li>
                    <li>🟡 Siap (1-<=3) → Sudah memiliki dasar, tetapi masih ada aspek yang perlu diperkuat.</li>
                    <li>🟢 Sangat Siap (3) → Telah mempersiapkan MRPN dengan sangat baik.</li>
                </ul>
                <h2 class="font-bold text-[20px] mt-5">Dapatkan Rekomendasi Perbaikan</h2>
                <p class="text-justify text-[18px]">
                    Berdasarkan skor, sistem akan memberikan analisis singkat dan saran perbaikan.
                </p>

                <h2 class="font-bold text-[20px] mt-5">
                    Dapatkan Rekomendasi Perbaikan
                </h2>
                <p class="text-justify text-[18px]">
                    Berdasarkan skor, sistem akan memberikan analisis singkat dan saran perbaikan, seperti:
                    <br/>
                    ✔ Meningkatkan kebijakan dan prosedur manajemen risiko
                    <br/>
                    ✔ Memperkuat fungsi manajemen risiko dalam pengelolaan MRPN
                    <br/>
                    ✔ Memastikan kompetensi SDM dalam menjalankan pengelolaan MRPN
                </p>

                <h1 class="font-bold text-[30px] mt-10 text-[#18463B]">Siapa yang Bisa Menggunakan Penilaian Kesiapan Ini?</h1>

                <p class="text-justify mt-5 text-[18px]">
                    ✅ Instansi Pemerintah – Untuk mengukur kesiapan dalam manajemen risiko pembangunan nasional.
                    <br/>
                    ✅ BUMN & Swasta – Untuk memastikan strategi manajemen risiko sudah sesuai dengan regulasi dan praktik terbaik.
                    <br/>
                    ✅ Akademisi & Konsultan – Untuk melakukan analisis kesiapan di berbagai organisasi.
                    <br/>
                    Cek kesiapan Anda sekarang dan tingkatkan ketahanan organisasi terhadap risiko!
                </p>
            </div>

            <div id="formData" class="hidden">
                <h2 class="font-bold text-[25px] text-[#18463B]">Isi Data Diri Anda</h2>
                <form id="userForm" class="w-full">
                    <div class="grid grid-cols-3 gap-1 items-center mb-4">
                        <label class="text-left font-medium w-1/2">Nama Organisasi</label>
                        <input type="text" class="border-1 border-[#D9D9D9] bg-white col-span-2 p-2 rounded-md w-full shadow-lg focus:ring-2 focus:ring-[#000] focus:border-[#000] transition duration-200" required>
                    </div>

                    <div class="grid grid-cols-3 gap-1 items-center mb-4">
                        <label class="text-left font-medium w-1/2">Nama Lengkap</label>
                        <input type="text" class="border border-[#D9D9D9] bg-white col-span-2 p-2 rounded-md w-full shadow-lg focus:ring-2 focus:ring-[#000] focus:border-[#000] transition duration-200" required>
                    </div>

                    <div class="grid grid-cols-3 gap-1 items-center mb-2">
                        <label class="text-left font-medium w-1/2">Email</label>
                        <input type="email"class="border border-[#D9D9D9] bg-white col-span-2 p-2 rounded-md w-full shadow-lg focus:ring-2 focus:ring-[#000] focus:border-[#000] transition duration-200" required>
                    </div>

                    <div class="flex justify-end">
                        <button id="startAssessmentButton" type="button" onclick="startAssessment()" class="bg-[#18463B] text-white rounded-[50px] px-6 py-3 mt-5 cursor-pointer">
                            Mulai Penilaian
                        </button>
                    </div>
                </form>

            </div>

            <div id="quizSection" class="hidden mt-10">
                <h2 id="questionTitle" class="font-bold text-[25px] text-[#18463B]">Pertanyaan 1/3</h2>
                <p id="questionText" class="text-justify text-[18px] mt-2 font-semibold">Apakah Organisasi Anda Telah Memiliki Kebijakan dan prosedur terkait pengelolaan MRPN?</p>

                <div class="mt-5 space-y-2">
                    <label class="block w-full cursor-pointer">
                        <input type="radio" name="answer" value="1" class="hidden peer" />
                        <div class="p-3 rounded-lg border border-gray-300 bg-white peer-checked:bg-[#18463B] peer-checked:text-white peer-checked:border-transparent transition-all">
                            Sudah, dan terintegrasi antar unit
                        </div>
                    </label>

                    <label class="block w-full cursor-pointer">
                        <input type="radio" name="answer" value="2" class="hidden peer" />
                        <div class="p-3 rounded-lg border border-gray-300 bg-white peer-checked:bg-[#18463B] peer-checked:text-white peer-checked:border-transparent transition-all">
                            Sudah, namun belum terintegrasi antar unit
                        </div>
                    </label>

                    <label class="block w-full cursor-pointer">
                        <input type="radio" name="answer" value="3" class="hidden peer" />
                        <div class="p-3 rounded-lg border border-gray-300 bg-white peer-checked:bg-[#18463B] peer-checked:text-white peer-checked:border-transparent transition-all">
                            Belum ada
                        </div>
                    </label>
                </div>

                <button id="nextButton" onclick="nextQuestion()" class="bg-[#CE993B] border-1 border-white font-bold text-[12px] text-white rounded-[50px] pl-10 pr-10 pt-3 pb-3 mt-5 cursor-pointer">
                    Lanjut
                </button>
            </div>

        </div>

        <div>
            <img class="w-[250px]" src="{{ asset('images/menulima/gambarsatu.png') }}" alt="woman" />
        </div>

    </div>



</section>


<script>
    let currentQuestion = 0;
    const questions = [
        {
            title: "Pertanyaan 1/3",
            text: "Apakah Organisasi Anda Telah Memiliki Kebijakan dan prosedur terkait pengelolaan MRPN?",
            options: [
                "Sudah,dan terintegrasi antar unit",
                "Sudah, namun belum terintegrasi antar unit",
                "Belum ada"
            ]
        },
        {
            title: "Pertanyaan 2/3",
            text: "Apakah Organisasi Anda Telah Memiliki Fungsi Dedicated Manajemen Risiko untuk Pengelolaan MRPN?",
            options: [
                "Sudah, namun dilekatkan dengan fungsi internal audit.",
                "Sudah, namun terbatas hanya untuk pemenuhan peraturan/temuan audit.",
                "Belum ada"
            ]
        },
        {
            title: "Pertanyaan 3/3",
            text: "Apakah Organisasi Anda Telah Memiliki SDM yang Kompeten untuk menjalankan Pengelolaan MRPN?",
            options: [
                "Sudah, dengan kapasitas dan kabailitas yang memadai dibuktikan dengan jumlah karyawan yang pernah dilatih dan disertifikasi",
                "Sudah, namun terbatas hanya untuk pemenuhan peraturan/temuan audit.",
                "Belum ada"
            ]
        }
    ];

    function nextQuestion() {
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            document.getElementById("questionTitle").innerText = questions[currentQuestion].title;
            document.getElementById("questionText").innerText = questions[currentQuestion].text;

            let optionsContainer = document.getElementById("optionsContainer");
            optionsContainer.innerHTML = "";
            questions[currentQuestion].options.forEach((option, index) => {
                let label = document.createElement("label");
                label.classList.add("block");

                let radio = document.createElement("input");
                radio.type = "radio";
                radio.name = "answer";
                radio.value = index + 1;

                label.appendChild(radio);
                label.appendChild(document.createTextNode(" " + option));
                optionsContainer.appendChild(label);
            });

            if (currentQuestion === questions.length - 1) {
                document.getElementById("nextButton").innerText = "Hitung";
                document.getElementById("nextButton").setAttribute("onclick", "calculateResult()");
            }
        }
    }


    function showForm() {
        document.getElementById("infoSection").classList.add("hidden");
        document.getElementById("formData").classList.remove("hidden");
        document.getElementById("startButton").classList.add("hidden");
    }

    function startAssessment() {
        // document.getElementById("formData").classList.add("hidden");
        document.getElementById("startAssessmentButton").classList.add("hidden");
        document.getElementById("quizSection").classList.remove("hidden");
    }

    // function nextQuestion() {
    //     if (currentQuestion < questions.length - 1) {
    //         currentQuestion++;
    //         document.getElementById("questionTitle").innerText = questions[currentQuestion].title;
    //         document.getElementById("questionText").innerText = questions[currentQuestion].text;

    //         if (currentQuestion === questions.length - 1) {
    //             document.getElementById("nextButton").innerText = "Hitung";
    //             document.getElementById("nextButton").setAttribute("onclick", "calculateResult()");
    //         }
    //     }
    // }

    function calculateResult() {
        alert("Penilaian selesai! Skor kesiapan Anda akan dihitung.");
    }
</script>

@endsection
