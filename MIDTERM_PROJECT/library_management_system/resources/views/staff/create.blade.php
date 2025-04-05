@extends('layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; background-color: #f0f4f8; }
    .container { max-width: 800px; margin: 40px auto; background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); }
    h2 { text-align: center; font-weight: 600; color: #3f3d56; margin-bottom: 30px; }
    .form-group { margin-bottom: 20px; }
    label { font-weight: 500; display: block; margin-bottom: 8px; color: #374151; }
    input[type="text"], input[type="email"] { width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 8px; outline: none; transition: 0.3s; }
    input[type="text"]:focus, input[type="email"]:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2); }
    .btn-submit { background-color: #6366f1; color: white; padding: 12px 20px; border: none; border-radius: 10px; font-weight: 500; cursor: pointer; transition: background 0.3s; }
    .btn-submit:hover { background-color: #4f46e5; }
    .btn-back { display: inline-block; margin-top: 20px; text-decoration: none; color: #6366f1; font-weight: 500; }
</style>


@if ($errors->any())
    <div style="color: red; margin-bottom: 20px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <h2>Add New Staff</h2>
    <form action="{{ route('staff.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label>Position</label>
            <input type="text" name="position" value="{{ old('position') }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit" class="btn-submit">Save</button>
    </form>
    <a href="{{ route('staff.index') }}" class="btn-back">← Back to Staff List</a>
</div>
@endsection
