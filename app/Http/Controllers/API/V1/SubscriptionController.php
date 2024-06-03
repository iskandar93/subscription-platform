<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        $data = Bill::all();

        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
}
