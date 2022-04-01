<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\CreatFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\menu\MenuService;
use Illuminate\Support\Facades\DB;
class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService=$menuService;
    }

    public function create()
    {
        return view('admin.menu.add');
    }
    public function store(CreatFormRequest $request){
        $this->menuService->create($request);
        return redirect()->back();
    }
    public function index(){
       $query=DB::table('users');
       $query=$query->orderBy('id','Desc');
       $query=$query->select('*');
       $data=$query->paginate(15);
       return view ('admin.menu.list',$data);
   
    }
}
