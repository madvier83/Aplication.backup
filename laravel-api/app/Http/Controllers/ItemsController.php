<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Dotenv\Validator;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::get();
        $response = [
            'message' => 'Get all item',
            'data' => $items
        ];

        return response()->json([$response, Response::HTTP_OK]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'qty' => 'required|numeric'
        ]);

        try {
            $request = Item::create($request);
            $response = [
                'message' => 'Item data stored',
                'data' => $request
            ];
            return response()->json([$response], Response::HTTP_CREATED);

        } catch(QueryException $e) {
            return response()->json(['message' => 'Failed '.$e->errorInfo]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::where('id', $id)->first();
        $response = [
            'message' => 'Get item where id = '.$id,
            'data' => $items
        ];

        return response()->json([$response, Response::HTTP_OK]);
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
        $item = Item::findOrFail($id);

        $request = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'qty' => 'required|numeric'
        ]);
        
        try {
            $request = $item->update($request);
            $response = [
                'message' => 'Item data updated',
                'data' => $request
            ];
            return response()->json([$response, Response::HTTP_OK]);

        } catch(QueryException $e) {
            return response()->json(['message' => 'Failed '.$e->errorInfo]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $request = Item::destroy($id);
            $response = [
                'message' => 'Item data deleted',
                'data' => $request
            ];
            return response()->json([$response, Response::HTTP_OK]);

        } catch(QueryException $e) {
            return response()->json(['message' => 'Failed '.$e->errorInfo]);
        }
    }
}
