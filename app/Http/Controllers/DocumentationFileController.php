<?php

namespace App\Http\Controllers;

use App\Models\DocumentationFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentationFileController extends Controller
{
    public function index()
    {
        $files = DocumentationFile::latest()->get();
        return view('documentation_files', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'attachment' => 'required|file|mimes:pdf,docx,png,jpg,jpeg|max:5120',
        ]);

        $file = $request->file('attachment');
        $extension = strtolower($file->getClientOriginalExtension());
        $originalName = $file->getClientOriginalName();
        $filename = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;
        $storedPath = $file->storeAs('dokumentasi', $filename, 'public');

        DocumentationFile::create([
            'title' => $request->input('title'),
            'file_name' => $originalName,
            'file_path' => $storedPath,
            'file_type' => $extension,
        ]);

        return redirect()->route('documentation.index')->with('success', 'File berhasil diunggah.');
    }

    public function download($id)
    {
        $file = DocumentationFile::findOrFail($id);

        if (!Storage::disk('public')->exists($file->file_path)) {
            return redirect()->route('documentation.index')->with('error', 'File tidak ditemukan.');
        }

        return Storage::disk('public')->download($file->file_path, $file->file_name);
    }
}
