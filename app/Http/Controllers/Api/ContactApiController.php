<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactApiController extends Controller
{
    public function friends()
    {
        return response()->json(Contact::all());
    }
}
