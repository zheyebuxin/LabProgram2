<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class students extends Model
{
    protected $table = 'students';
    public $timestamps = false;

    public function science_star_registrations()
    {
        return $this->hasOne(sciencestarregistrations::class, 'student_id', 'id');
    }
}

