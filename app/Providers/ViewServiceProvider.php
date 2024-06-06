<?php

// namespace App\Providers;


// use App\Models\Contact;
// use App\Models\User;
// use App\Models\Banner;
// use App\Models\Category;
// use App\Models\Post;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\ServiceProvider;

// class ViewServiceProvider extends ServiceProvider
// {
//     /**
//      * Register services.
//      */
//     public function register(): void
//     {
//         //
//     }

//     /**
//      * Bootstrap services.
//      */
//     public function boot(): void
//     {
//         // $phones = Contact::pluck('phone'); //lấy tất cả bảng và cột tại database
//         // View::share('phones', $phones); //khi gọi ra thì ví dụ như: $contact->>phone hay user->name thì ra hết á

//         // $allData = DB::select('SHOW TABLES');

//         // foreach ($allData as $table) {
//         //     $tableName = reset($table);
//         //     $tableData = DB::table($tableName)->get();
//         //     $allData[$tableName] = $tableData;
//         // }
//         $contacts = Contact::all();
//         $users = User::all();
//         $posts = Post::all();
//         $categories = Category::all();
//         $banners = Banner::all();
//         // Chia sẻ dữ liệu với tất cả các view
//         View::share('contacts', $contacts);
//         View::share('users', $users);
//         View::share('posts', $posts);
//         View::share('categories', $categories);
//         View::share('banners', $banners);
        
//         // View::share('allData', $allData);
//     }
// }


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;
use App\Models\User;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Post;
use App\Models\Product;
use App\Models\Topic;
use Illuminate\Support\Facades\Request;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('product', Product::all());
        view()->share('contacts', Contact::first());
        view()->share('users', User::all());
        view()->share('post', Post::all());
        view()->share('category', Category::all());
        view()->share('banners', Banner::first());
        view()->share('topics', Topic::first());
        view()->share('orderdetails', Orderdetail::first());
        view()->share('brand', Brand::all());
        view()->share('orders', Order::first());
        view()->share('menus', Menu::all());

        $domain = Request::getHost();
        view()->share('domain', $domain);
    }

   
}