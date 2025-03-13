@extends('layouts.layout')

@section('title','Repositori')

@section('content')

<section class="p-15 flex">
    <div class="mr-20">
        <h1 class="font-bold text-[30px] text-[#18463B]">Seberapa siapkah organisasi Anda menerapkan MRPN? </h1>

        <br/>

        <p class="text-justify">
            Regulasi yang jelas adalah fondasi utama dalam menerapkan manajemen risiko yang efektif. Di MRPN Center, kami menyediakan akses mudah dan komprehensif ke berbagai peraturan yang mengatur manajemen risiko di Indonesia, baik dalam konteks pembangunan nasional maupun untuk sektor industri secara umum.
        </p>

        <br/>

        <p class="text-justify">
            Gunakan fitur pencarian pintar berdasarkan kata kunci, kategori, instansi penerbit, dan tahun terbit untuk menemukan regulasi yang Anda butuhkan.
        </p>


    </div>

    <div>
        <img class="w-[650px]" src="{{ asset('images/menuenam/gambarsatu.png') }}" alt="woman" />
    </div>
</section>


<section>
    <div class="container mx-auto p-6">
        <div class="flex gap-4">
            <a href="?kategori=peraturan" class="px-6 py-2 rounded-[30px] border-3 border-white text-white bg-[#18463B] {{ request('kategori') == 'peraturan' ? 'border-2 border-white' : '' }}">
                Peraturan terkait Manajemen Risiko Pembangunan Nasional
            </a>
            <a href="?kategori=buku_jurnal" class="px-6 py-2 rounded-[30px] text-white border-3 border-white bg-[#0C5599] {{ request('kategori') == 'buku_jurnal' ? 'border-2 border-white' : '' }}">
                Buku / Jurnal terkait Manajemen Risiko Pembangunan Nasional
            </a>
        </div>


        <div class="mt-6 flex items-center justify-between">
            <div>
                <label class="font-bold" for="kategori">Pilih kategori:</label>
                <select id="kategori" class="border border-[#D9D9D9] rounded-[5px] pt-1 pb-1 pr-10 pl-1">
                    <option>Kementerian</option>
                    <option>Swasta</option>
                </select>
            </div>

            <div>
                <form class="relative flex items-center bg-[#F7F7F7] rounded-full px-4 ml-4">
                    <input type="text" id="mnav-search-input" placeholder="Search something here..."
                    class="outline-none w-[425px] bg-transparent pl-2 pr-[30px] py-1 rounded-full text-slate-400">
                    <label for="mnav-search-input" class="flex items-center text-slate-400">
                        <i class="ri-search-line text-xl"></i>
                    </label>
                </form>
            </div>

        </div>


        <div class="relative overflow-x-auto shadow-lg ring-1 ring-gray-300 sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase  dark:text-gray-400 border-b border-[#EFEFEF]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                            No
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Dokumen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Tahun
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Yang Mengeluarkan
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Unduh
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dokumen as $index => $doc)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-4 py-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white w-12">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $doc->nama_dokumen }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $doc->tahun }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $doc->penerbit }}
                        </td>
                        <td class="px-6 py-4">
                            @if($doc->kategori === 'buku_jurnal')
                            <a href="{{ asset('storage/' . $doc->file_path) }}"
                                class="text-green-600 hover:underline" target="_blank">
                                Lihat & Unduh
                            </a>
                            @else
                            <button onclick="openPreview('{{ asset('storage/' . $doc->file_path) }}')"
                                class="text-blue-600 hover:underline">
                                Preview
                            </button>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-4 text-gray-500">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $dokumen->links() }}
        </div>
    </div>
</section>

<div id="previewModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex justify-center items-center p-6">
    <div class="bg-white w-[100%] md:w-[70%] h-[100%] p-6 rounded-lg shadow-lg relative">
        <button onclick="closePreview()" class="absolute top-4 right-4 text-gray-700 hover:text-red-500 text-2xl">
            &times;
        </button>
        <div id="pdf-viewer" class="w-full h-full flex flex-col items-center overflow-y-auto overflow-x-hidden space-y-4 p-4">
            <p class="text-gray-500">Memuat dokumen...</p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
<script>
    function openPreview(pdfUrl) {
        const modal = document.getElementById('previewModal');
        const viewer = document.getElementById('pdf-viewer');
        viewer.innerHTML = '';

        const fileCategory = pdfUrl.includes('buku_jurnal') ? 'buku_jurnal' : 'peraturan';

        if (fileCategory === 'buku_jurnal') {
            viewer.innerHTML = `<iframe src="${pdfUrl}" class="w-full h-full" style="border: none;"></iframe>`;
        } else {
            renderPDF(pdfUrl);
        }

        modal.classList.remove('hidden');
    }

    function closePreview() {
        document.getElementById('previewModal').classList.add('hidden');
    }

    function renderPDF(url) {
        var container = document.getElementById("pdf-viewer");
        container.innerHTML = "";

        pdfjsLib.getDocument(url).promise.then(function (pdf) {
            let scale = 0.7;
            let renderPage = function (pageNum) {
                pdf.getPage(pageNum).then(function (page) {
                    var viewport = page.getViewport({ scale: scale });

                    var canvas = document.createElement("canvas");
                    var context = canvas.getContext("2d");

                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    canvas.classList.add("w-full", "h-auto", "max-w-[100%]");

                    container.appendChild(canvas);

                    var renderContext = { canvasContext: context, viewport: viewport };
                    page.render(renderContext).promise.then(function () {
                        if (pageNum < pdf.numPages) {
                            renderPage(pageNum + 1);
                        }
                    });
                });
            };

            renderPage(1);
        }).catch(function (error) {
            console.error("Error loading PDF:", error);
            container.innerHTML = "<p class='text-red-500'>Gagal memuat PDF.</p>";
        });
    }

</script>
@endsection

