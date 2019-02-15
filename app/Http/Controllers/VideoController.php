<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VideoController extends Controller {

public function edit(Request $request){

    if ($request->has('id')) {
        // this is edit, retrieve an existing city
        $query = "
            SELECT *
            FROM `videos`
            WHERE `id` = ?
            LIMIT 1
        ";
        $videos = DB::selectOne($query, [
            $request->input('id')
        ]);
    } else {
        // this is create, create an empty city
        $videos = (object)[
            'id'          => null,
            'name'        => null,
            'author'      => null,
            'description' => null,
            'code'        => null,
            'date_time'   => null 
        ];
    }

    if ($request->method() == 'POST') {
        // validate request data
/*         $this->validate($request, [
            'name' => 'required',
            'population' => 'required|numeric|min:10|max:70000'
        ]); */
        // update the data from request
        $videos->name         = $request->input('name');
        $videos->author       = $request->input('author');
        $videos->description  = $request->input('description');
        $videos->code         = $request->input('code');
      /*   $videos->date_time    = date('Y-m-d H:i:s'); */


        // save the data
        if ($videos->id) {
            // updating existing video
            $query = 
               "UPDATE `videos`
                SET `name` = ?,
                    `author` = ?,
                    `description` = ?,
                    `code` = ?,
                WHERE `id` = ?
                LIMIT 1
            ";
            DB::update($query, [
                $videos->name,
                $videos->author,
                $videos->description,
                $videos->code,
                $videos->id,
            ]);

        } else {
            // inserting a new video
            $query = 
               "INSERT
                INTO `videos`
                (`name`, `author`, `description`, `code`)
                VALUES
                (?, ?, ?, ?)
            ";
            DB::insert($query, [
                $videos->name,
                $videos->author,
                $videos->description,
                $videos->code,
            ]);
            
            $videos->id = DB::getPdo()->lastInsertId();
        } //end if
    } //end POST if

    $edit_form = view('edit', [
        'videos' => $videos
    ]);

    return $edit_form;

    ///wrapper
/*     return view('edit', [
        'content' => $edit_form
    ]); */

 //end function
}

/**
 * shows the list of all songs in the DB
 */
public function present()
{
        $query =
        "SELECT *
        FROM `videos`
        ";

    $song = DB::select($query);
    $create_view = view('list', [
        'song' => $song
    ]);

    return $create_view;

     Session::flash('success_message', 'City was successfully saved.');

}  

/**
*present one video upon selectio
 */
public function detail(Request $request)
{

    if ($request -> has('id')){

        $query = 
        "   SELECT *
            FROM `videos`
            WHERE `id` = ?
            LIMIT 1
        ";
        $video = DB::selectOne($query, [
            $request->input('id')
        ]);
        
        $detail = view('present', [
            'video' => $video
        ]); 
    }

    return $detail;
}

}


