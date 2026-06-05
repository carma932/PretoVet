<x-app-layout>
   <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <h1 class="ml-2 text-2xl font-medium text-gray-900">
                        Veterinaria
                    </h1>
                </div>

                <p class="mt-6 text-gray-500 leading-relaxed">
                    Bienvenido al panel de control. Aquí puedes ver un resumen de tus clientes, mascotas, citas y ingresos.
                </p>
            </div>

            <div class="bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100 p-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Estadísticas principales -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="rounded-xl bg-pink-200 p-6 ring-1 ring-pink-300 shadow-lg">
                            <p class="text-sm text-gray-600">Clientes</p>
                            <p class="mt-2 text-3xl font-bold text-gray-800">128</p>
                            <p class="text-xs text-gray-500 mt-1">+12% desde el mes pasado</p>
                        </div>

                        <div class="rounded-xl bg-blue-200 p-6 ring-1 ring-blue-300 shadow-lg">
                            <p class="text-sm text-gray-600">Mascotas</p>
                            <p class="mt-2 text-3xl font-bold text-gray-800">342</p>
                            <p class="text-xs text-gray-500 mt-1">+8% desde el mes pasado</p>
                        </div>

                        <div class="rounded-xl bg-green-200 p-6 ring-1 ring-green-300 shadow-lg">
                            <p class="text-sm text-gray-600">Citas hoy</p>
                            <p class="mt-2 text-3xl font-bold text-gray-800">14</p>
                            <p class="text-xs text-gray-500 mt-1">Próximas: 3 en 1 hora</p>
                        </div>

                        <div class="rounded-xl bg-yellow-200 p-6 ring-1 ring-yellow-300 shadow-lg">
                            <p class="text-sm text-gray-600">Ingresos</p>
                            <p class="mt-2 text-3xl font-bold text-gray-800">Bs. 2,450</p>
                            <p class="text-xs text-gray-500 mt-1">+15% desde el mes pasado</p>
                        </div>
                    </div>

                    <!-- Gráfico de ingresos mensuales -->
                    <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ingresos Mensuales</h3>
                        <canvas id="incomeChart" width="400" height="200"></canvas>
                    </div>

                    <!-- Tabla de citas recientes -->
                    <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Citas Recientes</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cliente</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mascota</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Servicio</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Juan Pérez</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Max (Perro)</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">2023-10-15 10:00</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Vacunación</td>
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completada</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">María García</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Luna (Gato)</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">2023-10-15 11:30</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Consulta general</td>
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pendiente</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Carlos López</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Buddy (Perro)</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">2023-10-15 14:00</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Desparasitación</td>
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">En progreso</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Acciones rápidas -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                            <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Nueva Cita</h4>
                            <p class="text-gray-600 mb-4">Agendar una nueva cita para un cliente.</p>
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agendar</a>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                            <svg class="w-12 h-12 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Nuevo Cliente</h4>
                            <p class="text-gray-600 mb-4">Registrar un nuevo cliente en el sistema.</p>
                            <a href="{{route('users.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Registrar</a>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                            <svg class="w-12 h-12 text-purple-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Reportes</h4>
                            <p class="text-gray-600 mb-4">Generar reportes de ingresos y citas.</p>
                            <a href="#" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Ver Reportes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts para el gráfico -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('incomeChart').getContext('2d');
    const incomeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            datasets: [{
                label: 'Ingresos (Bs.)',
                data: [1200, 1500, 1800, 2000, 2200, 2400, 2100, 2300, 2500, 2700, 2450, 2450],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</x-app-layout>
