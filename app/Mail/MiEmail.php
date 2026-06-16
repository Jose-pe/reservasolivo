<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Reserva;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MiEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $reserva;

    public function __construct(Reserva $reserva)
    {
        $this->reserva = $reserva;
    }

    /**
     * Aquí defines el asunto (Subject) y a quién va dirigido si fuera necesario.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Il Olivo Confirmación de Reserva #' . $this->reserva->id,
        );
    }

    /**
     * Aquí defines la vista Blade que va a renderizar el correo.
     */
    public function content(): Content
    {
        return new Content(
            view: 'reservas_email_confirmacion',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
