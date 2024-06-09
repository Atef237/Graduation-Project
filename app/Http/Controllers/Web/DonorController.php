<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\web\DonorRegister;
use App\Http\Requests\web\ProjectUserStore;
use App\Models\DonationScope;
use App\Models\Donor;
use App\Models\DonorProject;
use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DonorController extends Controller
{
    public function index()
    {
        $rows = DonationScope::where('status', 'active')->get();
        $projects = Project::all();

        return view('web.allProjects', compact(['rows','projects']));
    }


    public function authDonor()
    {
        return view('web.donorAuth');
    }


    public function showDonorRegisterForm()
    {
        return view('web.donorRegister');
    }

    public function showDonorLoginForm()
    {
        return view('web.donorLogin');
    }
    public function donorLogin(Request $request)
    {
        $request->validate([
            ' phone' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['phone' => $request->phone, 'password' => $request->password])) {
            return redirect()->route('home');
        }
    }


    public function donorRegister(DonorRegister $request)
    {
//        dd('hello');
        $donor = Donor::create($request->validated());
        auth()->login($donor);

        return redirect()->route('home');

    }


    public function askingForDonation()
    {
        $rows = DonationScope::where('status', 'active')->get();
        $projects = Project::all();
        return view('web.askingForDonation', compact(['rows','projects']));
    }


    public function storeAskingForDonation(ProjectUserStore $request)
    {
        ProjectUser::create($request->validated() + ['user_id' => auth()->user()->id]);

        return redirect()->route('home');
    }

    public function donorRequest(Request $request)
    {
        DonorProject::create(['project_id' => $request->project_id,'donor_id' => auth()->user()->id,'amount' => $request->amount]);
        $project = Project::find($request->project_id);
        $project->update(['financial_balance' => $project->financial_balance - $request->amount]);

        return redirect()->route('home');
    }
}
