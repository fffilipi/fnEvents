<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index() {

        $event = Event::all(); // pego todos os eventos do banco

        return view('welcome', ['events' => $event]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {

        $event = new Event; // instaciada a classe do model

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');
    }
}
