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
    form input[type="date"],
    form select {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #cbd5e0;
        border-radius: 8px;
        outline: none;
        transition: 0.3s ease;
    }
    form input:focus, form select:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99,102,241,0.2);
    }
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
    .error-box {
        background-color: #fee2e2;
        border: 1px solid #fecaca;
        padding: 15px;
        border-radius: 8px;
        color: #b91c1c;
        margin-bottom: 20px;
    }
</style>

<div class="container">
    <h2>Edit Borrow Record</h2>

    @if($errors->any())
        <div class="error-box">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('borrow_records.update', $borrow_record->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="book_id">Book</label>
        <select name="book_id" required>
            @foreach($books as $book)
                <option value="{{ $book->id }}" {{ $borrow_record->book_id == $book->id ? 'selected' : '' }}>
                    {{ $book->title }}
                </option>
            @endforeach
        </select>

        <label for="member_id">Member</label>
        <select name="member_id" required>
            @foreach($members as $member)
                <option value="{{ $member->id }}" {{ $borrow_record->member_id == $member->id ? 'selected' : '' }}>
                    {{ $member->name }}
                </option>
            @endforeach
        </select>

        <label for="borrow_date">Borrow Date</label>
        <input type="date" name="borrow_date" value="{{ $borrow_record->borrow_date }}" required>

        <label for="return_date">Return Date</label>
        <input type="date" name="return_date" value="{{ $borrow_record->return_date }}">

        <button class="btn-submit" type="submit">Update Record</button>
    </form>

    <a class="back-link" href="{{ route('borrow_records.index') }}">← Back to Borrow Records</a>
</div>
@endsection
