<?php

namespace App\Repositories\Business;

use App\Models\Business;
use Illuminate\Support\Facades\Crypt;

class BusinessRepository
{
    public function __construct()
    {
        //




    }
    public function createBusiness($request){
        $storeBusinessArray = array(
            'user_id' => $request->user_id,
            'business_owner_firstname' => $request->business_owner_firstname,
            'business_owner_lastname' => $request->business_owner_lastname,
            'business_name' => $request->business_name,
            'business_contact_number' => $request->business_contact_number,
            'business_email' => $request->business_email,
            'business_address' => $request->business_address,
            'business_address2' => $request->business_address2,
            'business_city' => $request->business_city,
            'business_state' => $request->business_state,
            'business_postal_code' => $request->business_postal_code,
            'business_country' => $request->business_country,
            'business_type' => $request->business_type,
            'business_message' => $request->business_message,
        );
        $businessStore = Business::create($storeBusinessArray);
        return $businessStore;
    }
}
