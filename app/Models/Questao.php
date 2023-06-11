<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Questao extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'questoes';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'tipo_perfil',
        'enunciado',
        'resposta',
    ];

    /**
     * Os atributos que devem ser ocultados durante a serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * Os atributos que devem ser convertidos para tipos específicos.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];
}
