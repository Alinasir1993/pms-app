<?php

namespace App\Repositories\Team;

use App\Models\TeamMember;
use Illuminate\Support\Facades\Crypt;


class TeamMemberRepository
{
    public function __construct()
    {
        //
    }

    public function createTeamMember($request){
        $storeTeamMemberArray = array(
            'name' => $request->name,
            'team_id' => $request->team_id,
            'user_id' => $request->user_id,
        );
        $teamMemberStore = TeamMember::create($storeTeamMemberArray);
        return $teamMemberStore;
    }
}
