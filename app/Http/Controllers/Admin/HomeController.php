<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowRoom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = BorrowRoom::with(['user', 'room'])->get();

        $countPeminjamanBaru = BorrowRoom::where('admin_approval_status', 0)->count();
        $countPeminjamanDiterima = BorrowRoom::where('admin_approval_status', 1)->count();
        $countPeminjamanDitolak = BorrowRoom::where('admin_approval_status', 2)->count();

        return view('admin.hal_utama', [
            'datas' => $datas,
            'countPeminjamanBaru' => $countPeminjamanBaru,
            'countPeminjamanDiterima' => $countPeminjamanDiterima,
            'countPeminjamanDitolak' => $countPeminjamanDitolak,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
