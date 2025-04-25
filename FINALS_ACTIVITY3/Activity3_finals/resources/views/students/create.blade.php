@extends('layouts.app')

@section('content')
    <h2 style="text-align: center; margin-bottom: 20px;">Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold;">Name</label>
            <input id="name" name="name" placeholder="Name" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="student_id" style="display: block; font-weight: bold;">Student ID</label>
            <input id="student_id" name="student_id" placeholder="Student ID" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold;">Email</label>
            <input id="email" name="email" placeholder="Email" required type="email" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="course" style="display: block; font-weight: bold;">Course</label>
            <input id="course" name="course" placeholder="Course" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background-color:rgb(8, 145, 81); color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
            Save
        </button>
    </form>
@endsection
