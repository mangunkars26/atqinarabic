<!-- resources/views/faqs/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit FAQ</h1>
        <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="question">Question:</label>
                <input type="text" name="question" class="form-control" id="question" value="{{ $faq->question }}" required>
            </div>
            <div class="form-group">
                <label for="answer">Answer:</label>
                <textarea name="answer" class="form-control" id="answer" required>{{ $faq->answer }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
