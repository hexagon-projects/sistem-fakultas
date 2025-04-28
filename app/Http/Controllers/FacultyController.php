<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculty = Faculty::first();   
        return view('faculty.step1', compact('faculty'));
    }
    public function step2($id)
    {
        $faculty = Faculty::findOrFail($id);   
        return view('faculty.step2', compact('faculty'));
    }
    
    public function step3($id)
    {
        $faculty = Faculty::findOrFail($id);   
        return view('faculty.step3', compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'   => 'required|string|max:255',
            'akreditasi'   => 'required|string|max:255',
            'tagline'   => 'required|string|max:255',
            'instagram'   => 'required|string|max:255',
            'tiktok'   => 'required|string|max:255',
            'facebook'   => 'required|string|max:255',
            'youtube'   => 'required|string|max:255',
            'title1'   => 'required|string|max:255',
            'description1'   => 'required|string|max:255',
            'color1'   => 'required|string|max:255',
            'color2'   => 'required|string|max:255',
            'image1'   => 'nullable|mimes:jpg,jpeg,png,pdf,webp|max:2048',
            'yt_id'   => 'required|string|max:255',
            'status'   => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image1')) {
            $validate['image1'] = $request->file('image1')->store('faculty-image', 'public');
        }

        // Tambahkan default jika tidak diisi
        $validate['status'] = $request->input('status', 'active');

        $faculty = Faculty::create($validate); // Simpan instance-nya

        return redirect()->route('faculty.step2', $faculty->id)->with('success', "Faculty {$faculty->name} berhasil dibuat!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Ambil data Faculty berdasarkan ID
        $faculty = Faculty::findOrFail($id);

        // Validasi input
        $validate = $request->validate([
            'name'        => 'required|string|max:255',
            'akreditasi'  => 'required|string|max:255',
            'tagline'     => 'required|string|max:255',
            'instagram'   => 'required|string|max:255',
            'tiktok'      => 'required|string|max:255',
            'facebook'    => 'required|string|max:255',
            'youtube'     => 'required|string|max:255',
            'title1'      => 'required|string|max:255',
            'description1'=> 'required|string|max:255',
            'color1'      => 'required|string|max:255',
            'color2'      => 'required|string|max:255',
            'image1'      => 'nullable|mimes:jpg,jpeg,png,pdf,webp|max:2048',
            'yt_id'       => 'required|string|max:255',
            'status'      => 'nullable|string|max:255',
        ]);

        // Handle upload gambar jika ada
        if ($request->hasFile('image1')) {
            // Hapus file lama jika ada
            if ($faculty->image1 && Storage::disk('public')->exists($faculty->image1)) {
                Storage::disk('public')->delete($faculty->image1);
            }

            // Simpan file gambar baru
            $validate['image1'] = $request->file('image1')->store('faculty-image', 'public');
        }

        // Tambahkan default jika status tidak diisi
        $validate['status'] = $request->input('status', 'active');

        // Update data faculty
        $faculty->update($validate);

        // Redirect ke halaman berikutnya atau halaman yang sesuai
        return redirect()->route('faculty.step2', $faculty->id)->with('success', "Faculty {$faculty->name} berhasil diperbarui!");
    }

    public function step2Update(Request $request, string $id)
    {
        $faculty = Faculty::findOrFail($id); // Ambil data berdasarkan ID

        $validate = $request->validate([
            'statistik1'         => 'required|string|max:255',
            'statistik2'   => 'required|string|max:255',
            'statistik3'      => 'required|string|max:255',
            'statistik4'    => 'required|string|max:255',
            'title2'       => 'required|string|max:255',
            'title3'     => 'required|string|max:255',
            'description2'      => 'required|string',
            'description3'       => 'required|string',
            'image2'       => 'nullable|mimes:jpg,jpeg,png,pdf,webp|max:2048',
            'image3'       => 'nullable|mimes:jpg,jpeg,png,pdf,webp|max:2048',
        ]);

        // Jika user upload gambar baru
        if ($request->hasFile('image2')) {
            // Hapus gambar lama jika ada
            if ($faculty->image2 && Storage::disk('public')->exists($faculty->image2)) {
                Storage::disk('public')->delete($faculty->image2);
            }

            // Simpan gambar baru
            $validate['image2'] = $request->file('image2')->store('faculty-image', 'public');
        }
        // Jika user upload gambar baru
        if ($request->hasFile('image3')) {
            // Hapus gambar lama jika ada
            if ($faculty->image3 && Storage::disk('public')->exists($faculty->image3)) {
                Storage::disk('public')->delete($faculty->image3);
            }

            // Simpan gambar baru
            $validate['image3'] = $request->file('image3')->store('departement-image', 'public');
        }

        // Simpan perubahan
        $faculty->update($validate);

        return redirect()->route('faculty.step3', $faculty->id)->with('success', "Departement {$faculty->name} berhasil diperbarui!");
    }
    
    public function step3Update(Request $request, string $id)
    {
        $faculty = Faculty::findOrFail($id); // Ambil data berdasarkan ID

        $validate = $request->validate([
            'link1'         => 'required|string|max:255',
            'link2'   => 'required|string|max:255',
            'link3'      => 'required|string|max:255',
            'link4'    => 'required|string|max:255',
            'title4'     => 'required|string|max:255',
            'address'     => 'required|string',
            'map'     => 'required|string',
            'description4'      => 'required|string',
            'image4'       => 'nullable|mimes:jpg,jpeg,png,pdf,webp|max:2048',
        ]);

        // Jika user upload gambar baru
        if ($request->hasFile('image4')) {
            // Hapus gambar lama jika ada
            if ($faculty->image4 && Storage::disk('public')->exists($faculty->image4)) {
                Storage::disk('public')->delete($faculty->image4);
            }

            // Simpan gambar baru
            $validate['image4'] = $request->file('image4')->store('faculty-image', 'public');
        }

        // Simpan perubahan
        $faculty->update($validate);

        return redirect()->route('faculty.index', $faculty->id)->with('success', "Departement {$faculty->name} berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
