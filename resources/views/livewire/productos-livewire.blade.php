<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold text-gray-800">
            Productos registrados
        </h2>

        <a href="{{ route('productos.create') }}"
           class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow">
            <span class="text-lg">+</span>
            Nuevo producto
        </a>
    </div>

    <div>
        <label for="">Buscar producto</label>
        <input type="search" name="search" wire:model.live="search">
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6s sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($productos as $producto)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition relative">

                        <span class="absolute top-4 right-4 px-3 py-1 text-xs font-semibold rounded-full
                            {{ $producto->estado ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $producto->estado ? 'Activo' : 'Inactivo' }}
                        </span>

                        <div class="flex items-center gap-4">
                            <div class="h-14 w-14 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold text-xl shadow">
                                <i class="fa-solid fa-box"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 leading-tight">
                                    {{ $producto->name }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    Código: {{ $producto->codigo }}
                                </p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="text-sm text-gray-700 space-y-2">
                            <p class="flex items-center gap-2">
                                <i class="fa-solid fa-tag"></i>
                                <span>{{ $producto->tipo }}</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fa-solid fa-warehouse"></i>
                                <span>Stock: {{ $producto->stock }}</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i class="fa-solid fa-dollar-sign"></i>
                                <span>Bs {{ number_format($producto->precio, 2) }}</span>
                            </p>
                        </div>

                        <div class="mt-6 flex justify-end gap-3">
                            <a href="{{ route('productos.edit', $producto->codigo) }}"
                               class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition shadow-sm inline-block">
                                Editar
                            </a>

                            <form method="POST"
                                  action="{{ $producto->estado
                                        ? route('productos.disable', $producto->id)
                                        : route('productos.enable', $producto->id) }}">
                                @csrf
                                @method('PATCH')
                                <button
                                    type="submit"
                                    class="px-4 py-2 text-sm text-white rounded-lg transition shadow-sm
                                    {{ $producto->estado
                                        ? 'bg-red-500 hover:bg-red-600'
                                        : 'bg-green-500 hover:bg-green-600' }}"
                                    onclick="return confirm('¿Seguro que deseas cambiar el estado de este producto?')">
                                    {{ $producto->estado ? 'Inhabilitar' : 'Habilitar' }}
                                </button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>

            @if ($productos->isEmpty())
                <div class="text-center py-16 text-gray-500">
                    No hay productos registrados.
                </div>
            @endif

        </div>
    </div>

@if(session('success'))
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