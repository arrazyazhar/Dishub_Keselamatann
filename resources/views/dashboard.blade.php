{{-- resources/views/dashboard/index.blade.php --}}
@extends('layouts.dashboard')

@section('content')
    <!-- Header -->
    <div class="flex justify-between items-center">
        <input type="text" placeholder="Silahkan Mencari" class="rounded-full border-gray-300 px-4 py-2 w-1/3">
        <div class="flex items-center space-x-2">
            <span class="font-bold">Arrazy Azhar</span>
            <span class="text-gray-500 text-sm">Admin</span>
        </div>
    </div>

    <!-- Dashboard Utama -->
    <h2 class="text-xl font-bold mt-6 mb-4">Dashboard Utama</h2>
    <div class="grid grid-cols-4 gap-4">
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="text-sm">Inspeksi Jalan</div>
            <div class="text-2xl font-bold">12</div>
            <div class="text-xs text-gray-500">20% dari bulan ini</div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="text-sm">PO Dinilai</div>
            <div class="text-2xl font-bold">20</div>
            <div class="text-xs text-gray-500">25% dari bulan ini</div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="text-sm">Laporan Publik</div>
            <div class="text-2xl font-bold">20</div>
            <div class="text-xs text-gray-500">25% dari bulan ini</div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="text-sm">Sosialisasi Anak</div>
            <div class="text-2xl font-bold">20</div>
            <div class="text-xs text-gray-500">25% dari bulan ini</div>
        </div>
    </div>

    <!-- Aksi Cepat -->
    <h2 class="text-xl font-bold mt-6 mb-4">Aksi Cepat</h2>
    <div class="flex space-x-4">
        <button class="px-4 py-2 bg-blue-700 text-white rounded-lg">Tambah Inspeksi</button>
        <button class="px-4 py-2 bg-blue-700 text-white rounded-lg">PO Dinilai</button>
        <button class="px-4 py-2 bg-blue-700 text-white rounded-lg">Laporan Publik</button>
        <button class="px-4 py-2 bg-blue-700 text-white rounded-lg">Sosialisasi Anak</button>
    </div>

    <!-- Jadwal Kegiatan + Laporan Terbaru -->
    <div class="grid grid-cols-2 gap-4 mt-6">
        <!-- Jadwal -->
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="font-bold mb-2">Jadwal Kegiatan</h3>
            <div class="space-y-2">
                <div class="p-2 bg-gray-100 rounded">Inspeksi Jalan - 11:00 s/d 12:00</div>
                <div class="p-2 bg-gray-100 rounded">Inspeksi Jalan - 08:00 s/d 09:00</div>
            </div>
        </div>

        <!-- Laporan -->
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="font-bold mb-2">Laporan Terbaru</h3>
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left border-b">
                        <th>No</th>
                        <th>Modul</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 8; $i++)
                        <tr class="border-b">
                            <td>{{ $i }}</td>
                            <td>Pelaporan</td>
                            <td>01/08/25</td>
                            <td class="text-yellow-600">Diproses</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
