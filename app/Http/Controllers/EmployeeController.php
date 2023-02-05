<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee_add(Request $request)
    {
        $insert = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $add = Employee::create($insert);

        if ($add) {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record created successfully'
            ];
            return $response;
        } else {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record created failed'
            ];
            return $response;
        }
    }

    public function employee_view(Request $request)
    {
        return Employee::find($request->id);
    }

    public function employee_delete(Request $request)
    {
        $delete = Employee::destroy($request->id);

        if ($delete) {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record deleted successfully'
            ];
            return $response;
        } else {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record deleted failed'
            ];
            return $response;
        }
    }

    public function employee_edit(Request $request)
    {
        $update = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];

        $edit = Employee::where('id', $request->id)->update($update);

        if ($edit) {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record updated successfully'
            ];
            return $response;
        } else {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record updated failed'
            ];
            return $response;
        }
    }

    public function employee_list()
    {
        return Employee::all();
    }
}
