<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
	use Notifiable;
	public $table='login';
	protected $fillable=[
		'username','password', 'sebagai', 'no_hp', 'alamat',
	];
}