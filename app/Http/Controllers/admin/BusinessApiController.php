<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBusinessApiRequest;
use App\Repositories\Business\BusinessRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Business;
class BusinessApiController extends AppBaseController
{
    protected $businessApiRepository;
    public function __construct(BusinessRepository $businessApiRepository)
    {
        $this->businessApiRepository = $businessApiRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = Business::where('user_id', 1)->get();
        return $this->sendResponse($business->toArray(), 'list of all business');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBusinessApiRequest $request)
    {
        $businessCreate = $this->businessApiRepository->createBusiness($request);
        return $this->sendResponse($businessCreate->toArray(), 'Business store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
        $businessUpdate = $this->businessApiRepository->updateBusiness($request, $id);
        return $this->sendResponse($businessUpdate->toArray(), 'Business store successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
