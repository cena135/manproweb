<!-- resources/views/staff-dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Staff Dashboard')

@section('content')
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6">

    <!-- Welcome Message -->
    <div class="col-span-1 sm:col-span-2 lg:col-span-4 xl:col-span-4 mb-6">
    <h2 class="text-2xl mb-4">Welcome, {{ auth()->user()->name }}!</h2>
    <p>This is your staff dashboard.</p>
    </div>

    <!-- Card 1: Semester -->
    <div class="bg-white rounded-xl shadow p-6 col-span-1 lg:col-span-1 xl:col-span-1">
    <h2 class="text-lg font-semibold mb-2">Semester</h2>
    <p>Semester 2024/2025 2</p>
    </div>

    <!-- Card 2: Total SKS
    <div class="bg-white rounded-xl shadow p-6 col-span-1 lg:col-span-1 xl:col-span-1">
    <h2 class="text-lg font-semibold mb-2">Total SKS</h2>
    <p>20 SKS</p>
    </div> -->

    <!-- Card 3: Total Subjects -->
    <div class="bg-white rounded-xl shadow p-6 col-span-1 lg:col-span-1 xl:col-span-1">
    <h2 class="text-lg font-semibold mb-2">Subjects to Teach</h2>
    <p>5 Subjects</p>
    </div>

    <!-- Card 4: Minimum Attendance
    <div class="bg-white rounded-xl shadow p-6 col-span-1 lg:col-span-1 xl:col-span-1">
    <h2 class="text-lg font-semibold mb-2">Minimum Attendance</h2>
    <p>70%</p>
    </div> -->

    <!-- Staff Info Card -->
    <div
    class="bg-white rounded-xl shadow p-6 col-span-1 sm:col-span-2 lg:col-span-2 xl:col-span-2 flex justify-between items-center">

    <!-- Staff Details -->
    <div>
      <h2 class="text-lg font-semibold mb-2">Staff Information</h2>
      <p><strong>Name: John Staff</strong> </p>
      <p><strong>Staff Number: 0123456</strong> </p>
      <p><strong>Faculty: Industrial Technology</strong> </p>
      
    </div>

    <!-- Profile Picture on the right -->
    <div class="flex-shrink-0 ml-4">
      <img src="{{ asset('images/icontemplate.jpg') }}" alt="Profile Picture" class="w-50 h-40 object-cover border">
    </div>


  </div>



  <!-- Today's Schedule -->
  <div class="bg-white rounded-xl shadow p-6 col-span-1 sm:col-span-2 lg:col-span-2 xl:col-span-2">
    <h2 class="text-lg font-semibold mb-2">Schedule for Today</h2>
    <p><strong>Date:</strong> April 22, 2025</p>
    <ul class="list-disc ml-5 mt-2">
    <li>08:00 - 10:00: Algorithms</li>
    <li>13:00 - 15:00: Web Development</li>
    </ul>
  </div>

  <!-- Semester Subjects -->
  <div class="bg-white rounded-xl shadow p-6 col-span-1 sm:col-span-2 lg:col-span-2 xl:col-span-2">
    <h2 class="text-lg font-semibold mb-2">This Semester</h2>
    <ul class="space-y-2">
    <li>
      <p><strong>Deep Learning</strong></p>
    </li>
    <li>
      <p><strong>Web Development</strong></p>
    </li>
    <li>
      <p><strong>Databases</strong></p>
    </li>

    <li>
      <p><strong>Algorithms</strong></p>
    </li>

    <li>
      <p><strong>Programming</strong></p>
    </li>
    </ul>
  </div>
  </div>
@endsection