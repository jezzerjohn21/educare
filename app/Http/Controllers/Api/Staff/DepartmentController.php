<?php

namespace App\Http\Controllers\Api\Staff;

use App\Http\Controllers\Controller;
use App\Http\Resources\Department\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return DepartmentResource::collection($departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:departments,name']
        ]);

        $department = Department::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $url = uploadFileToPublic($request->image, 'department');
            $department->update(['image' => $url]);
        }

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

$rem="Create Department ".$department;
$date_added=date("Y-m-d H:i:s");
		  mysqli_query($con,"INSERT INTO logs(user_id,remarks,date_added,ip) VALUES('$session_id','$rem','$date_added','$ip')")or die(mysqli_error($con));

        return responseSuccess('department', $department, 'Department Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return new DepartmentResource($department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => ['required', 'unique:departments,name,' . $department->id]
        ]);

        $department->update($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            deleteImage($department->image);
            $url = uploadFileToPublic($request->image, 'department');
            $department->update(['image' => $url]);
        }

        return responseSuccess('department', $department, 'Department Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department_image = $department->image;
        $deleted = $department->delete();
        $deleted ? deleteImage($department_image) : '';

        return responseSuccess('', '', 'Department Deleted successfully!');
    }
}
