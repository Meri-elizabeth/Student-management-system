<?php

namespace App\Http\Controllers;

use App\Models\Student1;
use Illuminate\Http\Request;

class Student1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
        {
            $student1s = Student1::all();
            return view('student',['student1s' => $student1s, 'layout'=>'index']);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $student1s = Student1::all();
            return view('student',['student1s' => $student1s, 'layout'=>'create']);
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $student1s = new Student1();
            $student1s->cne = $request->input('cne') ;
            $student1s->firstName = $request->input('firstName') ;
            $student1s->lastName = $request->input('lastName') ;
            $student1s->age = $request->input('age') ;
            $student1s->speciality = $request->input('speciality') ;
            $student1s->save() ;
            return redirect('/') ;
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $student1 = Student1::find($id);
            $student1s = Student1::all() ;
            return view('student',['student1s' => $student1s, 'student1' => $student1,'layout'=>'show']);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $student1 = Student1::find($id); 
            $student1s = Student1::all();  
            return view('student',['student1s' => $student1s, 'student1' => $student1,'layout'=>'edit']);
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $student1s = Student1::find($id);
            $student1s->cne = $request->input('cne') ;
            $student1s->firstName = $request->input('firstName') ;
            $student1s->lastName = $request->input('lastName') ;
            $student1s->age = $request->input('age') ;
            $student1s->speciality = $request->input('speciality') ;
            $student1s->save() ;
            return redirect('/') ;
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $student1s = Student1::find($id);
            $student1s->delete('delete from student where id = ?',[$id]);
            return redirect('/');
        }
    }
    