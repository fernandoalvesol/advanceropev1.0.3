<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title">                
                AdvanceRope
            </a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            {{-- <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div> --}}
            <div class="profile_info">
                <span>Bem-vindo,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        <br />
        
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                
            <div class="menu_section">                                              
                <br>
                <br>
                <br>

                <ul class="nav side-menu">                       
                      
                    @if (Auth::user()->isadmin)
                        <li><a href="{{url('painel/funcionarios')}}"><i class="fa fa-home"></i> Funcionários</a></li>
                        <li><a href="{{url('painel/contracheques')}}"><i class="fa fa-archive"></i> Contra Cheques</a></li>
                    @else
                        <li><a href="{{url('painel/funcionarios')}}"><i class="fa fa-home"></i> Meus Dados</a></li>
                    @endif
                </ul>
            </div> 

        </div>
        <!-- /sidebar menu -->                
    </div>
</div>