<?php
// Controller for handling static pages

// "You belong in this folder. You can move around in this folder, but you can't leave this folder unless you get permission."
namespace App\Http\Controllers;

// Controller code
class PagesController extends Controller {
    
    public function getIndex(){
        // process variable data or params
        // talk to the model
        // receive from the model
        // compile or process data from the model if needed
        // pass the data to the correct view

        return view('pages.welcome');
    }

    public function getAbout(){
        $first = 'Javi';
        $last = 'Veron';

        $fullname = $first . ' ' . $last;
        $email = 'yjveron@gmail.com';

        return view('pages.about', compact('fullname', 'email'));
    }

    public function getContact(){
        return view('pages.contact');
    }

}
?>