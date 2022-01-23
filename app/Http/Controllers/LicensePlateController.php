<?php

namespace App\Http\Controllers;

use App\Models\LicensePlate;
use App\Http\Requests\StoreLicensePlateRequest;
use App\Http\Requests\UpdateLicensePlateRequest;

class LicensePlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLicensePlateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicensePlateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicensePlate  $licensePlate
     * @return \Illuminate\Http\Response
     */
    public function show(LicensePlate $licensePlate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicensePlate  $licensePlate
     * @return \Illuminate\Http\Response
     */
    public function edit(LicensePlate $licensePlate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicensePlateRequest  $request
     * @param  \App\Models\LicensePlate  $licensePlate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicensePlateRequest $request, LicensePlate $licensePlate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicensePlate  $licensePlate
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicensePlate $licensePlate)
    {
        //
    }

    public function getLicensePlateByEndNumber($endNumber){
        $licensePlates = LicensePlate::where('number', 'LIKE', '%'.$endNumber)->get();
        return $licensePlates;
    }
}
