<!-- resources/views/pengawas-ujian.blade.php -->
@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
  <h2 class="text-2xl font-semibold mb-4">Formulir Pengawas Ujian</h2>

  <!-- Form -->
  <form action="{{ route('submit-form') }}" method="POST">
    @csrf

    <!-- NRP and Name (read-only) -->
    <div class="mb-4">
      <label for="nrp" class="block text-sm font-medium text-gray-700">NRP</label>
      <input type="text" id="nrp" name="nrp" value="{{ auth()->user()->nrp }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-600" readonly>
    </div>

    <div class="mb-4">
      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
      <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-600" readonly>
    </div>

    <!-- Nomor KTP -->
    <div class="mb-4">
      <label for="nomor_ktp" class="block text-sm font-medium text-gray-700">Nomor KTP</label>
      <input type="text" id="nomor_ktp" name="nomor_ktp" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <!-- Nomor Rekening -->
    <div class="mb-4">
      <label for="nomor_rekening" class="block text-sm font-medium text-gray-700">Nomor Rekening</label>
      <input type="text" id="nomor_rekening" name="nomor_rekening" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <!-- Atas Nama Rekening -->
    <div class="mb-4">
      <label for="atas_nama_rekening" class="block text-sm font-medium text-gray-700">Atas Nama Rekening</label>
      <input type="text" id="atas_nama_rekening" name="atas_nama_rekening" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <!-- Bank Rekening (Dropdown) -->
    <div class="mb-4">
      <label for="bank_rekening" class="block text-sm font-medium text-gray-700">Bank Rekening</label>
      <select id="bank_rekening" name="bank_rekening" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
        <option value="BCA">BCA</option>
        <option value="Mandiri">Mandiri</option>
        <option value="BNI">BNI</option>
        <option value="Bank Mayapada">Bank Mayapada</option>
      </select>
    </div>

    <!-- Cabang Rekening -->
    <div class="mb-4">
      <label for="cabang_rekening" class="block text-sm font-medium text-gray-700">Cabang Rekening</label>
      <input type="text" id="cabang_rekening" name="cabang_rekening" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
      <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Submit</button>
    </div>
  </form>
@endsection
