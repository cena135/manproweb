@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
    <div class="container mx-auto p-6">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold">Cari Jadwal Mengawas</h2>
            <p class="text-sm text-gray-600">Cari jadwal ujian yang Anda awasi berdasarkan mata kuliah atau tanggal.</p>
        </div>

        <!-- Search Form
        <form method="GET" action="{{ route('cari-jadwal-mengawas') }}" class="mb-4">
            <div class="flex gap-4 items-center">
                <input type="text" name="mata_kuliah" placeholder="Mata Kuliah" class="border rounded-lg px-4 py-2 w-1/3" value="{{ request('mata_kuliah') }}">
                <input type="date" name="tanggal" class="border rounded-lg px-4 py-2 w-1/4" value="{{ request('tanggal') }}">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Cari</button>
            </div>
        </form> -->

        <!-- Results Table -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Hari/Tanggal</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Waktu</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Mata Kuliah</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Ruangan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Pengawas</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Register</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules as $schedule)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">
                                {{ \Carbon\Carbon::parse($schedule->tanggal)->translatedFormat('l / d F Y') }}
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $schedule->waktu }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $schedule->mata_kuliah }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $schedule->ruangan }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $schedule->pengawas_display }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">
                                <form method="POST" action="{{ route('register-overseer', $schedule->id) }}">
                                    @csrf
                                    <button type="submit"
                                        class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">
                                        Daftar
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center text-gray-500">Tidak ada jadwal ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4 flex justify-between items-center">
                {{ $schedules->links() }}
            </div>
        </div>
    </div>
@endsection