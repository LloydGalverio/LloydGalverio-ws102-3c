@extends('layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f4f8;
    }

    .container {
        max-width: 700px;
        margin: 40px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    h2 {
        text-align: center;
        font-weight: 600;
        color: #3f3d56;
        margin-bottom: 30px;
    }

    .book-detail {
        line-height: 1.9;
        font-size: 16px;
        color: #374151;
    }

    .book-detail strong {
        color: #1f2937;
        display: inline-block;
        width: 100px;
    }

    .back-btn {
        display: inline-block;
        margin-top: 20px;
        background-color: #6b7280;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
    }

    .back-btn:hover {
        background-color: #4b5563;
    }
</style>

<div class="container">
    <h2>Book Details</h2>
    <div class="book-detail">
        <p><strong>ID:</strong> {{ $book->id }}</p>
        <p><strong>Title:</strong> {{ $book->title }}</p>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p><strong>Copies:</strong> {{ $book->copies }}</p>
        <p><strong>Created:</strong> {{ $book->created_at }}</p>
    </div>
    <a href="{{ route('books.index') }}" class="back-btn">Back to List</a>
</div>
@endsection
