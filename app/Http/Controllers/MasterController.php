<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;



class MasterController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getText() {

        $output[1] = 'Submit parameters to generate outcome.';

        return view('text', compact('output'));
    }

    public function postText(Request $request) {

        $this->validate($request, [
            'number_of_paragraph' => 'required|numeric|min:1|max:99'
        ]);

        $input = $request->input('number_of_paragraph');

        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($input);
        //echo implode('<p>', $paragraphs);

        $output = $paragraphs;

        return view('text', compact('output'));
    }

    public function getUser() {

        $output[1] = 'Submit parameters to generate outcome.';

        return view('user', compact('output'));
    }

    public function postUser(Request $request) {

        $this->validate($request, [
            'number_of_user' => 'required|numeric|min:1|max:99'
        ]);

        $faker = \Faker\Factory::create();

        for ($i=0; $i<$request->input('number_of_user'); $i++)
        {
            $output[$i] = '<p>'.$faker->name.'<br>'.$faker->address.'<br>'.$faker->text.'</p>';
        }

        return view('user', compact('output'));
    }
}
