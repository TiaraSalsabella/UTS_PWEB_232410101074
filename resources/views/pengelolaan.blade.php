@extends('layouts.app')
@section('title', 'Pengelolaan')

@section('contents')
<div class="p-4 bg-blue-50 min-h-screen">
    <h1 class="text-xl font-semibold text-blue-700 mb-3">Pengelolaan</h1>
    <p class="mb-4 text-sm text-gray-700">Daftar produk ikan yang tersedia saat ini:</p>

    <div class="overflow-x-auto">
        <table class="w-full bg-white rounded shadow text-sm">
            <thead class="bg-blue-100 text-blue-800">
                <tr>
                    <th class="text-left px-4 py-2">Nama</th>
                    <th class="text-left px-4 py-2">Harga</th>
                    <th class="text-left px-4 py-2">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produkIkan as $produk)
                    <tr class="border-b hover:bg-blue-50">
                        <td class="px-4 py-2">{{ $produk['nama'] }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($produk['harga'], 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $produk['stok'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

