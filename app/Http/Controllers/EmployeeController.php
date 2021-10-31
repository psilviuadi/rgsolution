<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RewardGatewayService;

class EmployeeController extends Controller
{
    private $rewardGatewayService;

    public function __construct(RewardGatewayService $rewardGatewayService)
    {
        $this->rewardGatewayService = $rewardGatewayService;
    }

    public function getRGEmployees(Request $request)
    {
        $data = $this->rewardGatewayService->getEmployeesList();
        return $data;
    }

    public function getHomePage()
    {
        $employees = $this->rewardGatewayService->getEmployeesList();
        if (!is_null($employees)) {
            return view('welcome')->with('employees', $employees);
        }
        return abort(500);
    }
}
