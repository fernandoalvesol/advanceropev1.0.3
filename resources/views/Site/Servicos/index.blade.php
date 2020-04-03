@extends('Site.Template.template')

@section('content-login')

<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <h1 class="title-sobre">Nossos Serviços</h1>
            </div>

        </div>
    </div>
</section>
<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span12">
            <h3 class="title-corpo-somos">Altura, Caldeiraria e Manutenção - Nós temos a Solução </h3>
        </div>        
    </div>
</section>

<section class="corpo-servicos">
    <div class="row-fluid">
        <div class="span12">
            <div class="box-servicos">
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Alpinismo Industrial</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Serviço de Caldeiraria e Manutenção</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Manutenção e Montagem de Estruturas Metálicas</p>

                </div>

            </div>
            <div class="box-servicos-two">
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Montagem e Manutenção em Isolamento Térmico</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Montagem e Manutenção em Câmara Fria</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Limpeza de Silos, Tanques e Telhados</p>

                </div>

            </div>
            <div class="box-servicos-thre">
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Pintura Industrial e Predial</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Impermeabilização e Manutenção de Telhados</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Inspeção de Equipamentos (visual e dimensional por ultrasom)</p>

                </div>

            </div>
            <div class="box-servicos-for">
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Inspeção aérea com Drone, em locais de difícil acesso</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Montagem de linha de vida, vertical e horizontal</p>

                </div>
                <div class="span4">
                    <div class="icones-service"><i class="fas fa-chevron-right"></i></div>
                    <p class="text-title">Resgate Industrial(espaço confinado, altura, etc)</p>

                </div>

            </div>

        </div>
    </div>  
</section>

<section class="corpo-ajuda">
    <div class="row-fluid">
        <div class="span12">

            <h1 class="title-ajuda">Como Podemos te Ajudar?</h1>

            <p class="text-ajuda">                
                Temos uma infinidade de serviços agregados ao alpinismo industrial, 
                Caldeiraria e Manutenção. Soluções com segurança e agilidade.
            </p>


        </div>

    </div>
    <div class="span12">
        <a class="btn btn-ajudar" href="{{url('/contato')}}">Orçamento</a>
    </div>

</section>



@endsection


<!-- Slider -->
@push('scripts')
<script type="text/javascript">

    $(document).ready(function () {

        $(".filter-button").click(function () {
            var value = $(this).attr('data-filter');

            if (value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else
            {
                //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });

</script>

@endpush
<!-- /Slider -->

