<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\DiscordMember;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;

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
                'application_date' => $application['created_at'],
                'status' => $application['status']
            ];

            array_push($appArray, $push);
        }

        return view('vendor.voyager.multibot.applications.index')->with('applications', $appArray);
    }

    public function create() {
        $modifiedUsers = [];
        $users = DiscordMember::all();
        foreach($users as $user) {
            $modifiedUsers[$user['discord_id']] = $user['name'];
        }
        return view('vendor.voyager.multibot.applications.create')->with('users', $modifiedUsers);
    }

    public function save() {
        // Get all inputs
        $inputs = str_replace(',', '-', Input::all());

        $existingApp = Application::where('reference', $inputs['reference'])->get();

        if(count($existingApp) == 0) {
            // Create a new application record
            $application = new Application();
            $application->name = $inputs['name'];
            $application->age = $inputs['age'];
            $application->location = $inputs['location'];
            $application->game = $inputs['interests'];
            $application->current = $inputs['current'];
            $application->conduct = $inputs['conduct'];
            $application->reference = $inputs['reference'];
            $application->status = 'Applied (Manual)';
            $application->save();

            $notification = array(
                'message' => 'Application created successfully!', 
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Application already exists for user: ' . $inputs['reference'], 
                'alert-type' => 'error'
            );
        }

        return Redirect::to('/admin/multibot/applications')->with($notification);
    }

    public function handle() {
        // Get all inputs
        $inputs = Input::all();

        // Default to accept
        $handle = 'accept';

        // See if its decline or accept
        if(isset($inputs['decline'])) {
            $handle = 'decline';
        }

        // Set default notification
        $notification = array(
            'message' => 'Application accepted/declined successfully!', 
            'alert-type' => 'success'
        );

        // Loop through selected applications
        foreach($inputs['selectedApps'] as $userId) {
            switch($handle) {
                case 'accept':
                    $this->acceptApplication($userId);
                    break;
                case 'decline':
                    $this->declineApplication($userId);
                    break;
                default:
                    $this->acceptApplication($userId);
            }
        }

        return Redirect::to('/admin/multibot/applications')->with($notification);
    }

    public function acceptApplication($userId) {
        
        $client = new Client();

        $discord = $client->post('http://localhost:3502/acceptApplication', [
            'form_params' => [
                'userId' => $userId
            ],
        ]);
    }

    public function declineApplication($userId) {
        $client = new Client();

        $discord = $client->post('http://localhost:3502/declineApplication', [
            'form_params' => [
                'userId' => $userId
            ],
        ]);
    }

    public function statistics() {
        return view('vendor.voyager.multibot.statistics.index');
    }
}
