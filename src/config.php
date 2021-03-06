<?php
	
return [
    /*
    |--------------------------------------------------------------------------
    | Automatically JSON-able Routes
    |--------------------------------------------------------------------------
    |
    | List the base controller names that should automatically return a JSON 
    | representation of the routes data on AJAX requests.
    |
    */

	'global_variable_name' => env('REACT_SYNC_GLOBAL_VARIABLE_NAME', 'ReactSyncAppData'),
	
	'gate_handle' => env('REACT_SYNC_GATE_HANDLE', 'admin-site'),

	'api_path' => env('REACT_SYNC_API_PATH', '/update-state'),

  'jsonable_controllers' => [

  ],

  'jsonable_routes' => [

  ],
	
];
