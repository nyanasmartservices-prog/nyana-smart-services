public function settings(Request $request)
{
    // Logic yo kugaragaza settings
    return view('accounts.settings', compact('user'));
}
