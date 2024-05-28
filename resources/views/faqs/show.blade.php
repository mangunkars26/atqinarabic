<!-- resources/views/faqs/show.blade.php -->
@extends('layouts.app')


    <div class="container">
        <h1>FAQ Details</h1>
        <div class="form-group">
            <strong>Question:</strong>
            {{ $faq->question }}
        </div>
        <div class="form-group">
            <strong>Answer:</strong>
            {{ $faq->answer }}
        </div>
        <a class="btn btn-primary" href="{{ route('faqs.index') }}">Back</a>
    </div>

