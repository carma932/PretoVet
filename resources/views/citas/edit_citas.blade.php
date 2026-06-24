<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar cita
    </h2>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
                <form method="POST" action="{{ route('citas.update', $cita->codigo) }}" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <select name="mascota_id" class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach ($mascotas as $mascota)
                            <option value="{{ $mascota->id }}" {{ $cita->mascota_id == $mascota->id ? 'selected' : '' }}>
                                {{ $mascota->nombre }}
                            </option>
                        @endforeach
                    </select>

                    <select name="medico_id" class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach ($medicos as $medico)
                            <option value="{{ $medico->id }}" {{ $cita->medico_id == $medico->id ? 'selected' : '' }}>
                                {{ $medico->name }}
                            </option>
                        @endforeach
                    </select>

                    <input type="date" name="fecha_cita" value="{{ $cita->fecha_cita }}"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                    <input type="time" name="hora_cita" value="{{ $cita->hora_cita }}"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                    <select name="estado" class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="Pendiente" {{ $cita->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="Confirmada" {{ $cita->estado == 'Confirmada' ? 'selected' : '' }}>Confirmada</option>
                        <option value="Cancelada" {{ $cita->estado == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
                    </select>

                    <textarea name="motivo" class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">{{ $cita->motivo }}</textarea>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('citas.index') }}"
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