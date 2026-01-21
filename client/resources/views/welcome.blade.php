<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- TOP BAR -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-200/50 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center shadow-md">
                        <i class="fas fa-rocket text-white text-lg"></i>
                    </div>
                    <div class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        {{ config('app.name', 'Laravel') }}
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="flex items-center space-x-3">
                    @auth
                        <div class="flex items-center space-x-3">
                            <a href="{{ url('/dashboard') }}" 
                               class="flex items-center space-x-2 text-gray-600 hover:text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50 transition-all duration-300">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="font-medium">Dashboard</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                        class="flex items-center space-x-2 text-gray-600 hover:text-red-600 px-4 py-2 rounded-lg hover:bg-red-50 transition-all duration-300">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="font-medium">Logout</span>
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}" 
                               class="flex items-center space-x-2 text-gray-600 hover:text-blue-600 px-5 py-2.5 rounded-lg hover:bg-blue-50 transition-all duration-300 font-medium">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Sign In</span>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" 
                                   class="bg-gradient-to-r from-blue-500 to-purple-600 text-white hover:from-blue-600 hover:to-purple-700 px-6 py-2.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 font-medium flex items-center space-x-2">
                                    <i class="fas fa-user-plus"></i>
                                    <span>Get Started</span>
                                </a>
                            @endif
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- Hero Icon -->
                <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-xl mx-auto mb-8">
                    <i class="fas fa-star text-white text-3xl"></i>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Welcome to 
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </h1>
                
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed">
                    Build amazing applications faster than ever. Our platform provides everything you need to launch your next big idea.
                </p>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto mb-16">
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="text-blue-600 text-3xl mb-3">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Lightning Fast</h3>
                        <p class="text-gray-600">Optimized for speed and performance</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="text-purple-600 text-3xl mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Secure & Reliable</h3>
                        <p class="text-gray-600">Enterprise-grade security features</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="text-green-600 text-3xl mb-3">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Developer Friendly</h3>
                        <p class="text-gray-600">Clean APIs and documentation</p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                @guest
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('login') }}" 
                       class="bg-white text-gray-800 border-2 border-gray-200 hover:border-blue-500 hover:text-blue-600 px-8 py-4 rounded-xl font-semibold text-lg shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-center space-x-3">
                        <i class="fas fa-play-circle"></i>
                        <span>Start Building</span>
                    </a>
                    <a href="{{ route('register') }}" 
                       class="bg-gradient-to-r from-blue-600 to-purple-600 text-white hover:from-blue-700 hover:to-purple-700 px-8 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center space-x-3">
                        <i class="fas fa-rocket"></i>
                        <span>Launch Project</span>
                    </a>
                </div>
                @endguest
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-500">
                <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                <div class="mt-4 flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-blue-600">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-800">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-pink-600">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>