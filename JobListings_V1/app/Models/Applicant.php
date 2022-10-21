<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    // protected $Fillable = ['fname', 'lname', 'email', 'phone', 'description', 'skills'];

    public function scopeFilter($query, array $filters){

       if($filters['search'] ?? false){
            $query->where('fname', 'like', '%' . request('search') . '%' )
            ->orWhere('lname', 'like', '%' . request('search') . '%' )
            ->orWhere('skills', 'like', '%' . request('search') . '%' )
            ->orWhere('status', 'like', '%' . request('search') . '%' )
            ->orWhere('description', 'like', '%' . request('search') . '%' );
        }
    }
}
