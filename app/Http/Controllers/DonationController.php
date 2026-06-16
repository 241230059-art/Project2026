<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    // Halaman Home
    public function index()
    {
        return view('donasi.index');
    }

    // Form Donasi
    public function create($id)
    {
        $campaigns = [
            1 => 'Pendidikan',
            2 => 'Kesehatan',
            3 => 'Bencana'
        ];

        $campaign = $campaigns[$id] ?? 'Pendidikan';

        return view('donasi.create', compact('id', 'campaign'));
    }

    // Simpan Donasi
    public function store(Request $request)
    {
        $request->validate([
            'campaign_id' => 'required',
            'donor_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'message' => 'nullable|string',
        ]);

        try {

            Donation::create([
                'campaign_id' => $request->campaign_id,
                'donor_name' => $request->donor_name,
                'amount' => $request->amount,
                'message' => $request->message,
            ]);

            return redirect()->route('terimakasih');

        } catch (\Throwable $e) {

            return redirect('/donasi')
                ->with('error', 'Gagal mengirim donasi!');

        }
    }
}