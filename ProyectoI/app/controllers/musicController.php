<?php

class musicController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('music.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{   

 $nombre = Input::get('nombre');
        $route = '/home/logan/ProyectoI/music/';
		$nombre = Input::get('nombre');
		$file = Input::file('archivo'); 
		$format = Input::get('format');
		$filename = $file->getClientOriginalName();
		$formato=$file->getClientOriginalExtension();
//var_dump($format);
if($formato=='mp3'||$formato=='mp4'||$formato=='wma'||$formato=='Aac'){
 
      


		$upload_success = Input::file('archivo')->move($route, $filename); 

		$nombre = Input::get('nombre');
      	
		$music = new music;
		$music->nombre = $nombre;
		$music->ubicacion = $route.$filename;
		$music->save();
		return Redirect::to('musica');

}else{

echo "Error: Solo formato de audio";


}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
