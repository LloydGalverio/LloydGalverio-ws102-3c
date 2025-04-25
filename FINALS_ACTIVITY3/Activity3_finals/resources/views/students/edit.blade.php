@extends('layouts.app')

@section('content')
    <h2 style="text-align: center; margin-bottom: 20px;">Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold;">Name</label>
            <input id="name" name="name" value="{{ $student->name }}" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="student_id" style="display: block; font-weight: bold;">Student ID</label>
            <input id="student_id" name="student_id" value="{{ $student->student_id }}" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold;">Email</label>
            <input id="email" name="email" value="{{ $student->email }}" required type="email" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="course" style="display: block; font-weight: bold;">Course</label>
            <input id="course" name="course" value="{{ $student->course }}" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
            Update
        </button>
    </form>
@endsection
