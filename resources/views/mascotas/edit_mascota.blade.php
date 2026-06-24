<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Actualizar datos de la mascota
    </h2>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
                <form method="POST" action="{{ route('mascotas.update', $mascota->codigo) }}" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <!-- Nombre -->
                    <input type="text"
                           name="nombre"
                           value="{{ $mascota->nombre }}"
                           placeholder="Nombre"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Especie -->
                    <input type="text"
                           name="especie"
                           value="{{ $mascota->especie }}"
                           placeholder="Especie"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Raza -->
                    <input type="text"
                           name="raza"
                           value="{{ $mascota->raza }}"
                           placeholder="Raza"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Sexo -->
                    <select name="sexo"
                            class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="Macho" {{ $mascota->sexo == 'Macho' ? 'selected' : '' }}>Macho</option>
                        <option value="Hembra" {{ $mascota->sexo == 'Hembra' ? 'selected' : '' }}>Hembra</option>
                    </select>
                    
                    <select name="user_id"
                            class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Seleccionar dueño...</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}" {{ $mascota->user_id == $usuario->id ? 'selected' : '' }}>
                                {{ $usuario->name }} {{ $usuario->paterno }} {{ $usuario->materno }} — {{ $usuario->n_identificacion }}
                            </option>
                        @endforeach
                    </select>

                    <!-- Fecha de nacimiento -->
                    <input type="date"
                           name="fecha_nacimiento"
                           value="{{ $mascota->fecha_nacimiento }}"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                    <!-- Color -->
                    <input type="text"
                           name="color"
                           value="{{ $mascota->color }}"
                           placeholder="Color"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Peso -->
                    <input type="number" step="0.01"
                           name="peso"
                           value="{{ $mascota->peso }}"
                           placeholder="Peso (kg)"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <!-- Condiciones especiales -->
                    <textarea name="condiciones_especiales"
                              placeholder="Condiciones especiales"
                              class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">{{ $mascota->condiciones_especiales }}</textarea>

                    <!-- Botones -->
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('mascotas.index') }}"
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