<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AgendaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke() : RedirectResponse
    {
        Agenda::create([
            'user_id' => Auth::id(),
            'title' => request('title'),
            'agenda' => request('agenda'),
            'agenda2' => request('agenda2'),
            'agenda3' => request('agenda3'),
            'agenda4' => request('agenda4'),
            'agenda5' => request('agenda5'),
            'location' => request('location'),
            'location2' => request('location2'),
            'location3' => request('location3'),
            'location4' => request('location4'),
            'location5' => request('location5'),
            'pic' => request('pic'),
            'pic2' => request('pic2'),
            'pic3' => request('pic3'),
            'pic4' => request('pic4'),
            'pic5' => request('pic5'),
            'date' => request('date'),
            'date2' => request('date2'),
            'date3' => request('date3'),
            'date4' => request('date4'),
            'date5' => request('date5')
        ]);
        
        return redirect()->back()->with(['alert' => 'Success Save Your Agenda']);
    }
}
