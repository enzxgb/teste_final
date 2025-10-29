<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';
    protected $fillable = ['nome', 'comentario', 'publicacao_id', 'user_id'];
    public $timestamps = false;

    public function publicacao()
    {
        return $this->belongsTo(Publicacao::class, 'publicacao_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}


