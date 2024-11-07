<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;

    public function network(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'doctors_network','doctor_1_id', 'doctor_2_id')->with('specializations');
    }

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class, 'doctors_specializations');
    }
}
