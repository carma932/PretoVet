<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Registrar nueva mascota
    </h2>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
                <form method="POST" action="{{ route('mascotas.store') }}" class="space-y-3">
                    @csrf

                    <input type="text"
                           name="nombre"
                           placeholder="Nombre"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <input type="text"
                           name="especie"
                           placeholder="Especie (Perro, Gato, etc.)"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <input type="text"
                           name="raza"
                           placeholder="Raza"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <select name="sexo"
                            class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Seleccionar sexo...</option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                    <select name="user_id"
                            class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Seleccionar dueño...</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">
                                {{ $usuario->name }} {{ $usuario->paterno }} {{ $usuario->materno }} — {{ $usuario->n_identificacion }}
                            </option>
                        @endforeach
                    </select>

                    <input type="date"
                           name="fecha_nacimiento"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                    <input type="text"
                           name="color"
                           placeholder="Color"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <input type="number" step="0.01"
                           name="peso"
                           placeholder="Peso (kg)"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <textarea name="condiciones_especiales"
                              placeholder="Condiciones especiales (opcional)"
                              class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition"></textarea>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('mascotas.index') }}"
                           class="px-5 py-2.5 rounded-lg bg-red-400 text-white hover:bg-red-600 transition">
                            Cancelar
                        </a>

                        <button type="submit"
                            class="px-6 py-2.5 rounded-lg bg-indigo-400 text-white hover:bg-indigo-600 transition">
                            Guardar mascota
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>