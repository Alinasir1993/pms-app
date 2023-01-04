<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table="business";
    protected $fillable = ['user_id', 'business_owner_firstname', 'business_owner_lastname', 'business_name', 'business_contact_number', 'business_email', 'business_address', 'business_address2', 'business_city', 'business_state', 'business_postal_code', 'business_country', 'business_type', 'business_message'];
}
