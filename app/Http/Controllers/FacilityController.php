<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Departement;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $facilitys = Facility::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('subtitle', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString(); // biar query search tetap ada saat ganti halaman

        return view('fasilitas.index', compact('facilitys', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        return view('fasilitas.create', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_departement' => 'nullable|exists:departements,id',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'home' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'yt' => 'required|string|max:255',
        ]);

        // Simpan file gambar ke storage
        $imagePath = $request->file('image')->store('facilities', 'public');

        Facility::create([
            'id_departement' => $request->id_departement,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'home' => $request->home,
            'image' => $imagePath,
            'yt' => $request->yt,
        ]);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan.');
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
        $fasilitas = Facility::findOrFail($id);
        $departements = Departement::all();
        return view('fasilitas.edit', compact('fasilitas', 'departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_departement' => 'nullable|exists:departements,id',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'home' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'yt' => 'required|string|max:255',
        ]);
    
        $facility = Facility::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('facilities', 'public');
    
            if ($facility->image && Storage::disk('public')->exists($facility->image)) {
                Storage::disk('public')->delete($facility->image);
            }
        } else {
            $imagePath = $facility->image;
        }
    
        $facility->update([
            'id_departement' => $request->id_departement,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'home' => $request->home,
            'image' => $imagePath,
            'yt' => $request->yt,
        ]);
    
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Facility::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if ($fasilitas->image && Storage::disk('public')->exists($fasilitas->image)) {
            Storage::disk('public')->delete($fasilitas->image);
        }

        $fasilitas->delete();

        return redirect()->back()->with('success', 'Data fasilitas berhasil dihapus.');
    }
}
