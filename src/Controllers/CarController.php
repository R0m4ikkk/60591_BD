<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;

class CarController extends Controller
{
    public function index(Request $request){
        return $this->view('car.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'car' => CategoryModel::all()]);

    }


}