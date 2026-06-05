<x-app-layout>
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar nuevo usuario
        </h2>
    

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
<form method="POST" action="{{ route('users.store') }}"  class="space-y-3">
    @csrf

                  <!-- Nombre -->
<input type="text"
       name="name"
       placeholder="Nombre"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Apellido paterno -->
<input type="text"
       name="paterno"
       placeholder="Apellido Paterno"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Apellido materno -->
<input type="text"
       name="materno"
       placeholder="Gómez"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Email -->
<input type="email"
       name="email"
       placeholder="correo@ejemplo.com"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Teléfono -->
<input type="text"
       name="telefono"
       placeholder="Teléfono"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- CI -->
<input type="text"
       name="n_identificacion"
       placeholder="Número de identificación"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">
       <!-- CI -->
<input type="text"
       name="direccion"
       placeholder="Dirección"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Botones -->
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('users.index') }}"
                           class="px-5 py-2.5 rounded-lg bg-red-400 text-white hover:bg-red-600 transition">
                            Cancelar
                        </a>

                        <button type="submit"
                            class="px-6 py-2.5 rounded-lg bg-indigo-400 text-white hover:bg-indigo-600 transition">
                            Guardar usuario
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
