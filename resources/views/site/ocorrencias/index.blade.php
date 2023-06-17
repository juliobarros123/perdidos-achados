@extends('layouts.site.app')
@section('titulo','Ocorrência')
@section('conteudo')
<div class="hero overlay inner-page bg-primary py-5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center pt-5">
      <div class="col-lg-6">
        <h1 class="heading text-white mb-3" data-aos="fade-up">Ocorrência</h1>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
      role="tab" aria-controls="home" aria-selected="true">
      Ocorrência de Crianças Perdidas
      </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
      role="tab" aria-controls="profile" aria-selected="false">Ocorrência de Crianças Encontradas</button>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="section">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12" >
            <form action="#">
              <div class="row">
                <div class="col-6 mb-3">
                  <label for="">Nome:</label>
                  <input type="text" class="form-control" placeholder="Nome da pessoa">
                </div>
                <div class="col-6 mb-3">
                  <label for="">Localização:</label>
                  <select name="" id=""  class="form-control" required>
                    <option value="">Selecciona a Localização</option>
                    <option value="">Luanda-Rangel</option>
                    <option value="">Luanda-Cazenga</option>
                    <option value="">Luanda-Balombo</option>

                  </select>
                  
                </div>
                <div class="col-6 mb-3">
                  <label for="">Latitude:</label>
                  <input type="text" class="form-control" placeholder="Latitude">
                </div>
                <div class="col-6 mb-3">
                  <label for="">Longitude:</label>
                  <input type="text" class="form-control" placeholder="Longitude">
                </div>
                <div class="col-6 mb-3">
                  <label for="">Dt. Desapecimento:</label>
                  <input type="date" class="form-control" >
                </div>
                <div class="col-6 mb-3">
                  <label for="">Imagem Actual da Crianças:</label>
                  <input type="file"  class="form-control" >

                
                </div>
                <div class="col-12 mb-3">
                  <label for="">Relato de desaparecimento:</label>
                  <textarea name="" id=""  class="form-control"  rows="10"></textarea>
                
                </div>

                

                <div class="col-12">
                  <input type="submit" value="Submeter Anúncio" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- /.untree_co-section -->
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="section">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-12" >
            <form action="#">
              <div class="row">
                <div class="col-6 mb-3">
                  <label for="">Nome:</label>
                  <input type="text" class="form-control" placeholder="Nome da pessoa">
                </div>
                <div class="col-6 mb-3">
                  <label for="">Localização:</label>
                  <select name="" id=""  class="form-control" required>
                    <option value="">Selecciona a Localização</option>
                    <option value="">Luanda-Rangel</option>
                    <option value="">Luanda-Cazenga</option>
                    <option value="">Luanda-Balombo</option>

                  </select>
                  
                </div>
                <div class="col-6 mb-3">
                  <label for="">Latitude:</label>
                  <input type="text" class="form-control" placeholder="Latitude">
                </div>
                <div class="col-6 mb-3">
                  <label for="">Longitude:</label>
                  <input type="text" class="form-control" placeholder="Longitude">
                </div>
                <div class="col-6 mb-3">
                  <label for="">Dt. Desapecimento:</label>
                  <input type="date" class="form-control" >
                </div>
                <div class="col-6 mb-3">
                  <label for="">Imagem Actual da Crianças:</label>
                  <input type="file"  class="form-control" >

                
                </div>
                <div class="col-12 mb-3">
                  <label for="">Relato da Criança Encontrada:</label>
                  <textarea name="" id=""  class="form-control"  rows="10"></textarea>
                
                </div>

                

                <div class="col-12">
                  <input type="submit" value="Submeter Anúncio" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- /.untree_co-section -->
  </div>

</div>


@endsection