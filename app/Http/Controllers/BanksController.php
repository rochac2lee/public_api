<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BanksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::select('id', 'code', 'name', 'ISPB')->get();

        return response(['status' => 'success', 'total' => sizeof($banks), 'data' => $banks], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $banks = Bank::where('code', $code)->get();

        if (!$banks) {
            return response(['status' => "error", 'data' => '', 'message' => "Banco não encontrado!"], 404);
        } else {
            return response(['status' => "success", 'data' => $banks, 'message' => ""], 200);
        }
    }

}
