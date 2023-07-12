<?php

namespace App\Http\Controllers;

use App\Models\BorrowRoom;
use Illuminate\Http\Request;

class BorrowRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.peminjaman');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrow-room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'borrow_at' => 'required|date',
            'until_at' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $borrowRoom = BorrowRoom::create([
            'user_id' => auth()->user()->id,
            'room_id' => $validation['room_id'],
            'borrow_at' => $validation['borrow_at'],
            'until_at' => $validation['until_at'],
            'admin_approval_status' => 0, // 0 = 'pending', 1 = 'approved', 2 = 'rejected'
            'notes' => $validation['notes'],
        ]);

        return redirect()->route('borrow-room.show', $borrowRoom->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
