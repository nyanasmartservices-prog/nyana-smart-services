public function updateProfile(Request $request)
{
  $request->validate(['profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);

  if ($request->hasFile('profile_image')) {
      $imageName = time().'.'.$request->profile_image->extension(); 
      $request->profile_image->move(public_path('images/profiles'), $imageName);

      $user = Auth::user();
      $user->profile_image = $imageName;
      $user->save();
  }

  return redirect()->back()->with('success', 'Profile image updated successfully!');
}
