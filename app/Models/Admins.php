<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admins extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use SoftDeletes;

    // Database table to be used by Model
    protected $table = 'admins';

    // Primary key Column in the table 
    protected $primaryKey = 'id';

    // Automation updation of the timestamps columns on create / update
    public $timestamps = true;

    // Custom column name for created_at
    const CREATED_AT = "created_at";

    // Custom column name for updated_at
    const UPDATED_AT = "updated_at";

    // Automatically update timestamps on soft delete
    protected $dates = ['deleted_at'];

    // Hide attributes in JSON response
    protected $hidden = [
        'password'
    ];
    
    protected $fillable = [
        'email',
        'password'
    ];
}
