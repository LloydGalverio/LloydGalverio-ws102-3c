@extends('layouts.app')

@section('content')
<div style="text-align: center; margin-bottom: 20px;">
    <h2 style="font-size: 24px; margin-bottom: 15px;">{{ $student->name }}</h2>
    <p style="font-size: 18px; color: #555;">ID: <strong>{{ $student->student_id }}</strong></p>
    <p style="font-size: 18px; color: #555;">Email: <strong>{{ $student->email }}</strong></p>
    <p style="font-size: 18px; color: #555;">Course: <strong>{{ $student->course }}</strong></p>
</div>


<div style="text-align: center; margin-bottom: 40px;">
  
    <div>{!! $qrCode !!}</div>
</div>


<div style="text-align: center;">
    <a href="{{ route('students.index') }}" style="padding: 10px 20px; background-color:rgb(8, 145, 81); color: white; text-decoration: none; border-radius: 5px;">Back to Student List</a>
</div>
@endsection
