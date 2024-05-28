@extends('back.layouts.template')



@section('content')


    <main class="flex-grow p-8 transition-all duration-300 w-full">
        <div class="flex justify-between pb-6 mb-6 border-b border-gray-200">
            <h1 class="text-3xl font-semibold text-teal-700">Categories</h1>
            <button id="openModalButton"
                class="bg-teal-700 text-white px-4 py-2 rounded hover:bg-teal-800 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Add Category
            </button>
        </div>


        @if ($errors->any())
            <div class="my-3">
                <div class="text-red-200 bg-red-800 px-3 py-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Main content goes here -->
        <div class="mt-3 gap-5">
            <table class="table-auto border-solid border-2 border-gray-300">
                <thead>
                    <tr class="bg-teal-700 text-white">
                        <th class="px-4 border-solid border-2  text-center py-1">No</th>
                        <th class="px-16 border-solid border-2  text-center py-1">Kategori</th>
                        <th class="px-16 border-solid border-2  text-center py-1">Slug</th>
                        <th class="px-16 border-solid border-2  text-center py-1">Created At</th>
                        <th class="px-16 border-solid border-2  text-center py-1">Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="hover:bg-gray-100">
                            <td class="border-solid border-2  text-center px-2 py-1">{{ $loop->iteration }}</td>
                            <td class="border-solid border-2 text-center px-2 py-1">{{ $category->name }}</td>
                            <td class="border-solid border-2 text-center px-2 py-1">{{ $category->slug }}</td>
                            <td class="border-solid border-2 text-center px-2 py-1">{{ $category->created_at }}</td>
                            <td class="border-solid border-2">
                                <div class="flex justify-center text-center">
                                    <button id="openModalButton{{ $category->id }}"
                                        class="px-2 py-auto border-solid border-2 hover:bg-teal-300 hover:text-teal-600 rounded-md">Edit</button>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="get"
                                        onsubmit="return confirm('Yakin hapus kategori ini?');">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="px-2 py-auto border-solid border-2 hover:bg-red-300 hover:text-red-600 rounded-md">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('back.category.create-modal')
        @include('back.category.update-modal')



    </main>


@endsection
