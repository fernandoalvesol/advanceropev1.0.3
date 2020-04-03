@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

<!-- page content -->
<div class="right_col" role="main">    	

    <!-- Trigger the modal with a button -->
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title"><span><img  width="50" height="50" src="/img/favorecido.png" alt=""> </span>@lang('string.selectfavorecido') </h4> 
                </div>
                <div class="modal-body">

                    <div class="row divScroll">
                        <div class="desktop-hide"><center>< Arraste a tabela para os lados ></center></div><div class="table-responsive">
                            <table class="table table-hover table-overflow">
                                <thead>
                                    <tr class="headings">                                                                
                                        <th class="column-title" width="80%">@lang('string.favored') </th>                                    
                                        <th class="column-title no-link last" width="20%" style="text-align: left"><span class="nobr"></span>
                                        </th>                            
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div> 

                    </div>                
                </div>
                <div style="background: #286090;" class="modal-footer">				
                    <a class="btn" href="{{ url('/logout') }}"> <font color="white"><b> @lang('string.exitSGM')</font></b></a>
                </div>
            </div>

        </div>
    </div>

</div>    
<!-- /page content -->
@endsection