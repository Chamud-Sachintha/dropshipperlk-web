<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $Category;
    private $Product;

    private $categoryList;

    public function __construct()
    {
        $this->Category = new Category();
        $this->Product = new Product();
    }

    public function getAllCategoryList(Request $request) {
        $resp = $this->Category->get_all();

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['categoryName'] = $value['category_name'];
        }

        $this->categoryList = $dataList;
        return view('welcome', ['data' => $dataList]);
    }

    public function getInsideCategortProductList(Request $request, $categoryId) {
        $resp = $this->Product->get_by_category($categoryId);

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['productName'] = $value['product_name'];
            $dataList[$key]['images'] = json_decode($value['images']);
        }

        $resp = $this->Category->get_all();

        $categoryList = array();
        foreach ($resp as $key => $value) {
            $categoryList[$key]['id'] = $value['id'];
            $categoryList[$key]['categoryName'] = $value['category_name'];
        }
        
        return view('category_products', ['data' => $dataList, 'category_list' => $categoryList]);
    }
}
