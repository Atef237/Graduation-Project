<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonorProject;
use App\Models\ProjectUser;
use Illuminate\Http\Request;

class SupportRequestContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index()
    {
        $rows = ProjectUser::where('status', 'pending')->get();
        return view('dashboard.v1.userProject.index', compact('rows'));
    }

    public function supportRequestAccepted()
    {
        $rows = ProjectUser::where('status', 'accepted')->get();
        return view('dashboard.v1.userProject.index', compact('rows'));
    }

    public function supportRequestRejected()
    {
        $rows = ProjectUser::where('status', 'rejected')->get();
        return view('dashboard.v1.userProject.index', compact('rows'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show($id)
    {
        $row = ProjectUser::find($id);
        return view('dashboard.v1.userProject.show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function accept(Request $request)
    {
        $row = ProjectUser::find($request->id);
        $row->update(['status' => 'accepted','admin_id' => auth('admin')->user()->id]);
        $row->save();
        return redirect()->route('donor_request.index');
    }


    public function reject(Request $request)
    {
        $row = ProjectUser::find($request->id);
        $row->update(['status' => 'rejected','admin_id' => auth('admin')->user()->id]);
        $row->save();
        return redirect()->route('donor_request.index');
    }


    public function donorProject()
    {
        $rows = DonorProject::all();
        return view('dashboard.v1.DonorProject.index', compact('rows'));
    }
}
