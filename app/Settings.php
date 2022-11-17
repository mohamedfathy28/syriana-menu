<?php

namespace App;

use App\Scopes\setting_status;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
   
    protected $fillable = ['key','value','type','status','enums_name'];
}
