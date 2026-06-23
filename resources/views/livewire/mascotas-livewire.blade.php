<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold text-gray-800">
            Mascotas registradas
        </h2>

        <button wire:click="openCreate"
            class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow">
            <span class="text-lg">+</span>
            Nueva mascota
        </button>
    </div>

    <div class="mb-4">
        <label class="block text-sm text-gray-600 mb-1">Buscar mascota</label>
        <input type="search" wire:model.live.debounce.300ms="search"
            placeholder="Nombre o código..."
            class="w-full sm:w-80 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="py-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($mascotas as $mascota)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition relative">

                    <span class="absolute top-4 right-4 px-3 py-1 text-xs font-semibold rounded-full
                        {{ $mascota->estado ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        {{ $mascota->estado ? 'Activa' : 'Inactiva' }}
                    </span>

                    <div class="flex items-center gap-4">
                        <div class="h-14 w-14 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold text-xl shadow">
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 leading-tight">
                                {{ $mascota->nombre }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                {{ $mascota->especie }} · {{ $mascota->raza }}
                            </p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-sm text-gray-700 space-y-1">
                        <p><strong>Sexo:</strong> {{ $mascota->sexo }}</p>
                        <p><strong>Color:</strong> {{ $mascota->color }}</p>
                        <p><strong>Peso:</strong> {{ $mascota->peso }} kg</p>
                        <p><strong>Nacimiento:</strong> {{ \Carbon\Carbon::parse($mascota->fecha_nacimiento)->format('d/m/Y') }}</p>
                        @if($mascota->condiciones_especiales)
                            <p><strong>Condiciones:</strong> {{ $mascota->condiciones_especiales }}</p>
                        @endif
                    </div>

                    <div class="mt-6 flex justify-end gap-2 flex-wrap">
                        <button wire:click="openEdit({{ $mascota->id }})"
                            class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition shadow-sm">
                            Editar
                        </button>

                        <button wire:click="toggleEstado({{ $mascota->id }})"
                            onclick="return confirm('¿Seguro que deseas cambiar el estado de esta mascota?')"
                            class="px-4 py-2 text-sm text-white rounded-lg transition shadow-sm
                            {{ $mascota->estado ? 'bg-yellow-500 hover:bg-yellow-600' : 'bg-green-500 hover:bg-green-600' }}">
                            {{ $mascota->estado ? 'Inhabilitar' : 'Habilitar' }}
                        </button>

                        <button wire:click="delete({{ $mascota->id }})"
                            onclick="return confirm('¿Eliminar esta mascota permanentemente?')"
                            class="px-4 py-2 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition shadow-sm">
                            Eliminar
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        @if ($mascotas->isEmpty())
            <div class="text-center py-16 text-gray-500">
                No hay mascotas registradas.
            </div>
        @endif

        <div class="mt-6">
            