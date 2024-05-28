@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Create New FAQ</h1>
        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="question" class="block text-gray-700 text-sm font-bold mb-2">Question:</label>
                <input type="text" name="question" id="question" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label for="answer" class="block text-gray-700 text-sm font-bold mb-2">Answer:</label>
                <textarea name="answer" id="answer" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
@endsection
