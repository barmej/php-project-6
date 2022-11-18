<?php

namespace App\Http\Controllers;
use App\Models\Brand;

use Illuminate\Http\Request;
use App\Repositories\BrandRepository;


class BrandController extends Controller
{
    
        public function index(BrandRepository $brandRepository){



          return view('brands',['brands'=>$brandRepository->all()]);
    }

}
