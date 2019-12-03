<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Config;
use App\News;
use App\Product;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    /**
     * Get home page
     */
    public function getHome()
    {

        $productModel = new Product();
        $products = $productModel->getListProduct()->groupBy('type');
        $this->data['products'] = $products;

        $newsModel = new News();
        $newss = $newsModel->getListNews();
        $this->data['newss'] = $newss;
        $this->data['list5'] = $productModel->getList5Product();

        // echo "<pre>";
        // print_r($products);die;
        config(['config.title' => 'Trang chủ']);
        return view('frontend.index', $this->data);

    }

    public function getIntro()
    {
        $newsModel = new News();
        $this->data['news'] = $newsModel->getIntro();
        $this->data['newsRelated'] = $newsModel->getList5NewestNews();
        config(['config.title' => 'Giới thiệu']);
        return view('frontend.intro', $this->data);

    }

    /**
     * Get product page
     */
    public function getAllProduct()
    {

        $productModel = new Product();
        $products = $productModel->getListProduct();
        $this->data['products'] = $products;

        $this->data['title'] = "Sản phẩm";

        return view('frontend.product', $this->data);

    }

    /**
     * Get cate page
     */
    public function getCate($cate)
    {

        if (array_search($cate, config('config.cate')) === false) {
            return $this->getProduct($cate);
        } else {
            $productModel = new Product();
            $products = $productModel->getListProductByType(array_search($cate, config('config.cate')));
            $this->data['products'] = $products;

            $this->data['title'] = config('config.cate_name')[array_search($cate, config('config.cate'))][0];
            $this->data['description'] = config('config.cate_name')[array_search($cate, config('config.cate'))][1];
            config(['config.title' => $this->data['title']]);
            return view('frontend.product', $this->data);
        }

    }

    /**
     * Get product page
     */
    public function getProduct($product)
    {

        $productModel = new Product();
        $newsModel = new News();
        $product = $productModel->getProductBySlug($product);

        if ($product) {
            $productRelated = $productModel->getListProductByTypeRelate($product->type, $product->slug);
            $this->data['productRelated'] = $productRelated;

            $this->data['product'] = $product;
            $this->data['newsRelated'] = $newsModel->getList3NewestNews();
            // $this->data['cate_name'] = config('config.cate_name')[$product->type][0];

            config(['config.title' => $product->title, 'config.description' => $product->description]);
            return view('frontend.product-detail', $this->data);
        } else {
            return view('404', $this->data);
        }
    }

    /**
     * Get news page
     */
    public function getAllNews()
    {

        $newsModel = new News();
        $newss = $newsModel->getListNews();
        $this->data['newss'] = $newss;
        $this->data['news_5'] = $newsModel->getList5NewestNews();
        config(['config.title' => 'Tin tức']);
        return view('frontend.news', $this->data);

    }

    /**
     * Get news detail page
     */
    public function getNews($news)
    {

        $newsModel = new News();
        $news = $newsModel->getNewsBySlug($news);

        if ($news) {
            $newsRelated = $newsModel->getListNewsRelate($news->slug);
            $this->data['newsRelated'] = $newsModel->getList5NewestNews();

            $this->data['news'] = $news;
            config(['config.title' => $news->title, 'config.description' => $news->description]);
            return view('frontend.news-detail', $this->data);
        } else {
            return view('404', $this->data);
        }
    }

    /**
     * Get store page
     */
    public function getAllStore()
    {

        $storeModel = new Store();
        $stores = $storeModel->getListStore();
        $this->data['stores'] = $stores;

        return view('frontend.store', $this->data);

    }

    /**
     * Get store detail page
     */
    public function getStore($store)
    {

        $storeModel = new Store();
        $store = $storeModel->getStoreBySlug($store);

        if ($store) {
            $storeRelated = $storeModel->getListStoreRelate($store->slug);
            $this->data['storeRelated'] = $storeRelated;

            $this->data['store'] = $store;
            config(['config.title' => $store->title]);
            return view('frontend.store-detail', $this->data);
        } else {
            return view('404', $this->data);
        }
    }

    /**
     * Get cart page
     */
    public function getCart()
    {
        return view('frontend.cart');
    }

    /**
     * Add cart
     */
    public function postAddCart(Request $request)
    {

        // Get data in form
        $cart = $request->input('cart');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');
        $note = $request->input('note');

        // Check data
        if (!$name || !$phone || !$address) {
            return back();
        }

        // Check product in cart
        $carts = json_decode($cart, true);
        if (isset($carts[0]) && count($carts[0]) > 0) {
            $carts = $carts[0];
        } else {
            return back();
        }
        $productIds = [];

        foreach ($carts as $key => $value) {
            if ($value) {
                $productIds[] = $key;
            }
        }

        if (count($productIds) <= 0) {
            return back();
        }

        // Get product info
        $productModel = new Product();
        $products = $productModel->getListProductById($productIds);

        if (count($products) <= 0) {
            return back();
        }

        // Add cart
        $cartData = [
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'email' => $email,
            'note' => $note,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $cartModal = new Cart();
        $cartId = $cartModal->insertGetIdCart($cartData);

        // Add cart detail
        $cartDetailData = [];
        foreach ($products as $item) {
            $cartDetailData[] = [
                'cart_id' => $cartId,
                'product_id' => $item->id,
                'number' => $carts[$item->id]['number'],
                'price' => $item->price,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        DB::table('cart_detail')->insert($cartDetailData);

        return redirect()->route('getHome')->with('ordersuccess', 'Đặt hàng thành công!');
    }

}