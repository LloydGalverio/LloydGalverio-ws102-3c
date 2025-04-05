@extends('layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f4f8;
    }

    .container {
        max-width:600px;
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

    form label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #374151;
    }

    form input {
        width: 100%;
        padding: 10px 14px;
        margin-bottom: 20px;
        border-radius: 8px;
        border: 1px solid #cbd5e0;
        outline: none;
        transition: border 0.3s;
    }

    form input:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }

    .form-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .submit-btn {
        background-color: #10b981;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #059669;
    }

    .back-btn {
        background-color: #6b7280;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        text-decoration: none;
    }

    .back-btn:hover {
        background-color: #4b5563;
    }
</style>

<div class="container">
    <h2>Edit Book</h2>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" value="{{ $book->title }}" required>

        <label>Author</label>
        <input type="text" name="author" value="{{ $book->author }}" required>

        <label>ISBN</label>
        <input type="text" name="isbn" value="{{ $book->isbn }}" required>

        <label>Copies</label>
        <input type="number" name="copies" value="{{ $book->copies }}" required>

        <div class="form-buttons">
            <a href="{{ route('books.index') }}" class="back-btn">Back</a>
            <button type="submit" class="submit-btn">Update Book</button>
        </div>
    </form>
</div>
@endsection