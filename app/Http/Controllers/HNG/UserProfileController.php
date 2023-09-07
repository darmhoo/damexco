<?php
namespace App\Http\Controllers\HNG;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;




class UserProfileController extends Controller
{
    public function getProfile(Request $request){
        $validated = $request->validate([ 
            'slack_name' => 'required',
            'track' => 'required'
        ]);
        return response()->json(
            [
                "slack_name" => $validated['slack_name'],
                "track" =>$validated['track'],
                "current_day" => Carbon::now()->dayName,
                "utc_time" => Carbon::now()->utc(),
                "github_file_url" => 'https://github.com/darmhoo/damexco/blob/master/app/Http/Controllers/HNG/UserProfileController.php',
                "github_repo_url" => 'https://github.com/darmhoo/damexco',
                "status_code" => 200
            ], 200
        );
    }
}