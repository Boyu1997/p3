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

        #require_once '/app/vendor/fzaninotto/faker/src/autoload.php';
        #require_once '/vendor/fzaninotto/faker/src/autoload.php';
        // alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();

        for ($i=0; $i<$request->input('number_of_user'); $i++)
        {
            $output[$i] = $faker->name.'<br>'.$faker->address.'<br>'.$faker->text;
        }

        return view('user', compact('output'));
    }
}
