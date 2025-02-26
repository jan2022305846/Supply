<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InventoryItem;

class InventoryItemController extends Controller
{
    /*
     *  Read All Data
     */
    public function index()
    {
        return InventoryItem::all();
    }

    /**
     * Create Data
     */
    public function store(Request $request)
    {
        $item = InventoryItem::create($request->all());
        return response()->json($item, 201);
    }

    /**
     * Show and Read all Data
     */
    public function show(string $id)
    {
        return InventoryItem::findOrFail($id);
    }

    /**
     * Update Data
     */
    public function update(Request $request, string $id)
    {
        $item = InventoryItem::findOrFail($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    /**
     * Delete Data
     */
    public function destroy(string $id)
    {
        InventoryItem::destroy($id);
        return response()->json(null, 204);
    }
}
