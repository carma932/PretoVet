<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Veterinaria') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen">
    <!-- Navbar -->
    <nav class="relative bg-blue-800 shadow-lg after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <!-- Logo -->
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ asset('imgs/logo.jpeg') }}" alt="Logo Veterinaria" class="h-10 w-auto rounded-full shadow-md" />
                    </div>
                    <!-- Desktop menu -->
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" aria-current="page" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-600 hover:text-white transition">Inicio</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-600 hover:text-white transition">Tienda</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-600 hover:text-white transition">Contactos</a>
                        </div>
                    </div>
                </div>
                <!-- Auth buttons -->
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <a href="{{ route('login') }}" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 transition mx-1">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 transition mx-1">Crear Cuenta</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 px-4">
        <div class="mx-auto max-w-7xl text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Bienvenido a Nuestra Veterinaria</h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Cuidamos de tus mascotas con amor y profesionalismo. Servicios de calidad para perros, gatos y más.</p>
            <a href="#" class="inline-block bg-white text-blue-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">Agendar Cita</a>
        </div>
        <!-- Decorative element -->
        <div class="absolute inset-0 bg-black/10"></div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 px-4">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('imgs/veterinaria1.jpg') }}" alt="Servicio 1" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Consultas Veterinarias</h3>
                        <p class="text-gray-600 mt-2">Atención médica completa para tus mascotas.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('imgs/veterinaria2.jpg') }}" alt="Servicio 2" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Cirugías y Tratamientos</h3>
                        <p class="text-gray-600 mt-2">Procedimientos avanzados con cuidado.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('imgs/veterinaria3.jpg') }}" alt="Servicio 3" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Tienda de Productos</h3>
                        <p class="text-gray-600 mt-2">Todo lo que necesitas para tus amigos peludos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Images Section -->
    <section class="py-16 px-4 bg-gray-100">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Explora Más</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('imgs/farmacia.jpg') }}" alt="Farmacia" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Nuestra Farmacia</h3>
                        <p class="text-gray-600 mt-2">Medicamentos y productos de salud para tus mascotas.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('imgs/tienda.jpeg') }}" alt="Tienda" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Tienda en Línea</h3>
                        <p class="text-gray-600 mt-2">Compra accesorios y alimentos desde casa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 px-4">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Ponte en Contacto</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Información de Contacto</h3>
                    <p class="text-gray-600 mb-2"><strong>Dirección:</strong> Calle Ficticia 123, Ciudad, País</p>
                    <p class="text-gray-600 mb-2"><strong>Teléfono:</strong> +1 (123) 456-7890</p>
                    <p class="text-gray-600 mb-2"><strong>Email:</strong> info@veterinaria.com</p>
                    <p class="text-gray-600">Horarios: Lunes a Viernes, 9:00 AM - 6:00 PM</p>
                </div>
                <div>
                    <form class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre</label>
                            <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Mensaje</label>
                            <textarea id="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 px-4">
        <div class="mx-auto max-w-7xl text-center">
            <p>&copy; 2026 Veterinaria. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>