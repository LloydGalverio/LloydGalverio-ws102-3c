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
    .details label {
        font-weight: 600;
        display: block;
        margin-top: 20px;
        color: #374151;
    }
    .details p {
        margin-top: 5px;
        font-size: 16px;
        color: #4b5563;
    }
    .back-link {
        display: inline-block;
        margin-top: 30px;
        text-decoration: none;
        color: #6366f1;
        font-weight: 500;
    }
    .back-link:hover { text-decoration: underline; }
</style>

<div class="container">
    <h2>Member Details</h2>
    <div class="details">
        <label>Name</label>
        <p>{{ $member->name }}</p>

        <label>Phone</label>  {{-- Changed from Position to Phone --}}
        <p>{{ $member->phone }}</p>

        <label>Email</label>
        <p>{{ $member->email }}</p>
    </div>
    <br>
    <a class="back-link" href="{{ route('members.index') }}">Back to Member List</a>
</div>
@endsection
