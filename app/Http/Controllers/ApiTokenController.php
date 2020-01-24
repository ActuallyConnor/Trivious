<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Class ApiTokenController
 * @package App\Http\Controllers
 *
 * Since the API tokens here have sufficient
 * entropy, it is impractical to create "rainbow tables" to
 * lookup the original value of the hashed token. Therefore,
 * slow hashing methods such as bcrypt() are unnecessary
 */

class ApiTokenController extends Controller {
    /**
     * Update the authenticated user's API token.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function update(Request $request) {
        $token = Str::random(80);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }
}
