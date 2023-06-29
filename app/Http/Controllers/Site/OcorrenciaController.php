<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ocorrencia;
use Storage;

class OcorrenciaController extends Controller
{
    //
    public function index()
    {
        $response['desaparecidas'] = Ocorrencia::limit(10)->get();
        return view('site.ocorrencias.index',$response);
    }
    public function cadastrar(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagemPath = $imagem->store('public/photos/desaparecidas');
            // dd($imagemPath);
            // Salvando o caminho da foto no banco de dados
            $imagem = Storage::url($imagemPath);
        }

        // Criação do usuário
        $user = Ocorrencia::create([
            'provincia' => $request->provincia,
            'municipio' => $request->municipio,
            'bairro' => $request->bairro,
            'genero' => $request->genero,
            'rg' => $request->rg,
            'bi' => $request->bi,
            'nome_mae' => $request->nome_mae,
            'nome_pai' => $request->nome_pai,
            'telefone' => $request->telefone,
            'dt_nascimento' => $request->dt_nascimento,
            'nome' => $request->nome,
            'sobre_nome' => $request->sobre_nome,
            'imagem' => $imagem ?? null,
            'email' => $request->email,
            'local_desaparecimento' => $request->local_desaparecimento,
            'dt_desaparecimento' => $request->dt_desaparecimento,
            'relato_desaparecimento' => $request->relato_desaparecimento,
            'localizado' => $request->localizado,
            'condicoes_desaparecimento' => $request->condicoes_desaparecimento,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'cor_pele' => $request->cor_pele,
            'cor_olho' => $request->cor_olho




        ]);

        return redirect('/')->with('feedback', ['type' => 'success', 'sms' => 'Ocorrência Registada com sucesso!']);

    }
}