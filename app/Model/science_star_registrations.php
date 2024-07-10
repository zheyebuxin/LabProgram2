<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class science_star_registrations extends Model
{
    protected $table = 'science_star_registrations';
    public $timestamps = false;

    public function administrators()
    {
        return $this->belongsTo(students::class, 'student_id', 'id');
    }
}
