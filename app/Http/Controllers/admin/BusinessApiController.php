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
//        dd($id);
//      dd($business);
        $business = $this->businessApiRepository->showBusiness($id);
        if($business){
//            dd("213");
            return $this->sendResponse($business->toArray(), 'Business');
        }
        else {
//            dd('2344');
            return $this->sendResponse([], 'Business does not exist');

        }

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
//        dd($request);
        $businessUpdate = $this->businessApiRepository->updateBusiness($request, $id);
        return $this->sendResponse($businessUpdate, 'Business Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = $this->businessApiRepository->DeleteBusiness($id);
        return $this->sendResponse([], 'Business Deleted successfully');

    }
}
