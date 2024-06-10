<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\DonationScope\Store;
use App\Http\Requests\Admin\DonationScope\update;
use App\Models\DonationScope;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index()
    {
        $rows = DonationScope::all();
        return view('dashboard.v1.scope.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.v1.scope.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Store $request)
    {
        $donationScope = DonationScope::create($request->validated() + ['admin_id' => auth('admin')->user()->id] );
        return redirect()->route('donation_scopes.index');
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
        DonationScope::findOrFail($id)->delete();
        return redirect()->route('donation_scopes.index');
    }
}
