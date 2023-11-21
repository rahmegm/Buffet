<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

use App\Models\Birthday;
use App\Models\User;

use function Laravel\Prompts\search;

class BirthdayController extends Controller
{
    
    public function index(){

        $search = request('search');

        if($search){

            $birthdays = Birthday::where([
                ['title','like', '%'.$search.'%']
            ])->get();

        } else {
            $birthdays = Birthday::all();
        }

        return view('welcome',['birthdays'=>$birthdays,'search'=>$search]);
    }

    public function create(){
        return view('Birthdays.create');
    }

    public function store(Request $request){
        $birthday = new Birthday;

        $birthday->title = $request->title;
        $birthday->date = $request->date;
        $birthday->description = $request->description;
        $birthday->items = $request->items;

        $user = auth()->user();
        $birthday->user_id = $user->id;

        $birthday->save();
        return redirect('/')->with('msg','Aniversario criado com sucesso!');

    }

    public function show($id){
        $birthday = Birthday::findOrFail($id);

        $birthdayOwner = User::where('id',$birthday->user_id)->first()->toArray();

        return view('birthdays.show', ['birthday' => $birthday, 'birthdayOwner'=>$birthdayOwner]);
    }

    public function dashboard() {
        $user =auth()->user();
        $birthdays = $user->birthdays;

        return view('birthdays.dashboard', ['birthdays' => $birthdays]);
    }

    public function destroy($id){

        Birthday::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Aniversario excluido com sucesso!');
    }

}
