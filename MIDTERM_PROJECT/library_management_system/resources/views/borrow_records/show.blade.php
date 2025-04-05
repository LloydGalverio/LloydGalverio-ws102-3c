@extends('layout')

@section('content')
<div class="container">
    <h2>Borrow Record Details</h2>

    <div style="margin-top: 30px;">
        <p><strong>ID:</strong> {{ $borrowRecord->id }}</p>
        <p><strong>Member:</strong> {{ $borrowRecord->member->name ?? 'N/A' }}</p>
        <p><strong>Book:</strong> {{ $borrowRecord->book->title ?? 'N/A' }}</p>
        <p><strong>Borrowed At:</strong> {{ $borrowRecord->borrowed_at }}</p>
        <p><strong>Due Date:</strong> {{ $borrowRecord->due_date }}</p>
        <p><strong>Returned At:</strong> {{ $borrowRecord->returned_at ?? 'Not Returned' }}</p>
    </div>

    <div style="margin-top: 30px;">
        <a href="{{ route('borrow_records.index') }}" class="search-form a">Back to List</a>
        <a href="{{ route('borrow_records.edit', $borrowRecord->id) }}" class="edit-btn" style="margin-left: 10px;">Edit</a>
    </div>
</div>
@endsection
