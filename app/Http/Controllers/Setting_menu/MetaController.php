<?php

namespace App\Http\Controllers\Setting_menu;

use App\Http\Controllers\Controller;
use App\Models\Analytic;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function index()
    {
        $analytic = Analytic::first(); 
        return view('setting_menu.viewMeta', compact('analytic'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $meta = Analytic::first();
    
        $validated = $request->validate([
            'meta' => 'nullable|string|max:255',
        ]);

        $meta->update($validated);

        return redirect()->back()->with('success', 'Data Meta berhasil diperbarui.');
    }   
    
    public function google()
    {
        $google = Analytic::first(); 
        return view('setting_menu.viewGoogle', compact('google'));
    }

    public function googleUpdate(Request $request)
    {
        // dd($request->all());
        $google = Analytic::first();
    
        $validated = $request->validate([
            'google' => 'nullable|string|max:255',
        ]);

        $google->update($validated);

        return redirect()->back()->with('success', 'Data google berhasil diperbarui.');
    }  

    public function chat()
    {
        $chat = Analytic::first(); 
        return view('setting_menu.viewChat', compact('chat'));
    }

    public function chatUpdate(Request $request)
    {
        // dd($request->all());
        $chat = Analytic::first();
    
        $validated = $request->validate([
            'chat' => 'nullable|string|max:255',
        ]);

        $chat->update($validated);

        return redirect()->back()->with('success', 'Data Welcome Chat berhasil diperbarui.');
    }  
    
}
