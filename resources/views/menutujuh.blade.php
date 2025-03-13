@extends('layouts.layout')

@section('title', 'Publikasi')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="font-bold text-[#18463B] text-[30px] mb-5">Publikasi</h1>
    <div class="space-y-6">
        @foreach ($publications as $publication)
            <div class="bg-white overflow-hidden">
                <div class="flex">
                    <div class="w-1/4 h-[200px] flex items-center justify-center bg-gray-200 m-5">
                        @if ($publication->image)
                            <img src="{{ asset('storage/' . $publication->image) }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 flex items-center justify-center text-gray-500">
                                No Image
                            </div>
                        @endif
                    </div>

                    <div class="w-3/4 p-5">
                        <h2 class="text-[35px] font-semibold text-gray-800">{{ $publication->judul }}</h2>
                        <p class="text-gray-600 mt-2">
                            {{ Str::limit($publication->konten, 280, '...') }}
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </p>
                    </div>
                </div>


                <div class="mt-3 mb-3 pt-3 pb-3 pr-0 pl-0 flex items-center w-full gap-x-2 flex-wrap border-t-1 border-b-1">
                    <p class="text-[12px] text-gray-500">By {{ $publication->author }} |</p>
                    <p class="text-[12px]  text-gray-500">24 Februari 2025 |</p>
                    <p class="text-[12px]  text-gray-500">Categories: {{ $publication->kategori }} |</p>
                    <p class="text-[12px]  text-gray-500">Tags: {{ $publication->tags }}</p>
                </div>

            </div>
        @endforeach
    </div>
</div>
@endsection
