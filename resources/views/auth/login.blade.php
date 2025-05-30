<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - MyApp</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex bg-gray-100">

  <!-- Left side image -->
  <div class="w-1/2 hidden md:block">
    <img src="{{ asset('images/login.png') }}" alt="Login Visual" class="w-full h-full object-cover" />

  </div>

  <!-- Right side login form -->
  <div class="w-full md:w-1/2 flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white p-8 shadow-lg rounded-xl">
      <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Welcome Student and Staff</h2>

      <!-- Display Validation Errors -->
      @if ($errors->any())
      <div class="bg-red-200 p-4 mb-4 rounded-md text-red-800">
      <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
    @endif

      <form method="POST" action="/login" class="space-y-4">
        @csrf
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" placeholder="nrp@john.petra.ac.id"
            class="mt-1 w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" required
            value="{{ old('email') }}">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password"
            class="mt-1 w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
          Sign In
        </button>
      </form>

      <div class="text-sm text-center mt-4 text-gray-600">
        <a href="#" class="hover:underline text-blue-600">Forgot your password?</a><br>
        <a href="#" class="hover:underline text-blue-600">Not a student/staff?</a>
      </div>

      <div class="text-center mt-6 text-gray-400 text-xs">
        &copy; 2025 MyApp. Version 1.0
      </div>
    </div>
  </div>

</body>

</html>