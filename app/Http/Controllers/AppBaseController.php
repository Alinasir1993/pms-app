<?php

namespace App\Http\Controllers;

use App\Models\AdminLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Utils\ResponseUtil;
use App\Http\Controllers\Controller as LaravelController;
use Modules\Common\Models\Location;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 *
 * @OA\Info(title="zurra pms Api", version="0.1")
 *
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends LaravelController
{
    public function sendResponse($result, $message = '', $extra = [])
    {
        return Response::json(array_merge(ResponseUtil::makeResponse($message, $result), $extra));
    }

    public function sendResponseArray($result, $message, $extra = [])
    {
        $result = ($result ? ($result == "[]" ? [] : $result) : json_decode("{}"));
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($message, $extra = [], $code = 404)
    {
        // NOTE: we are sending json as string for Mobile app
        $extra = ($extra == [] ? json_decode("{}") : $extra);
        return Response::json(["success" => false, "message" => (string)$message, "extra" => $extra]);
    }

    public function getLangMessages($path, $name = null)
    {
        if ($path) {
            if ($name) {
                return \Lang::get($path, ['name' => $name]);
            }
            return \Lang::get($path);
        } else {
            return "";
        }
    }

    public function getAuthUser(): ?User
    {
        return Auth::user();
    }

    public function getAuthUserId(): ?int
    {
        /** @var User $user */
        $user = Auth::user();

        if (!$user) {
            return null;
        }

        return $user->id;
    }
}
