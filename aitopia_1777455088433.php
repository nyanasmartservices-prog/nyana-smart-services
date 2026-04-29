// app/Http/Controllers/ServiceController.php

public function edit($id)
{
    $service = Service::findOrFail($id);
    return view('services.edit', compact('service'));
}

public function update(Request $request, $id)
{
    $service = Service::findOrFail($id);
    $service->update($request->all());

    // Kora upload ya image
    if ($request->hasFile('image')) {
        // Logic yo kuzakura image
    }

    return redirect()->route('services.index');
}

public function destroy($id)
{
    $service = Service::findOrFail($id);
    $service->delete();
    return redirect()->route('services.index');
}
