<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Registrar nuevo producto
    </h2>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300/50 shadow-xl rounded-2xl p-8">
                <form method="POST" action="{{ route('productos.store') }}" class="space-y-3">
                    @csrf

                    <input type="text"
                           name="name"
                           placeholder="Nombre del producto"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <select name="tipo"
                            class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Seleccionar tipo...</option>
                        <option value="Medicamento">Medicamento</option>
                        <option value="Objetos">Objetos</option>
                        <option value="Comida">Comida</option>
                    </select>

                    <input type="number"
                           name="stock"
                           placeholder="Stock disponible"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <input type="number" step="0.01"
                           name="precio"
                           placeholder="Precio (Bs)"
                           class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 hover:bg-blue-600/10 hover:text-white transition">

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('productos.index') }}"
                           class="px-5 py-2.5 rounded-lg bg-red-400 text-white hover:bg-red-600 transition">
                            Cancelar
                        </a>
                        <button type="submit"
                            class="px-6 py-2.5 rounded-lg bg-indigo-400 text-white hover:bg-indigo-600 transition">
                            Guardar producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>