@extends('layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; background-color: #f0f4f8; }
    .container {
        max-width: 700px;
        margin: 40px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    h2 { text-align: center; font-weight: 600; color: #3f3d56; margin-bottom: 30px; }
    form label { display: block; margin-bottom: 6px; font-weight: 500; }
    form input[type="text"],
    form input[type="date"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #cbd5e0;
        border-radius: 8px;
        outline: none;
        transition: 0.3s ease;
    }
    form input:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99,102,241,0.2); }
    .btn-submit {
        background-color: #10b981;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s;
    }
    .btn-submit:hover { background-color: #059669; }
    .back-link {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #6366f1;
        font-weight: 500;
    }
    .back-link:hover { text-decoration: underline; }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #fff;
    }


</style>
<div class="container">
    <h2>Create Borrow Record</h2>
    <form action="{{ route('borrow_records.store') }}" method="POST">
        @csrf
        
        <label for="member_id">Member</label>
        <select name="member_id" required>
            <option value="">Select Member</option>
            @foreach($members as $member)
                <option value="{{ $member->id }}" {{ old('member_id') == $member->id ? 'selected' : '' }}>
                    {{ $member->name }}
                </option>
            @endforeach
        </select>

        <label for="book_id">Book</label>
        <select name="book_id" required>
            <option value="">Select Book</option>
            @foreach($books as $book)
                <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>
                    {{ $book->title }}
                </option>
            @endforeach
        </select>

        <label for="borrow_date">Borrow Date</label>
        <input type="date" name="borrow_date" value="{{ old('borrow_date') }}" required>

        <label for="return_date">Return Date</label>
        <input type="date" name="return_date" value="{{ old('return_date') }}">

        <button class="btn-submit" type="submit">Save Record</button>
    </form>
    <a class="back-link" href="{{ route('borrow_records.index') }}">Back to Record List</a>
</div>
@endsection