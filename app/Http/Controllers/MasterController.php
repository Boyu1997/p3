<?php

namespace App\Http\Controllers;

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

        $input = $request->input('number_of_paragraphs');

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

    public function postUser() {

        $output[1] = 'Submit parameters to generate outcome.';

        return view('user', compact('output'));
    }
}
