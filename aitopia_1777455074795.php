public function allAccounts()
{
    $accounts = User::all();
    return view('accounts.index', compact('accounts'));
}
