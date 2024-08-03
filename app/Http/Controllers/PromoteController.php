<?php
namespace App\Http\Controllers;

use App\Models\Promote;
use App\Http\Requests\StorePromoteRequest;
use App\Http\Requests\UpdatePromoteRequest;

class PromoteController extends Controller
{
    public function index()
    {
        $promotes = Promote::all();
        return view('admin.promotes.index', compact('promotes'));
    }
    public function show(Promote $promote)
    {
        return view('admin.promotes.show', compact('promote'));
    }

    public function edit(Promote $promote)
    {
        return view('admin.promotes.edit', compact('promote'));
    }

    public function update(UpdatePromoteRequest $request, Promote $promote)
    {
        $promote->update($request->all());
        return redirect()->route('admin.promotes.index')->with('success', 'Promotion updated successfully.');
    }

    public function destroy(Promote $promote)
    {
        $promote->delete();
        return redirect()->route('admin.promotes.index')->with('success', 'Promotion deleted successfully.');
    }
}
