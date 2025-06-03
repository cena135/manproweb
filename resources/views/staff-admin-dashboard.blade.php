<!-- resources/views/staff-admin-dashboard.blade.php -->
@extends('admin.app')

@section('title', 'Staff Admin Dashboard')

@section('content')
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6">

    <!-- Welcome Message -->
    <div class="col-span-1 sm:col-span-2 lg:col-span-4 xl:col-span-4 mb-6">
      <h2 class="text-2xl mb-4">Welcome, {{ auth()->user()->name }} !</h2>
      <p>This is your staff admin dashboard.</p>
    </div>

    <!-- Staff Admin Info Card -->
    <div class="bg-white rounded-xl shadow p-6 col-span-1 sm:col-span-2 lg:col-span-2 xl:col-span-2 flex justify-between items-center">
      <!-- Staff Details -->
      <div>
        <h2 class="text-lg font-semibold mb-2">Admin Information</h2>
        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Role:</strong> Staff Admin</p>
      </div>
      <!-- Profile Picture -->
      <div class="flex-shrink-0 ml-4">
        <img src="{{ asset('images/icontemplate.jpg') }}" alt="Profile Picture" class="w-50 h-40 object-cover border">
      </div>
    </div>

  </div>
@endsection
