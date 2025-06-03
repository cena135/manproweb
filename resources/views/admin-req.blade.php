@extends('admin.app')

@section('title', 'Kelola Jadwal Mengawas')

@section('content')
    <div class="container mx-auto p-6">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold">Kelola Jadwal Mengawas</h2>
            <p class="text-sm text-gray-600">Berikut adalah daftar semua jadwal ujian beserta pengawas yang ditugaskan.</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Hari/Tanggal</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Waktu</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Mata Kuliah</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Ruangan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Pengawas</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules as $schedule)
                        <tr class="border-t">
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
                            <td class="px-4 py-2 text-sm text-center space-x-2">
                                @if($schedule->status !== 'accepted')
                                    <form action="{{ route('staff.invigilation.accept', $schedule->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="text-blue-600 hover:underline">Terima</button>
                                    </form>
                                @endif

                                <a href="{{ route('staff.invigilation.edit', $schedule->id) }}" class="text-yellow-500 hover:underline">Edit</a>

                                <form action="{{ route('staff.invigilation.destroy', $schedule->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-2 text-center text-gray-500">Tidak ada data jadwal mengawas.</td>
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
