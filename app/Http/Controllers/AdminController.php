<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Cart;
use App\Cate;
use App\Config;
use App\News;
use App\Product;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    /**
     * Get login page
     */
    public function getLogin()
    {
        if (Auth::check()) {
            if (Auth::user()->admin == 1) {
                return redirect()->route('adgetHome');
            } else {
                return redirect()->route('getHome');
            }
        } else {
            return view('admin.login', $this->data);
        }
    }

    /**
     * Product login page
     */
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication passed...
            if (Auth::user()->admin == 1) {
                return redirect()->route('adgetHome');
            } else {
                return redirect()->route('getHome');
            }
        } else {
            return redirect()->route('adgetLogin')->with('error', 'Mật khẩu hoặc tài khoản không đúng');
        }
    }

    /**
     * Add user
     */
    public function postAddUser(Request $request)
    {

        $name = $request->input('name');
        if (!$name) {
            $name = "Người dùng " . time();
        }
        $email = $request->input('email');
        if (!$email) {
            return redirect()->route('adgetHome')->with('error', 'Chưa nhập Email');
        }
        $password = $request->input('password');
        if (!$password) {
            return redirect()->route('adgetHome')->with('error', 'Chưa nhập Password');
        }
        if (strlen($password) < 6) {
            return redirect()->route('adgetHome')->with('error', 'Password ít nhất 6 kí tự');
        }
        $phone_number = $request->input('phone_number');
        if (!$phone_number) {
            $phone_number = "";
        }

        $userModal = new User();
        $userCheck = $userModal->getUserByEmail($email);

        if ($userCheck) {
            return redirect()->route('adgetHome')->with('error', 'Email đã tồn tại');
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'phone_number' => $phone_number,
            'level' => 1,
            'admin' => 1,
        ]);

        return redirect()->route('adgetListUser')->with('success', 'Thêm người dùng thành công');
    }

    /**
     * Get list user
     */
    public function getListUser()
    {

        $userModel = new User();
        $users = $userModel->getListUser();
        $this->data['users'] = $users;

        return view('admin.user_list', $this->data);
    }

    /**
     * Delete user
     */
    public function getDelUser($id)
    {

        $userModel = new User();
        $result = $userModel->deleteUser($id);

        if ($result > 0) {
            return redirect()->route('adgetListUser')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListUser')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * update password
     */
    public function postUpdatePassword(Request $request)
    {

        $id = $request->input('id');
        $pw = $request->input('pw');
        if (strlen($pw) < 6) {
            return 0;
        }

        $userModel = new User();
        $result = $userModel->updateUser($id, ['password' => bcrypt($pw)]);

        return $result;
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/public/images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     * Get home page
     */
    public function getHome()
    {

        return view('admin.home', $this->data);
    }

    /**
     * Update config by ajax
     */
    public function updateConfig(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        if ($title && $description) {
            $configModel = new Config();

            $result = $configModel->updateConfig(['title' => $title, 'description' => $description]);
            return $result;
        }
        return 0;
    }

    /**
     * Get add product page
     */
    public function getAddProduct()
    {

        return view('admin.product_add', $this->data);
    }

    /**
     * Get add banner page
     */
    public function getAddBanner()
    {

        return view('admin.banner_add', $this->data);
    }

    /**
     * Post add product page
     */
    public function postAddProduct(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Product " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // type
        $type = $request->input('type');
        if (!$type) {
            $type = 0;
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $slug . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
            $cover .= '?n=' . time();
        }
        // list_img
        $listImgFile = $request->file('list_img');

        $listImg = [];
        if ($request->hasFile('list_img')) {
            foreach ($listImgFile as $key => $value) {
                $imgTemp = $slug . '_' . $key . '.' . $value->extension();
                $value->storeAs('img/post/', $imgTemp);
                $imgTemp .= '?n=' . time();
                $listImg[] = $imgTemp;
            }
        }
        $listImg = json_encode($listImg);

        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // price
        $price = $request->input('price');
        if (!$price) {
            $price = 1000;
        }
        // unit
        $unit = $request->input('unit');
        if (!$unit) {
            $unit = '';
        }
        // weight
        $weight = $request->input('weight');
        if (!$weight) {
            $weight = '';
        }
        // origin
        $origin = $request->input('origin');
        if (!$origin) {
            $origin = '';
        }
        $status = $request->input('status');
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataInsert = [
            'title' => $title,
            'slug' => $slug,
            'type' => $type,
            'cover' => $cover,
            'list_img' => $listImg,
            'pos' => $pos,
            'price' => $price,
            'unit' => $unit,
            'weight' => $weight,
            'origin' => $origin,
            'status' => $status,
            'description' => $description,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $productModel = new Product();
        $result = $productModel->insertProduct($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListProduct')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListProduct')->with('error', 'Thêm thất bại!');
        }

    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Post add banner page
     */
    public function postAddBanner(Request $request)
    {

        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $this->generateRandomString() . '.' . $request->cover->extension();
            $request->cover->storeAs('img/banners/', $cover);
            $cover .= '?n=' . time();
        }

        $dataInsert = [
            'url' => $cover,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $productModel = new Banner();
        $result = $productModel->insertProduct($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListBanner')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListBanner')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit product page
     */
    public function getEditProduct($id)
    {

        $productModel = new Product();
        $product = $productModel->getProductById($id);

        if ($product) {
            $this->data['product'] = $product;
            return view('admin.product_edit', $this->data);
        } else {
            return redirect()->route('adgetListProduct');
        }

    }

    /**
     * Product edit product page
     */
    public function postEditProduct($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Product " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // type
        $type = $request->input('type');
        if (!$type) {
            $type = 0;
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $slug . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
            $cover .= '?n=' . time();
        }
        // list_img
        $listImgFile = $request->file('list_img');

        $listImg = [];
        if ($request->hasFile('list_img')) {
            foreach ($listImgFile as $key => $value) {
                $imgTemp = $slug . '_' . $key . '.' . $value->extension();
                $value->storeAs('img/post/', $imgTemp);
                $imgTemp .= '?n=' . time();
                $listImg[] = $imgTemp;
            }
        }

        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // price
        $price = $request->input('price');
        if (!$price) {
            $price = 1000;
        }
        // unit
        $unit = $request->input('unit');
        if (!$unit) {
            $unit = '';
        }
        // weight
        $weight = $request->input('weight');
        if (!$weight) {
            $weight = '';
        }
        // origin
        $origin = $request->input('origin');
        if (!$origin) {
            $origin = '';
        }
        $status = $request->input('status');
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataUpdate = [
            'title' => $title,
            'slug' => $slug,
            'type' => $type,
            'pos' => $pos,
            'price' => $price,
            'unit' => $unit,
            'weight' => $weight,
            'origin' => $origin,
            'status' => $status,
            'description' => $description,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }
        if (count($listImg) > 0) {
            $dataUpdate['list_img'] = json_encode($listImg);
        }

        $productModel = new Product();
        $result = $productModel->updateProduct($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditProduct', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditProduct', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list product page
     */
    public function getListProduct()
    {

        $productModel = new Product();
        $products = $productModel->getListProduct();
        $this->data['products'] = $products;

        return view('admin.product_list', $this->data);
    }

    public function getListBanner()
    {

        $productModel = new Banner();
        $products = $productModel->getListProduct();
        $this->data['products'] = $products;

        return view('admin.banner_list', $this->data);
    }

    /**
     * Delete product
     */
    public function getDelProduct($id)
    {

        $productModel = new Product();
        $result = $productModel->deleteProduct($id);

        if ($result > 0) {
            return redirect()->route('adgetListProduct')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListProduct')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * Delete banner
     */
    public function getDelBanner($id)
    {

        $productModel = new Banner();
        $result = $productModel->deleteProduct($id);

        if ($result > 0) {
            return redirect()->route('adgetListBanner')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListBanner')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * Get add news page
     */
    public function getAddNews()
    {

        return view('admin.news_add', $this->data);
    }

    /**
     * Post add news page
     */
    public function postAddNews(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "News " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $slug . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
            $cover .= '?n=' . time();
        }
        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataInsert = [
            'title' => $title,
            'slug' => $slug,
            'cover' => $cover,
            'pos' => $pos,
            'description' => $description,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $newsModel = new News();
        $result = $newsModel->insertNews($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListNews')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit news page
     */
    public function getEditNews($id)
    {

        $newsModel = new News();
        $news = $newsModel->getNewsById($id);

        if ($news) {
            $this->data['news'] = $news;
            return view('admin.news_edit', $this->data);
        } else {
            return redirect()->route('adgetListNews');
        }

    }

    /**
     * News edit news page
     */
    public function postEditNews($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "News " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $slug . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
            $cover .= '?n=' . time();
        }
        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        $status = $request->input('status');
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataUpdate = [
            'title' => $title,
            'slug' => $slug,
            'pos' => $pos,
            'description' => $description,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

        $newsModel = new News();
        $result = $newsModel->updateNews($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditNews', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditNews', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list news page
     */
    public function getListNews()
    {

        $newsModel = new News();
        $newss = $newsModel->getListNews();
        $this->data['newss'] = $newss;

        return view('admin.news_list', $this->data);
    }

    /**
     * Delete news
     */
    public function getDelNews($id)
    {

        $newsModel = new News();
        $result = $newsModel->deleteNews($id);

        if ($result > 0) {
            return redirect()->route('adgetListNews')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListNews')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * Get add store page
     */
    public function getAddStore()
    {

        return view('admin.store_add', $this->data);
    }

    /**
     * Post add store page
     */
    public function postAddStore(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Store " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $slug . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
            $cover .= '?n=' . time();
        }
        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataInsert = [
            'title' => $title,
            'slug' => $slug,
            'cover' => $cover,
            'pos' => $pos,
            'description' => $description,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $storeModel = new Store();
        $result = $storeModel->insertStore($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListStore')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListStore')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit store page
     */
    public function getEditStore($id)
    {

        $storeModel = new Store();
        $store = $storeModel->getStoreById($id);

        if ($store) {
            $this->data['store'] = $store;
            return view('admin.store_edit', $this->data);
        } else {
            return redirect()->route('adgetListStore');
        }

    }

    /**
     * Store edit store page
     */
    public function postEditStore($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Store " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // coverFile
        $coverFile = $request->file('cover');
        $cover = "";
        if ($request->hasFile('cover')) {
            $cover = $slug . '.' . $request->cover->extension();
            $request->cover->storeAs('img/post/', $cover);
            $cover .= '?n=' . time();
        }
        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }
        // content
        $content = $request->input('content');
        if (!$content) {
            $content = "";
        }

        $dataUpdate = [
            'title' => $title,
            'slug' => $slug,
            'pos' => $pos,
            'description' => $description,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($cover != "") {
            $dataUpdate['cover'] = $cover;
        }

        $storeModel = new Store();
        $result = $storeModel->updateStore($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditStore', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditStore', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list store page
     */
    public function getListStore()
    {

        $storeModel = new Store();
        $stores = $storeModel->getListStore();
        $this->data['stores'] = $stores;

        return view('admin.store_list', $this->data);
    }

    /**
     * Delete store
     */
    public function getDelStore($id)
    {

        $storeModel = new Store();
        $result = $storeModel->deleteStore($id);

        if ($result > 0) {
            return redirect()->route('adgetListStore')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListStore')->with('error', 'Xóa thất bại!');
        }
    }
    /**
     * Get add cate page
     */
    public function getAddCate()
    {

        return view('admin.cate_add', $this->data);
    }

    /**
     * Post add cate page
     */
    public function postAddCate(Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Cate " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }

        $dataInsert = [
            'title' => $title,
            'slug' => $slug,
            'pos' => $pos,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $cateModel = new Cate();
        $result = $cateModel->insertCate($dataInsert);
        if ($result > 0) {
            return redirect()->route('adgetListCate')->with('success', 'Thêm thành công!');
        } else {
            return redirect()->route('adgetListCate')->with('error', 'Thêm thất bại!');
        }

    }

    /**
     * Get edit cate page
     */
    public function getEditCate($id)
    {

        $cateModel = new Cate();
        $cate = $cateModel->getCateById($id);

        if ($cate) {
            $this->data['cate'] = $cate;
            return view('admin.cate_edit', $this->data);
        } else {
            return redirect()->route('adgetListCate');
        }

    }

    /**
     * Cate edit cate page
     */
    public function postEditCate($id, Request $request)
    {

        // title
        $title = $request->input('title');
        if (!$title) {
            $title = "Cate " . time();
        }
        // slug
        $slug = $request->input('slug');
        if (!$slug) {
            $slug = str_slug($title, '-');
        } else {
            $slug = str_slug($slug, '-');
        }
        // pos
        $pos = $request->input('pos');
        if (!$pos) {
            $pos = 999;
        }
        // description
        $description = $request->input('description');
        if (!$description) {
            $description = "";
        }

        $dataUpdate = [
            'title' => $title,
            'slug' => $slug,
            'pos' => $pos,
            'description' => $description,
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $cateModel = new Cate();
        $result = $cateModel->updateCate($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditCate', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditCate', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Get list cate page
     */
    public function getListCate()
    {

        $cateModel = new Cate();
        $cates = $cateModel->getListCate();
        $this->data['cates'] = $cates;

        return view('admin.cate_list', $this->data);
    }

    /**
     * Delete cate
     */
    public function getDelCate($id)
    {

        $storeModel = new Cate();
        $result = $storeModel->deleteCate($id);

        if ($result > 0) {
            return redirect()->route('adgetListCate')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListCate')->with('error', 'Xóa thất bại!');
        }
    }

    /**
     * Get list cart page
     */
    public function getListCart()
    {

        $cartModel = new Cart();
        $carts = $cartModel->getListCart();
        $this->data['carts'] = $carts;

        return view('admin.cart_list', $this->data);
    }

    /**
     * Get edit cart page
     */
    public function getEditCart($id)
    {

        $cartModel = new Cart();
        $cart = $cartModel->getCartById($id);

        if ($cart) {
            $this->data['cart'] = $cart;

            $products = DB::table('cart_detail')->leftJoin('product', 'product.id', '=', 'cart_detail.product_id')->where('cart_id', $id)->select('product.title', 'product.slug', 'product.cover', 'cart_detail.number', 'cart_detail.price')->get();
            $this->data['products'] = $products;
            return view('admin.cart_edit', $this->data);
        } else {
            return redirect()->route('adgetListCart');
        }

    }

    /**
     * Cart edit cart page
     */
    public function postEditCart($id, Request $request)
    {

        // name
        $name = $request->input('name');
        if (!$name) {
            $name = "";
        }
        // phone
        $phone = $request->input('phone');
        if (!$phone) {
            $phone = "";
        }
        // address
        $address = $request->input('address');
        if (!$address) {
            $address = "";
        }
        // email
        $email = $request->input('email');
        if (!$email) {
            $email = "";
        }
        // note
        $note = $request->input('note');
        if (!$note) {
            $note = "";
        }
        // status
        $status = $request->input('status');
        if (!$status) {
            $status = 1;
        }

        $dataUpdate = [
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'email' => $email,
            'note' => $note,
            'status' => $status,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $cartModel = new Cart();
        $result = $cartModel->updateCart($id, $dataUpdate);
        if ($result > 0) {
            return redirect()->route('adgetEditCart', ['id' => $id])->with('success', 'Cập nhật thành công!');
        } else {
            return redirect()->route('adgetEditCart', ['id' => $id])->with('error', 'Cập nhật thất bại!');
        }

    }

    /**
     * Delete cart
     */
    public function getDelCart($id)
    {

        $cartModel = new Cart();
        $result = $cartModel->deleteCart($id);

        if ($result > 0) {
            DB::table('cart_detail')->where('cart_id', $id)->delete();
            return redirect()->route('adgetListCart')->with('success', 'Xóa thành công!');
        } else {
            return redirect()->route('adgetListCart')->with('error', 'Xóa thất bại!');
        }
    }
}