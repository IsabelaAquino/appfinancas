<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

class DashbordController extends Controller
{
    private $repositor;
    private $validator;
    public function __construct(UserRepository $repository, UserValidator $validator){ 
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function auth(){
        
    }
}
