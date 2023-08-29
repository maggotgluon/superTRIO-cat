<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_code',
        'name',
        'email',
        'phone',
        'phoneIsVerified',
        'otp_token',
        'password',

        'pet_name',
        'pet_breed',
        'pet_weight',
        'pet_age_month',
        'pet_age_year',
        'option_1',
        'option_2',
        'option_3',

        'vet_id',
        'active_date',
        'active_status'
    ];
    /**
     * Get the vet associated with the user.
     */
    public function vet()
    {
        return $this->belongsTo(Vet::class);
    }
    public function info(){
        return $this->hasMany(ClientInfo::class);
    }
    public function rmkt(){
        return $this->hasMany(rmkt_client::class);
    }
}
