<?php

namespace App\Http\Controllers;

use App\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::all();
        return view('facts.index', compact('facts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('facts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fact $fact
     * @return \Illuminate\Http\Response
     */
    public function show(Fact $fact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fact $fact
     * @return \Illuminate\Http\Response
     */
    public function edit(Fact $fact)
    {

                return view('facts.edit', compact('fact'));
            }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \App\Fact $fact
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, Fact $fact)
        {
            Fact::find($fact->id)->update($request->all());

            return redirect(route('facts.index'));
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Fact $fact
         * @return \Illuminate\Http\Response
         */
        public
        function destroy(Fact $fact)
        {
            //
        }
    }

