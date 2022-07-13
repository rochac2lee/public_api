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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Bank::where('code', $request->code)->first()) {
            return response(['status' => "error", 'message' => "Já existe um banco com esse código!"], 409);
        } else {

            $banks = Bank::create([
                'code' => $request->code,
                'name' => $request->name,
                'ISPB' => $request->ISPB
            ]);

            $banks = json_decode($banks);

            return response(['status' => "success", 'data' => $banks, 'message' => "Banco cadastrado com sucesso!"], 201);
        }
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banks = Bank::find($id);

        if (!$banks) {
            return response(['status' => "error", 'data' => '', 'message' => "Usuário não encontrado!"], 404);
        } else {

            if (isset($request->password)) {
                $password = md5($request->password);
            } else {
                $password = $banks->password;
            }

            $request = $request->all();
            $request['password'] = $password;
            $banks->update($request);

            return response(['status' => "success", 'data' => $banks, 'message' => "Usuário $banks->name atualizado com sucesso!"], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banks = Bank::find($id);

        if (!$banks) {
            return response(['status' => "error", 'data' => '', 'message' => "Usuário não encontrado!"], 404);
        } else {

            $banks->delete();

            return response(['status' => "success", 'message' => "Usuário $banks->name excluído com sucesso!"], 200);
        }
    }
}
