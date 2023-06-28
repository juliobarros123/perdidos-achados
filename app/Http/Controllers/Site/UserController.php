<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Storage;
class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        // dd( $request);
        // Validação dos dados do formulário
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        if ($request->password!== $request->password_confirmation) {
            return redirect()->back()->with('feedback', ['type' => 'error', 'sms' => 'A confirmação da Palavra Passe não corresponde.!']);

        }
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagemPath = $imagem->store('public/photos');
            // dd($imagemPath);
            // Salvando o caminho da foto no banco de dados
            $imagem =  Storage::url($imagemPath);
        }
    
        // Criação do usuário
        $user = User::create([
            'provincia'=>$request->provincia,
            'municipio'=>$request->municipio,
            'bairro'=>$request->bairro,
            'genero'=>$request->genero,
            'rg'=>$request->rg,
            'bi'=>$request->bi,
            'nome_mae'=>$request->nome_mae,
            'nome_pai'=>$request->nome_pai,
            'telefone'=>$request->telefone,
            'dt_nascimento'=>$request->dt_nascimento,
            'nome'=>$request->nome,
            'sobre_nome'=>$request->sobre_nome,
            'imagem' =>  $imagem ?? null,
            'email'=>$request->email,
          
            'password'=>Hash::make($request->password),
            'tipo_utilizador'=>'Normal',
           
        ]);
        

        // Inicia a sessão para o usuário recém-criado
        Auth::login($user);

        // Redireciona para a página inicial ou outra página desejada
        return redirect('/')->with('feedback', ['type' => 'success', 'sms' => 'Seja Bem-vindo!']);

    }
}
