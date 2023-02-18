<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use App\Managers\PersonManager;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function __construct(protected PersonManager $manager)
    {
    }

    public function index()
    {
        $persons = Person::all();

        return view('persons.index', compact('persons'));
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store(PersonRequest $request)
    {
        $person = $this->manager->createCustomer($request);
        return redirect()->route('persons.show', $person);
    }

    public function show(Person $person)
    {
        return view('persons.show', ['person' => $person]);
    }

    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:25'],
            'surname' => ['required', 'string', 'min:3', 'max:25'],
            'personal_code' => ['nullable', 'string', 'max:25'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ]);

        $person->update($request->all());
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}
