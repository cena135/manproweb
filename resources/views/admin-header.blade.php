<!-- resources/views/header.blade.php -->
<header class="bg-blue-200 text-gray-900 flex items-center justify-between p-4 shadow">
  <h1 class="text-lg font-semibold">Staff Admin Dashboard</h1>
  <!-- Hamburger Button -->
  <button id="menu-toggle" class="focus:outline-none">
    <!-- Hamburger Icon -->
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
  </button>
</header>

<!-- Navigation Menu -->
<nav id="menu" class="bg-blue-100 text-gray-900 hidden shadow">
  <ul class="flex flex-col">
    <li><a href="{{ route('staff-admin-dashboard') }}" class="block px-4 py-2 hover:bg-blue-200">Home</a></li>
    <li><a href="{{ route('admin-req') }}" class="block px-4 py-2 hover:bg-blue-200">Admin</a></li>
    
    <li>
      <form action="{{ route('logout') }}" method="POST" class="block">
        @csrf
        <button type="submit" class="w-full text-left px-4 py-2 hover:bg-blue-200">Logout</button>
      </form>
    </li>
  </ul>
</nav>

<!-- JavaScript to Toggle Menu -->
<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
  });
</script>
