@extends('layouts.site.app')
@section('titulo', 'Fazer uma Ocorrência')
@section('conteudo')

    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Fazer uma Ocorrência</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('site.ocorrencias.cadastrar') }}" method="POST" enctype="multipart/form-data">
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
                              <label for="cor-pele">Cor da Pele:</label>
                              <select id="cor-pele" name="cor_pele" class="form-control">
                                  <option value="branca">Branca</option>
                                  <option value="negra">Negra</option>
                                  <option value="parda">Parda</option>
                                  <option value="amarela">Amarela</option>
                                  <option value="indigena">Indígena</option>
                              </select>
                          </div>
                          <div class="col-6 mb-3">
                              <label for="cor-pele">Cor dos Olhos:</label>
                              <select id="cor-pele" name="cor_olho" class="form-control">
                                  <option value="azul">Azul</option>
                                  <option value="verde">Verde</option>
                                  <option value="castanho">Castanho</option>
                                  <option value="preto">Preto</option>
                                  <option value="cinza">Cinza</option>
                              </select>
                          </div>

                            <div class="col-6 mb-3">
                                <label for="provinciaSelect">Selecione uma província:</label>
                                <select id="provinciaSelect" name="provincia" class="form-control">
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
                                <select id="municipioSelect" name="municipio" class="form-control" disabled>
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
                                <input type="text" class="form-control" name="nome_pai"
                                    placeholder="Nome do seu Pai">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Mãe:</label>
                                <input type="text" class="form-control" name="nome_mae"
                                    placeholder="Nome do sua Mãe">
                            </div>


                     
                       

                            <div class="col-6 mb-3">
                                <label for="">Localização:</label>
                                <select name="local_desaparecimento" id=""  class="form-control" required>
                                    <option value="">Selecciona a Localização</option>
                                    <option value="">Luanda-Rangel</option>
                                    <option value="">Luanda-Cazenga</option>
                                    <option value="">Luanda-Balombo</option>

                                </select>

                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Latitude:</label>
                                <input type="text" class="form-control" placeholder="Latitude" name="latitude">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Longitude:</label>
                                <input type="text" name="longitude" class="form-control" placeholder="Longitude">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Dt. Desapecimento:</label>
                                <input type="date" name="dt_desaparecimento" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="">Imagem Actual da Crianças:</label>
                                <input type="file" name="imagem" class="form-control">


                            </div>
                            
                            <div class="col-12 mb-3">
                              <label for="">Condições de Desaparecimento:</label>
                              <textarea name="condicoes_desaparecimento" id="" class="form-control" rows="10"></textarea>

                          </div>
                            <div class="col-12 mb-3">
                                <label for="">Relato da Criança Encontrada:</label>
                                <textarea name="relato_desaparecimento" id="" class="form-control" rows="10"></textarea>

                            </div>



                            <div class="col-12 d-flex justify-content-center">
                                <input type="submit" value="Submeter" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->



@endsection
