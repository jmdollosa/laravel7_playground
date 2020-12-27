<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts_list';
    protected $primaryKey = 'id';
    protected $fillable = [ 'name', 'email', 'phone' ];
}
