<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //website FUNCTIONS
    public function index(){
        return view('website.index');
    }    
    public function cart(){
        return view('website.cart');
    }
    public function productdetails(){
        return view('website.product-details');
    }
    public function checkout(){
        return view('website.checkout');
    }
    public function shop(){
        return view('website.shop');
    }

    //SYSTEM FUNCTIONS
    public function chartjs(){
        return view('system.charts-chartjs');
    }
    public function chartsflot(){
        return view('system.charts-flot');
    }
    public function chartspeity(){
        return view('system.charts-peity');
    }
    public function fontawesome(){
        return view('system.font-fontawesome');
    }
    public function fontthemify(){
        return view('system.font-themify');
    }
    public function formsadvanced(){
        return view('system.forms-advanced');
    }
    public function formsbasic(){
        return view('system.forms-basic');
    }
    public function mapsgmap(){
        return view('system.maps-gmap');
    }
    public function mapsvector(){
        return view('system.maps-vector');
    }
    public function pagelogin(){
        return view('system.page-login');
    }
    public function pageregister(){
        return view('system.page-register');
    }
    public function pagesforget(){
        return view('system.pages-forget');
    }
    public function systemindex(){
        return view('system.systemindex');
    }
    public function tablesbasic(){
        return view('system.tables-basic');
    }
    public function tablesdata(){
        return view('system.tables-data');
    }
    public function uialerts(){
        return view('system.ui-alerts');
    }
    public function uibadges(){
        return view('system.ui-badges');
    }
    public function uibuttons(){
        return view('system.ui-buttons');
    }
    public function uicards(){
        return view('system.ui-cards');
    }
    public function uigrids(){
        return view('system.ui-grids');
    }
    public function uimodals(){
        return view('system.ui-modals');
    }
    public function uiprogressbar(){
        return view('system.ui-progressbar');
    }
    public function uisocialbuttons(){
        return view('system.ui-social-buttons');
    }
    public function uiswitches(){
        return view('system.ui-switches');
    }
    public function uitabs(){
        return view('system.ui-tabs');
    }
    public function uitypgraphy(){
        return view('system.ui-typgraphy');
    }
    public function widgets(){
        return view('system.widgets');
    }
}