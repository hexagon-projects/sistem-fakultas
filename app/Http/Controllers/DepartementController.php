<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $departements = Departement::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('tagline', 'like', "%{$search}%");
            })
            ->paginate(2)
            ->withQueryString(); // biar query search tetap ada saat ganti halaman

        return view('departement.index', compact('departements', 'search'));
    }
    
    public function step2($id)
    {
        $departement = Departement::findOrFail($id);   
        return view('departement.step2', compact('departement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departement.create');
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
            $validate['image1'] = $request->file('image1')->store('departement-image', 'public');
        }

        // Tambahkan default jika tidak diisi
        $validate['status'] = $request->input('status', 'active');
        $validate['id_profil_fakultas'] = '1';

        $departement = Departement::create($validate); // Simpan instance-nya

        return redirect()->route('departement.step2', $departement->id)->with('success', "Departement <b>{$departement->name}</b> berhasil dibuat!");
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
