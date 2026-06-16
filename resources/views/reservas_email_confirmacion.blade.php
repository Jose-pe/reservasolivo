<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Confirmación de Reserva</title>
</head>
<body style="background-color: #f8f9fa; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; padding: 20px; color: #212529;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border: 1px solid #dee2e6; overflow: hidden;">
        
        <!-- Encabezado / Header -->
        <div style="background-color: #0d6efd; padding: 20px; text-align: center; color: #ffffff;">
            <h1 style="margin: 0; font-size: 24px; font-weight: 600;">¡Tu reserva está {{ $reserva->state }}!</h1>
            <p style="margin: 5px 0 0 0; font-size: 14px; opacity: 0.9;">Código de Reserva: #{{ $reserva->id }}</p>
        </div>

        <div style="padding: 24px;">
            
            <!-- Datos del Cliente -->
            <h2 style="font-size: 18px; color: #495057; border-bottom: 2px solid #dee2e6; padding-bottom: 8px; margin-top: 0; margin-bottom: 15px;">Datos del Cliente</h2>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 25px;">
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d; width: 30%;">Nombre:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d;">Email:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->email }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d;">Teléfono:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->phone }}</td>
                </tr>
            </table>

            <!-- Detalles de la Cita -->
            <h2 style="font-size: 18px; color: #495057; border-bottom: 2px solid #dee2e6; padding-bottom: 8px; margin-top: 0; margin-bottom: 15px;">Detalles del Servicio</h2>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 25px;">
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d; width: 30%;">Fecha:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ \Carbon\Carbon::parse($reserva->reservation_date)->format('d/m/Y') }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d;">Hora:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->reservation_time }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d;">Servicio:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->service }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d;">Etiqueta:</td>
                    <td style="padding: 6px 0;">
                        <span style="background-color: #e9ecef; color: #495057; padding: 3px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">
                            {{ $reserva->label }}
                        </span>
                    </td>
                </tr>
            </table>

            <!-- Acompañantes -->
            <h2 style="font-size: 18px; color: #495057; border-bottom: 2px solid #dee2e6; padding-bottom: 8px; margin-top: 0; margin-bottom: 15px;">Asistencia</h2>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 25px;">
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d; width: 30%;">Adultos:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->guests }}</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0; font-weight: bold; color: #6c757d;">Niños:</td>
                    <td style="padding: 6px 0; color: #212529;">{{ $reserva->kids_count }}</td>
                </tr>
            </table>

            <!-- Notas / Descripción -->
            <h2 style="font-size: 18px; color: #495057; border-bottom: 2px solid #dee2e6; padding-bottom: 8px; margin-top: 0; margin-bottom: 15px;">Notas de Alimentación</h2>
            <div style="background-color: #f8f9fa; border: 1px solid #dee2e6; padding: 15px; border-radius: 4px; color: #495057; font-size: 14px; line-height: 1.5; margin-bottom: 30px;">
                {{ $reserva->food_description ?? 'Sin especificaciones alimentarias.' }}
            </div>

            <!-- Botón de Acción -->
            <div style="text-align: center; margin-top: 10px; margin-bottom: 10px;">
                <a href="{{ url('/reservas/' . $reserva->id . '/gestionar') }}" 
                   style="background-color: #dc3545; color: #ffffff; padding: 12px 24px; text-decoration: none; font-weight: bold; border-radius: 4px; display: inline-block; font-size: 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.15);">
                    Gestionar o Cancelar Reserva
                </a>
            </div>

        </div>

        <!-- Pie de página / Footer -->
        <div style="background-color: #f8f9fa; border-top: 1px solid #dee2e6; padding: 15px; text-align: center; font-size: 12px; color: #6c757d;">
            <p style="margin: 0;">Gracias por confiar en nuestros servicios.</p>
            <p style="margin: 5px 0 0 0;">Este es un correo automático, por favor no lo respondas.</p>
        </div>

    </div>

</body>
</html>