<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $repository;

    public function _construct(Users $user)
    {
        $this->repository = $user;

    }


    public function index()
    {
        //
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(Users $users)
    {
        //
    }

   
    public function edit(Users $users)
    {
        //
    }

   
    public function update(Request $request, Users $users)
    {
        //
    }

   
    public function destroy(Users $users)
    {
        //
    }
}
