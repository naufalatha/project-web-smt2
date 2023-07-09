<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.room.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'max_people' => 'required|integer',
            'status' => 'required',
        ]);

        $room = Room::create($validation);

        return redirect()->route('admin.room.index')->with('success', 'Room has been created!');
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
        return view('admin.room.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::findOrFail($id);

        $room->update($request->all());

        return redirect()->route('admin.room.index')->with('success', 'Room has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);

        $room->delete();

        return redirect()->route('admin.room.index')->with('success', 'Room has been deleted!');
    }
}
