const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

// Buscamos todos los elementos que su ID comience con "map-table-"
let mesas = document.querySelectorAll('[id^="map-table-"]');

// Recorremos la lista y le agregamos un evento a cada uno
mesas.forEach(function(mesa) {
    mesa.addEventListener("click", function() {
        
        // 'this' hace referencia a la mesa específica a la que se le hizo clic
        let idCompleto = this.id; // Ejemplo: "map-table-15"
        
        // Si solo quieres el número (ej: "15"), puedes separarlo así:
        let idNumero = this.id.split('-')[2]; 
        
        console.log("Hiciste clic en la mesa número:", idNumero);
        
        // Aquí puedes actualizar el texto de tu otro elemento si lo necesitas:
       
    });
});

let id_mesa = document.getElementById("id_mesa").innerText;
let id_reserva= document.getElementById("id_reserva").innerText;
let reservation_date = document.getElementById("reservation_date").innerText;
let reservation_time = document.getElementById("reservation_time").innerText;

function obtenerEstadoActivo() {
    // Definimos los nombres exactos de los estados según los IDs de tus botones
    const estados = ['disponible', 'ocupada', 'reservado'];

    // Recorremos cada estado
    for (let estado of estados) {
        let boton = document.getElementById("status-btn-" + estado);
        
        // Verificamos si el botón existe y si tiene la clase 'active'
        if (boton && boton.classList.contains("active")) {
            return estado; // Si está activo, devolvemos el estado (ej: 'disponible') y salimos de la función
        }
    }

    // Si termina el ciclo y no encontró ninguno activo, devuelve null
    console.log("Ningún botón está activo");
    return null; 
}

// --- ¿Cómo usar la función? ---
let estadoActual = obtenerEstadoActivo();

if (estadoActual) {
     estadoActual;
    // Aquí ya puedes usar la variable "estadoActual" para guardarlo en base de datos, etc.
}

let detalle_reserva={

    id_mesa: idNumero,
    id_reserva: id_reserva,
    reservation_date: reservation_date,
    reservation_time: reservation_time ,
    state_atention: "Pendiente",
    state_mesa: estadoActual,

};

 console.log(detalle_reserva);


  async function store_detalle_reserva() {
    // Obtenemos el token CSRF desde el meta tag de Laravel (asegúrate de que exista en tu HTML)
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    
        try {
            const response = await fetch('/detalle_reservas_guardar', { // Cambia '/api/tables' por tu ruta en Laravel
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(detalle_reserva)
            });

            if (!response.ok) {
                throw new Error(`Error en la petición: ${response.statusText}`);
            }

            const data = await response.json();
            console.log(data);

        } catch (error) {
            console.error('Error guardando el detalle de reserva', error);
        }
    
    
    console.log("¡Proceso completado!");
}