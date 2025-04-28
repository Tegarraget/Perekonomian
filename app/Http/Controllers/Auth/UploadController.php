<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Support\Facades\Log;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Starting file upload process.');

        try {
            $request->validate([
                'image_name' => 'required|string|max:255',
                'document' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            ]);

            Log::info('File validation passed.');

            $file = $request->file('document');
            $path = $file->store('public/documents');

            Log::info('File stored at: ' . $path);

            // Store the file information in the database
            Document::create([
                'file_name' => $request->image_name,
                'file_path' => $path,
                'uploaded_at' => now(),
            ]);

            Log::info('File information stored in database.');

            return redirect()->route('dashboard')->with('success', 'File uploaded successfully!');
        } catch (\Exception $e) {
            Log::error('Upload error: ' . $e->getMessage());
            return redirect()->route('dashboard')->withErrors(['upload' => 'An error occurred during upload. Please try again.']);
        }
    }

    public function destroy($id)
    {
        try {
            $document = Document::findOrFail($id);

            // Delete the file from storage
            Storage::delete($document->file_path);

            // Delete the record from the database
            $document->delete();

            return redirect()->route('dashboard')->with('success', 'File deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Delete error: ' . $e->getMessage());
            return redirect()->route('dashboard')->withErrors(['delete' => 'An error occurred during deletion. Please try again.']);
        }
    }
}
