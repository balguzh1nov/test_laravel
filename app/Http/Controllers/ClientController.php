<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

/**
 * @OA\Info(
 *     title="Client Management API",
 *     version="1.0.0",
 *     description="API для управления клиентами"
 * )
 */
class ClientController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/client/{phone_number}",
     *     tags={"Clients"},
     *     summary="Get client information",
     *     description="Get client information by phone number",
     *     @OA\Parameter(
     *         name="phone_number",
     *         in="path",
     *         description="Phone number of the client",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id", type="integer"),
     *             @OA\Property(property="phone_number", type="string"),
     *             @OA\Property(property="full_name", type="string"),
     *             @OA\Property(property="accumulated_points", type="integer"),
     *             @OA\Property(property="created_at", type="string", format="date-time"),
     *             @OA\Property(property="updated_at", type="string", format="date-time")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Client not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string")
     *         )
     *     )
     * )
     */
    public function getClientByPhoneNumber($phone_number)
    {
        try {
            $client = Client::where('phone_number', $phone_number)->first();

            if ($client) {
                return response()->json($client);
            } else {
                return response()->json(['error' => 'Client not found'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error retrieving client: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
