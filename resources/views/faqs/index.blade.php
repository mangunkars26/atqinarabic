@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">FAQs</h1>
        <a href="{{ route('faqs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3 inline-block">Create New FAQ</a>
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-3">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Question</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Answer</th>
                    <th class="px-6 py-3 bg-gray-50"></th>
                </tr>
            </thead>
            @php
                $i = 0;
            @endphp
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($faqs as $faq)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap">{{ ++$i }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap">{{ $faq->question }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap">{{ $faq->answer }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                            <a href="{{ route('faqs.show', $faq->id) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
                            <a href="{{ route('faqs.edit', $faq->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">Edit</a>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
