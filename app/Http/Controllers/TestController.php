<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Fetch all entries from 'tests' table
        $tests = DB::table('tests')->orderBy('created_at', 'desc')->get();

        // Pass data to the welcome view
        return view('welcome', compact('tests'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'input_text' => 'required|string|max:255',
        ]);

        $input = $request->input_text;

        // Save to 'tests' table
        DB::table('tests')->insert([
            'input_text' => $input,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/')->with('success', 'Input saved: ' . $input);
    }
}