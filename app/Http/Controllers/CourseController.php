<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //list courses 
    public function index(){
        return view('courses/index');
    }

    //view the course
    public function show(){
        return view('courses/show');
    }

    //form create the course
    public function create(){
        return view('courses/create');
    }

    //register in database
    public function store(){
        dd("register in database");
    }

    //form edit the course
    public function edit(){
        return view('courses/edit');
    }

    //update in database
    public function update(){
        dd('update in database');
    }

    //destroy in database
    public function destroy(){
        dd('destroy in database');
    }

}
