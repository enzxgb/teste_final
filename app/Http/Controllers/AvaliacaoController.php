<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\Curtida;
use App\Models\Descurtida;
use Illuminate\Support\Facades\Auth;

class AvaliacaoController extends Controller
{
    public function like(Request $request)
    {
        $user = Auth::user();
        $avaliacao = Avaliacao::firstOrCreate([
            'user_id' => $user->id,
            'publicacao_id' => $request->publicacao_id,
        ]);

        if ($avaliacao->like) {
            $avaliacao->like = false;
        } else {
            $avaliacao->like = true;
            $avaliacao->dislike = false;
        }

        $avaliacao->save();

        return redirect()->back();
    }

    public function dislike(Request $request)
    {
        $user = Auth::user();
        $avaliacao = Avaliacao::firstOrCreate([
            'user_id' => $user->id,
            'publicacao_id' => $request->publicacao_id,
        ]);

        if ($avaliacao->dislike) {
            $avaliacao->dislike = false;
        } else {
            $avaliacao->dislike = true;
            $avaliacao->like = false;
        }

        $avaliacao->save();

        return redirect()->back();
    }

    public function curtida($publicacao_id)
{
    $user_id = auth()->id();

    $existingLike = Curtida::where('user_id', $user_id)
        ->where('publicacao_id', $publicacao_id)
        ->first();

    $existingDislike = Descurtida::where('user_id', $user_id)
        ->where('publicacao_id', $publicacao_id)
        ->first();

    // Se já deu like, remove (toggle off)
    if ($existingLike) {
        $existingLike->delete();
    } else {
        // Remove o dislike se existir
        if ($existingDislike) $existingDislike->delete();

        // Cria a curtida
        Curtida::create([
            'likes' => 1,
            'user_id' => $user_id,
            'publicacao_id' => $publicacao_id,
        ]);
    }

    return back();
}

public function descurtida($publicacao_id)
{
    $user_id = auth()->id();

    $existingDislike = Descurtida::where('user_id', $user_id)
        ->where('publicacao_id', $publicacao_id)
        ->first();

    $existingLike = Curtida::where('user_id', $user_id)
        ->where('publicacao_id', $publicacao_id)
        ->first();

    // Se já deu dislike, remove (toggle off)
    if ($existingDislike) {
        $existingDislike->delete();
    } else {
        // Remove o like se existir
        if ($existingLike) $existingLike->delete();

        // Cria a descurtida
        Descurtida::create([
            'dislikes' => 1,
            'user_id' => $user_id,
            'publicacao_id' => $publicacao_id,
        ]);
    }

    return back();
}
}


