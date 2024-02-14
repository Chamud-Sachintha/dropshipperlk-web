<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $Category;
    private $Product;
    private $AppHelper;

    private $categoryList;

    public function __construct()
    {
        $this->Category = new Category();
        $this->Product = new Product();
        $this->AppHelper = new AppHelper();
    }

    public function getAllCategoryList(Request $request) {
        $resp = $this->Category->get_all();

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['categoryName'] = $value['category_name'];
        }

        $top_category_list = $this->getTopCategoryList();

        return view('welcome', ['data' => $dataList, 'top_category_list' => $top_category_list]);
    }

    public function getInsideCategortProductList(Request $request, $categoryId) {
        $resp = $this->Product->get_by_category($categoryId);
        $file_server_url = $this->AppHelper->getFilerServerUrl();

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['productName'] = $value['product_name'];
            $dataList[$key]['images'] = $file_server_url . json_decode($value['images'])->image0;
        }

        $resp = $this->Category->get_all();

        $categoryList = array();
        foreach ($resp as $key => $value) {
            $categoryList[$key]['id'] = $value['id'];
            $categoryList[$key]['categoryName'] = $value['category_name'];
        }
        
        return view('category_products', ['data' => $dataList, 'category_list' => $categoryList]);
    }

    private function getTopCategoryList() {
        $resp = $this->Category->get_first_five_categorylist();

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['categoryName'] = $value['category_name'];
        }

        return $dataList;
    }
}
