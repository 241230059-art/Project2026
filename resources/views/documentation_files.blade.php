@extends('layouts.app')

@section('title', 'Dokumentasi')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="bg-white shadow rounded-lg p-6">
            @if (session('success'))
                <div class="mb-4 rounded border border-green-200 bg-green-50 px-4 py-3 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 rounded border border-red-200 bg-red-50 px-4 py-3 text-red-800">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 rounded border border-red-200 bg-red-50 px-4 py-3 text-red-800">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1 class="text-2xl font-semibold mb-4">Unggah Dokumentasi</h1>

            <form action="{{ route('documentation.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Dokumen / Gambar</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 focus:border-pink-500 focus:outline-none" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Pilih File (PDF, DOCX, PNG, JPG. Maks. 5MB)</label>
                    <input type="file" name="attachment" accept=".pdf,.docx,.png,.jpg,.jpeg" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 focus:border-pink-500 focus:outline-none" required>
                </div>

                <button type="submit" class="rounded bg-pink-600 px-4 py-2 text-white hover:bg-pink-700">Unggah File</button>
            </form>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Daftar File Dokumentasi</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">No</th>
                            <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Judul</th>
                            <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Preview</th>
                            <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Tipe File</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse ($files as $index => $file)
                            @php
                                $isImage = in_array(strtolower($file->file_type), ['png', 'jpg', 'jpeg']);
                                $fileUrl = asset('storage/' . $file->file_path);
                            @endphp
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $index + 1 }}</td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $file->title }}</td>
                                <td class="px-4 py-3 text-sm text-gray-700">
                                    @if ($isImage)
                                        <a href="{{ $fileUrl }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ $fileUrl }}" alt="{{ $file->title }}" class="h-20 w-20 rounded object-cover border border-gray-200" />
                                        </a>
                                    @else
                                        <a href="{{ route('documentation.download', $file->id) }}" class="inline-flex items-center rounded bg-gray-100 px-3 py-2 text-sm text-gray-700 hover:bg-gray-200">
                                            Preview File
                                        </a>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ strtoupper($file->file_type) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-500">Belum ada file dokumentasi yang diunggah.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection