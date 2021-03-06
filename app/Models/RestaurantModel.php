<?php

namespace App\Models;

use CodeIgniter\Model;

class RestaurantModel extends Model
{
    protected $table = 'restaurants';
    protected $primaryKey = 'rest_id';
    protected $returnType     = 'array';
    protected $allowedFields = [
        'rest_name',
        'rest_location',
        'rest_address',
        'priority'
    ];
}
