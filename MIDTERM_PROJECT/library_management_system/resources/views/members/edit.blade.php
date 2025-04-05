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
    form input[type="email"] {
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
        background-color: #f59e0b;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s;
    }
    .btn-submit:hover { background-color: #d97706; }
    .back-link {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #6366f1;
        font-weight: 500;
    }
    .back-link:hover { text-decoration: underline; }
</style>

<div class="container">
    <h2>Edit Member</h2>

    @if ($errors->any())
        <div style="background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" required>

  

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email', $member->email) }}" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" value="{{ old('phone', $member->phone) }}" required>

    <button class="btn-submit" type="submit">Update Member</button>
</form>
<br>
<a class="back-link" href="{{ route('members.index') }}">Back to Member List</a>

@endsection
