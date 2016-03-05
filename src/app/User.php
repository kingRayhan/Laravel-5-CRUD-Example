<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use \Askedio\Laravel5ApiController\Traits\ApiTrait;
    use \Askedio\Laravel5ApiController\Traits\SearchableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $rules = [
      'update' => [
        'email' => 'email|required|unique:users,email',
      ],
      'create' => [
        'email' => 'email|required|unique:users,email',
      ],
    ];

    protected $searchable = [
        'columns' => [
            'users.name' => 10,
            'users.email' => 5,
        ],
    ];

}
