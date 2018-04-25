<?php
/**
 * Created by PhpStorm.
 * User: mpthuispc
 * Date: 25-4-18
 * Time: 15:17
 */

namespace App\Http\Controllers;

use App\Teksten;

class PageController
{
    /**
     * Show a list of all available flights.
     *
     * @return Response
     */
    public function getTeksten()
    {
        $teksten = Teksten::all();
            return view('index', compact('teksten'));
    }
}