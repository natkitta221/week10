<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blog2()
    {
        $blogs = DB::table('blogs')->get();
        return view('blog2', compact('blogs'));
    }

    function about2()
    {
        $name = 'Natkrita Kingchaiyaphum';
        $date = '6 กรกฎาคม 2026';

        return view('about2', compact('name', 'date'));
    }

    // แสดงฟอร์มเขียนบทความ
    function create()
    {
        return view('from');
    }

    // บันทึกบทความ
    function insert(Request $request)
    {
        // ตรวจสอบข้อมูล
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ], [
            'title.required' => 'กรุณากรอกชื่อบทความ',
            'title.max' => 'ชื่อบทความต้องไม่เกิน 255 ตัวอักษร',
            'content.required' => 'กรุณากรอกเนื้อหาบทความ',
        ]);

        // บันทึกข้อมูลลงตาราง blogs
        DB::table('blogs')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/blog2')->with('success', 'บันทึกบทความเรียบร้อยแล้ว');
    }

    // ลบบทความ
    function delete($id)
    {
        DB::table('blogs')
            ->where('id', $id)
            ->delete();

        return redirect('/blog2');
    }
}