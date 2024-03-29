<?php
namespace App\Mail;
use App\Services\CalendarGenerator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrainingUser extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($data)
  {
    $this->data = $data;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    //$calendar = CalendarGenerator::user($this->data, 'd.m.Y');
    return $this->from(['address' => \Config::get('custom.email.from'), 'name' => \Config::get('custom.company')])
                ->subject('Bestätigung Terminanfrage Produkteschulung')
                ->with(['data' => $this->data])
                //->attach($calendar, ['mime' => "text/calendar"])
                ->markdown('mail.training-user');
  }
}
