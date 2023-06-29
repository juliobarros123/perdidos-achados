<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/site/css/tiny-slider.css">
    <link rel="stylesheet" href="/site/css/aos.css">
    <link rel="stylesheet" href="/site/css/glightbox.min.css">
    <link rel="stylesheet" href="/site/css/style.css">

    <link rel="stylesheet" href="/site/css/flatpickr.min.css">


    <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="{{ route('site.home.index') }}" class="logo m-0 float-start">SOS CDL<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-10 text-center">
                            <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="{{ route('site.home.index') }}">Início</a></li>
                                <li><a href="{{ route('site.ocorrencias.index') }}">Fazer uma Ocorrência</a></li>
                                <li><a href="{{ route('site.desaparecidas.index') }}">Desaparecidas</a></li>
                                <li><a href="{{ route('site.econtradas.index') }}">Encontradas</a></li>

                                <li><a href="category.html">Recursos e orientações</a></li>
                                <li><a href="about.html">Sobre nós</a></li>
                                <li><a href="contact.html">Contactos</a></li>
                                <li><a href="category.html">Políticas de privacidade </a></li>
                                @auth
                                    <li><a href="{{ route('login') }}" id="sessao"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li><a href="{{ route('register') }}">Registar-me</a></li>

                                @endauth


                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                        <!-- -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- /.untree_co-section -->

    @yield('conteudo')


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="mb-4">About</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div> <!-- /.widget -->
                    <div class="widget">
                        <h3>Social</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
                <div class="col-lg-4 ps-lg-5">
                    <div class="widget">
                        <h3 class="mb-4">Company</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="mb-4">Recent Post Entry</h3>
                        <div class="post-entry-footer">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="/site/images/img_1_sq.jpg" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="/site/images/img_2_sq.jpg" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="/site/images/img_3_sq.jpg" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash;
                        Designed with love by <a href="https://untree.co">Untree.co</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="/site/js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="/site/js/aos.js"></script>
    <script src="/site/js/glightbox.min.js"></script>
    <script src="/site/js/navbar.js"></script>
    <script src="/site/js/counter.js"></script>
    <script src="/site/js/custom.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var provinciaSelect = document.getElementById('provinciaSelect');
            var municipioSelect = document.getElementById('municipioSelect');

            // Quando uma província é selecionada
            provinciaSelect.addEventListener('change', function() {
                var provincia = this.value;
                var municipios = getMunicipios(
                provincia); // Obtém os municípios para a província selecionada

                // Limpa o select de municípios
                municipioSelect.innerHTML = '';

                // Adiciona a opção padrão ao select de municípios
                municipioSelect.appendChild(new Option('Selecione um município', ''));

                // Adiciona os municípios ao select
                municipios.forEach(function(municipio) {
                    municipioSelect.appendChild(new Option(municipio, municipio));
                });

                // Habilita o select de municípios
                municipioSelect.disabled = false;
            });
        });

        // Função para obter os municípios com base na província selecionada
        function getMunicipios(provincia) {
            var municipios = [];

            // Adicione os municípios correspondentes a cada província aqui
            if (provincia === 'Bengo') {
                municipios = ['Ambriz', 'Bula Atumba', 'Dande', 'Dembos', 'Nambuangongo'];
            } else if (provincia === 'Benguela') {
                municipios = ['Balombo', 'Baía Farta', 'Benguela', 'Bocoio', 'Caimbambo', 'Catumbela', 'Chongorói', 'Cubal',
                    'Ganda', 'Lobito'
                ];
            } else if (provincia === 'Bié') {
                municipios = ['Andulo', 'Camacupa', 'Catabola', 'Chinguar', 'Chitembo', 'Cuemba', 'Cunhinga', 'Kuito',
                    'Nhârea'
                ];
            } else if (provincia === 'Cabinda') {
                municipios = ['Belize', 'Buco-Zau', 'Cabinda', 'Cacongo', 'Landana', 'Necuto', 'Tomboco'];
            } else if (provincia === 'Cuando Cubango') {
                municipios = ['Calai', 'Cuangar', 'Cuchi', 'Cuito Cuanavale', 'Dirico', 'Mavinga', 'Menongue', 'Nancova',
                    'Rivungo'
                ];
            } else if (provincia === 'Cuanza Norte') {
                municipios = ['Ambaca', 'Banga', 'Bolongongo', 'Cambambe', 'Cazengo', 'Golungo Alto', 'Gonguembo', 'Lucala',
                    'Quiculungo', 'Samba Cajú', 'Uige'
                ];
            } else if (provincia === 'Cuanza Sul') {
                municipios = ['Amboim', 'Cassongue', 'Cela', 'Conda', 'Ebo', 'Libolo', 'Mussende', 'Porto Amboim',
                    'Quibala', 'Quilenda', 'Seles'
                ];
            } else if (provincia === 'Cunene') {
                municipios = ['Cahama', 'Cuanhama', 'Curoca', 'Cuvelai', 'Namacunde', 'Ombadja'];
            } else if (provincia === 'Huambo') {
                municipios = ['Bailundo', 'Caála', 'Catchiungo', 'Chicala-Cholohanga', 'Chinjenje', 'Ekunha', 'Huambo',
                    'Londuimbali', 'Longonjo', 'Mungo', 'Tchicala-Tcholohanga'
                ];
            } else if (provincia === 'Huíla') {
                municipios = ['Caconda', 'Caluquembe', 'Chibia', 'Chicomba', 'Chipindo', 'Cuvango', 'Gambos', 'Gangue',
                    'Humpata', 'Jamba', 'Lubango', 'Matala', 'Quilengues'
                ];
            } else if (provincia === 'Luanda') {
                municipios = ['Belas', 'Cacuaco', 'Cazenga', 'Ícolo e Bengo', 'Luanda', 'Quiçama', 'Talatona', 'Viana'];
            } else if (provincia === 'Lunda Norte') {
                municipios = ['Cambulo', 'Capenda-Camulemba', 'Caungula', 'Chitato', 'Cuango', 'Cuílo', 'Lubalo', 'Lucapa',
                    'Xá-Muteba'
                ];
            } else if (provincia === 'Lunda Sul') {
                municipios = ['Cacolo', 'Dala', 'Muconda', 'Saurimo'];
            } else if (provincia === 'Malanje') {
                municipios = ['Cacuso', 'Calandula', 'Cambundi-Catembo', 'Cangandala', 'Cuaba Nzogo', 'Cunda-Dia-Baze',
                    'Luquembo', 'Malanje', 'Marimba', 'Massango', 'Mucari', 'Quela'
                ];
            } else if (provincia === 'Moxico') {
                municipios = ['Alto Zambeze', 'Bundas', 'Camanongue', 'Léua', 'Luacano', 'Luchazes', 'Luena', 'Lumeje',
                    'Moxico', 'Mutchias', 'Nhârea', 'Luau', 'Léua', 'Luacano', 'Luchazes', 'Luena', 'Lumeje', 'Moxico',
                    'Mutchias', 'Nhârea', 'Luau'
                ];
            } else if (provincia === 'Namibe') {
                municipios = ['Bibala', 'Camucuio', 'Moçâmedes', 'Tômbwa', 'Virei'];
            } else if (provincia === 'Uíge') {
                municipios = ['Ambuila', 'Bembe', 'Buengas', 'Bungo', 'Damba', 'Macocola', 'Maquela do Zombo', 'Milunga',
                    'Mucaba', 'Negage', 'Puri', 'Quitexe', 'Sanza Pombo', 'Uíge'
                ];
            } else if (provincia === 'Zaire') {
                municipios = ['Cuimba', 'M\'banza Congo', 'Noqui', 'N\'zeto', 'Soyo', 'Tomboco'];
            }

            return municipios;
        }
    </script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    @if (session('feedback'))
        {{-- @dump(session('feedback')); --}}

        @if (isset(session('feedback')['type']))
            <script>
                Swal.fire(
                    '{{ session('feedback')['sms'] }}',
                    '',
                    '{{ session('feedback')['type'] }}'
                )
            </script>
        @endif
    @endif
</body>

</html>
