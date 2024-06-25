<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Services\BrandServices;
use BrandStoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\BrandUpdateRequest;

class BrandController extends Controller
{

    public function __construct(protected BrandServices $brandServices)
    {
        
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $brands = $this->brandServices->list();

       return response()->json($brands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandStoreRequest $request)
    {
      $brand = $this->brandServices->store($request);

      return response()->json($brand);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return response()->json($brand);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandUpdateRequest $request, Brand $brand)
    {
        $brand = $this->brandServices->update($request, $brand);

        return response()->json($brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
