<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard de Control y Distribución de Mesas</title>
    <!-- Bootstrap 5 CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b0f19;
            color: #f1f5f9;
        }

        /* Colores personalizados compatibles con la paleta original */
        .bg-dark-sidebar { background-color: #030712; }
        .bg-dark-main { background-color: #0b0f19; }
        .bg-dark-card { background-color: #111827; }
        .bg-dark-card-soft { background-color: rgba(17, 24, 39, 0.6); }
        .border-dark-custom { border-color: #1e293b !important; }
        .text-amber { color: #f59e0b; }
        .bg-amber { background-color: #f59e0b; color: #030712; }
        .btn-amber {
            background-color: #f59e0b;
            color: #030712;
            font-weight: 700;
            border: none;
        }
        .btn-amber:hover {
            background-color: #d97706;
            color: #030712;
        }

        /* Patrón de cuadrícula del plano */
        .floorplan-grid {
            background-color: #111827;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 20px 20px;
            position: relative;
        }

        .table-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.5);
        }

        .transition-state {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Scrollbar personalizado */
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

        /* Estados de Mesas */
        .table-disponible {
            background-color: rgba(6, 78, 59, 0.8);
            color: #6ee7b7;
            border-color: rgba(16, 185, 129, 0.5) !important;
        }
        .table-disponible:hover { background-color: #065f46; }

        .table-ocupada {
            background-color: rgba(136, 19, 55, 0.8);
            color: #fda4af;
            border-color: rgba(244, 63, 94, 0.5) !important;
        }
        .table-ocupada:hover { background-color: #9f1239; }

        .table-reservada {
            background-color: rgba(120, 53, 15, 0.8);
            color: #fde047;
            border-color: rgba(245, 158, 11, 0.5) !important;
        }
        .table-reservada:hover { background-color: #92400e; }

        .table-mantenimiento {
            background-color: #1f2937;
            color: #9ca3af;
            border-color: #4b5563 !important;
        }
        .table-mantenimiento:hover { background-color: #374151; }

        .table-selected {
            box-shadow: 0 0 0 4px #f59e0b !important;
            border-color: #f59e0b !important;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="overflow-hidden vh-100 d-flex">

    <!-- BARRA LATERAL DE NAVEGACIÓN PRINCIPAL -->
    <aside class="bg-dark-sidebar border-end border-dark-custom d-flex flex-column justify-content-between flex-shrink-0" style="width: 260px;">
        <div>
            <!-- Header de Marca -->
            <div class="p-3 border-bottom border-dark-custom d-flex items-center align-items-center gap-3">
                <div class="rounded-3 bg-amber d-flex align-items-center justify-content-center text-dark font-bold shadow-sm" style="width: 40px; height: 40px; font-size: 1.2rem;">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <div>
                    <h1 class="h6 font-bold m-0 text-white fw-bold">Il Olivo</h1>
                    <span class="text-amber font-medium" style="font-size: 0.75rem;">Panel de Control</span>
                </div>
            </div>

            <!-- Enlaces de navegación -->
            <nav class="p-3">
                <div class="d-flex flex-column gap-1">
                   
                    <a href="#" class="nav-link text-amber bg-dark-card p-2.5 rounded-3 d-flex align-items-center gap-3 border border-dark-custom fw-medium">
                        <i class="fa-solid fa-layer-group text-lg" style="width: 20px;"></i>
                        <span class="fw-medium small">Distribución de Mesas</span>
                    </a>
                    <a href="#" class="nav-link text-secondary p-2.5 rounded-3 d-flex align-items-center justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-calendar-check text-lg" style="width: 20px;"></i>
                            <span class="fw-medium small">Reservas</span>
                        </div>
                        <span class="badge bg-amber rounded-pill text-dark">12</span>
                    </a>
                    <a href="#" class="nav-link text-secondary p-2.5 rounded-3 d-flex align-items-center gap-3">
                        <i class="fa-solid fa-clock text-lg" style="width: 20px;"></i>
                        <span class="fw-medium small">Horarios y Turnos</span>
                    </a>
                   
                    
                </div>
            </nav>
        </div>

        <!-- Perfil de usuario -->
        <div class="p-3 border-top border-dark-custom">
            <div class="d-flex align-items-center gap-3 p-2 bg-dark-card rounded-3 border border-dark-custom">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100" alt="Avatar" class="rounded-2 object-fit-cover" style="width: 38px; height: 38px;">
                <div class="overflow-hidden">
                    <h4 class="small fw-semibold text-white m-0 text-truncate">Sofía Torres</h4>
                    <p class="text-secondary m-0" style="font-size: 0.7rem;">Maitre / Admin</p>
                </div>
                <button class="btn btn-link text-secondary ms-auto p-0 hover-danger">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </div>
        </div>
    </aside>

    <!-- CONTENEDOR PRINCIPAL -->
    <main class="flex-grow-1 d-flex flex-column min-w-0 bg-dark-main">
        
        <!-- BARRA SUPERIOR (HEADER) -->
        <header class="border-bottom border-dark-custom px-4 d-flex align-items-center justify-content-between flex-shrink-0" style="height: 64px; background-color: rgba(17, 24, 39, 0.4);">
            <div class="d-flex align-items-center gap-3">
                <h2 class="h5 fw-bold text-white m-0">Gestor de Distribución de Mesas</h2>
                <span class="badge bg-opacity-10 bg-success text-success border border-success border-opacity-25 rounded-pill px-2.5 py-1.5 align-items-center gap-1.5 d-inline-flex">
                    <span class="spinner-grow spinner-grow-sm text-success" style="width: 6px; height: 6px;"></span>
                    Servicio Activo
                </span>
            </div>

            <!-- Acciones de cabecera -->
            <div class="d-flex align-items-center gap-3 p-2">
              

                <div class="text-end small">
                    <div class="fw-semibold text-white" id="current-date">HOY : </div>
                   {{-- <div class="text-secondary" id="current-time">HORA: {{ \Carbon\Carbon::now()->format('H:i') }}</div>--}}
                   
                    
                </div>
                <div class="text-secondary"> <input type="date" class="form-control" id="reservation_date" name="reservation_date"></div>
            </div>
        </header>

        <!-- SUBPANEL DE FILTROS Y CONTROLES -->
        <section class="p-3 border-bottom border-dark-custom d-flex flex-wrap gap-3 align-items-center justify-content-between flex-shrink-0" style="background-color: rgba(17, 24, 39, 0.2);">
            <!-- Pestañas de Zonas -->
            <div class="btn-group p-1 bg-dark-sidebar rounded-3 border border-dark-custom">
                <button onclick="setZone('salon')" id="zone-salon" class="btn btn-sm btn-dark active fw-semibold rounded-2 px-3">
                    <i class="fa-solid fa-couch me-2"></i>Salón Principal
                </button>
                
                <button onclick="setZone('mezaninne')" id="zone-mezaninne" class="btn btn-sm text-secondary fw-semibold rounded-2 px-3">
                    <i class="fa-solid fa-vihara me-2" style="color: rgb(255, 255, 255);"></i>Mezaninne
                </button>
            </div>

            <!-- Buscador y Vista Toggles -->
            <div class="d-flex align-items-center gap-2">
                <select id="filter-status" onchange="filterTables()" class="form-select form-select-sm bg-dark-sidebar border-dark-custom text-light rounded-3 shadow-none" style="width: auto;">
                    <option value="todos">Todos los estados</option>
                    <option value="disponible">Disponible</option>
                    <option value="ocupada">Ocupada</option>
                    <option value="reservada">Reservada</option>
                    <option value="mantenimiento">Mantenimiento</option>
                </select>

                <div class="btn-group p-1 bg-dark-sidebar rounded-3 border border-dark-custom">
                    <button onclick="switchView('map')" id="view-map-btn" class="btn btn-amber btn-sm rounded-2">
                        <i class="fa-solid fa-map"></i>
                    </button>
                    <button onclick="switchView('list')" id="view-list-btn" class="btn btn-sm text-secondary rounded-2">
                        <i class="fa-solid fa-list-ul"></i>
                    </button>
                </div>

                <button onclick="addNewTable()" class="btn btn-amber btn-sm rounded-3 px-3 py-2 d-flex align-items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-plus"></i> Añadir Mesa
                </button>
            </div>
        </section>

        <!-- AREA DE CONTENIDO SPLIT: MAPA/LISTA + SIDEBAR -->
        <div class="flex-grow-1 d-flex min-vh-0 position-relative overflow-hidden">
            
            <!-- VISTA MAPA INTERACTIVO -->
            <div id="view-map" class="flex-grow-1 overflow-auto p-4 d-flex align-items-center justify-content-center floorplan-grid user-select-none position-relative">
                
                <div id="floor-container" class="bg-dark-card-soft rounded-4 border border-dark-custom position-relative overflow-hidden shadow-lg" style="width: 1150px; height: 550px;">
                    
                    <div id="visual-decor-bar-1" class="position-absolute top-0 bg-dark-sidebar border-bottom border-start border-dark-custom d-flex align-items-center justify-content-center rounded-bottom-start-3 text-secondary fw-bold" style="left: 0%; width: 140px; height: 100px; font-size: 9px; letter-spacing: 2px;">
                        <span class="rotate-90">COCINA</span>
                    </div>
                    <div id="visual-decor-bar-2" class="position-absolute top-0 bg-dark-sidebar border-bottom border-start border-dark-custom d-flex align-items-center justify-content-center rounded-bottom-start-3 text-secondary fw-bold" style="left: 12.3%; width: 150px; height: 50px; font-size: 9px; letter-spacing: 2px;">
                        <span class="rotate-90">BAÑO</span>
                    </div>

                     <div id="visual-decor-bar-3" class="position-absolute bg-dark-sidebar border-bottom border-start border-dark-custom d-flex align-items-center justify-content-center rounded-bottom-start-3 text-secondary fw-bold" style="left: 12.3%; top: 9.5%; width: 150px; height: 48px; font-size: 9px; letter-spacing: 2px;">
                        <span class="rotate-90">BARRA</span>
                    </div>

                    <div id="visual-decor-kitchen-1" class="position-absolute bg-dark-sidebar border-top border-start border-end border-dark-custom d-flex align-items-center justify-content-center rounded-top-3 text-secondary fw-bold" style="left: 0%; bottom: 28%; width: 100px; height: 35px; font-size: 9px; letter-spacing: 1px;">
                        CAJA
                    </div>

                     <div id="visual-decor-kitchen-2" class="position-absolute bg-dark-sidebar border-top border-start border-end border-dark-custom d-flex align-items-center justify-content-center rounded-top-3 text-secondary fw-bold" style="left: 0%; bottom: 17%; width: 100%; height: 55px; font-size: 12px; letter-spacing: 1px;">
                        AREA DE BALCONES
                    </div>

                     <div id="visual-divisor-1" class="position-absolute bg-dark-sidebar border-top border-start border-end border-dark-custom d-flex align-items-center justify-content-center rounded-top-3 text-secondary fw-bold" style="left: 0%; bottom: 0%; width: 100%; height: 40%; font-size: 12px; letter-spacing: 1px;">
                        
                    </div>

                    <div id="visual-divisor-2" class="position-absolute bg-dark-sidebar border-top border-start border-end border-dark-custom d-flex align-items-center justify-content-center rounded-top-3 text-secondary fw-bold" style="left: 50%; top:0%; width: 50%; height: 20%; font-size: 12px; letter-spacing: 1px;">
                       
                    </div>


                   

                    <div id="interactive-map" class="position-absolute inset-0 w-100 h-100">
                        
                    </div>
                </div>
            </div>

            <!-- VISTA EN TABLA/LISTA -->
            <div id="view-list" class="flex-grow-1 overflow-y-auto p-4 d-none">
                <div class="max-w-4xl mx-auto bg-dark-card rounded-4 border border-dark-custom overflow-hidden shadow">
                    <table class="table table-dark table-hover align-middle mb-0">
                        <thead class="bg-dark-sidebar border-bottom border-dark-custom text-secondary text-uppercase" style="font-size: 0.75rem;">
                            <tr>
                                <th class="py-3 px-4">Mesa</th>
                                <th class="py-3 px-4">Zona</th>
                                <th class="py-3 px-4">Capacidad</th>
                                <th class="py-3 px-4">Forma</th>
                                <th class="py-3 px-4">Estado Actual</th>
                                <th class="py-3 px-4 text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="list-tables-body" class="border-top-0 small">
                            <!-- Dinámico -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- PANEL LATERAL DERECHO (Detalles) -->
            <aside class="bg-dark-sidebar border-start border-dark-custom d-flex flex-column justify-content-between flex-shrink-0 overflow-y-auto" style="width: 360px;">
                <div class="p-4">
                    <div class="d-flex align-items-center justify-content-between border-bottom border-dark-custom pb-3 mb-4">
                        <div>
                            <h3 class="fw-bold text-white h6 m-0">Configuración de Mesa</h3>
                           
                        </div>
                        <span id="id_mesa" class="badge bg-dark border border-dark-custom text-secondary">ID Único</span>
                    </div>

                    <div id="empty-state-sidebar" class="py-5 text-center">
                        <div class="rounded-circle bg-dark-card d-flex align-items-center justify-content-center text-secondary mx-auto mb-3 border border-dark-custom" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-hand-pointer fs-4"></i>
                        </div>
                        <p class="small text-secondary px-4 m-0">Selecciona una mesa en el plano para editar sus propiedades.</p>
                    </div>

                    <div id="editor-form-sidebar" class="d-none">
                       {{-- <div class="row g-3 mb-4">
                            <div class="col-6">
                                <label class="form-label text-secondary fw-bold text-uppercase" style="font-size: 0.65rem;">Etiqueta/No.</label>
                                <input type="text" id="edit-table-number" oninput="saveLiveChanges()" class="form-control bg-dark-card border-dark-custom text-white fw-bold shadow-none">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-secondary fw-bold text-uppercase" style="font-size: 0.65rem;">Comensales Máx.</label>
                                <div class="input-group bg-dark-card border border-dark-custom rounded-3 overflow-hidden">
                                    <button onclick="adjustCapacity(-1)" class="btn btn-sm btn-dark text-secondary border-0"><i class="fa-solid fa-minus text-xs"></i></button>
                                    <input type="number" id="edit-table-capacity" min="1" max="12" readonly class="form-control form-control-sm bg-transparent border-0 text-center text-white fw-bold shadow-none">
                                    <button onclick="adjustCapacity(1)" class="btn btn-sm btn-dark text-secondary border-0"><i class="fa-solid fa-plus text-xs"></i></button>
                                </div>
                            </div>
                        </div>--}}

                        <div class="mb-4">
                            <label class="form-label text-secondary fw-bold text-uppercase" style="font-size: 0.65rem;">Estado de la Mesa</label>
                            <div class="row g-2" id="status-button-group">
                                <div class="col-6">
                                    <button onclick="setTableStatus('disponible')" id="status-btn-disponible" class="btn btn-outline-secondary w-100 btn-sm text-start p-2 d-flex align-items-center gap-2">
                                        <span class="rounded-circle bg-success d-inline-block" style="width: 8px; height: 8px;"></span>
                                        Disponible
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button onclick="setTableStatus('ocupada')" id="status-btn-ocupada" class="btn btn-outline-secondary w-100 btn-sm text-start p-2 d-flex align-items-center gap-2">
                                        <span class="rounded-circle bg-danger d-inline-block" style="width: 8px; height: 8px;"></span>
                                        Ocupada
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button onclick="setTableStatus('reservada')" id="status-btn-reservada" class="btn btn-outline-secondary w-100 btn-sm text-start p-2 d-flex align-items-center gap-2">
                                        <span class="rounded-circle bg-warning d-inline-block" style="width: 8px; height: 8px;"></span>
                                        Reservada
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button onclick="setTableStatus('mantenimiento')" id="status-btn-mantenimiento" class="btn btn-outline-secondary w-100 btn-sm text-start p-2 d-flex align-items-center gap-2">
                                        <span class="rounded-circle bg-secondary d-inline-block" style="width: 8px; height: 8px;"></span>
                                        Bloqueada
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-6">
                               {{-- <label class="form-label text-secondary fw-bold text-uppercase" style="font-size: 0.65rem;">Forma</label>
                                <div class="btn-group w-100 p-1 bg-dark-card rounded-3 border border-dark-custom">
                                    <button onclick="setTableShape('square')" id="shape-btn-square" class="btn btn-sm btn-dark fw-semibold text-xs">Cuadrada</button>
                                    <button onclick="setTableShape('round')" id="shape-btn-round" class="btn btn-sm text-secondary fw-semibold text-xs">Redonda</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label text-secondary fw-bold text-uppercase" style="font-size: 0.65rem;">Sala / Zona</label>
                                <select id="edit-table-zone" onchange="saveLiveChanges()" class="form-select form-select-sm bg-dark-card border-dark-custom text-white shadow-none">
                                    <option value="salon">Salón Principal</option>
                                    <option value="terraza">Terraza Exterior</option>
                                    
                                </select>--}}
                            </div>
                        </div>

                        <div class="border-top border-dark-custom pt-4">
                            <h4 class="text-secondary fw-bold text-uppercase mb-3 d-flex align-items-center gap-2" style="font-size: 0.7rem;">
                                <i class="fa-solid fa-calendar text-amber"></i> Reservas para hoy
                            </h4>
                            <div class="d-flex flex-column justify-content-center" id="sidebar-reservation-list"></div>
                        </div>
                    </div>
                </div>
               
               {{-- <div class="p-4 border-top border-dark-custom bg-dark-sidebar sticky-bottom">
                    <button onclick="deleteSelectedTable()" id="btn-delete-table" class="btn btn-outline-danger w-100 fw-bold py-2 ">
                        <i class="fa-solid fa-trash-can me-2"></i>Eliminar Mesa
                    </button>
                </div>--}}
            </aside>
        </div> 

        <!-- FOOTER KPIS -->
        <footer class="border-top border-dark-custom px-4 d-flex align-items-center justify-content-between flex-shrink-0 bg-dark-sidebar" style="height: 56px; font-size: 0.75rem;">
            <div class="d-flex align-items-center gap-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="rounded-circle bg-success d-inline-block" style="width: 8px; height: 8px;"></span>
                    <span class="text-secondary">Disponible (<span id="lbl-count-disponibles">0</span>)</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="rounded-circle bg-danger d-inline-block" style="width: 8px; height: 8px;"></span>
                    <span class="text-secondary">Ocupada (<span id="lbl-count-ocupadas">0</span>)</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="rounded-circle bg-warning d-inline-block" style="width: 8px; height: 8px;"></span>
                    <span class="text-secondary">Reservada (<span id="lbl-count-reservadas">0</span>)</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="rounded-circle bg-secondary d-inline-block" style="width: 8px; height: 8px;"></span>
                    <span class="text-secondary">Bloqueada (<span id="lbl-count-mantenimiento">0</span>)</span>
                </div>
            </div>

            <div class="d-flex gap-4 align-items-center">
                <div>
                    <span class="text-secondary text-uppercase">Capacidad Total:</span>
                    <span class="text-white fw-bold ms-1" id="lbl-total-seats">0 pax</span>
                </div>
                <div>
                    <span class="text-secondary text-uppercase">Ocupación:</span>
                    <span class="text-amber fw-bold ms-1" id="lbl-occupancy-rate">0%</span>
                </div>
            </div>
        </footer>
    </main>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/js-mesas/reservas-fetch.js"></script>
    <!-- JAVASCRIPT LOGIC -->
    <script>
        
        //MESAS SALON PRINCIPAL 
        let tables = [];
       
        async function getTables() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    try {
        const response = await fetch('/listar_mesas', { // Cambia esta URL por la ruta GET de tu controlador en Laravel
            method: 'GET',
            headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
            }
        });

        if (!response.ok) {
            throw new Error(`Error HTTP! Estado: ${response.status}`);
        }

        // Asignamos la respuesta en formato JSON a la variable let tables
       tables= await response.json();

        // Convertimos el objeto en un array si es necesario
        
        console.log('Mesas cargadas correctamente json:', tables);
        
        // Aquí puedes llamar a la función que dibuje o procese las mesas en tu interfaz
         renderActiveView();

    } catch (error) {
        console.error('Error al obtener las mesas:', error);
    }
}

    async function storeTables() {
    // Obtenemos el token CSRF desde el meta tag de Laravel (asegúrate de que exista en tu HTML)
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    for (const table of tables) {
        try {
            const response = await fetch('/guardar_mesas', { // Cambia '/api/tables' por tu ruta en Laravel
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(table)
            });

            if (!response.ok) {
                throw new Error(`Error en la petición: ${response.statusText}`);
            }

            const data = await response.json();
            console.log(`Mesa ${table.number} guardada con éxito:`, data);

        } catch (error) {
            console.error(`Error guardando la mesa ${table.number}:`, error);
        }
    }
    
    console.log("¡Proceso completado!");
}

        const hoy = new Date();
  
        // 2. La formateamos como AAAA-MM-DD
        const anio = hoy.getFullYear();
        // El mes empieza en 0 (enero), por lo que sumamos 1 y aseguramos dos dígitos
        const mes = String(hoy.getMonth() + 1).padStart(2, '0'); 
        const dia = String(hoy.getDate()).padStart(2, '0');
        
        const fechaMinima = `${anio}-${mes}-${dia}`;
        
        // 3. Le asignamos ese valor al atributo 'min' del input
        // Establece la fecha actual como valor predeterminado
        document.getElementById('reservation_date').min = fechaMinima;
        


       
        let selectedTableId = null;
        let activeZone = "salon";
        let activeView = "map";
        let activeShift = "almuerzo";
        let draggingElement = null;
        let dragOffset = { x: 0, y: 0 };
          
        window.addEventListener('DOMContentLoaded', () => {
            getTables();
            renderActiveView();
            updateDailyKPIs();          
            
        });

        function setZone(zoneName) {
            activeZone = zoneName; 
             
                 ['salon','mezaninne'].forEach(z => {
               
                const btn = document.getElementById(`zone-${z}`);
                if (z === zoneName) {
                    btn.className = "btn btn-sm btn-dark active fw-semibold rounded-2 px-3";
                } else {
                    btn.className = "btn btn-sm text-secondary fw-semibold rounded-2 px-3";
                }          

            });       
                deselectTable();
                renderActiveView();           
            } 
       

        function switchView(viewName) {
            activeView = viewName;
            const mapBtn = document.getElementById('view-map-btn');
            const listBtn = document.getElementById('view-list-btn');
            const mapView = document.getElementById('view-map');
            const listView = document.getElementById('view-list');

            if (viewName === 'map') {
                mapBtn.className = "btn btn-amber btn-sm rounded-2";
                listBtn.className = "btn btn-sm text-secondary rounded-2";
                mapView.classList.remove('d-none');
                listView.classList.add('d-none');
            } else {
                listBtn.className = "btn btn-amber btn-sm rounded-2";
                mapBtn.className = "btn btn-sm text-secondary rounded-2";
                listView.classList.remove('d-none');
                mapView.classList.add('d-none');
            }
            renderActiveView();
        }

      /*  function setShift(shiftName) {
            activeShift = shiftName;
            const lunchBtn = document.getElementById('btn-lunch');
            const dinnerBtn = document.getElementById('btn-dinner');
            const timeLabel = document.getElementById('current-time');

            if (shiftName === 'almuerzo') {
                lunchBtn.className = "btn btn-amber btn-sm rounded-2 px-3 py-1 text-xs fw-semibold";
                dinnerBtn.className = "btn btn-sm text-secondary rounded-2 px-3 py-1 text-xs fw-semibold";
                timeLabel.innerText = "Turno actual: 13:00 - 16:30";
            } else {
                dinnerBtn.className = "btn btn-amber btn-sm rounded-2 px-3 py-1 text-xs fw-semibold";
                lunchBtn.className = "btn btn-sm text-secondary rounded-2 px-3 py-1 text-xs fw-semibold";
                timeLabel.innerText = "Turno actual: 20:00 - 23:45";
            }
        }*/

        function renderActiveView() {
            if (activeView === 'map') {
                renderFloorplan();
            } else {
                renderTableList();
            }
        }

        function renderFloorplan() {
            const container = document.getElementById('interactive-map');
            container.innerHTML = '';

            const zoneTables = tables.filter(t => t.zone === activeZone);
              if (activeZone === 'mezaninne') {
                document.getElementById('visual-decor-bar-1').classList.add('d-none');
                document.getElementById('visual-decor-bar-2').classList.add('d-none');
                document.getElementById('visual-decor-bar-3').classList.add('d-none');
                document.getElementById('visual-decor-kitchen-1').classList.add('d-none');
                document.getElementById('visual-decor-kitchen-2').classList.add('d-none');
                document.getElementById('visual-divisor-1').classList.remove('d-none');
                document.getElementById('visual-divisor-2').classList.remove('d-none');
            } else if (activeZone === 'salon') {
                    document.getElementById('visual-decor-bar-1').classList.remove('d-none');
                     document.getElementById('visual-decor-bar-2').classList.remove('d-none');
                     document.getElementById('visual-decor-bar-3').classList.remove('d-none');
                     document.getElementById('visual-decor-kitchen-1').classList.remove('d-none');
                     document.getElementById('visual-decor-kitchen-2').classList.remove('d-none');
                     document.getElementById('visual-divisor-1').classList.add('d-none');
                     document.getElementById('visual-divisor-2').classList.add('d-none');
            }
            zoneTables.forEach(table => {
                const tableEl = document.createElement('div');
                tableEl.id = `map-table-${table.id}`;
                tableEl.style.position = 'absolute';
                tableEl.style.cursor = 'grab';
                tableEl.className = `table-shadow transition-state d-flex flex-column align-items-center justify-content-center p-2 border border-2 user-select-none `;

                if (table.shape === 'round') {
                    tableEl.classList.add('rounded-circle');
                } else {
                    tableEl.classList.add('rounded-4');
                }

                let sizeStyle = { width: '100px', height: '80px', fontSize: '0.75rem' };
                if (table.capacity <= 2) {
                    sizeStyle = { width: '120px', height: '65px', fontSize: '0.7rem' };
                } else if (table.capacity === 4) {
                    sizeStyle = { width: '130px', height: '100px', fontSize: '0.85rem' };
                } else if (table.capacity === 6) {
                    sizeStyle = { width: '110px', height: '150px', fontSize: '0.85rem' };
                } else if (table.capacity === 7) {
                    sizeStyle = { width: '150px', height: '110px', fontSize: '1rem' };
                }
                
                Object.assign(tableEl.style, sizeStyle);
                tableEl.classList.add(`table-${table.status}`);

                if (table.id === selectedTableId) {
                    tableEl.classList.add('table-selected');
                }

                tableEl.style.left = `${table.x}px`;
                tableEl.style.top = `${table.y}px`;

                let chairsHTML = '';
                for(let i=1; i<=table.capacity; i++) {
                    chairsHTML += `<span class="d-inline-block rounded-circle bg-current opacity-75 mx-0.5" style="width: 5px; height: 5px;"></span>`;
                }

                tableEl.innerHTML = `
                    <div class="fw-bold text-white mb-1 leading-none">${table.number}</div>
                    <div class="fw-semibold opacity-75 mb-1" style="font-size: 9px;">${table.capacity} Pax</div>
                    <div class="d-flex align-items-center justify-content-center">${chairsHTML}</div>
                `;

                tableEl.addEventListener('click', (e) => {
                    e.stopPropagation();
                    selectTable(table.id);
                });

                tableEl.addEventListener('mousedown', (e) => {
                    if (e.button !== 0) return;
                    draggingElement = table;
                    const rect = tableEl.getBoundingClientRect();
                    dragOffset.x = e.clientX - rect.left;
                    dragOffset.y = e.clientY - rect.top;
                    tableEl.classList.remove('transition-state');
                    tableEl.style.cursor = 'grabbing';
                });

                container.appendChild(tableEl);
            });
        }

        document.addEventListener('mousemove', (e) => {
            if (!draggingElement) return;

            const floorContainer = document.getElementById('floor-container');
            const containerRect = floorContainer.getBoundingClientRect();
            
            let newX = e.clientX - containerRect.left - dragOffset.x;
            let newY = e.clientY - containerRect.top - dragOffset.y;

            const tableEl = document.getElementById(`map-table-${draggingElement.id}`);
            const tableWidth = tableEl.offsetWidth;
            const tableHeight = tableEl.offsetHeight;

            newX = Math.max(0, Math.min(newX, containerRect.width - tableWidth));
            newY = Math.max(0, Math.min(newY, containerRect.height - tableHeight));

            newX = Math.round(newX / 10) * 10;
            newY = Math.round(newY / 10) * 10;

            draggingElement.x = newX;
            draggingElement.y = newY;

            tableEl.style.left = `${newX}px`;
            tableEl.style.top = `${newY}px`;
        });

        document.addEventListener('mouseup', () => {
            if (draggingElement) {
                const tableEl = document.getElementById(`map-table-${draggingElement.id}`);
                if (tableEl) {
                    tableEl.classList.add('transition-state');
                    tableEl.style.cursor = 'grab';
                }
                draggingElement = null;
            }
        });

        function filterTables() {
            renderActiveView();
        }

        function renderTableList() {
            const tbody = document.getElementById('list-tables-body');
            tbody.innerHTML = '';

            const statusFilter = document.getElementById('filter-status').value;
            let filtered = tables.filter(t => t.zone === activeZone);
            
            if (statusFilter !== 'todos') {
                filtered = filtered.filter(t => t.status === statusFilter);
            }

            if (filtered.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="6" class="py-5 text-center text-secondary">
                            <i class="fa-solid fa-triangle-exclamation fs-3 mb-2 d-block"></i>
                            No se encontraron mesas que coincidan con los filtros.
                        </td>
                    </tr>
                `;
                return;
            }

            filtered.forEach(table => {
                let statusBadge = "";
                if (table.status === 'disponible') {
                    statusBadge = `<span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill"><span class="d-inline-block rounded-circle bg-success me-1" style="width:6px;height:6px;"></span>Disponible</span>`;
                } else if (table.status === 'ocupada') {
                    statusBadge = `<span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 rounded-pill"><span class="d-inline-block rounded-circle bg-danger me-1" style="width:6px;height:6px;"></span>Ocupada</span>`;
                } else if (table.status === 'reservada') {
                    statusBadge = `<span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25 rounded-pill"><span class="d-inline-block rounded-circle bg-warning me-1" style="width:6px;height:6px;"></span>Reservada</span>`;
                } else {
                    statusBadge = `<span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25 rounded-pill"><span class="d-inline-block rounded-circle bg-secondary me-1" style="width:6px;height:6px;"></span>Bloqueada</span>`;
                }

                const isSelected = table.id === selectedTableId;
                const tr = document.createElement('tr');
                tr.className = isSelected ? "table-active text-white" : "";
                tr.style.cursor = "pointer";
                tr.onclick = () => selectTable(table.id);
                tr.innerHTML = `
                    <td class="py-3 px-4 fw-bold text-white">${table.number}</td>
                    <td class="py-3 px-4 text-capitalize">${table.zone}</td>
                    <td class="py-3 px-4 fw-semibold">${table.capacity} pax</td>
                    <td class="py-3 px-4 text-capitalize">${table.shape === 'round' ? 'Redonda' : 'Cuadrada'}</td>
                    <td class="py-3 px-4">${statusBadge}</td>
                    <td class="py-3 px-4 text-end">
                        <button onclick="selectTable(${table.id})" class="btn btn-sm btn-link text-secondary p-0">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        function selectTable(id) {
            selectedTableId = id;
            const table = tables.find(t => t.id === id);

            renderActiveView();
            document.getElementById('id_mesa').innerText = `ID MESA: ${table.id}`;
            document.getElementById('empty-state-sidebar').classList.add('d-none');
            document.getElementById('editor-form-sidebar').classList.remove('d-none');
            //document.getElementById('btn-save-asignation').classList.remove('d-none');
            //document.getElementById('btn-delete-asignation').classList.remove('d-none');
            
            //document.getElementById('edit-table-number').value = table.number;
            //document.getElementById('edit-table-capacity').value = table.capacity;
            //document.getElementById('edit-table-zone').value = table.zone;

            updateStatusButtonsInSidebar(table.status);
            updateShapeButtonsInSidebar(table.shape);

            const reservationContainer = document.getElementById('sidebar-reservation-list');
            reservationContainer.innerHTML = '';

            const listReservations = dummyReservations[table.status] || [];
            if (listReservations.length === 0) {
                reservationContainer.innerHTML = `
                    <div class="p-3 bg-dark-card border border-dark-custom rounded-3 text-center text-secondary small">
                        No hay reservas agendadas hoy.
                    </div>
                `;
            } else {
                listReservations.forEach(res => {
                    let badgeClass = "bg-warning bg-opacity-10 text-warning border-warning";
                    if(res.status === "Sentado") badgeClass = "bg-success bg-opacity-10 text-success border-success";

                    reservationContainer.innerHTML += `
                        <div class="p-3 bg-dark-card border border-dark-custom rounded-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="small fw-bold text-white m-0">${res.guest}</h5>
                                <div class="d-flex align-items-center gap-2 mt-1 text-secondary" style="font-size: 0.7rem;">
                                    <span><i class="fa-solid fa-clock me-1"></i>${res.time}</span>
                                    <span>•</span>
                                    <span>${res.pax} Pax</span>
                                </div>
                            </div>
                            <span class="badge border ${badgeClass}" style="font-size: 0.65rem;">${res.status}</span>
                        </div>
                    `;
                });
            }
        }

        function deselectTable() {
            selectedTableId = null;
            document.getElementById('empty-state-sidebar').classList.remove('d-none');
            document.getElementById('editor-form-sidebar').classList.add('d-none');
            //document.getElementById('btn-save-asignation').classList.add('d-none');
            //document.getElementById('btn-delete-asignation').classList.add('d-none');
            document.getElementById('id_mesa').innerHTML = '';
            renderActiveView();
        }

        function setTableStatus(status) {
            if (!selectedTableId) return;
            const table = tables.find(t => t.id === selectedTableId);
            table.status = status;
            
            updateStatusButtonsInSidebar(status);
            renderActiveView();
            updateDailyKPIs();
            selectTable(selectedTableId);
        }

        function updateStatusButtonsInSidebar(status) {
            const btns = {
                disponible: document.getElementById('status-btn-disponible'),
                ocupada: document.getElementById('status-btn-ocupada'),
                reservada: document.getElementById('status-btn-reservada'),
                mantenimiento: document.getElementById('status-btn-mantenimiento')
            };

            Object.keys(btns).forEach(key => {
                if (key === status) {
                    let activeClass = "btn-dark border-light text-white";
                    if (key === 'disponible') activeClass = "btn-outline-success active";
                    if (key === 'ocupada') activeClass = "btn-outline-danger active";
                    if (key === 'reservada') activeClass = "btn-outline-warning active";
                    if (key === 'mantenimiento') activeClass = "btn-outline-secondary active";
                    btns[key].className = `btn w-100 btn-sm text-start p-2 d-flex align-items-center gap-2 ${activeClass}`;
                } else {
                    btns[key].className = "btn btn-outline-secondary w-100 btn-sm text-start p-2 d-flex align-items-center gap-2 text-secondary";
                }
            });
        }

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
                btnSquare.className = "btn btn-sm btn-dark text-white fw-semibold text-xs";
                btnRound.className = "btn btn-sm text-secondary fw-semibold text-xs";
            } else {
                btnRound.className = "btn btn-sm btn-dark text-white fw-semibold text-xs";
                btnSquare.className = "btn btn-sm text-secondary fw-semibold text-xs";
            }
        }

        function saveLiveChanges() {
            if (!selectedTableId) return;
            const table = tables.find(t => t.id === selectedTableId);
            table.number = document.getElementById('edit-table-number').value.trim() || table.id.toString();
            
            const prevZone = table.zone;
            const newZone = document.getElementById('edit-table-zone').value;
            table.zone = newZone;

            renderActiveView();
        }

        function addNewTable() {
            const nextId = tables.length > 0 ? Math.max(...tables.map(t => t.id)) + 1 : 1;
            
            let letter = "M";
            if (activeZone === 'mezaninne') letter = "M";
           // if (activeZone === 'barra') letter = "B";

            const newTable = {
                id: nextId,
                number: `${letter}${nextId}`,
                capacity: activeZone === 'barra' ? 1 : 4,
                shape: activeZone === 'barra' ? "round" : "square",
                status: "disponible",
                zone: activeZone,
                x: 150 + (Math.random() * 80),
                y: 150 + (Math.random() * 80)
            };

            tables.push(newTable);
            renderActiveView();
            updateDailyKPIs();
            selectTable(newTable.id);
        }

        function deleteSelectedTable() {
            if (!selectedTableId) return;
            if (confirm("¿Estás seguro de que deseas eliminar permanentemente esta mesa de la distribución?")) {
                tables = tables.filter(t => t.id !== selectedTableId);
                deselectTable();
                updateDailyKPIs();
            }
        }

        function updateDailyKPIs() {
            const zoneTables = tables.filter(t => t.zone === activeZone);

            const countDisponible = zoneTables.filter(t => t.status === 'disponible').length;
            const countOcupada = zoneTables.filter(t => t.status === 'ocupada').length;
            const countReservada = zoneTables.filter(t => t.status === 'reservada').length;
            const countMantenimiento = zoneTables.filter(t => t.status === 'mantenimiento').length;

            document.getElementById('lbl-count-disponibles').innerText = countDisponible;
            document.getElementById('lbl-count-ocupadas').innerText = countOcupada;
            document.getElementById('lbl-count-reservadas').innerText = countReservada;
            document.getElementById('lbl-count-mantenimiento').innerText = countMantenimiento;

            const totalSeats = zoneTables.reduce((sum, t) => sum + (t.status !== 'mantenimiento' ? t.capacity : 0), 0);
            document.getElementById('lbl-total-seats').innerText = `${totalSeats} pax`;

            const operativas = zoneTables.filter(t => t.status !== 'mantenimiento').length;
            const ocupadas = zoneTables.filter(t => t.status === 'ocupada').length;
            const rate = operativas > 0 ? Math.round((ocupadas / operativas) * 100) : 0;
            document.getElementById('lbl-occupancy-rate').innerText = `${rate}%`;
        }
    </script>
</body>
</html>