@extends('layouts.site.app')
@section('titulo', ' Entrar')
@section('conteudo')

    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Entrar</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <div class="card p-3 w-50">
                                <div class="row">

                                    <div class="col-12 mb-3">
                                        <label for="">E-mail:</label>
                                        <input type="text" class="form-control" required name="email"
                                            placeholder="Seu E-mail">
                                    </div>


                                    <div class="col-12 mb-3">
                                        <label for="">Palavra Passe:</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Escolha uma palavra passe">
                                    </div>




                                    <div class="col-12 d-flex justify-content-center">
                                        <input type="submit" value="Entrar" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->



@endsection
