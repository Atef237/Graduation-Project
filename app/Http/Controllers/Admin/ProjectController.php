<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Projet\Store;
use App\Models\DonationScope;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index()
    {
        $rows = Project::all();
        return view('dashboard.v1.project.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function create()
    {
        $donation_scopes = DonationScope::where('status', 'active')->get();
        return view('dashboard.v1.project.create',compact('donation_scopes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Store $request)
    {
        $donationScope = Project::create($request->validated() + ['admin_id' => auth('admin')->id()]);
        if ($request->hasFile('image')) {
            $donationScope->clearMediaCollection('image');
            $donationScope->addMedia($request->file('image'))->toMediaCollection('image');

        }

        success_toast();
        return redirect()->route('donation_projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show($id)
    {
        $row = DonationScope::findOrFail($id);
        return view('dashboard.v1.scope.show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function edit($id)
    {
        $row = DonationScope::findOrFail($id);
        return view('dashboard.v1.scope.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(update $request, $id)
    {
        $donationScope = DonationScope::findOrFail($id);
        $donationScope->update($request->validated());
        if ($request->hasFile('icon')) {
            $donationScope->clearMediaCollection('icon');
            $donationScope->addMedia($request->file('icon'))->toMediaCollection('icon');
        }
        success_toast();
        return redirect()->route('donation_scopes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->route('dashboard.v1.project.index');
    }
}
