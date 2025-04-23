<?php

namespace App\Http\Controllers\Setting_menu;

use App\Models\Identity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IdentityController extends Controller
{
    public function index()
    {
        $identity = Identity::first(); 
        return view('setting_menu.viewIdentity', compact('identity'));
    }

   

public function update(Request $request)
{
   
    $identity = Identity::first();

    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
        'meta' => 'nullable|string|max:255',
        'adress' => 'nullable',
        'link_map' => 'nullable',
        'phone' => 'nullable|string',
        'email' => 'nullable|email',
        'fb' => 'nullable|string',
        'ig' => 'nullable|string',
        'tiktok' => 'nullable|string',
        'yt' => 'nullable|string',
        'time_service' => 'nullable|string',
        'day_service' => 'nullable|string',
        'image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);


    if ($request->file('image1')) {
        // Hapus gambar lama jika ada
        if ($identity->image1 && Storage::disk('public')->exists($identity->image1)) {
            Storage::disk('public')->delete($identity->image1);
        }
        $validated['image1'] = $request->file('image1')->store('identity-image', 'public');
    }
    if ($request->file('image2')) {
        // Hapus gambar lama jika ada
        if ($identity->image2 && Storage::disk('public')->exists($identity->image2)) {
            Storage::disk('public')->delete($identity->image2);
        }
        $validated['image2'] = $request->file('image2')->store('identity-image', 'public');
    }

    // dd($request->all());

    $identity->update($validated);

    return redirect()->back()->with('success', 'Data identitas berhasil diperbarui.');
}       



}
