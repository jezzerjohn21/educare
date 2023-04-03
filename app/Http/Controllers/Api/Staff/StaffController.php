<?php

namespace App\Http\Controllers\Api\Staff;

use App\Models\User;
use App\Models\Staff;
use App\Http\Requests\StaffRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\Staff\StaffResource;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::with('user')->paginate(12);

        return StaffResource::collection($staffs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $data = $request->except(['role', 'password']) + ['role' => 'staff', 'password' => bcrypt($request->password)];

        $user = User::create($data);
        $staff  = Staff::create($request->all() + ['user_id' => $user->id]);


$con = mysqli_connect("localhost","root","","appfinal");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  date_default_timezone_set('Asia/Manila');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$session_id = "1";

$rem="Create Staff ".$staff;
$date_added=date("Y-m-d H:i:s");
		  mysqli_query($con,"INSERT INTO logs(user_id,remarks,date_added,ip) VALUES('$session_id','$rem','$date_added','$ip')")or die(mysqli_error($con));

        return responseSuccess('staff', $staff, 'Staff create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return new StaffResource($staff->load('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, Staff $staff)
    {
        $staff->update($request->except('user_id'));
        $staff->user()->update($request->only(['name', 'email']));

        return responseSuccess('staff', $staff);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->user()->delete();
        $staff->delete();

        return responseSuccess('staff', null, 'Staff delete successfully!');
    }
}
