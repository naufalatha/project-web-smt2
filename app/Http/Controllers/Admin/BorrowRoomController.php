<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = BorrowRoom::with(['user', 'room'])->get();

        return view('admin.peminjaman', [
            'datas' => $datas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.borrow-room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datas = BorrowRoom::with(['user', 'room'])->findOrFail($id);

        return view('admin.borrow-room.show', [
            'datas' => $datas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datas = BorrowRoom::with(['user', 'room'])->findOrFail($id);

        return view('admin.borrow-room.edit', [
            'datas' => $datas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update data
        $data = BorrowRoom::findOrFail($id);

        $data->update([
            'user_id' => $request->user_id,
            'room_id' => $request->room_id,
            'borrow_at' => Carbon::parse($request->borrow_at),
            'until_at' => Carbon::parse($request->until_at),
            'admin_approval_status' => $request->admin_approval_status,
            'processed_at' => Carbon::parse($request->processed_at),
            'returned_at' => Carbon::parse($request->returned_at),
            'notes' => $request->notes,
        ]);

        return redirect()->route('admin.borrow-room.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete data
        $data = BorrowRoom::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.borrow-room.index')->with('success', 'Data berhasil dihapus!');
    }
}
