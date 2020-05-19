<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;

class CostController extends Controller
{
    public function index()
    {
        $costs = Cost::orderBy('created_at', 'DESC')->paginate(10);
        return view('costs.index', compact('costs'));
    }

    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'nullable|string',
            'amount' => 'required|integer'
        ]);
    
        try {
            $cost = Cost::create([
                'name' => $request->name,
                'description' => $request->description,
                'amount' => $request->amount
            ]);
            return redirect()->back()->with(['success' => 'Biaya Operasional: ' . $cost->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $costs = Cost::findOrFail($id);
        $costs->delete();
        return redirect()->back()->with(['success' => 'Biaya Operasional: ' . $costs->name . ' Telah Dihapus']);
    }

    public function edit($id)
    {
        $costs = Cost::findOrFail($id);
        return view('costs.edit', compact('costs'));
    }

    public function update(Request $request, $id)
    {
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'nullable|string',
            'amount' => 'required|integer'
        ]);
    
        try {
            //select data berdasarkan id
            $costs = Cost::findOrFail($id);
            //update data
            $costs->update([
                'name' => $request->name,
                'description' => $request->description,
                'amount' => $request->amount
            ]);
            
            //redirect ke route kategori.index
            return redirect(route('biaya.index'))->with(['success' => 'Biaya Operasional: ' . $costs->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            //jika gagal, redirect ke form yang sama lalu membuat flash message error
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
