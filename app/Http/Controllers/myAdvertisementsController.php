<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class myAdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){
            $advertisements=Advertisement::where('user_id',Auth::user()->id)->get();

            return view('myAdvertisements.index',['advertisements'=>$advertisements]);
        }
        return view ('auth.login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('myAdvertisements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()) {
            $advertisement = Advertisement::create([
                'title' => $request->input('title'),
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'year' => $request->input('year'),
                'month' => $request->input('month'),
                'kilometers' => $request->input('kilometers'),
                'alarm_system' => $request->input('alarm_system'),
                'aluminium_wheels' => $request->input('aluminium_wheels'),
                'multimedia_system' => $request->input('multimedia_system'),
                'fog_lights' => $request->input('fog_lights'),
                'abs' => $request->input('abs'),
                'esp' => $request->input('esp'),
                'parking_system' => $request->input('parking_system'),
                'wheels_size' => $request->input('wheels_size'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'user_id' => Auth::user()->id
            ]);
            if ($advertisement) {
                return redirect()->route('myAdvertisements.show', ['advertisement' => $advertisement->id])
                    ->with('success', 'H Αγγελια καταχωρήθηκε επιτυχως');
            }
        }
        return back()->withInput()->with('errors','Προβλημα στην καραχωρηση της αγγελιας ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        //
        $advertisement=Advertisement::find($advertisement->id);
        return view('myAdvertisements.show',['advertisement'=>$advertisement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)

    {
        $advertisement=Advertisement::find($advertisement->id);

        return view('myAdvertisements.edit',['advertisement'=>$advertisement]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $findAdvertisement=Advertisement::find($advertisement->id);
        if($findAdvertisement->delete()){
            return redirect()->route('myAdvertisements.index')
                ->with('success','Η αγγελια διαγραφηκε επιτυχώς');
        }
        else{
            return back()->withInput()->with('errors','Η αγγελία δεν μπορει να διαγραφει');
        }


    }
}
