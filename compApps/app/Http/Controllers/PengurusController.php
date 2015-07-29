<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use View; //untuk meload design di view
use App\TahunModel;
use Input;
use Redirect;

class PengurusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $rules = [
		'nama_tahun' => ['required', 'min:3']
	];


	public function index()
	{
		$data['tahun'] = TahunModel::All();
		return View::make('pengurus.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View('pengurus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//memberikan validasi
		$this->validate($request, $this->rules);

		$input = Input::all();
		TahunModel::create($input);

		return Redirect::route('pengurus.index')->with('message', 'Tahun berhasil ditambahkan');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(TahunModel $tahun)
	{
		$pengurus = $tahun->getDataPengurus($tahun->id_tahun);
		return View('pengurus.show', compact('tahun', 'pengurus'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(TahunModel $tahun)
	{
		//
		return View('pengurus.edit', compact('tahun'));
		// kode eloquent : 
		// App\TahunModel::all()->where('id_tahun', "1");
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(TahunModel $tahun, Request $request)
	{
		//memberikan validasi
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');

		$tahun->update($input);

		return Redirect::route('pengurus.index', $tahun->id_tahun)->with('message', 'Tahun berhasil diperbarui');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(TahunModel $tahun)
	{
		$tahun->delete();

		return Redirect::route('pengurus.index')->with('message', 'Tahun berhasil dihapus');
	}

}
