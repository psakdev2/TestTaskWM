<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::all();

        return response()->json([
        'status' => true,
        'message' => 'Doctors retrieved successfully',
        'data' => $doctors
        ]);
    }

    public function networkAggregates($id, Request $request): JsonResponse {
        $doctor = Doctor::with(['specializations', 'network'])->findOrFail($id);

        return response()->json([
            'status' => true,
            'message' => 'Doctor network aggregated found successfully',
            'data' => $doctor,
        ]);
    }
}
