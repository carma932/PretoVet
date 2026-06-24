<div>
    <div class="flex items-center justify-between mb-6 flex-wrap gap-4">
        <h2 class="text-xl font-semibold text-gray-800">
            Citas médicas
        </h2>

        <a href="{{ route('citas.create') }}"
           class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow">
            <span class="text-lg">+</span>
            Nueva cita
        </a>
    </div>

    <div class="flex flex-wrap gap-4 mb-8">
        <div>
            <label class="block text-sm text-gray-600 mb-1">Buscar por motivo</label>
            <input type="search" wire:model.live="search"
                   class="rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Filtrar por médico</label>
            <select wire:model.live="medico_filtro"
                    class="rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                <option value="">Todos los médicos</option>
                @foreach ($medicos as $medico)
                    <option value="{{ $medico->id }}">{{ $medico->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @forelse ($citasPorMedico as $nombreMedico => $citas)
        <div class="mb-10">
            <h3 class="text-lg font-bold text-indigo-700 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-user-doctor"></i>
                {{ $nombreMedico }}
                <span class="text-sm font-normal text-gray-500">({{ $citas->count() }} cita(s))</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($citas as $cita)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition relative">

                        <span class="absolute top-4 right-4 px-3 py-1 text-xs font-semibold rounded-full
                            {{ $cita->estado == 'Confirmada' ? 'bg-green-100 text-green-700' :
                               ($cita->estado == 'Cancelada' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
                            {{ $cita->estado }}
                        </span>

                        <h4 class="font-semibold text-gray-800">
                            {{ $cita->mascota->nombre ?? 'Mascota eliminada' }}
                        </h4>
                        <p class="text-sm text-gray-500 mb-3">
                            Dueño: {{ $cita->cliente->name ?? '—' }}
                        </p>

                        <hr class="my-3">

                        <div class="text-sm text-gray-700 space-y-1">
                            <p class="flex items-center gap-2">
                                <i class="fa-solid fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($cita->fecha_cita)->format('d/m/Y') }}
                                a las {{ \Carbon\Carbon::parse($cita->hora_cita)->format('H:i') }}
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fa-solid fa-notes-medical"></i>
                                {{ $cita->motivo }}
                            </p>
                        </div>

                        <div class="mt-6 flex justify-end gap-3">
                            <a href="{{ route('citas.edit', $cita->codigo) }}"
                               class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition shadow-sm">
                                Editar
                            </a>

                            @if ($cita->estado != 'Cancelada')
                                <form method="POST" action="{{ route('citas.cancelar', $cita->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="px-4 py-2 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition shadow-sm"
                                        onclick="return confirm('¿Cancelar esta cita?')">
                                        Cancelar
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @empty
        <div class="text-center py-16 text-gray-500">
            No hay citas registradas.
        </div>
    @endforelse

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            timer: 2500,
            showConfirmButton: false,
        });
    </script>
@endif
</div>