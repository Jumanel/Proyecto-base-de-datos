  <?php

Route:: view('/','Home')->name('Home');
Route:: view('/about','about')->name('about');

route:: resource('portafolio', 'projectcontroller')
->names('projects')
->parameters(['portafolio' => 'project']);

Route:: view('/contact','contact')->name('contact');
route:: post('contact', 'messagecontroller@store');





