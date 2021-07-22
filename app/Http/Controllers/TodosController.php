<?php


namespace App\Http\Controllers;

App\Todo
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {

      return view('todos.index');
    }
}
