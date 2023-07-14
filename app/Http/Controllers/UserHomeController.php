<?php

namespace App\Http\Controllers;

use App\Models\Room;

class UserHomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $room = Room::with('roomType')->get();

        return view('index', [
            'rooms' => $room,
        ]);
    }
}
