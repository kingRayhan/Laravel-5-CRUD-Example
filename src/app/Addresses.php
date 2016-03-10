<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{

    use \Askedio\Laravel5ApiController\Traits\ApiTrait;
    use \Askedio\Laravel5ApiController\Traits\SearchableTrait;



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];

    protected $rules = [
    ];

    protected $searchable = [
        'columns' => [
            'profile.city' => 10,
        ],
    ];

    protected $primaryKey = 'id';

    public function transform(Addresses $profile) {
        return [
            'id' => 'iii',
            'city' => 'iii',
        ];
    }
 

}
