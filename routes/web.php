<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


$viewFiles = File::allFiles(resource_path('views'));
// Loop through each file in the views directory
foreach ($viewFiles as $viewFile) {
    // Get the relative path of the view file
    $viewName = str_replace(resource_path('views') . '/', '', $viewFile->getRealPath());
    
    
    // Remove the .blade.php extension from the view name
    // $viewName = pathinfo($viewName, PATHINFO_FILENAME);
    

    $viewName = str_replace('.blade.php', '', $viewName);

    
    // Skip directories (like any subdirectories you may have under 'views/')
    if ($viewFile->isDir()) {
        continue;
    }

    // Create a route for each view file, using the file name without extension
    Route::view( $viewName, $viewName);
}
