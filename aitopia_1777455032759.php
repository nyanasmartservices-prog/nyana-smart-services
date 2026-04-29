public function update(Request $request, $id)
{
  $request->validate([
    'name' => 'required|string|max:255',
    'description' => 'required|string',
    'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
  ]);

  $service = Service::findOrFail($id);
  $service->fill($request->except('image'));

  // Kora upload ya image
  if ($request->hasFile('image')) {
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('images'), $imageName);
      $service->image = $imageName;
  }

  $service->save();
  return redirect()->route('services.index')->with('success', 'Service updated successfully!');
}
