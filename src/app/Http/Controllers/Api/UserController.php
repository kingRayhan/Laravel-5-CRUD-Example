<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{

    use \Askedio\Laravel5ApiController\Traits\ControllerTrait;
    public $model = \App\User::class;

    /* Optional */
    public $version = 'v1';

}
