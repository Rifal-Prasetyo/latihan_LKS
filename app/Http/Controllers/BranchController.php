<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site = [
            'title' => 'BRANCH'
        ];
        $branches = Branch::latest()->get();
        return view('page.dashboardV2.branch.branchAll', compact('site', 'branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required'
        ]);

        if ($validate) {
            Branch::create([
                'name' => $request->name
            ]);
        }
        return redirect()->back()->with(['info' => 'info_success', 'message' => 'Berhasil Menambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $branch = Branch::find($id);
        $site = [
            'title' => 'Edit Branch ' . $branch->name
        ];
        return view('page.dashboardV2.branch.action.editBranch', compact('site', 'branch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $validate = $request->validate([
            'id' => 'required',
            'name' => 'required'
        ]);
        if ($validate) {
            $branch = Branch::find($request->id);
            $branch->update($validate);
        }
        return redirect()->back()->with('status', "berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $branch = Branch::find($id);
        $branch->delete();
        return redirect()->back()->with(['info' => 'info_danger', 'message' => 'Berhasil Hapus']);
    }
}
