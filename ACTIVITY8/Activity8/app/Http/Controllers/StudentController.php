<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\returnArgument;


class StudentController extends Controller
{
    public function insertform()
    {
        return view("stud_create");
    }

    public function insert(Request $request)
    {
        $name = $request->input('stud_name');
        DB::insert('insert into student (name) values (?)', [$name]);
        return redirect('read')->with('success', 'Inserted Sucessfully');
    }

    public function read()
    {
        $data = DB::select('select * from student order by id');
        return view('stud_view', compact('data'));
    }

    public function delete($id)
    {
        DB::delete('delete from student where id =?', [$id]);
        echo "deleted";
        return redirect('read');

    }
    public function updateStudent(Request $request, $id)
    {
        $editName = DB::select('select * from student where id =?', [$id]);
        return view('stud_update', compact('editName', 'id'));
    }
    public function update(Request $request, $id)
    {
        $name = $request->input('stud_name');
        DB::update('update student set name = ? where id = ?', [$name, $id]);
        return redirect('read')->with('success', 'Data Updated Successfully');
    }
}
