<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Koral - Create Amazing Websites</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-sans">

  <!-- Navigation -->
  <nav class="absolute top-0 left-0 right-0 z-50 px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 bg-gradient-to-r from-orange-400 to-pink-500 rounded-lg flex items-center justify-center">
          <span class="text-white font-bold text-lg">K</span>
        </div>
        <span class="text-white text-xl font-bold">oral</span>
      </div>

      <!-- Navigation Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#" class="text-white nav-link font-medium">HOME</a>
        <a href="#" class="text-white nav-link font-medium">PAGES</a>
        <a href="#" class="text-white nav-link font-medium">PORTFOLIOS</a>
        <a href="#" class="text-white nav-link font-medium">HEADERS</a>
        <a href="#" class="text-white nav-link font-medium">ELEMENTS</a>
        <a href="#" class="text-white nav-link font-medium">BLOG</a>
      </div>

      <!-- Right side icons -->
      <div class="flex items-center space-x-4">
        <i class="fas fa-search text-white cursor-pointer"></i>
        <div class="relative">
          <i class="fas fa-shopping-cart text-white cursor-pointer"></i>
          <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
        </div>
        <i class="fas fa-bars text-white cursor-pointer md:hidden"></i>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-bg h-96 md:min-h-[600px] flex items-center justify-center relative overflow-hidden">
    <div class="absolute inset-0">
      <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-20 blur-3xl animate-pulse"></div>
      <div class="absolute bottom-20 right-20 w-80 h-80 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-20 blur-3xl animate-pulse delay-1000"></div>
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-pink-400 to-orange-400 rounded-full opacity-10 blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
      <button class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white">
        <i class="fas fa-chevron-left text-2xl"></i>
      </button>
      <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white">
        <i class="fas fa-chevron-right text-2xl"></i>
      </button>

      <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
          Create Amazing Websites<br />
          <span class="bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">With Amazing Graphics</span>
        </h1>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto leading-relaxed">
          Proin laoreet scelerisque sagittis. Aliquam molestie faucibus semper. Mauris pretium, urna quis venenatis condimentum.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
          <button class="btn-primary px-8 py-4 rounded-full text-white font-semibold text-lg shadow-lg">EXPLORE MORE</button>
          <button class="btn-secondary px-8 py-4 rounded-full text-white font-semibold text-lg">BUY NOW</button>
        </div>
      </div>

      <div class="absolute left-1/2 transform -translate-x-1/2 flex space-x-3" style="bottom: -60px;">
        <div class="w-3 h-3 bg-white rounded-full opacity-50"></div>
        <div class="w-3 h-3 bg-white rounded-full"></div>
        <div class="w-3 h-3 bg-white rounded-full opacity-50"></div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-10 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">
        <!-- Feature Cards -->
        <div class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg">
          <div class="w-16 h-16 bg-gradient-to-r from-red-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-laptop text-white text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Responsive Design</h3>
          <p class="text-gray-600 leading-relaxed">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>

        <div class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg">
          <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-paint-brush text-white text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Visual Page Builder</h3>
          <p class="text-gray-600 leading-relaxed">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>

        <div class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg">
          <div class="w-16 h-16 bg-gradient-to-r from-purple-400 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-cog text-white text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Strong Admin Panel</h3>
          <p class="text-gray-600 leading-relaxed">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
