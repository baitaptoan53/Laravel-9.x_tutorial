<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(Request $request)
    {
        if($request->is('categories')){
            echo '<h3> Day la duong dan categories</h3>';
        }
    }
    //Hien thi danh sach chuyen muc phuong thuc Get)
    public function index(Request $request)
    {
        // $allData= $request ->all();
        // dd($allData);
        $path = $request->path();
        echo $path;
        return view('/clients/categories/list');
    }

    //lay ra 1 chuyen muc theo id (phuong thuc get)
    public function getCategories($id)
    {
        return view('/clients/categories/edit');
    }

    //cap nhat 1 chuyen muc (phuowng thuc PUT/PACTCH)
    public function updateCategories($id)
    {
        return 'Submit sua chuyen muc' . $id;
    }

    //Them du lieu vao chuyen muc (phuong thuc post)
    public function handCategories(Request $request)
    {
        $allData = $request->all();

        dd($allData);
        // return redirect(route('Categories.add'));
        // return 'submit them chuyen muc';
    }
    //show form them du lieu (phuong thuc Get)
    public function addCategories()
    {
        return view('/clients/categories/add');
    }
    //xoa du lieu (phuong thuc delete)
    public function deleteCategories()
    {
        return 'Submit xoa chuyen muc';
    }
}
