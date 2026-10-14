<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rentalscontroller extends Controller
{

    private function datasewa()
    {
        return [
            ['id' => 1, 'plat_nomor' => 'M 1234 AB', 'merek' => 'Toyota Avanza', 'jenis' => 'mobil', 'tarif_per_hari' => '350.0000'],
            ['id' => 2, 'plat_nomor' => 'M 5678 CD', 'merek' => 'Honda Brio', 'jenis' => 'mobil', 'tarif_per_hari' => '300.000'],
            ['id' => 3, 'plat_nomor' => 'M 2468 EF', 'merek' => 'Honda Beat', 'jenis' => 'motor', 'tarif_per_hari' => '80.000'],
            ['id' => 4, 'plat_nomor' => 'M 1357 GH', 'merek' => 'Yamaha NMAX', 'jenis' => 'motor', 'tarif_per_hari' => '120.000'],
            
        ];
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
