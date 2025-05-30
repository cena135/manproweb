@extends('layouts.app')

@section('title', 'Daftar Pengawas Ujian')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-semibold mb-4">Formulir Pendaftaran Pengawas Ujian</h2>
    <form action="{{ route('register-overseer.store') }}" method="POST" class="bg-white p-4 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="reason" class="block text-sm font-medium text-gray-700">Alasan Mendaftar</label>
            <textarea name="reason" id="reason" class="w-full border rounded px-4 py-2 mt-1" rows="4" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim Pendaftaran</button>
    </form>
</div>
@endsection
