<?php

namespace App\Http\Controllers;

use App\Accelerators;
use App\Benefits;
use App\Categories;
use App\Dealers;
use App\Demos;
use App\Faqs;
use App\News;
use App\Products;
use App\User;
use App\Wins;
use Auth;
use DB;
use File;
use Image;
use Input;
use Request;
use Redirect;
use Session;
use Validator;
use View;

class ServiceController extends Controller
{

    /*---------------------------------------General funtions------------------------------------*/
        public function deleteX()
        {
            $type = Request::get('type');
            $response = 0;

            if ($type == 'acce') {

                $del = Accelerators::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'ben') {

                $del = Benefits::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'cat') {

                $del = Categories::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'faq') {

                $del = Faqs::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'new') {

                $del = News::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'prod') {

                $del = Products::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'demo') {

                $del = Demos::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'deal') {

                $del = Dealers::find(Request::get('id'));
                $del->delete();
                $response = 1;

            }elseif ($type == 'wins') {

                $del = Wins::find(Request::get('id'));
                $del->delete();
                $response = 1;
            }else{
                $response = 0;
            }

            return $response;
        }

        public function preview()
        {
            return View::make('sections.preview');
        }

        public function showAll()
        {
            $accelerators = Accelerators::all();
            $benefits = Benefits::all();
            $categories = Categories::all();
            $dealers = Dealers::all();
            $demos = Demos::all();
            $faqs = Faqs::all();
            $news = News::all();
            $products = Products::all();
            $wins = Wins::all();

            $response = array();
            $response['accelerators'] = $accelerators;
            $response['benefits'] = $benefits;
            $response['categories'] = $categories;
            $response['dealers'] = $dealers;
            $response['demos'] = $demos;
            $response['faqs'] = $faqs;
            $response['news'] = $news;
            $response['products'] = $products;
            $response['wins'] = $wins;

            header("Content-Type: application/json", true);
            echo json_encode($response);
        }
    /*---------------------------------------General funtions------------------------------------*/

    /*---------------------------------------Accelerators----------------------------------------*/
        public function loadAccelerator()
        {
            $acce = Accelerators::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($acce);
        }
    	public function makeAccelerator()
    	{
    		return View::make('screens.accelerators');
    	}
        public function createAccelerator()
    	{

    		$title     = Input::get('title');
    		$about     = Input::get('about');
    		$logo      = Input::file('logos');
    		$principal = Input::get('principal');
    		$image     = Input::file('picture');

    		$getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('title');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../accelerators/';
            $route = $path . $name;
            $saver = $image->move('accelerators', $name);
    		$pic   = $route;

    		$saver    = '';
    		$getext   = '';
    		$exploder = '';
    		$name     = '';
    		$route    = '';

    		$getext = $logo->getClientOriginalName();
            $exploder = explode('.', $getext);
            $title = Input::get('title');
            $name = $title .'-logo.'. $exploder[1];

            $route = $path . $name;
            $saver = $logo->move('accelerators', $name);
    		$log   = $route;

            $acce            = New Accelerators;
            $acce->title     = $title;
            $acce->about     = $about;
            $acce->image     = $pic;
            $acce->logo      = $log;
            $acce->principal = $principal;
            $acce->save();

            return Redirect::to('/makeview/previews');
        }
        public function editViewAcce()
        {
            return View::make('editions.accelerators');
        }
        public function editAccelerator()
        {

            $id = Input::get('id');

            $title     = Input::get('title');
            $about     = Input::get('about');
            $logo      = Input::file('logos');
            $principal = Input::get('principal');
            $image     = Input::file('picture');

            if (!is_null($image)) {

                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);
                $title = Input::get('title');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../accelerators/';
                $route = $path . $name;
                $saver = $image->move('accelerators', $name);
                $pic   = $route;

                DB::table('accelerators')->where('id', $id)->update(['image' => $pic]);

            }
            if (!is_null($logo)) {
                $saver    = '';
                $getext   = '';
                $exploder = '';
                $name     = '';
                $route    = '';

                $getext = $logo->getClientOriginalName();
                $exploder = explode('.', $getext);
                $title = Input::get('title');
                $name = $title .'-logo.'. $exploder[1];

                $route = $path . $name;
                $saver = $logo->move('accelerators', $name);
                $log   = $route;

                DB::table('accelerators')->where('id', $id)->update(['logo' => $log]);
            }            


            DB::table('accelerators')->where('id', $id)->update(['title' => $title]);
            DB::table('accelerators')->where('id', $id)->update(['about' => $about]);
            DB::table('accelerators')->where('id', $id)->update(['principal' => $principal]);

            return Redirect::to('/makeview/previews');
        }
    /*---------------------------------------Accelerators----------------------------------------*/

    /*---------------------------------------Benefits--------------------------------------------*/
        public function loadBenefit()
        {
            $ben = Benefits::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($ben);
        }
        public function editViewBen()
        {
            return View::make('editions.benefits');
        }    
    	public function makeBenefit()
    	{
    		return View::make('screens.benefits');
    	}
        public function createBenefit()
    	{

    		$title     = Input::get('title');
    		$about     = Input::get('about');
    		$category  = Input::get('category');
    		$href      = Input::get('href');
    		$location  = Input::get('location');
    		$type      = Input::get('type');
    		$logo      = Input::file('logos');
    		$image     = Input::file('picture');
    		$principal = Input::get('principal');

    		$getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('title');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../benefits/';
            $route = $path . $name;
            $saver = $image->move('benefits', $name);
    		$pic   = $route;
    		
    		$saver    = '';
    		$getext   = '';
    		$exploder = '';
    		$name     = '';
    		$route    = '';

    		$getext = $logo->getClientOriginalName();
            $exploder = explode('.', $getext);
            $title = Input::get('title');
            $name = $title .'-logo.'. $exploder[1];

            $route = $path . $name;
            $saver = $logo->move('benefits', $name);
    		$log   = $route;

            $ben              = New Benefits;
            $ben->title       = $title;
            $ben->about       = $about;
            $ben->id_category = $category;
            $ben->image       = $pic;
            $ben->href        = $href;
            $ben->location    = $location;
            $ben->type        = $type;
            $ben->logo        = $log;
            $ben->principal   = $principal;
            $ben->save();

            return Redirect::to('/makeview/previews');
        }
        public function editBenefit()
        {
            $id        = Input::get('id');
            $title     = Input::get('title');
            $about     = Input::get('about');
            $category  = Input::get('category');
            $href      = Input::get('href');
            $location  = Input::get('location');
            $type      = Input::get('type');
            $logo      = Input::file('logos');
            $image     = Input::file('picture');
            $principal = Input::get('principal');

            if (!is_null($image)) {

                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('title');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../benefits/';
                $route = $path . $name;
                $saver = $image->move('benefits', $name);
                $pic   = $route;

                DB::table('benefits')->where('id', $id)->update(['image' => $pic]);  

            }

            if (!is_null($logo)) {
                $saver    = '';
                $getext   = '';
                $exploder = '';
                $name     = '';
                $route    = '';

                $getext = $logo->getClientOriginalName();
                $exploder = explode('.', $getext);
                $title = Input::get('title');
                $name = $title .'-logo.'. $exploder[1];

                $route = $path . $name;
                $saver = $logo->move('benefits', $name);
                $log   = $route; 

                DB::table('benefits')->where('id', $id)->update(['logo' => $log]);               
            }


            DB::table('benefits')->where('id', $id)->update(['title' => $title]);
            DB::table('benefits')->where('id', $id)->update(['about' => $about]);
            DB::table('benefits')->where('id', $id)->update(['id_category' => $category]);
            DB::table('benefits')->where('id', $id)->update(['href' => $href]);
            DB::table('benefits')->where('id', $id)->update(['location' => $location]);
            DB::table('benefits')->where('id', $id)->update(['type' => $type]);
            DB::table('benefits')->where('id', $id)->update(['principal' => $principal]);

            return Redirect::to('/makeview/previews');
        }
    /*---------------------------------------Benefits--------------------------------------------*/

    /*---------------------------------------Categories------------------------------------------*/
        public function loadCategory()
        {
            $cat = Categories::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($cat);
        }
        public function editViewCat()
        {
            return View::make('editions.categories');
        }  
    	public function makeCategory()
    	{
    		return View::make('screens.categories');
    	}
        public function createCategory()
    	{

    		$type      = Input::get('type');
    		$about     = Input::get('about');
    		$logo      = Input::file('logos');
    		$image     = Input::file('picture');
    		$principal = Input::get('principal');

    		$getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('type');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../benefits/';
            $route = $path . $name;
            $saver = $image->move('benefits', $name);
    		$pic   = $route;
    		
    		$saver    = '';
    		$getext   = '';
    		$exploder = '';
    		$name     = '';
    		$route    = '';

    		$getext = $logo->getClientOriginalName();
            $exploder = explode('.', $getext);
            $title = Input::get('type');
            $name = $title .'-logo.'. $exploder[1];

            $route = $path . $name;
            $saver = $logo->move('benefits', $name);
    		$log   = $route;

            $cate              = New Categories;
            $cate->type        = $type;
            $cate->about       = $about;
            $cate->image       = $pic;        
            $cate->logo        = $log;
            $cate->principal   = $principal;
            $cate->save();

            return Redirect::to('/makeview/previews');
        }
        public function editCategory()
        {
            $id        = Input::get('id');
            $type      = Input::get('type');
            $about     = Input::get('about');
            $logo      = Input::file('logos');
            $image     = Input::file('picture');
            $principal = Input::get('principal');
            
            if (!is_null($image)) {

                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('type');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../benefits/';
                $route = $path . $name;
                $saver = $image->move('benefits', $name);
                $pic   = $route;

                DB::table('categories')->where('id', $id)->update(['image' => $pic]);
            }

            
            
            if (!is_null($logo)) {
                $saver    = '';
                $getext   = '';
                $exploder = '';
                $name     = '';
                $route    = '';

                $getext = $logo->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('type');
                $name = $title .'-logo.'. $exploder[1];

                $route = $path . $name;
                $saver = $logo->move('benefits', $name);
                $log   = $route;

                DB::table('categories')->where('id', $id)->update(['logo' => $log]);
            }


            DB::table('categories')->where('id', $id)->update(['type' => $type]);
            DB::table('categories')->where('id', $id)->update(['about' => $about]);
            DB::table('categories')->where('id', $id)->update(['principal' => $principal]);

            return Redirect::to('/makeview/previews');
        }    
    /*---------------------------------------Categories------------------------------------------*/

    /*---------------------------------------FAQs------------------------------------------------*/
        public function loadFaqs()
        {
            $faq = Faqs::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($faq);
        }
        public function editViewFaqs()
        {
            return View::make('editions.faqs');
        }     
    	public function makeFaqs()
    	{
    		return View::make('screens.faqs');
    	}
        public function createFaqs()
    	{

    		$question = Input::get('question');
    		$answer   = Input::get('answer');
    		
            $faq           = New Faqs;
            $faq->question = $question;
            $faq->answer   = $answer;
            $faq->save();

            return Redirect::to('/makeview/previews');
        }
        public function editFaqs()
        {

            $id       = Input::get('id');
            $question = Input::get('question');
            $answer   = Input::get('answer');
            
            DB::table('faqs')->where('id', $id)->update(['question' => $question]);
            DB::table('faqs')->where('id', $id)->update(['answer' => $answer]);

            return Redirect::to('/makeview/previews');
        }
    /*---------------------------------------FAQs------------------------------------------------*/	

    /*---------------------------------------News------------------------------------------------*/    
        public function loadNews()
        {
            $new = News::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($new);
        }
        public function editViewNews()
        {
            return View::make('editions.news');
        }
        public function makeNews()
    	{
    		return View::make('screens.news');
    	}
        public function createNews()
    	{
    		$title      = Input::get('title');
    		$about     = Input::get('about');
    		$logo      = Input::file('logos');
    		$image     = Input::file('picture');
    		$principal = Input::get('principal');

    		$getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('title');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../news/';
            $route = $path . $name;
            $saver = $image->move('news', $name);
    		$pic   = $route;
    		
    		$saver    = '';
    		$getext   = '';
    		$exploder = '';
    		$name     = '';
    		$route    = '';

    		$getext = $logo->getClientOriginalName();
            $exploder = explode('.', $getext);
            $title = Input::get('title');
            $name = $title .'-logo.'. $exploder[1];

            $route = $path . $name;
            $saver = $logo->move('news', $name);
    		$log   = $route;

            $nov              = New News;
            $nov->title       = $title;
            $nov->about       = $about;
            $nov->image       = $pic;        
            $nov->logo        = $log;
            $nov->principal   = $principal;
            $nov->save();

            return Redirect::to('/makeview/previews');
        }
        public function editNews()
        {
            $id        = Input::get('id');
            $title     = Input::get('title');
            $about     = Input::get('about');
            $logo      = Input::file('logos');
            $image     = Input::file('picture');
            $principal = Input::get('principal');
            
            if (!is_null($image)) {

                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('title');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../news/';
                $route = $path . $name;
                $saver = $image->move('news', $name);
                $pic   = $route;

                DB::table('news')->where('id', $id)->update(['image' => $pic]);
            }

            
            if (!is_null($logo)) {
                $saver    = '';
                $getext   = '';
                $exploder = '';
                $name     = '';
                $route    = '';

                $getext = $logo->getClientOriginalName();
                $exploder = explode('.', $getext);
                $title = Input::get('title');
                $name = $title .'-logo.'. $exploder[1];

                $route = $path . $name;
                $saver = $logo->move('news', $name);
                $log   = $route;

                DB::table('news')->where('id', $id)->update(['logo' => $log]);
            }            


            DB::table('news')->where('id', $id)->update(['title' => $title]);
            DB::table('news')->where('id', $id)->update(['about' => $about]);
            DB::table('news')->where('id', $id)->update(['principal' => $principal]);

            return Redirect::to('/makeview/previews');
        }
    /*---------------------------------------News------------------------------------------------*/    
    
    /*---------------------------------------Products--------------------------------------------*/    
        public function loadProducts()
        {
            $prod = Products::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($prod);
        }
        public function editViewProducts()
        {
            return View::make('editions.products');
        }
    	public function makeProducts()
    	{
    		return View::make('screens.products');
    	}
        public function createProducts()
    	{
    		$nameP      = Input::get('name');
    		$about     = Input::get('about');
    		$price     = Input::get('price');
    		$point     = Input::get('point');
    		$image     = Input::file('picture');

    		$getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('name');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../products/';
            $route = $path . $name;
            $saver = $image->move('products', $name);
    		$pic   = $route;

            $prod        = New Products;
            $prod->name  = $nameP;
            $prod->about = $about;
            $prod->image = $pic;        
            $prod->price = $price;
            $prod->point  = $point;
            $prod->save();

            return Redirect::to('/makeview/previews');
        }
        public function editProducts()
        {
            $id        = Input::get('id');
            $nameP     = Input::get('name');
            $about     = Input::get('about');
            $price     = Input::get('price');
            $point     = Input::get('point');
            $image     = Input::file('picture');
            
            if (!is_null($image)) {

                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('name');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../products/';
                $route = $path . $name;
                $saver = $image->move('products', $name);
                $pic   = $route;

                DB::table('products')->where('id', $id)->update(['image' => $pic]);
            }


            DB::table('products')->where('id', $id)->update(['name' => $nameP]);
            DB::table('products')->where('id', $id)->update(['about' => $about]);
            DB::table('products')->where('id', $id)->update(['price' => $price]);
            DB::table('products')->where('id', $id)->update(['point' => $point]);

            return Redirect::to('/makeview/previews');
        }
    /*---------------------------------------Products--------------------------------------------*/    

    /*---------------------------------------Demos-----------------------------------------------*/
        public function loadDemo()
        {
            $demo = Demos::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($demo);
        }
        public function editViewDemo()
        {
            return View::make('editions.demos');
        }
    	public function makeDemos()
    	{
    		return View::make('screens.demos');
    	}
        public function createDemos()
    	{

    		$title     = Input::get('title');
    		$about     = Input::get('about');
    		$logo      = Input::file('logos');
    		$principal = Input::get('principal');
    		$image     = Input::file('picture');

    		$getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('title');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../demos/';
            $route = $path . $name;
            $saver = $image->move('demos', $name);
    		$pic   = $route;

    		$saver    = '';
    		$getext   = '';
    		$exploder = '';
    		$name     = '';
    		$route    = '';

    		$getext = $logo->getClientOriginalName();
            $exploder = explode('.', $getext);
            $title = Input::get('title');
            $name = $title .'-logo.'. $exploder[1];

            $route = $path . $name;
            $saver = $logo->move('demos', $name);
    		$log   = $route;

            $demo            = New Demos;
            $demo->title     = $title;
            $demo->about     = $about;
            $demo->image     = $pic;
            $demo->logo      = $log;
            $demo->principal = $principal;
            $demo->save();

            return Redirect::to('/makeview/previews');
        }
        public function editDemo()
        {
            $id        = Input::get('id');
            $title     = Input::get('title');
            $about     = Input::get('about');
            $logo      = Input::file('logos');
            $principal = Input::get('principal');
            $image     = Input::file('picture');
            
            if (!is_null($image)) {
                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('title');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../demos/';
                $route = $path . $name;
                $saver = $image->move('demos', $name);
                $pic   = $route;

                DB::table('demos')->where('id', $id)->update(['image' => $pic]);
            }
            
            if (!is_null($logo)) {
                $saver    = '';
                $getext   = '';
                $exploder = '';
                $name     = '';
                $route    = '';

                $getext = $logo->getClientOriginalName();
                $exploder = explode('.', $getext);
                $title = Input::get('title');
                $name = $title .'-logo.'. $exploder[1];

                $route = $path . $name;
                $saver = $logo->move('demos', $name);
                $log   = $route;

                DB::table('demos')->where('id', $id)->update(['logo' => $log]);
            }


            DB::table('demos')->where('id', $id)->update(['title' => $title]);
            DB::table('demos')->where('id', $id)->update(['about' => $about]);
            DB::table('demos')->where('id', $id)->update(['principal' => $principal]);

            return Redirect::to('/makeview/previews');
        }    
    /*---------------------------------------Demos-----------------------------------------------*/

    /*---------------------------------------Dealers---------------------------------------------*/
        public function loadDealers()
        {
            $deal = Dealers::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($deal);
        }
        public function editViewDealers()
        {
            return View::make('editions.dealers');
        }    
    	public function makeDealers()
    	{
    		return View::make('screens.dealers');
    	}
        public function createDealers()
    	{

    		$name = Input::get('name');
    		$tlf  = Input::get('tlf');
    		$mail = Input::get('mail');
    		$web  = Input::get('web');

            $deal       = New Dealers;
            $deal->name = $name;
            $deal->tlf  = $tlf;
            $deal->mail = $mail;
            $deal->web  = $web;
            $deal->save();

            return Redirect::to('/makeview/previews');
        }
        public function editDealers()
        {

            $id   = Input::get('id');
            $name = Input::get('name');
            $tlf  = Input::get('tlf');
            $mail = Input::get('mail');
            $web  = Input::get('web');

            DB::table('dealers')->where('id', $id)->update(['name' => $name]);
            DB::table('dealers')->where('id', $id)->update(['tlf' => $tlf]);
            DB::table('dealers')->where('id', $id)->update(['mail' => $mail]);
            DB::table('dealers')->where('id', $id)->update(['web' => $web]);

            return Redirect::to('/makeview/previews');
        }    
    /*---------------------------------------Dealers---------------------------------------------*/

    /*---------------------------------------Wins------------------------------------------------*/
        public function loadWin()
        {
            $win = Wins::find(Request::get('id'));

            header("Content-Type: application/json", true);
            echo json_encode($win);
        }
        public function editViewWin()
        {
            return View::make('editions.win');
        }
        public function makePlayWin()
        {
            return View::make('screens.playwin');
        }
        public function makeBuyWin()
        {
            return View::make('screens.buywin');
        }
        public function createWin()
        {

            $title     = Input::get('title');
            $about     = Input::get('about');
            $href      = Input::get('href');
            $type      = Input::get('type');
            $button    = Input::get('button');
            $item      = Input::get('item');
            $point     = Input::get('point');
            $logo      = Input::file('logos');
            $image     = Input::file('picture');
            $principal = Input::get('principal');

            $getext = $image->getClientOriginalName();
            $exploder = explode('.', $getext);


            $title = Input::get('title');
            $name = $title .'.'. $exploder[1];
                
            $path  = '../../wins/';
            $route = $path . $name;
            $saver = $image->move('wins', $name);
            $pic   = $route;
            
            $saver    = '';
            $getext   = '';
            $exploder = '';
            $name     = '';
            $route    = '';

            $getext = $logo->getClientOriginalName();
            $exploder = explode('.', $getext);
            $title = Input::get('title');
            $name = $title .'-logo.'. $exploder[1];

            $route = $path . $name;
            $saver = $logo->move('wins', $name);
            $log   = $route;

            $win              = New Wins;
            $win->title       = $title;
            $win->about       = $about;
            $win->href        = $href;
            $win->type        = $type;
            $win->button      = $button;
            $win->item        = $item;
            $win->point       = $point;
            $win->image       = $pic;
            $win->logo        = $log;
            $win->image       = $pic;
            $win->principal   = $principal;
            $win->save();

            return Redirect::to('/makeview/previews');
        }
        public function editWin()
        {

            $id        = Input::get('id');
            $title     = Input::get('title');
            $about     = Input::get('about');
            $href      = Input::get('href');
            $type      = Input::get('type');
            $button    = Input::get('button');
            $item      = Input::get('item');
            $point     = Input::get('point');
            $logo      = Input::file('logos');
            $image     = Input::file('picture');
            $principal = Input::get('principal');

            if (!is_null($image)) {

                $getext = $image->getClientOriginalName();
                $exploder = explode('.', $getext);

                $title = Input::get('title');
                $name = $title .'.'. $exploder[1];
                    
                $path  = '../../wins/';
                $route = $path . $name;
                $saver = $image->move('wins', $name);
                $pic   = $route;
                DB::table('wins')->where('id', $id)->update(['image' => $pic]);
            }

            if (!is_null($logo)) {
                $saver    = '';
                $getext   = '';
                $exploder = '';
                $name     = '';
                $route    = '';

                $getext = $logo->getClientOriginalName();
                $exploder = explode('.', $getext);
                $title = Input::get('title');
                $name = $title .'-logo.'. $exploder[1];

                $route = $path . $name;
                $saver = $logo->move('wins', $name);
                $log   = $route;
                DB::table('wins')->where('id', $id)->update(['logo' => $log]);
            }
            

            DB::table('wins')->where('id', $id)->update(['title' => $title]);
            DB::table('wins')->where('id', $id)->update(['about' => $about]);
            DB::table('wins')->where('id', $id)->update(['href' => $href]);
            DB::table('wins')->where('id', $id)->update(['type' => $type]);
            DB::table('wins')->where('id', $id)->update(['button' => $button]);
            DB::table('wins')->where('id', $id)->update(['item' => $item]);
            DB::table('wins')->where('id', $id)->update(['point' => $point]);
            
            DB::table('wins')->where('id', $id)->update(['principal' => $principal]);                                        

            return Redirect::to('/makeview/previews');
        }
    /*---------------------------------------Wins------------------------------------------------*/

}