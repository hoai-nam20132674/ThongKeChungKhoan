<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    //
    protected $table = 'systems';
    public function edit($request){
        $system = $this::where('id',1)->get()->first();
        $system->name = $request->name;
        $system->title = $request->title;
        $system->seo_keyword = $request->seo_keyword;
        $system->seo_description = $request->seo_description;
        $system->website = $request->website;
        $system->facebook = $request->facebook;
        $system->instagram = $request->instagram;
        $system->zalo = $request->zalo;
        $system->youtube = $request->youtube;
        $system->address = $request->address;
        $system->email = $request->email;
        $system->phone = $request->phone;
        $system->css = $request->css;
        $system->script = $request->script;
        $system->map = $request->map;
        if($request->hasFile('shortcut_logo')){ 
            $file_name = $request->file('shortcut_logo')->getClientOriginalName();
            $system->shortcut_logo = $file_name;
            $request->file('shortcut_logo')->move('public/uploads/images/systems/',$file_name);
            // $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
        }
        if($request->hasFile('logo')){ 
            $file_name = $request->file('logo')->getClientOriginalName();
            $system->logo = $file_name;
            $request->file('logo')->move('public/uploads/images/systems/',$file_name);
            // $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
        }
        if($request->hasFile('banner')){ 
            $file_name = $request->file('banner')->getClientOriginalName();
            $system->banner = $file_name;
            $request->file('banner')->move('public/uploads/images/systems/',$file_name);
            // $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
        }
        $system->save();
        

    }
}
