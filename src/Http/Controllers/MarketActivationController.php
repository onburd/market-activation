<?php

namespace Onburd\MarketActivation\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Onburd\MarketActivation\Models\MarketActivation;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
class MarketActivationController extends Controller
{


    public function getMarkets()
    {
        try {
            
            $data = MarketActivation::get();
            array_walk_recursive($data, function (&$value, $key) {
                if (isset($value['country_flag'])) {
                    $value['country_flag'] = env('ASSET_URL') . "/" . $value['country_flag'];
                }
            });
            if (count($data)) {
                return response()->json([
                    "status" => "success",
                    "status_code" => Response::HTTP_OK,
                    "message" => "successful",
                    "data" => $data,
                ], Response::HTTP_OK);
            } else {
                return response()->json([
                    "status" => "failure",
                    "status_code" => Response::HTTP_BAD_REQUEST,
                    "message" => "",
                    "data" => $data,
                ], Response::HTTP_BAD_REQUEST);
            }
        } catch (Exception $ex) {
            Log::alert("An error occurred!", $ex->getMessage());
        }
    }
}
