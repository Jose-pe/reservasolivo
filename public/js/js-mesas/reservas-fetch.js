const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

 async function get_reservations() {

    
        const response = await fetch('/mostrar_reservas_confirmadas', { // Cambia esta URL por la ruta GET de tu controlador en Laravel
            method: 'GET',
            headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
            }
        });

        if (!response.ok) {
            throw new Error('Error HTTP! Estado: ${response.status}');
        }

        reservations= await response.json();
       document.getElementById('sidebar-reservation-list').innerHTML = reservations.map(reservation => `
                <div class="card text-white bg-dark mb-3" style="max-width: 22rem;">
                <div class="card-header me-2"><i class="fa-solid fa-user me-2" style="color: rgb(255, 255, 255);"></i> ${reservation.name}  <span class="badge badge bg-secondary text-white mr-2"><i class="fa-solid fa-hashtag mr-2" style="color: rgb(255, 255, 255);"> </i>  ${reservation.id}</div>
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-calendar me-2" style="color: rgb(255, 255, 255);"></i>${reservation.reservation_date}</h5>                    
                    <p class="card-text"> <i class="fa-solid fa-clock me-2 mt-1" style="color: rgb(255, 255, 255);"></i> ${reservation.reservation_time}</p>
                    <span class="badge bg-success text-white me-1"><i class="fa-solid fa-users me-2" style="color: rgb(250, 250, 250);"></i>Comensales: ${reservation.guests}</span>  <span class="badge bg-success text-white mr-2"><i class="fa-solid fa-baby me-2" style="color: rgb(255, 255, 255);"></i>Niños: ${reservation.kids_count}</span><br> 
                    <span class="badge bg-warning text-dark mt-2 me-1"><i class="fa-solid fa-utensils me-2" style="color: rgb(0, 0, 0);"></i>${reservation.service}</span>
                    <span class="badge bg-warning text-dark mt-2"><i class="fa-solid fa-tag me-2" style="color: rgb(0, 0, 0);"></i>${reservation.label}</span> <br>
                    <span class="badge bg-warning text-dark mt-2"><i class="fa-solid fa-cake-candles me-2" style="color: rgb(0, 0, 0);"></i>${reservation.special_time}</span>
                    </div>
                <div class="card-footer border-success align-items-center d-flex justify-content-between">
                <button type="button" class="btn btn-success btn-sm me-2"><i class="fa-solid fa-floppy-disk me-2" style="color: rgb(255, 255, 255);"></i>Asignar</button>
                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can me-2" style="color: rgb(255, 255, 255);"></i>Quitar</button>
                </div>
                </div>`);
             
                
        
        console.log('Reservas cargadas correctamente json:', reservations);
        
        
    
}

get_reservations();