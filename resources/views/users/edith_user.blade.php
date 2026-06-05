<x-app-layout>
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Actualizar datos del Usuario
        </h2>
   

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
<form method="POST" action="{{ route('users.update',$user->codigo) }}" class="space-y-3">
    @csrf
    @method('PUT')

<!-- Nombre -->
<input type="text"
       name="name"
       value="{{ $user->name }}"
       placeholder="nombre"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Apellido paterno -->
<input type="text"
       name="paterno"
       value="{{ $user->paterno }}"
       placeholder="apellido paterno"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Apellido materno -->
<input type="text"
       name="materno"
       value="{{ $user->materno }}"
       placeholder="apellido materno"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Email -->
<input type="email"
       name="email"
       value="{{ $user->email }}"
       placeholder="correo@ejemplo.com"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- Teléfono -->
<input type="text"
       name="telefono"
       value="{{ $user->telefono }}"
       placeholder="Telefono"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

<!-- CI -->
<input type="text"
       name="n_identificacion"
       value="{{ $user->n_identificacion }}"
       placeholder="Numero de identificacion"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">
       <!-- CI -->
<input type="text"
       name="direccion"
       value="{{ $user->direccion }}"
       placeholder="Direccion"
       class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Botones -->
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('users.index') }}"
                           class="px-5 py-2.5 rounded-lg bg-red-400 text-white hover:bg-red-600 transition">
                            Cancelar
                        </a>

                        <button type="submit"
                                class="px-6 py-2.5 rounded-lg bg-indigo-400 text-white hover:bg-indigo-600 transition">
                            Actualizar
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>