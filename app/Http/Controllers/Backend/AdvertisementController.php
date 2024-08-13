<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('advertisement.index',compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $advertisement = new Advertisement();
        $advertisement->title = $request->title;
        uploadFile($request,$advertisement,"image");
        $advertisement->redirect_to = $request->redirect_to;
        $advertisement->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advertisement = Advertisement::find($id);
        return view('advertisement.edit',compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $advertisement = Advertisement::find($id);
        $advertisement->title = $request->title;
        uploadFile($request,$advertisement,"image");
        $advertisement->redirect_to = $request->redirect_to;
        $advertisement->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
