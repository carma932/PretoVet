<x-guest-layout>
    <div
        class="min-h-screen flex items-center justify-center bg-cover bg-center px-4"
        style="background-image: url('{{ asset('imgs/fondologin.png') }}');"
    >

        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-gray-900/"></div>

        <!-- CONTENIDO -->
        <div class="relative z-10 w-full max-w-md rounded-xl bg-blue-900/20 ring-1 ring-white/10">

            <div class="px-8 pt-8 text-center">
                <img
                    src="{{ asset('imgs/logo.jpeg') }}"
                    alt="Logo"
                    class="mx-auto mt-4 mb-4 h-24 w-auto"
                >
                <h2 class="text-2xl font-bold text-white">Iniciar sesión</h2>
                <p class="text-sm text-gray-400">Accede a tu cuenta</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="px-8 py-6">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm text-gray-300 mb-1">Correo</label>
                    <input name="email" type="email" required autofocus
                        class="w-full rounded-md bg-gray-900/60 border border-white/10 px-3 py-2 text-white focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-300 mb-1">Contraseña</label>
                    <input name="password" type="password" required
                        class="w-full rounded-md bg-gray-900/60 border border-white/10 px-3 py-2 text-white focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="flex items-center justify-between mb-6 text-sm">
                    <label class="flex items-center text-gray-400">
                        <input type="checkbox" name="remember"
                            class="mr-2 rounded bg-gray-900 border-white/10 text-indigo-500">
                        Recordarme
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-indigo-400 hover:text-indigo-300"
                           href="{{ route('password.request') }}">
                           ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <button
                    class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-2 rounded-md">
                    Entrar
                </button>
            </form>

        </div>
    </div>
</x-guest-layout>
