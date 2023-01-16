<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = menu::all();
        return response() ->json([
            'status' => 200,
            'menu' => $menu
        ]);
    }

}
