<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Legal_document;
use Illuminate\Http\Request;

class LegalDocumentController extends Controller
{
    public function index(Request $request)
    {
           $search = $request->input('search');
     
           $legalDocuments = Legal_document::query()
           ->when($search, function ($query, $search) {
               $query->where('name', 'like', "%{$search}%")
                   ->orWhere('title', 'like', "%{$search}%");
           })
           ->paginate(2)
           ->withQueryString(); // biar query search tetap ada saat ganti halaman

       return view('LegalDocument.viewLegalDocument', compact('legalDocuments', 'search'));
    }
}
