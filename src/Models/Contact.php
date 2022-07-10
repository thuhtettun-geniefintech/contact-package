<?php
namespace Thuhtet\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['email','name','desc'];
}