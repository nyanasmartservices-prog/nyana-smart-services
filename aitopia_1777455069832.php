// routes/web.php
Route::get('password/reset', 'Auth\ForgotPasswordController@getEmail');
Route::post('password/email', 'Auth\ForgotPasswordController@postEmail');
