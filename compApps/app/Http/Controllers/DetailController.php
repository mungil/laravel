<?php namespace App\Http\Controllers;

use View; //untuk meload design di view
use App\TahunModel;
use App\PengurusModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Redirect;

class DetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $rules = [
		'id_tahun' 		=> ['required'],
		'jk' 			=> ['required'],
		'nama_pengurus' => ['required', 'min:4'],
		'email' 		=> ['required'],
		'no_telp' 		=> ['required', 'numeric']
	];

	public function index(TahunModel $tahun)
	{
		return View('detail.index', compact('tahun'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(TahunModel $tahunValue)
	{
		$tahunData = TahunModel::all();	
		return View('detail.create', compact('tahunData', 'tahunValue'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PengurusModel $pengurus, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = Input::all();
		$pengurus->id_tahun = $input['id_tahun'];
		PengurusModel::create($input);
		return Redirect::route('pengurus.show', $pengurus->id_tahun)->with('message', 'pengurus baru berhasil ditambaha');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(TahunModel $tahun, PengurusModel $pengurus)
	{
		return View('detail.show', compact('tahun', 'pengurus'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(TahunModel $tahun, PengurusModel $pengurus)
	{
		$dataTahun = TahunModel::all();
		return View('detail.edit', compact('tahun', 'pengurus', 'dataTahun'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(TahunModel $tahun, PengurusModel $pengurus, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$pengurus->update($input);
		return Redirect::route('pengurus.show', $tahun->id_tahun)->with('message', 'pengurus berhasil diperbarui');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(TahunModel $tahun, PengurusModel $pengurus)
	{
		$nama = $pengurus->nama_pengurus;
		$pengurus->delete();
		return Redirect::route('pengurus.show', $tahun->id_tahun)->with('message', 'pengurus bernama '.$nama.' berhasil dihapus!');
	}

}
