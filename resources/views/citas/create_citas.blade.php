<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Registrar nueva cita
    </h2>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
                <form method="POST" action="{{ route('citas.store') }}" class="space-y-3">
                    @csrf

                    <select name="mascota_id" class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Seleccionar mascota...</option>
                        @foreach ($mascotas as $mascota)
                            <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                        @endforeach
                    </select>

                    <select name="medico_id" class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Seleccionar médico...</option>
                        @foreach ($medicos as $medico)
                            <option value="{{ $medico->id }}">{{ $medico->name }}</option>
                        @endforeach
                    </select>

                    <input type="date" name="fecha_cita"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                    <input type="time" name="hora_cita"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

                    <textarea name="motivo" placeholder="Motivo de la cita"
                              class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"></textarea>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('citas.index') }}"
                           class="px-5 py-2.5 rounded-lg bg-red-400 text-white hover:bg-red-600 transition">
                            Cancelar
                        </a>
                        <button type="submit"
                            class="px-6 py-2.5 rounded-lg bg-indigo-400 text-white hover:bg-indigo-600 transition">
                            Guardar cita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>