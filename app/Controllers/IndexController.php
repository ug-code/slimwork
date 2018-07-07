<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function getIndex()
    {
        return "
            example post
            <br>
            <br>
            <form method='post'>
            <input type='text' name='name'>
            <input type='submit'>
            </form>";
    }

    public function postIndex(Request $request)
    {
        $name = $request->input('name');

        return "name is  $name";
    }
}
