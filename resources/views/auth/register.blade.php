@extends('layouts.site.app')
@section('titulo', 'Registar-me')
@section('conteudo')

    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Registar-me</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{ route('site.users.register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="">Nome:</label>
                                <input type="text" class="form-control" required="nome" name="nome"
                                    placeholder="Seu Primeiro Nome">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Sobre Nome:</label>
                                <input type="text" class="form-control" required name="sobre_nome"
                                    placeholder="Seu Sobre Nome">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">E-mail:</label>
                                <input type="text" class="form-control" required name="email" placeholder="Seu E-mail">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Telefone:</label>
                                <input type="text" class="form-control" name="telefone" placeholder="Seu Telefone">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Gênero:</label>
                                <select name="genero" id="" class="form-control" required>
                                    <option value="">Selecciona o Gênero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>

                                </select>

                            </div>
                            <div class="col-6 mb-3">
                                <label for="provinciaSelect">Selecione uma província:</label>
                                <select id="provinciaSelect" name="provincia"  class="form-control">
                                    <option value="">Selecione...</option>
                                    <option value="Bengo">Bengo</option>
                                    <option value="Benguela">Benguela</option>
                                    <option value="Bié">Bié</option>
                                    <option value="Cabinda">Cabinda</option>
                                    <option value="Cuando Cubango">Cuando Cubango</option>
                                    <option value="Cuanza Norte">Cuanza Norte</option>
                                    <option value="Cuanza Sul">Cuanza Sul</option>
                                    <option value="Cunene">Cunene</option>
                                    <option value="Huambo">Huambo</option>
                                    <option value="Huíla">Huíla</option>
                                    <option value="Luanda">Luanda</option>
                                    <option value="Lunda Norte">Lunda Norte</option>
                                    <option value="Lunda Sul">Lunda Sul</option>
                                    <option value="Malanje">Malanje</option>
                                    <option value="Moxico">Moxico</option>
                                    <option value="Namibe">Namibe</option>
                                    <option value="Uíge">Uíge</option>
                                    <option value="Zaire">Zaire</option>
                                </select>
                            </div>

                            <div class="col-6 mb-3">
                                <label for="municipioSelect">Município:</label>
                                <select id="municipioSelect" name="municipio"  class="form-control" disabled>
                                    <option value="">Selecione uma província primeiro</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Data de Nascimento:</label>
                                <input type="date" class="form-control" name="dt_nascimento" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">BI:</label>
                                <input type="text" class="form-control" name="bi"
                                    placeholder="Seu Bilhete de Identidade">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Pai:</label>
                                <input type="text" class="form-control" name="nome_pai" placeholder="Nome do seu Pai">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Mãe:</label>
                                <input type="text" class="form-control" name="nome_mae" placeholder="Nome do sua Mãe">
                            </div>


                            <div class="col-6 mb-3">
                                <label for="">Palavra Passe:</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Escolha uma palavra passe">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Confirmar Palavra Passe:</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Escolha uma palavra passe">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Fotografia:</label>
                                <input type="file" class="form-control" name="imagem"
                                    placeholder="Escolha uma Foto Sua">
                            </div>




                            <div class="col-12">
                                <input type="submit" value="Registar" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->



@endsection
