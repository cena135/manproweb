<!-- resources/views/admin/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Staff Dashboard')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
  <div class="flex flex-col min-h-screen">
    <!-- Include Header -->
    @include('admin-header')

    <!-- Main Content -->
    <main class="flex-1 p-6">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-200 text-gray-900 p-4 mt-6">
      <div class="flex justify-between items-center">
        <p class="text-sm">&copy; 2025 Petra Christian University. All rights reserved.</p>
      </div>
    </footer>
  </div>
</body>
</html>
