<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class MultibotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'Multibot interface';
    }

    /**
     * Show the multibot dashboard.
     *
     * @return view
     */
    public function applications()
    {
        $applications = Application::all();
        $appArray = [];

        foreach($applications as $application) {
            $push = [
                'id' => $application['id'],
                'name' => $application['name'],
                'age' => $application['age'],
                'location' => $application['location'],
                'game' => $application['game'],
                'current' => $application['current'],
                'conduct' => $application['conduct'],
                'reference' => $application['reference'],
                'application_date' => $application['application_date'],
                'status' => $application['status']
            ];

            array_push($appArray, $push);
        }

        return view('vendor.voyager.multibot.applications.browse')->with('applications', $appArray);
    }
}
