<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $name = 'Keluarga';
    public function index(Request $request)
    {
        $pohonKeluarga = Keluarga::with(['childs' => function ($c1) {
            $c1->with(['childs' => function ($c2) {
                $c2->with(['childs' => function ($c3) {
                    $c3->with(['childs' => function ($c4) {
                        $c4->with(['childs' => function ($c5) {
                            $c5->with(['childs' => function ($c6) {
                                $c6->with(['childs']);
                            }]);
                        }]);
                    }]);
                }]);
            }]);
        }, 'parent'])->find(1);
        return Inertia::render('keluarga/index', [
            'name' => $this->name,
            'keluargas' => Keluarga::when($request->nama, function ($query, $q) {
                $query->where('nama', 'like', '%' . $q . '%');
            })
                ->orderBy("id", "asc")
                ->paginate(10)
                ->withQueryString(),
            'pohonKeluarga' => $pohonKeluarga,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keluargas = Keluarga::orderBy('nama', 'asc')->get();
        return Inertia::render('keluarga/create', [
            'name' => $this->name,
            'keluargas' => $keluargas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $rules = [
                'nama' => ['required', 'max:20'],
                'gender' => ['required'],
                'ref_id' => ['required'],
            ];

            $messages = [
                // 'required' => 'Please fill :attribute',
            ];

            $attributes = [
                'nama' => 'Nama',
                'gender' => 'Jenis Kelamin/Gender',
                'ref_id' => 'Silsilah dari',
            ];

            $validator = Validator::make($request->all(), $rules, $messages, $attributes)->validate();
            Keluarga::create($validator);
            DB::commit();
            return redirect()->route('keluarga.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $keluarga)
    {
        $keluargas = Keluarga::all();
        return Inertia::render('keluarga/show', [
            'name' => $this->name,
            'keluarga' => $keluarga,
            'keluargas' => $keluargas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluarga $keluarga)
    {
        $keluargas = Keluarga::all();
        return Inertia::render('keluarga/edit', [
            'name' => $this->name,
            'keluarga' => $keluarga,
            'keluargas' => $keluargas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keluarga $keluarga)
    {
        try {
            DB::beginTransaction();
            $rules = [
                'nama' => ['required', 'max:20'],
                'gender' => ['required'],
                'ref_id' => ['required'],
            ];

            $messages = [
                // 'required' => 'Please fill :attribute',
            ];

            $attributes = [
                'nama' => 'Nama',
                'gender' => 'Jenis Kelamin/Gender',
                'ref_id' => 'Silsilah dari',
            ];

            $validator = Validator::make($request->all(), $rules, $messages, $attributes)->validate();
            $keluarga->update($validator);
            DB::commit();
            return redirect()->route('keluarga.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluarga $keluarga)
    {
        //
        try {
            DB::beginTransaction();
            $keluarga->delete();
            DB::commit();
            return redirect()->route('keluarga.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function get_anak_budi()
    {
        # soal no 3
        $r = 'Buat query untuk mendapatkan semua anak Budi';
        $r .= Keluarga::where('ref_id', '>', 0)->Get();
        return $r;
        // query
        // select * from keluargas where ref_id > 0;
    }

    public function get_cucu_budi()
    {
        # soal no 4
        $r = 'Buat query untuk mendapatkan cucu dari budi';
        $r .= Keluarga::where('ref_id', '>', 1)->Get();
        return $r;
        // query
        // select * from keluargas where ref_id > 1;
    }

    public function get_cucu_perempuan_budi()
    {
        # soal no 5
        $r = 'Buat query untuk mendapatkan cucu dari budi';
        $r .= Keluarga::where('ref_id', '>', 1)->where('gender', '2')->Get();
        return $r;
        // query
        // select * from keluargas where ref_id > 1 and gender = 2 ;
    }

    public function get_bibi_from_farah()
    {
        # soal no 6
        $r = 'Buat query untuk mendapatkan cucu perempuan dari budi';
        $r .= Keluarga::where('ref_id', '>', 1)
        ->where('ref_id', '<', 3)
        ->where('gender', '2')->Get();
        return $r;
        // query
        // select * from keluargas where ref_id > 0 and ref_id < 2 and gender = 2 ;
    }

    public function get_seppupu_from_hani()
    {
        # soal no 7
        $r = 'Buat query untuk mendapatkan sepupu laki-laki dari Hani';
        $r .= Keluarga::where('ref_id', '>', 0)
            ->where('ref_id', '<', 4)
            ->where('gender', '1')->Get();
        return $r;
        // query
        // select * from keluargas where ref_id > 0 and ref_id < 4 and gender = 1 ;
    }
}
