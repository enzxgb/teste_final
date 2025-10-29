<?php

namespace App\Models;
use App\Models\Publicacao;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Descurtida extends Model
{
    protected $table = 'descurtida';
    protected $fillable = ['dislikes', 'user_id', 'publicacao_id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicacao()
    {
        return $this->belongsTo(Publicacao::class);
    }

}
