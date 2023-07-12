<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = Room::all();
        return view('admin.room', [
            'room' => $room,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $room_types = RoomType::all();

        return view('admin.tambah_room', [
            'room_types' => $room_types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // request all
        $validation = $request->all();

        // create
        Room::create($validation);

        return redirect()->route('admin.ruangan')->with('success', 'Room has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Room::findOrFail($id);

        return view('admin.room.show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Room::findOrFail($id);
        $room_types = RoomType::all();

        return view('admin.edit_room', [
            'data' => $data,
            'room_types' => $room_types,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::findOrFail($id);

        $room->update($request->all());

        return redirect()->route('admin.ruangan')->with('success', 'Room has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('admin.ruangan')->with('success', 'Room has been deleted!');
    }
}
