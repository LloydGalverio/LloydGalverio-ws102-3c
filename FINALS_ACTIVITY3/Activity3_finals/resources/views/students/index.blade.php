@extends('layouts.app')

@section('content')
<h2 style="text-align: center; margin-bottom: 20px;">Student List</h2>


<div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
    <form method="GET" action="{{ route('students.index') }}" style="display: flex; gap: 10px;">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search..." style="padding: 8px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc; width: 200px;">
        <button type="submit" style="padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Search</button>
    </form>
    <a href="{{ route('students.create') }}" style="padding: 8px 15px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Add Student</a>
</div>

@if(session('success')) 
    <div style="margin-bottom: 20px; padding: 10px; background-color: #d4edda; color: #155724; border-radius: 5px; text-align: center;">{{ session('success') }}</div>
@endif


<table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #ddd;">
    <thead>
        <tr style="background-color: #f4f4f4;">
            <th style="padding: 10px; font-size: 16px;">Name</th>
            <th style="padding: 10px; font-size: 16px;">ID</th>
            <th style="padding: 10px; font-size: 16px; text-align: center;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $s)
        <tr style="text-align: center;">
            <td>{{ $s->name }}</td>
            <td>{{ $s->student_id }}</td>
            <td>
  
                <img src="{{ route('students.qr', $s->id) }}" alt="QR Code" width="100" height="100" style="margin-right: 10px; cursor: pointer;" title="View QR Code"> 
                
                <a href="{{ route('students.show', $s->id) }}" style="padding: 5px 10px; background-color: #17a2b8; color: white; text-decoration: none; border-radius: 5px; margin-right: 10px;">View</a>

                <a href="{{ route('students.edit', $s->id) }}" style="padding: 5px 10px; background-color: #ffc107; color: white; text-decoration: none; border-radius: 5px; margin-right: 10px;">Edit</a>

                <form action="{{ route('students.destroy', $s->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<div style="margin-top: 20px; text-align: center;">
    {{ $students->links() }}
</div>
@endsection
