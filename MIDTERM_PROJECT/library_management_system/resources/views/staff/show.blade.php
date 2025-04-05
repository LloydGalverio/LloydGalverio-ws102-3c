@extends('layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; background-color: #f0f4f8; }
    .container { max-width: 800px; margin: 40px auto; background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); }
    h2 { text-align: center; font-weight: 600; color: #3f3d56; margin-bottom: 30px; }
    .info-group { margin-bottom: 20px; }
    .info-label { font-weight: 600; color: #374151; margin-bottom: 6px; display: block; }
    .info-value { font-size: 16px; color: #111827; }
    .btn-back { display: inline-block; margin-top: 30px; text-decoration: none; color: #6366f1; font-weight: 500; }
</style>

<div class="container">
    <h2>Staff Details</h2>
    <div class="info-group">
        <span class="info-label">Name:</span>
        <span class="info-value">{{ $staff->name }}</span>
    </div>
    <div class="info-group">
        <span class="info-label">Position:</span>
        <span class="info-value">{{ $staff->position }}</span>
    </div>
    <div class="info-group">
        <span class="info-label">Email:</span>
        <span class="info-value">{{ $staff->email }}</span>
    </div>

    <a href="{{ route('staff.index') }}" class="btn-back">Back to Staff List</a>
</div>
@endsection
