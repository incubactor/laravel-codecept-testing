<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class GetUser
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function __invoke(Request $request) {
        return $request->user();
    }
}
