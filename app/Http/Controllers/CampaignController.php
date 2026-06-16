public function store(Request $request)
{
    $campaign = Campaign::create($request->all());

    // Simpan Relasi One-to-One (Rekening)
    $campaign->account()->create([
        'bank_name' => $request->bank_name,
        'account_number' => $request->account_number,
        'account_holder' => $request->account_holder,
    ]);

    // Simpan Relasi Many-to-Many (Kategori)
    $campaign->categories()->attach($request->categories);

    return redirect('/campaign')
        ->with('success', 'Data berhasil ditambahkan');
}