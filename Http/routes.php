<?php

Route::group(['middleware' => 'web', 'prefix' => 'simacars', 'namespace' => 'Modules\SimACARS\Http\Controllers'], function()
{
    oute::post('/vam_acars_remove_book_aircraft.php', 'SimAcarsController@removeBookAircraft');
    Route::post('/vam_acars_get_aircraft.php', 'SimAcarsController@getAircraft');
    Route::post('/vam_acars_pilot_connection.php', 'SimAcarsController@pilotConnection');
    Route::post('/vamliveacars.php', 'SimAcarsController@liveAcars');
    Route::post('/receivevampirep.php', 'SimAcarsController@receiveVamPirep');
    Route::post('/receivevamevents.php', 'SimAcarsController@receiveVamEvents');
    Route::post('/receivevamtracks.php', 'SimAcarsController@receiveVamTracks');
    Route::post('/vam_acars_check_data.php', 'SimAcarsController@checkData');
    Route::post('/vam_acars_delete_data.php', 'SimAcarsControllerr@deleteData');
    Route::get('/install', function() {
        $exitCode = Artisan::call('module:migrate', [
            'module' => 'SimACARS'
        ]);
        if ($exitCode === 0)
        {
            return response("SimACARS Module installed/updated successfully.");
        }
        return response($exitCode);
    });
});
