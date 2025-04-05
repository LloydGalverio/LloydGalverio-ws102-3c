@extends('layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f4f8;
    }

    .container {
        max-width: 1100px;
        margin: 40px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    h2 {
        text-align: center;
        font-weight: 600;
        color: #3f3d56;
        margin-bottom: 30px;
    }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }

    .search-form {
        display: flex;
        gap: 10px;
    }

    .search-form input[type="text"] {
        padding: 10px 14px;
        border: 1px solid #cbd5e0;
        border-radius: 8px;
        width: 260px;
        outline: none;
        transition: 0.3s ease;
    }

    .search-form input[type="text"]:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }

    .search-form button,
    .search-form a {
        padding: 10px 16px;
        background-color: #6366f1;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
        transition: background 0.3s;
        text-decoration: none;
    }

    .search-form a {
        background-color: #6b7280;
    }

    .search-form button:hover {
        background-color: #4f46e5;
    }

    .search-form a:hover {
        background-color: #4b5563;
    }

    .add-btn {
        background-color: #10b981;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.3s;
    }

    .add-btn:hover {
        background-color: #059669;
    }

    .success {
        background: #d1fae5;
        padding: 14px 18px;
        margin-bottom: 20px;
        border-left: 6px solid #10b981;
        color: #065f46;
        border-radius: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        border-radius: 12px;
        overflow: hidden;
    }

    table th, table td {
        padding: 14px 16px;
        text-align: left;
    }

    table th {
        background-color: #3f3d56;
        color: #ffffff;
        font-weight: 600;
    }

    table tr {
        border-bottom: 1px solid #e5e7eb;
    }

    table tr:nth-child(even) {
        background-color: #f9fafb;
    }

    .action-links {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
    }

    .action-links a,
    .action-links button {
        text-decoration: none;
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 6px;
        transition: background 0.3s;
    }

    .view-btn {
        background-color: #14b8a6;
        color: white;
    }

    .view-btn:hover {
        background-color: #0d9488;
    }

    .edit-btn {
        background-color: #f59e0b;
        color: white;
    }

    .edit-btn:hover {
        background-color: #d97706;
    }

    .delete-btn {
        background-color: #ef4444;
        color: white;
        border: none;
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: #dc2626;
    }

    .pagination {
        margin-top: 30px;
        text-align: center;
    }

    .pagination nav {
        display: inline-block;
        padding: 10px;
    }

    .pagination .page-link {
        padding: 8px 12px;
        border-radius: 6px;
        margin: 0 4px;
        color: #6366f1;
        border: 1px solid #d1d5db;
        transition: 0.3s;
    }

    .pagination .page-link:hover {
        background: #6366f1;
        color: white;
    }
</style>

<div class="container">
    <h2>Members List</h2>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="top-bar">
        <form method="GET" action="{{ route('members.index') }}" class="search-form">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or type">
            <button type="submit">Search</button>
            <a href="{{ route('members.index') }}">Clear</a>
        </form>
        <a class="add-btn" href="{{ route('members.create') }}">Add Member</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created</th>
              
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($members as $member)
            <tr>
                   <td>{{ $member->id }}</td>  
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->created_at }}</td>
               
                <td class="action-links">
                    <a class="view-btn" href="{{ route('members.show', $member->id) }}">View</a>
                    <a class="edit-btn" href="{{ route('members.edit', $member->id) }}">Edit</a>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn" onclick="return confirm('Are you sure you want to delete this member?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4" style="text-align:center; color:#999;">No members found.</td></tr>
        @endforelse
        </tbody>
    </table>

    <div class="pagination">
        {{ $members->appends(['search' => request('search')])->links() }}
    </div>
</div>
@endsection
