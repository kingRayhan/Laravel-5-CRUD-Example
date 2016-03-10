<?php

namespace App\Http\Controllers\Api;

use Askedio\Laravel5ApiController\Helpers\ControllerHelper;
use Askedio\Laravel5ApiController\Http\Controllers\BaseController;
use Askedio\Laravel5ApiController\Helpers\ApiHelper;

class UserController extends BaseController
{
    public $modal = \App\User::class;

}