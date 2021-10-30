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
        return $this->rewardGatewayService->getEmployeesList();
    }
}
