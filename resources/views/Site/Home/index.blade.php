@extends('Site.Template.template')

@section('content-login')

<section id="slide-show">
    <div id="slider" class="sl-slider-wrapper">
        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <h2>Alpinismo Industrial e Predial</h2>
                        <h3 class="gap">Competência e Capacidade Técnica</h3>
                        <a class="btn btn-large btn-transparent" href="{{url('/galery')}}">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->
            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container segundo-item">
                        <h2>Caldeiraria e Manutenção</h2>
                        <h3 class="gap">Responsabilidade e Profissionalismo</h3>
                        <a class="btn btn-large btn-transparent" href="{{url('/galery')}}">Saiba Mais</a>
                    </div>

                </div>
            </div>
            <!--Slider Item2-->
            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="container">
                        <div class="container terceiro-item">
                            <h2>Alpinismo Industrial e Predial</h2>
                            <h3 class="gap">Confiança e Garantia do Serviço</h3>
                            <a class="btn btn-large btn-transparent" href="{{url('/galery')}}">Saiba Mais</a>
                        </div>

                    </div>
                </div>
            </div>
            <!--Slider Item3-->
        </div>
        <!--/Slider Items-->
        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
        </nav>
        <!--/Slider Next Prev button-->
    </div>
    <!-- /slider-wrapper -->           
</section>


<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <p class="title-corpo">ADVANCEROPE| Acesso Vertical</p>
                <p class="no-margin-subtitle">Soluções em Alpinismo Industrial, Manutenção e Caldeiraria</p>
                <p class="no-margin">A Advance Rope é uma empresa especializada em todo 
                    tipo de trabalho em altura, desde os mais simples ao complexos, 
                    caldeiraria e manutenção. Atuamos nos segmentos industrial e predial, 
                    nossa equipe é altamente qualificada, todos com certificação IRATA. 
                    Uma equipe altamente treinada e comprometida, com a segurança e a 
                    qualidade dos serviços prestados.</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="{{url('/sobre')}}">Saiba Mais...</a>
            </div>
        </div>
    </div>
</section>
<!--Work-->
<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Conheça Alguns de nossos Serviços</h3>
            <p class="lead">A AdvanceRope é a escolha certa para serviços industriais e prediais.</p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt="Altura " src="{{url('assets/portal/images/portfolio/thumb/banner1.png')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="{{url('/servicos')}}"><i class="icon-link"></i></a>                          
                    </div>
                </div>
                <div class="desc">
                    <h5>Manutenção e Montagens de Estruturas metálicas.</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img img-responsive src="{{url('assets/portal/images/portfolio/full/banner1.png')}}" alt=" Altura" width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 1--> 
            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt="caldeiraria" src="{{url('assets/portal/images/portfolio/thumb/banner2.png')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-2"><i class="icon-eye-open"></i></a><a href="{{url('/servicos')}}"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Limpeza de silos, tanques, telhados, etc</h5>
                </div>
                <div id="modal-2" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img img-responsive src="{{url('assets/portal/images/portfolio/full/banner2.png')}}" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->
            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " img-responsive src="{{url('assets/portal/images/portfolio/thumb/banner3.png')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="{{url('/servicos')}}"><i class="icon-link"></i></a>                          
                    </div>
                    <a href="#"></a>
                </div>
                <div class="desc">
                    <h5>Resgate Industrial (Espaço Confinado e Altura)</h5>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img img-responsive src="{{url('assets/portal/images/portfolio/full/banner3.png')}}" alt=" " width="100%" style="max-height:400px">
                    </div>

                </div>                 
            </li>
            <!--/Item 3--> 
            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " img-responsive src="{{url('assets/portal/images/portfolio/thumb/banner4.png')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="{{url('/servicos')}}"><i class="icon-link"></i></a>                          
                    </div>
                    <a href="#"></a>
                </div>
                <div class="desc">
                    <h5>Inspeção por Drones</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{url('assets/portal/images/portfolio/full/banner4.png')}}" alt=" " width="100%" style="max-height:400px">
                    </div>

                </div>                 
            </li>
            <!--/Item 4-->               
        </ul>
    </div>
</section>
<!--/Work-->

<!--Clients-->
<section class="service-home">
    <div class="container">
        <div class="row-fluid">
            
        </div>
    </div>
</section>
<!--/Clientes-->

@endsection

<!-- Slider -->
@push('scripts')
<script type="text/javascript">
    $(function () {
        var Page = (function () {
            var $navArrows = $('#nav-arrows'),
                    slitslider = $('#slider').slitslider({
                autoplay: true
            }),
                    init = function () {
                        initEvents();
                    },
                    initEvents = function () {
                        $navArrows.children(':last').on('click', function () {
                            slitslider.next();
                            return false;
                        });
                        $navArrows.children(':first').on('click', function () {
                            slitslider.previous();
                            return false;
                        });
                    };
            return {init: init};
        })();
        Page.init();
    });
</script>

@endpush
<!-- /Slider -->