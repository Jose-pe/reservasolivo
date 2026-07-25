<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Control y Distribución de Mesas</title>
    <!-- Tailwind CSS para diseño moderno y estilizado -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome para iconos limpios y profesionales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts para tipografía de sistema moderno -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b0f19;
        }
        /* Patrón de cuadrícula tipo plano arquitectónico */
        .floorplan-grid {
            background-color: #111827;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 20px 20px;
            position: relative;
        }
        /* Sombras suaves para las mesas y componentes */
        .table-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.5);
        }
        /* Transición suave para cambios de estado */
        .transition-state {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        /* Estilos personalizados para scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #111827;
        }
        ::-webkit-scrollbar-thumb {
            background: #374151;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #4b5563;
        }
    </style>
</head>
<body class="text-slate-100 overflow-hidden h-screen flex">

    <!-- BARRA LATERAL DE NAVEGACIÓN PRINCIPAL -->
    <aside class="w-64 bg-slate-950 border-r border-slate-800 flex flex-col justify-between shrink-0">
        <div>
            <!-- Header de Marca/Restaurante -->
            <div class="p-6 border-b border-slate-900 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-amber-500 to-amber-600 flex items-center justify-center text-slate-950 font-bold text-xl shadow-lg shadow-amber-500/20">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <div>
                    <h1 class="font-bold text-lg leading-none text-white">Il Olivo</h1>
                    <span class="text-xs text-amber-500 font-medium">Panel de Control</span>
                </div>
            </div>

            <!-- Enlaces de navegación -->
            <nav class="p-4 space-y-1.5">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i class="fa-solid fa-chart-pie text-lg w-5"></i>
                    <span class="font-medium text-sm">Resumen Diario</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-amber-500 bg-amber-500/10 font-medium transition">
                    <i class="fa-solid fa-layer-group text-lg w-5"></i>
                    <span class="font-medium text-sm">Distribución de Mesas</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i class="fa-solid fa-calendar-check text-lg w-5"></i>
                    <span class="font-medium text-sm">Reservas</span>
                    <span class="ml-auto bg-amber-500 text-slate-950 text-xs font-bold px-2 py-0.5 rounded-full">12</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i class="fa-solid fa-clock text-lg w-5"></i>
                    <span class="font-medium text-sm">Horarios y Turnos</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i class="fa-solid fa-users text-lg w-5"></i>
                    <span class="font-medium text-sm">Clientes</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i class="fa-solid fa-sliders text-lg w-5"></i>
                    <span class="font-medium text-sm">Configuración</span>
                </a>
            </nav>
        </div>

        <!-- Perfil de usuario en la parte inferior -->
        <div class="p-4 border-t border-slate-900">
            <div class="flex items-center gap-3 p-2 bg-slate-900/50 rounded-xl border border-slate-800">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100" alt="Avatar" class="w-10 h-10 rounded-lg object-cover">
                <div>
                    <h4 class="text-sm font-semibold text-white">Sofía Torres</h4>
                    <p class="text-xs text-slate-400">Maitre / Admin</p>
                </div>
                <button class="ml-auto text-slate-400 hover:text-red-400 transition">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </div>
        </div>
    </aside>

    <!-- CONTENEDOR PRINCIPAL -->
    <main class="flex-grow flex flex-col min-w-0 bg-slate-950">
        
        <!-- BARRA SUPERIOR (HEADER) -->
        <header class="h-16 bg-slate-900/40 border-b border-slate-800 px-8 flex items-center justify-between shrink-0">
            <div class="flex items-center gap-4">
                <h2 class="text-xl font-bold text-white">Gestor de Distribución</h2>
                <!-- Indicador del estado actual del restaurante -->
                <span class="flex items-center gap-1.5 px-3 py-1 bg-emerald-500/10 text-emerald-400 rounded-full text-xs font-semibold border border-emerald-500/20">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Servicio Activo
                </span>
            </div>

            <!-- Acciones de cabecera -->
            <div class="flex items-center gap-4">
                <!-- Selector de Turno de Servicio -->
                <div class="flex items-center gap-1 bg-slate-950 p-1 rounded-xl border border-slate-800">
                    <button id="btn-lunch" onclick="setShift('almuerzo')" class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-500 text-slate-950 transition-all duration-200">
                        <i class="fa-solid fa-sun mr-1"></i>Almuerzo
                    </button>
                    <button id="btn-dinner" onclick="setShift('cena')" class="px-3 py-1.5 text-xs font-semibold rounded-lg text-slate-400 hover:text-white transition-all duration-200">
                        <i class="fa-solid fa-moon mr-1"></i>Cena
                    </button>
                </div>

                <!-- Fecha y Hora Actual simulada -->
                <div class="text-right text-xs">
                    <div class="font-semibold text-white" id="current-date">Sábado, 15 Noviembre</div>
                    <div class="text-slate-400" id="current-time">Turno actual: 13:00 - 16:30</div>
                </div>
            </div>
        </header>

        <!-- SUBPANEL DE FILTROS Y CONTROLES DE VISTA -->
        <section class="p-6 bg-slate-900/10 border-b border-slate-900 flex flex-wrap gap-4 items-center justify-between shrink-0">
            <!-- Pestañas de Zonas -->
            <div class="flex p-1 bg-slate-900 rounded-xl border border-slate-800">
                <button onclick="setZone('salon')" id="zone-salon" class="px-4 py-2 text-sm font-semibold rounded-lg bg-slate-800 text-white shadow-sm transition">
                    <i class="fa-solid fa-couch mr-2"></i>Salón Principal
                </button>
                <button onclick="setZone('terraza')" id="zone-terraza" class="px-4 py-2 text-sm font-semibold rounded-lg text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-umbrella-beach mr-2"></i>Terraza Exterior
                </button>
                <button onclick="setZone('barra')" id="zone-barra" class="px-4 py-2 text-sm font-semibold rounded-lg text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-glass-cheers mr-2"></i>Barra de Bebidas
                </button>
            </div>

            <!-- Buscador y Vista Toggles -->
            <div class="flex items-center gap-3">
                <!-- Filtros Rápidos de Estado -->
                <select id="filter-status" onchange="filterTables()" class="bg-slate-900 border border-slate-800 text-slate-300 text-sm rounded-xl px-3 py-2 outline-none focus:border-amber-500/50">
                    <option value="todos">Todos los estados</option>
                    <option value="disponible">Disponible</option>
                    <option value="ocupada">Ocupada</option>
                    <option value="reservada">Reservada</option>
                    <option value="mantenimiento">Mantenimiento</option>
                </select>

                <!-- Alternar entre Plano y Lista -->
                <div class="flex bg-slate-900 p-1 rounded-xl border border-slate-800">
                    <button onclick="switchView('map')" id="view-map-btn" class="p-2 rounded-lg bg-amber-500 text-slate-950 transition" title="Vista de Plano">
                        <i class="fa-solid fa-map"></i>
                    </button>
                    <button onclick="switchView('list')" id="view-list-btn" class="p-2 rounded-lg text-slate-400 hover:text-white transition" title="Vista de Lista">
                        <i class="fa-solid fa-list-ul"></i>
                    </button>
                </div>

                <!-- Botón de Añadir Mesa -->
                <button onclick="addNewTable()" class="bg-gradient-to-tr from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-4 py-2.5 rounded-xl text-sm shadow-lg shadow-amber-500/10 flex items-center gap-2 transition duration-200">
                    <i class="fa-solid fa-plus"></i> Añadir Mesa
                </button>
            </div>
        </section>

        <!-- AREA DE CONTENIDO SPLIT: MAPA/LISTA + BARRA DE DETALLE LATERAL -->
        <div class="flex-grow flex min-h-0 relative">
            
            <!-- VISTA DEL PLANO DEL RESTAURANTE (Interactive Map Canvas) -->
            <div id="view-map" class="flex-grow overflow-auto p-8 flex items-center justify-center floorplan-grid select-none relative transition-all duration-300">
                <!-- Elementos Estructurales del Restaurante de fondo (Decorativos de plano) -->
                <div class="absolute top-10 left-10 text-xs text-slate-700 uppercase tracking-widest font-bold border-l-2 border-slate-800 pl-3 py-1">Zona de Acceso / Recepción</div>
                <div class="absolute bottom-10 right-10 text-xs text-slate-700 uppercase tracking-widest font-bold border-r-2 border-slate-800 pr-3 py-1 text-right">Acceso a Cocina y Baños</div>

                <!-- El contenedor del plano físico -->
                <div id="floor-container" class="w-[900px] h-[500px] bg-slate-900/60 rounded-3xl border border-slate-800 relative overflow-hidden transition-all duration-300 shadow-2xl">
                    
                    <!-- Barra decorativa para simular barra física -->
                    <div id="visual-decor-bar" class="absolute top-0 right-1/4 w-12 h-24 bg-slate-800 border-b border-l border-slate-700 flex items-center justify-center text-[10px] text-slate-500 font-bold tracking-wider rounded-bl-xl uppercase transform -rotate-0 shadow-inner">
                        <span class="rotate-90">BARRA</span>
                    </div>

                    <!-- Dibujo de Cocina física en el plano -->
                    <div id="visual-decor-kitchen" class="absolute bottom-0 left-1/3 w-36 h-10 bg-slate-800/40 border-t border-x border-slate-700/60 flex items-center justify-center text-[10px] text-slate-600 font-bold tracking-wider rounded-t-xl uppercase">
                        PASE COCINA
                    </div>

                    <!-- Renderización Dinámica de las Mesas -->
                    <div id="interactive-map" class="absolute inset-0"></div>
                </div>
            </div>

            <!-- VISTA ALTERNATIVA EN TABLA/LISTA -->
            <div id="view-list" class="flex-grow overflow-y-auto p-8 hidden transition-all duration-300">
                <div class="max-w-4xl mx-auto bg-slate-900/50 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-slate-800 bg-slate-900/90 text-slate-400 text-xs uppercase tracking-wider">
                                <th class="py-4 px-6 font-semibold">Mesa</th>
                                <th class="py-4 px-6 font-semibold">Zona</th>
                                <th class="py-4 px-6 font-semibold">Capacidad</th>
                                <th class="py-4 px-6 font-semibold">Forma</th>
                                <th class="py-4 px-6 font-semibold">Estado Actual</th>
                                <th class="py-4 px-6 font-semibold text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="list-tables-body" class="divide-y divide-slate-800/40 text-sm">
                            <!-- Inyectado dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- PANEL LATERAL DERECHO (Detalles de la Mesa Seleccionada) -->
            <aside class="w-96 bg-slate-950 border-l border-slate-800 flex flex-col justify-between shrink-0 overflow-y-auto">
                <div class="p-6 space-y-6">
                    <!-- Cabecera del Panel Detalle -->
                    <div class="flex items-center justify-between border-b border-slate-900 pb-4">
                        <div>
                            <h3 class="font-bold text-white text-base">Ficha de Configuración</h3>
                            <p class="text-xs text-slate-400">Edita parámetros en tiempo real</p>
                        </div>
                        <span class="text-xs font-semibold px-2 py-1 bg-slate-900 border border-slate-800 rounded-lg text-slate-400">ID Único</span>
                    </div>

                    <!-- Vista si no hay mesa seleccionada -->
                    <div id="empty-state-sidebar" class="py-12 text-center space-y-4">
                        <div class="w-16 h-16 rounded-full bg-slate-900 flex items-center justify-center text-slate-600 mx-auto border border-slate-800">
                            <i class="fa-solid fa-hand-pointer text-xl"></i>
                        </div>
                        <p class="text-sm text-slate-400 max-w-[200px] mx-auto">Selecciona una mesa en el plano para editar sus propiedades.</p>
                    </div>

                    <!-- Formulario de Edición (Oculto inicialmente hasta que seleccionen una mesa) -->
                    <div id="editor-form-sidebar" class="space-y-6 hidden">
                        <!-- Identificador Principal de la Mesa -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Etiqueta/No.</label>
                                <input type="text" id="edit-table-number" oninput="saveLiveChanges()" class="w-full bg-slate-900 border border-slate-800 text-white rounded-xl px-4 py-2.5 text-sm focus:border-amber-500/50 outline-none font-bold">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Comensales Máx.</label>
                                <div class="flex items-center bg-slate-900 border border-slate-800 rounded-xl overflow-hidden">
                                    <button onclick="adjustCapacity(-1)" class="px-3 py-2.5 text-slate-400 hover:text-white hover:bg-slate-800 transition"><i class="fa-solid fa-minus text-xs"></i></button>
                                    <input type="number" id="edit-table-capacity" min="1" max="12" readonly class="w-full bg-transparent border-none text-center text-white text-sm font-bold outline-none">
                                    <button onclick="adjustCapacity(1)" class="px-3 py-2.5 text-slate-400 hover:text-white hover:bg-slate-800 transition"><i class="fa-solid fa-plus text-xs"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Estado Actual de la Mesa -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Estado de la Mesa</label>
                            <div class="grid grid-cols-2 gap-2" id="status-button-group">
                                <button onclick="setTableStatus('disponible')" id="status-btn-disponible" class="flex items-center gap-2 p-2.5 rounded-xl border text-left text-xs font-semibold transition">
                                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                    Disponible
                                </button>
                                <button onclick="setTableStatus('ocupada')" id="status-btn-ocupada" class="flex items-center gap-2 p-2.5 rounded-xl border text-left text-xs font-semibold transition">
                                    <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                                    Ocupada
                                </button>
                                <button onclick="setTableStatus('reservada')" id="status-btn-reservada" class="flex items-center gap-2 p-2.5 rounded-xl border text-left text-xs font-semibold transition">
                                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                    Reservada
                                </button>
                                <button onclick="setTableStatus('mantenimiento')" id="status-btn-mantenimiento" class="flex items-center gap-2 p-2.5 rounded-xl border text-left text-xs font-semibold transition">
                                    <span class="w-2.5 h-2.5 rounded-full bg-slate-500"></span>
                                    Bloqueada
                                </button>
                            </div>
                        </div>

                        <!-- Propiedades Físicas -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Forma</label>
                                <div class="flex p-1 bg-slate-900 rounded-xl border border-slate-800">
                                    <button onclick="setTableShape('square')" id="shape-btn-square" class="flex-grow py-1.5 text-xs font-semibold rounded-lg text-center transition">
                                        Cuadrada
                                    </button>
                                    <button onclick="setTableShape('round')" id="shape-btn-round" class="flex-grow py-1.5 text-xs font-semibold rounded-lg text-center transition">
                                        Redonda
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Sala / Zona</label>
                                <select id="edit-table-zone" onchange="saveLiveChanges()" class="w-full bg-slate-900 border border-slate-800 text-white rounded-xl px-3 py-2 text-xs focus:border-amber-500/50 outline-none h-[34px]">
                                    <option value="salon">Salón Principal</option>
                                    <option value="terraza">Terraza Exterior</option>
                                    <option value="barra">Barra de Bebidas</option>
                                </select>
                            </div>
                        </div>

                        <!-- Planificación / Próximas Reservas de esta mesa -->
                        <div class="border-t border-slate-900 pt-5 space-y-3">
                            <h4 class="text-xs font-bold text-white uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-calendar text-amber-500"></i> Reservas del Turno
                            </h4>
                            
                            <div class="space-y-2" id="sidebar-reservation-list">
                                <!-- Datos de reserva simulados de acuerdo al estado -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones de Acción en el pie de página del panel de control -->
                <div class="p-6 border-t border-slate-900 bg-slate-950/80 sticky bottom-0">
                    <div class="flex gap-3">
                        <button onclick="deleteSelectedTable()" id="btn-delete-table" class="flex-grow bg-red-500/10 hover:bg-red-500 text-red-500 hover:text-white font-bold py-3 px-4 rounded-xl text-sm border border-red-500/20 transition-all duration-150 hidden">
                            <i class="fa-solid fa-trash-can mr-2"></i>Eliminar Mesa
                        </button>
                    </div>
                </div>
            </aside>
        </div>

        <!-- BARRA DE ESTADÍSTICAS DEL DÍA -->
        <footer class="h-16 bg-slate-900/90 border-t border-slate-800 px-8 flex items-center justify-between shrink-0 text-xs">
            <!-- Leyenda de colores -->
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                    <span class="text-slate-400 font-medium">Disponible (<span id="lbl-count-disponibles">0</span>)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                    <span class="text-slate-400 font-medium">Ocupada (<span id="lbl-count-ocupadas">0</span>)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                    <span class="text-slate-400 font-medium">Reservada (<span id="lbl-count-reservadas">0</span>)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-slate-500"></span>
                    <span class="text-slate-400 font-medium">Bloqueada (<span id="lbl-count-mantenimiento">0</span>)</span>
                </div>
            </div>

            <!-- KPIs Rápidos -->
            <div class="flex gap-8 items-center">
                <div>
                    <span class="text-slate-500 uppercase tracking-wider">Capacidad Total Asientos:</span>
                    <span class="text-white font-bold ml-1.5 text-sm" id="lbl-total-seats">0 pax</span>
                </div>
                <div>
                    <span class="text-slate-500 uppercase tracking-wider">Porcentaje de Ocupación:</span>
                    <span class="text-amber-500 font-extrabold ml-1.5 text-sm" id="lbl-occupancy-rate">0%</span>
                </div>
            </div>
        </footer>
    </main>

    <!-- LOGICA DE COMPORTAMIENTO INTERACTIVO (JAVASCRIPT) -->
    <script>
        // BASE DE DATOS INICIAL DE MESAS (Estado local en memoria para el prototipo)
        let tables = [
            // Salón Principal
            { id: 1, number: "M1", capacity: 4, shape: "square", status: "disponible", zone: "salon", x: 80, y: 80 },
            { id: 2, number: "M2", capacity: 2, shape: "round", status: "ocupada", zone: "salon", x: 250, y: 80 },
            { id: 3, number: "M3", capacity: 6, shape: "square", status: "reservada", zone: "salon", x: 420, y: 80 },
            { id: 4, number: "M4", capacity: 4, shape: "square", status: "disponible", zone: "salon", x: 80, y: 220 },
            { id: 5, number: "M5", capacity: 8, shape: "square", status: "mantenimiento", zone: "salon", x: 250, y: 220 },
            { id: 6, number: "M6", capacity: 4, shape: "round", status: "disponible", zone: "salon", x: 420, y: 220 },
            { id: 7, number: "M7", capacity: 2, shape: "round", status: "disponible", zone: "salon", x: 620, y: 80 },
            { id: 8, number: "M8", capacity: 4, shape: "square", status: "reservada", zone: "salon", x: 620, y: 220 },
            
            // Terraza Exterior
            { id: 9, number: "T1", capacity: 4, shape: "square", status: "disponible", zone: "terraza", x: 120, y: 150 },
            { id: 10, number: "T2", capacity: 2, shape: "round", status: "reservada", zone: "terraza", x: 300, y: 150 },
            { id: 11, number: "T3", capacity: 6, shape: "square", status: "disponible", zone: "terraza", x: 480, y: 150 },
            { id: 12, number: "T4", capacity: 4, shape: "round", status: "ocupada", zone: "terraza", x: 660, y: 150 },

            // Barra de Bebidas
            { id: 13, number: "B1", capacity: 1, shape: "round", status: "ocupada", zone: "barra", x: 150, y: 180 },
            { id: 14, number: "B2", capacity: 1, shape: "round", status: "disponible", zone: "barra", x: 280, y: 180 },
            { id: 15, number: "B3", capacity: 1, shape: "round", status: "disponible", zone: "barra", x: 410, y: 180 },
            { id: 16, number: "B4", capacity: 1, shape: "round", status: "ocupada", zone: "barra", x: 540, y: 180 }
        ];

        // Reservas Simuladas vinculadas a mesas para mostrar fidelidad del backend
        const dummyReservations = {
            disponible: [],
            mantenimiento: [],
            ocupada: [
                { id: "R-902", guest: "Familia García", time: "14:00", pax: 4, status: "Sentado" }
            ],
            reservada: [
                { id: "R-501", guest: "Carlos Martínez", time: "14:30", pax: 4, status: "Pendiente" },
                { id: "R-102", guest: "Laura Benítez", time: "21:00", pax: 2, status: "Tardío" }
            ]
        };

        // Estado de la aplicación
        let selectedTableId = null;
        let activeZone = "salon";
        let activeView = "map"; // map | list
        let activeShift = "almuerzo";
        let draggingElement = null;
        let dragOffset = { x: 0, y: 0 };

        // Al iniciar
        window.addEventListener('DOMContentLoaded', () => {
            renderActiveView();
            updateDailyKPIs();
        });

        // Cambiar entre Sala/Terraza/Barra
        function setZone(zoneName) {
            activeZone = zoneName;
            
            // Actualizar interfaz visual de botones de pestañas
            ['salon', 'terraza', 'barra'].forEach(z => {
                const btn = document.getElementById(`zone-${z}`);
                if (z === zoneName) {
                    btn.className = "px-4 py-2 text-sm font-semibold rounded-lg bg-slate-800 text-white shadow-sm transition";
                } else {
                    btn.className = "px-4 py-2 text-sm font-semibold rounded-lg text-slate-400 hover:text-white transition";
                }
            });

            // Si cambiamos de sala, deseleccionar mesa actual para evitar cruce de datos
            deselectTable();
            renderActiveView();
        }

        // Cambiar de vista (Mapa <--> Lista)
        function switchView(viewName) {
            activeView = viewName;

            const mapBtn = document.getElementById('view-map-btn');
            const listBtn = document.getElementById('view-list-btn');
            const mapView = document.getElementById('view-map');
            const listView = document.getElementById('view-list');

            if (viewName === 'map') {
                mapBtn.className = "p-2 rounded-lg bg-amber-500 text-slate-950 transition";
                listBtn.className = "p-2 rounded-lg text-slate-400 hover:text-white transition";
                mapView.classList.remove('hidden');
                listView.classList.add('hidden');
            } else {
                listBtn.className = "p-2 rounded-lg bg-amber-500 text-slate-950 transition";
                mapBtn.className = "p-2 rounded-lg text-slate-400 hover:text-white transition";
                listView.classList.remove('hidden');
                mapView.classList.add('hidden');
            }
            renderActiveView();
        }

        // Cambiar de Turno (Almuerzo / Cena)
        function setShift(shiftName) {
            activeShift = shiftName;
            const lunchBtn = document.getElementById('btn-lunch');
            const dinnerBtn = document.getElementById('btn-dinner');
            const timeLabel = document.getElementById('current-time');

            if (shiftName === 'almuerzo') {
                lunchBtn.className = "px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-500 text-slate-950 transition-all duration-200";
                dinnerBtn.className = "px-3 py-1.5 text-xs font-semibold rounded-lg text-slate-400 hover:text-white transition-all duration-200";
                timeLabel.innerText = "Turno actual: 13:00 - 16:30";
            } else {
                dinnerBtn.className = "px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-500 text-slate-950 transition-all duration-200";
                lunchBtn.className = "px-3 py-1.5 text-xs font-semibold rounded-lg text-slate-400 hover:text-white transition-all duration-200";
                timeLabel.innerText = "Turno actual: 20:00 - 23:45";
            }
        }

        // Renderizado inteligente
        function renderActiveView() {
            if (activeView === 'map') {
                renderFloorplan();
            } else {
                renderTableList();
            }
        }

        // RENDERIZADOR DEL PLANO FÍSICO (Floorplan Map)
        function renderFloorplan() {
            const container = document.getElementById('interactive-map');
            container.innerHTML = ''; // Limpiar contenedor de mapa

            // Filtrar mesas que corresponden a la zona actual
            const zoneTables = tables.filter(t => t.zone === activeZone);

            zoneTables.forEach(table => {
                // Crear estructura visual de la mesa
                const tableEl = document.createElement('div');
                tableEl.id = `map-table-${table.id}`;
                tableEl.className = `absolute table-shadow cursor-grab transition-state flex flex-col items-center justify-center p-2 border-2 select-none `;
                
                // Aplicar estilo de forma (Cuadrada o Redonda)
                if (table.shape === 'round') {
                    tableEl.classList.add('rounded-full');
                } else {
                    tableEl.classList.add('rounded-xl');
                }

                // Ajustar dimensión visual en función de la capacidad de pax
                let sizeClass = 'w-20 h-20 text-xs';
                if (table.capacity <= 2) {
                    sizeClass = 'w-16 h-16 text-xs';
                } else if (table.capacity >= 6) {
                    sizeClass = 'w-28 h-28 text-sm';
                } else if (table.capacity >= 8) {
                    sizeClass = 'w-36 h-36 text-base';
                }
                tableEl.className += ` ${sizeClass} `;

                // Definir colores y estados
                let colorClass = "";
                let statusBadge = "";
                if (table.status === 'disponible') {
                    colorClass = "bg-emerald-950/80 hover:bg-emerald-900 text-emerald-300 border-emerald-500/50 shadow-emerald-500/10";
                } else if (table.status === 'ocupada') {
                    colorClass = "bg-rose-950/80 hover:bg-rose-900 text-rose-300 border-rose-500/50 shadow-rose-500/10";
                } else if (table.status === 'reservada') {
                    colorClass = "bg-amber-950/80 hover:bg-amber-900 text-amber-300 border-amber-500/50 shadow-amber-500/10";
                } else {
                    colorClass = "bg-slate-800 hover:bg-slate-700 text-slate-400 border-slate-600 shadow-slate-600/10";
                }

                // Si está seleccionada, añadir borde dorado de alta intensidad
                if (table.id === selectedTableId) {
                    colorClass += " ring-4 ring-amber-400 border-amber-400 scale-105";
                }

                tableEl.className += ` ${colorClass}`;
                tableEl.style.left = `${table.x}px`;
                tableEl.style.top = `${table.y}px`;

                // Añadir sillas alrededor de la mesa para mayor valor visual
                let chairsHTML = '';
                for(let i=1; i<=table.capacity; i++) {
                    chairsHTML += `<span class="inline-block w-1.5 h-1.5 rounded-full bg-current opacity-60 mx-0.5"></span>`;
                }

                tableEl.innerHTML = `
                    <div class="font-extrabold tracking-wider leading-none mb-1 text-white">${table.number}</div>
                    <div class="text-[10px] font-semibold opacity-80 leading-none mb-1.5">${table.capacity} Pax</div>
                    <div class="flex items-center justify-center">${chairsHTML}</div>
                `;

                // Eventos de selección
                tableEl.addEventListener('click', (e) => {
                    e.stopPropagation();
                    selectTable(table.id);
                });

                // Implementación de arrastrar y soltar física (Drag and Drop)
                tableEl.addEventListener('mousedown', (e) => {
                    if (e.button !== 0) return; // Solo arrastrar con clic izquierdo
                    draggingElement = table;
                    const rect = tableEl.getBoundingClientRect();
                    const containerRect = document.getElementById('floor-container').getBoundingClientRect();
                    
                    dragOffset.x = e.clientX - rect.left;
                    dragOffset.y = e.clientY - rect.top;
                    
                    tableEl.classList.remove('transition-state');
                    tableEl.classList.replace('cursor-grab', 'cursor-grabbing');
                });

                container.appendChild(tableEl);
            });
        }

        // Manejador global del arrastre (Drag & Drop de mesas en el plano)
        document.addEventListener('mousemove', (e) => {
            if (!draggingElement) return;

            const floorContainer = document.getElementById('floor-container');
            const containerRect = floorContainer.getBoundingClientRect();
            
            // Calcular posiciones locales dentro del plano relativizado
            let newX = e.clientX - containerRect.left - dragOffset.x;
            let newY = e.clientY - containerRect.top - dragOffset.y;

            // Limitar dentro del contenedor del restaurante (bordes)
            const tableEl = document.getElementById(`map-table-${draggingElement.id}`);
            const tableWidth = tableEl.offsetWidth;
            const tableHeight = tableEl.offsetHeight;

            newX = Math.max(0, Math.min(newX, containerRect.width - tableWidth));
            newY = Math.max(0, Math.min(newY, containerRect.height - tableHeight));

            // Snap a rejilla (20px de precisión opcional para alineación limpia)
            newX = Math.round(newX / 10) * 10;
            newY = Math.round(newY / 10) * 10;

            // Actualizar modelo de base de datos local
            draggingElement.x = newX;
            draggingElement.y = newY;

            // Reflejar en la UI en caliente
            tableEl.style.left = `${newX}px`;
            tableEl.style.top = `${newY}px`;
        });

        document.addEventListener('mouseup', () => {
            if (draggingElement) {
                const tableEl = document.getElementById(`map-table-${draggingElement.id}`);
                if (tableEl) {
                    tableEl.classList.add('transition-state');
                    tableEl.classList.replace('cursor-grabbing', 'cursor-grab');
                }
                draggingElement = null;
            }
        });

        // FILTRADO DE LA LISTA / TABLA DE CONTROL
        function filterTables() {
            renderActiveView();
        }

        // GENERACIÓN DE LA VISTA EN LISTA
        function renderTableList() {
            const tbody = document.getElementById('list-tables-body');
            tbody.innerHTML = '';

            const statusFilter = document.getElementById('filter-status').value;

            // Filtrar mesas según la zona activa y el buscador de estados
            let filtered = tables.filter(t => t.zone === activeZone);
            if (statusFilter !== 'todos') {
                filtered = filtered.filter(t => t.status === statusFilter);
            }

            if (filtered.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-500 font-medium">
                            <i class="fa-solid fa-triangle-exclamation text-2xl mb-3 block"></i>
                            No se encontraron mesas que coincidan con los filtros.
                        </td>
                    </tr>
                `;
                return;
            }

            filtered.forEach(table => {
                let statusBadge = "";
                if (table.status === 'disponible') {
                    statusBadge = `<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Disponible</span>`;
                } else if (table.status === 'ocupada') {
                    statusBadge = `<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-rose-500/10 text-rose-400 border border-rose-500/20"><span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>Ocupada</span>`;
                } else if (table.status === 'reservada') {
                    statusBadge = `<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-400 border border-amber-500/20"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>Reservada</span>`;
                } else {
                    statusBadge = `<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-800 text-slate-400 border border-slate-700"><span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span>Bloqueada</span>`;
                }

                const isSelected = table.id === selectedTableId;
                const rowClass = isSelected ? "bg-amber-500/5 text-white" : "hover:bg-slate-900/40 text-slate-300";

                const tr = document.createElement('tr');
                tr.className = `${rowClass} transition cursor-pointer`;
                tr.onclick = () => selectTable(table.id);
                tr.innerHTML = `
                    <td class="py-4 px-6 font-bold text-white">${table.number}</td>
                    <td class="py-4 px-6 capitalize">${table.zone}</td>
                    <td class="py-4 px-6 font-semibold">${table.capacity} pax</td>
                    <td class="py-4 px-6 capitalize">${table.shape === 'round' ? 'Redonda' : 'Cuadrada'}</td>
                    <td class="py-4 px-6">${statusBadge}</td>
                    <td class="py-4 px-6 text-right">
                        <button onclick="selectTable(${table.id})" class="p-1.5 hover:bg-slate-800 rounded-lg text-slate-400 hover:text-white transition">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        // ACCIÓN: SELECCIONAR MESA (Carga datos en la barra lateral derecha)
        function selectTable(id) {
            selectedTableId = id;
            const table = tables.find(t => t.id === id);

            // Resaltar mesa en plano y lista
            renderActiveView();

            // Intercambiar visibilidad del sidebar (Empty State vs Formulario)
            document.getElementById('empty-state-sidebar').classList.add('hidden');
            document.getElementById('editor-form-sidebar').classList.remove('hidden');
            document.getElementById('btn-delete-table').classList.remove('hidden');

            // Cargar los campos del formulario
            document.getElementById('edit-table-number').value = table.number;
            document.getElementById('edit-table-capacity').value = table.capacity;
            document.getElementById('edit-table-zone').value = table.zone;

            // Actualizar botones de estado de la mesa en el sidebar
            updateStatusButtonsInSidebar(table.status);

            // Actualizar botones de forma de la mesa en el sidebar
            updateShapeButtonsInSidebar(table.shape);

            // Cargar historial de reservas simuladas correspondientes al estado
            const reservationContainer = document.getElementById('sidebar-reservation-list');
            reservationContainer.innerHTML = '';

            const listReservations = dummyReservations[table.status] || [];
            if (listReservations.length === 0) {
                reservationContainer.innerHTML = `
                    <div class="p-3 bg-slate-900/40 border border-slate-800/60 rounded-xl text-center text-xs text-slate-500">
                        No hay reservas agendadas hoy.
                    </div>
                `;
            } else {
                listReservations.forEach(res => {
                    let pillClass = "bg-amber-500/10 text-amber-400 border border-amber-500/20";
                    if(res.status === "Sentado") pillClass = "bg-emerald-500/10 text-emerald-400 border border-emerald-500/20";

                    reservationContainer.innerHTML += `
                        <div class="p-3 bg-slate-900/50 border border-slate-800/80 rounded-xl flex justify-between items-center">
                            <div>
                                <h5 class="text-xs font-bold text-white">${res.guest}</h5>
                                <div class="flex items-center gap-2 mt-1 text-[10px] text-slate-400">
                                    <span><i class="fa-solid fa-clock mr-1"></i>${res.time}</span>
                                    <span>•</span>
                                    <span>${res.pax} Pax</span>
                                </div>
                            </div>
                            <span class="px-2 py-0.5 rounded text-[9px] font-bold ${pillClass}">${res.status}</span>
                        </div>
                    `;
                });
            }
        }

        // Deseleccionar todo
        function deselectTable() {
            selectedTableId = null;
            document.getElementById('empty-state-sidebar').classList.remove('hidden');
            document.getElementById('editor-form-sidebar').classList.add('hidden');
            document.getElementById('btn-delete-table').classList.add('hidden');
            renderActiveView();
        }

        // ACCIÓN: EDITAR ESTADO DESDE EL SIDEBAR
        function setTableStatus(status) {
            if (!selectedTableId) return;
            const table = tables.find(t => t.id === selectedTableId);
            table.status = status;
            
            updateStatusButtonsInSidebar(status);
            renderActiveView();
            updateDailyKPIs();

            // Recargar datos dinámicos de reservas que corresponden al estado
            selectTable(selectedTableId);
        }

        function updateStatusButtonsInSidebar(status) {
            const btnGroup = document.getElementById('status-button-group');
            const btns = {
                disponible: document.getElementById('status-btn-disponible'),
                ocupada: document.getElementById('status-btn-ocupada'),
                reservada: document.getElementById('status-btn-reservada'),
                mantenimiento: document.getElementById('status-btn-mantenimiento')
            };

            // Estructurar el estilo de activo / inactivo
            Object.keys(btns).forEach(key => {
                if (key === status) {
                    let activeStyles = "";
                    if (key === 'disponible') activeStyles = "bg-emerald-500/10 border-emerald-500/50 text-emerald-300";
                    if (key === 'ocupada') activeStyles = "bg-rose-500/10 border-rose-500/50 text-rose-300";
                    if (key === 'reservada') activeStyles = "bg-amber-500/10 border-amber-500/50 text-amber-300";
                    if (key === 'mantenimiento') activeStyles = "bg-slate-700/20 border-slate-500 text-slate-300";
                    btns[key].className = `flex items-center gap-2 p-2.5 rounded-xl border text-left text-xs font-semibold transition ${activeStyles}`;
                } else {
                    btns[key].className = "flex items-center gap-2 p-2.5 rounded-xl border border-slate-800 text-left text-xs font-semibold text-slate-400 hover:text-white hover:bg-slate-900 transition";
                }
            });
        }

        // ACCIÓN: AJUSTAR CAPACIDAD DE MESA DESDE SIDEBAR
        function adjustCapacity(amount) {
            if (!selectedTableId) return;
            const table = tables.find(t => t.id === selectedTableId);
            
            const newCap = table.capacity + amount;
            if (newCap >= 1 && newCap <= 12) {
                table.capacity = newCap;
                document.getElementById('edit-table-capacity').value = newCap;
                renderActiveView();
                updateDailyKPIs();
            }
        }

        // ACCIÓN: EDITAR FORMA DE LA MESA (Redonda / Cuadrada)
        function setTableShape(shape) {
            if (!selectedTableId) return;
            const table = tables.find(t => t.id === selectedTableId);
            table.shape = shape;
            
            updateShapeButtonsInSidebar(shape);
            renderActiveView();
        }

        function updateShapeButtonsInSidebar(shape) {
            const btnSquare = document.getElementById('shape-btn-square');
            const btnRound = document.getElementById('shape-btn-round');

            if (shape === 'square') {
                btnSquare.className = "flex-grow py-1.5 text-xs font-semibold rounded-lg text-center bg-slate-800 text-white transition";
                btnRound.className = "flex-grow py-1.5 text-xs font-semibold rounded-lg text-center text-slate-400 hover:text-white transition";
            } else {
                btnRound.className = "flex-grow py-1.5 text-xs font-semibold rounded-lg text-center bg-slate-800 text-white transition";
                btnSquare.className = "flex-grow py-1.5 text-xs font-semibold rounded-lg text-center text-slate-400 hover:text-white transition";
            }
        }

        // ACCIÓN: GUARDADO SÍNCRONO AL ESCRIBIR EN INPUTS
        function saveLiveChanges() {
            if (!selectedTableId) return;
            const table = tables.find(t => t.id === selectedTableId);
            
            // Etiqueta número
            table.number = document.getElementById('edit-table-number').value.trim() || table.id.toString();
            
            // Zona/Sala física
            const prevZone = table.zone;
            const newZone = document.getElementById('edit-table-zone').value;
            table.zone = newZone;

            // Si cambiamos la zona de la mesa, forzar renderizado y refrescar
            if (prevZone !== newZone) {
                renderActiveView();
            } else {
                renderActiveView();
            }
        }

        // ACCIÓN: GENERAR UNA NUEVA MESA AL SISTEMA (Añadir Mesa)
        function addNewTable() {
            const nextId = tables.length > 0 ? Math.max(...tables.map(t => t.id)) + 1 : 1;
            
            // Crear mesa por defecto según la zona actual
            let letter = "M";
            if (activeZone === 'terraza') letter = "T";
            if (activeZone === 'barra') letter = "B";

            const newTable = {
                id: nextId,
                number: `${letter}${nextId}`,
                capacity: activeZone === 'barra' ? 1 : 4,
                shape: activeZone === 'barra' ? "round" : "square",
                status: "disponible",
                zone: activeZone,
                x: 150 + (Math.random() * 80), // Posición inicial semi-aleatoria para evitar colisión perfecta
                y: 150 + (Math.random() * 80)
            };

            tables.push(newTable);
            renderActiveView();
            updateDailyKPIs();
            
            // Auto seleccionar la nueva mesa para editarla rápidamente
            selectTable(newTable.id);
        }

        // ACCIÓN: ELIMINAR LA MESA SELECCIONADA
        function deleteSelectedTable() {
            if (!selectedTableId) return;
            
            if (confirm("¿Estás seguro de que deseas eliminar permanentemente esta mesa de la distribución?")) {
                tables = tables.filter(t => t.id !== selectedTableId);
                deselectTable();
                updateDailyKPIs();
            }
        }

        // CÁLCULO DE KPIS EN TIEMPO REAL (Lógica integrada en el frontend del prototipo)
        function updateDailyKPIs() {
            // Filtrar mesas correspondientes a la zona activa para calcular KPIs realistas de la sala abierta
            const zoneTables = tables.filter(t => t.zone === activeZone);

            const countDisponible = zoneTables.filter(t => t.status === 'disponible').length;
            const countOcupada = zoneTables.filter(t => t.status === 'ocupada').length;
            const countReservada = zoneTables.filter(t => t.status === 'reservada').length;
            const countMantenimiento = zoneTables.filter(t => t.status === 'mantenimiento').length;

            // Reflejar contadores en footer
            document.getElementById('lbl-count-disponibles').innerText = countDisponible;
            document.getElementById('lbl-count-ocupadas').innerText = countOcupada;
            document.getElementById('lbl-count-reservadas').innerText = countReservada;
            document.getElementById('lbl-count-mantenimiento').innerText = countMantenimiento;

            // Capacidad de asientos total
            const totalSeats = zoneTables.reduce((sum, t) => sum + (t.status !== 'mantenimiento' ? t.capacity : 0), 0);
            document.getElementById('lbl-total-seats').innerText = `${totalSeats} pax`;

            // Calcular tasa de ocupación (Ocupadas / Total Operativas)
            const operativas = zoneTables.filter(t => t.status !== 'mantenimiento').length;
            const ocupadas = zoneTables.filter(t => t.status === 'ocupada').length;
            const rate = operativas > 0 ? Math.round((ocupadas / operativas) * 100) : 0;
            document.getElementById('lbl-occupancy-rate').innerText = `${rate}%`;
        }
    </script>
</body>
</html>