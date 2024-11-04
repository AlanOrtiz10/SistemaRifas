<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRifaRequest;
use App\Models\Rifa;
use Illuminate\Http\Request;

class RifaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rifa::all();
        return view('content.pages.admin.rifas.index', compact('data'));
    }

    public function store(StoreRifaRequest $request)
    {
        $rifa = Rifa::create($request->validated());
        return redirect()->route('rifas.index')
                ->with('success', 'Rifa creada exitosamente.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $rifa = Rifa::findOrFail($id);
        return response()->json($rifa);
    }

    public function update(StoreRifaRequest $request, string $id)
    {
        $rifa = Rifa::findOrFail($id);
        $rifa->update($request->validated());
        
        return redirect()->route('rifas.index')
                ->with('success', 'Rifa actualizada exitosamente.');
    }

    public function destroy(string $id)
    {
        $rifa = Rifa::findOrFail($id);
        $rifa->delete();
        
        return redirect()->route('rifas.index')
                ->with('success', 'Rifa eliminada exitosamente');
    }
}
