<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class PainelController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
