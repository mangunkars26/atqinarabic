@extends('layouts.app')


@section('title', 'Kelas Gratis')



{{-- @include('layouts.app') --}}
@include('partials.navbar')
@include('partials.heading')
<div class="bg-sky-900">
    <div class="px-8 py-6 mx-auto my-14 max-w-screen-xl ">
        <div class="mx-auto max-w-screen-xl text-5xl font-bold text-center text-blue-200">
            <h1>
                Ini adalah kelas {{ $title }}
            </h1>
        </div>
    </div>
    <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Bersama Praktisi Bahasa
            Arab Lulusan LIPIA</h2>
        <p class="mb-5 font-semibold text-gray-500 sm:text-xl dark:text-gray-400">Antum akan belajar bahasa Arab dari
            nol dengan metode pengajaran bahasa Arab paling modern </p>
    </div>
</div>
@include('partials.footer')
