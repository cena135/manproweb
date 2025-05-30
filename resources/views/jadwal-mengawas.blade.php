@extends('layouts.app')

@section('title', 'Jadwal Mengawas Anda')

@section('content')
    <div class="container mx-auto p-6">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold">Jadwal Mengawas Anda</h2>
            <p class="text-sm text-gray-600">Berikut adalah jadwal ujian yang Anda awasi.</p>
        </div>

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
                            <td class="px-4 py-2 text-sm text-gray-800">
                                @foreach($schedule->pengawas as $pengawas)
                                    {{ $pengawas->name }}@if(!$loop->last), @endif
                                @endforeach
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center text-gray-500">Anda tidak memiliki jadwal mengawas.</td>
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
