<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all()
        ]);
    }
    
    public function show($id)
    {
        return Inertia::render('Users/Show', [
            'user' => User::findOrFail($id)
        ]);
    }
    
    public function getData($id)
    {
        return User::findOrFail($id);
    }
}

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }
}