<?php

namespace App\Repositories\Team;

use App\Models\Team;
use Illuminate\Support\Facades\Crypt;

class TeamRepository
{
    public function __construct()
    {
        //
    }

    public function createTeam($request){
        $storeTeamArray = array(
            'name' => $request->name,
            'business_id' => $request->business_id,
        );
        $teamStore = Team::create($storeTeamArray);
        return $teamStore;
    }
}
