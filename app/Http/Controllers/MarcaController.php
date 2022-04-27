<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* maneira antiga, porem indica e funcional */
        /* $marcas = Marca::all(); */

        /* maneira nova ensinada na aula 295 */
        $marcas = $this->marca->all();

        return $marcas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* maneira antiga, porem indica e funcional */
        /* $marca = Marca::create($request->all()); */

        /* maneira nova ensinada na aula 295 */
        $marca = $this->marca->create($request->all());

        return $marca;
    }

    /**
     * Display the specified resource.
     *
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* maneira nova ensinada na aula 295 */
        $marca = $this->marca->find($id);

        return $marca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* print_r($request->all());
        echo '<hr>';
        print_r($marca->getAttributes());   */

        /* maneira antiga, porem indica e funcional */
        /* $marca->update($request->all()); */

        /* maneira nova ensinada na aula 295 */
        $marca = $this->marca->find($id);
        $marca->update($request->all());
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* maneira nova ensinada na aula 295 */
        $marca = $this->marca->find($id);
        $marca->delete();
        return ['msg' => 'A marca foi removida com sucesso!'];
    }
}
