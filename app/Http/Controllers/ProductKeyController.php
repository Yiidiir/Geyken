<?php

namespace App\Http\Controllers;

use App\ProductKey;
use Illuminate\Http\Request;

class ProductKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allKeys = ProductKey::all();
        return response()->json($allKeys);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(ProductKey::create(
            [
                'name' => $request->input('name'),
                'key' => str_random(64),
            ]
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ProductKey $productKey
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productKey = ProductKey::find($id);
        if ($productKey) {
            return response()->json($productKey);
        }
        return response()->json(['error' => 'Not found']
            , 422);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ProductKey $productKey
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductKey $productKey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ProductKey $productKey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductKey $productKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ProductKey $productKey
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productKey = ProductKey::find($id);
        if ($productKey) {
            $keyDeleted = $productKey->delete();
            if ($keyDeleted) {
                return response()->json(['success' => 'Product Key Deleted'], 200);
            }
        }
        return response()->json(['error' => 'Not found']
            , 422);
    }

    public function getKeysSorted($sort)
    {
        $sort = ($sort == 'asc') ? 'asc' : 'desc';
        $allKeysSorted = ProductKey::orderBy('created_at', $sort)->get();;
        return response()->json($allKeysSorted);
    }
}
