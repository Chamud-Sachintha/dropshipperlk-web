<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Models\Category;
use App\Models\Product;
use App\Models\SiteBanner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $Category;
    private $Product;
    private $AppHelper;
    private $SiteBanner;

    private $categoryList;

    public function __construct()
    {
        $this->Category = new Category();
        $this->Product = new Product();
        $this->AppHelper = new AppHelper();
        $this->SiteBanner = new SiteBanner();
    }

    public function getAllCategoryList(Request $request) {
        $resp = $this->Category->get_all();

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['categoryName'] = $value['category_name'];
        }

        $top_category_list = $this->getTopCategoryList();
        $get_banner = $this->getSiteBannerImage();
        $featured_list = $this->getFeaturedProductList();
        $allproListt = $this->getproalllist();
       // DD($featured_list);
        return view('welcome', ['data' => $dataList, 'top_category_list' => $top_category_list, 'banner' => $get_banner, 'featured_list' => $featured_list, 'allproduct' => $allproListt ]);
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

    private function getFeaturedProductList() {
        $file_server_url = $this->AppHelper->getFilerServerUrl();
        $resp = $this->Product->get_featured_list();

        $dataList = array();
        foreach ($resp as $key => $value) {
            $dataList[$key]['id'] = $value['id'];
            $dataList[$key]['productName'] = $value['product_name'];
            $dataList[$key]['productPrice'] = $value['price'];
            $dataList[$key]['productweigth'] = $value['weight'];
            $dataList[$key]['images'] = $file_server_url . json_decode($value['images'])->image0;
        }

        return $dataList;
    }

    private function getSiteBannerImage() {

        $images = $this->SiteBanner->get_banner();

        $banner = $images[0]->banner_img;
        return $this->AppHelper->getAdminUrl() . "banners" . "/" . $banner;
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

    private function getproalllist()
    {
        $file_server_url = $this->AppHelper->getFilerServerUrl();
        $rep = $this->Product->get_product_all();

        $proArrayList = array();
        foreach( $rep as  $val => $item ){
            $proArrayList[$val]['productId'] = $item['id'];
            $proArrayList[$val]['product_name']= $item['id'];
            $proArrayList[$val]['price']= $item['id'];
            $proArrayList[$val]['category']= $item['id'];
            $proArrayList[$val]['team_commision']= $item['id'];
            $proArrayList[$val]['direct_commision']= $item['id'];
            $proArrayList[$val]['is_store_pick']= $item['id'];
            $proArrayList[$val]['waranty']= $item['id'];
            $proArrayList[$val]['description']= $item['id'];
            $proArrayList[$val]['weight']= $item['id'];
            $proArrayList[$val]['supplier_name']= $item['id'];
            $proArrayList[$val]['stock_count']= $item['id'];
            $proArrayList[$val]['images']= $file_server_url . json_decode($item['images'])->image0;
        }

        //dd($proArrayList);
        return $proArrayList;
    }

    public function AboutUs(){
        return view('AboutUs');
    }
}
