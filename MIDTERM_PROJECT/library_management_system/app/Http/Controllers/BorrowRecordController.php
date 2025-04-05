<?php

namespace App\Http\Controllers;

use App\Models\BorrowRecord;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class BorrowRecordController extends Controller
{
    public function index()
    {

        
        $borrowRecords = BorrowRecord::with('book', 'member')->latest()->paginate(10);
        return view('borrow_records.index', compact('borrowRecords'));
    }

    public function create()
    {
        $books = Book::all();
        $members = Member::all();
        return view('borrow_records.create', compact('books', 'members'));
    }

    public function store(Request $request)
    {
        $request->validate([    
            'book_id' => 'required',
            'member_id' => 'required',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date',
        ]);
    
        BorrowRecord::create($request->all());
        return redirect()->route('borrow_records.index')->with('success', 'Borrow record added successfully.');
    }
    

    public function edit(BorrowRecord $borrow_record)
    {
        $books = Book::all();
        $members = Member::all();
        return view('borrow_records.edit', compact('borrow_record', 'books', 'members'));
    }

    public function update(Request $request, BorrowRecord $borrow_record)
    {
        $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date',
        ]);

        $borrow_record->update($request->all());
        return redirect()->route('borrow_records.index')->with('success', 'Borrow record updated successfully.');
    }

    public function destroy(BorrowRecord $borrow_record)
    {
        $borrow_record->delete();
        return redirect()->route('borrow_records.index')->with('success', 'Borrow record deleted.');
    }
}
