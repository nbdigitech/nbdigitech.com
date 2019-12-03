<?php


/////admin panel///////

Route::get('/Admin/Login', 'Admin\LoginController@index')->name('Admin/Login');

Route::post('Admin/Login/Attempt', 'Admin\LoginController@attempt')->name('Admin/Login/Attempt');






Route::group(['middleware'=>'auth'],function(){



Route::get('/', 'Admin\AppointmentController@index');

Route::get('Admin/Users/Add', 'Admin\UserController@create')->name('Admin/Users/Add');

Route::post('Admin/Users/Store', 'Admin\UserController@store')->name('Admin/Users/Store');

Route::post('Admin/Users/EditSession', 'Admin\UserController@editsession')->name('Admin/Users/EditSession');

Route::get('Admin/Users/Edit', 'Admin\UserController@edit')->name('Admin/Users/Edit');

Route::post('Admin/Users/Delete', 'Admin\UserController@delete')->name('Admin/Users/Delete');

Route::post('Admin/Users/Update', 'Admin\UserController@update')->name('Admin/Users/Update');


Route::get('Admin/RefUser/{id}', 'Admin\AppointmentController@ref');

//CONTACT SECTIONS STARTS
Route::get('Admin/Contacts', 'Admin\ContactsController@index')->name('Admin/Contacts');
Route::post('Admin/Contacts-Remark', 'Admin\ContactsController@ContactsRemark')->name('Admin/Contacts-Remark');
//CONTACT SECTIONS ENDS


//APPOINTMENT SECTIONS STARTS
Route::get('Admin/Appointments', 'Admin\AppointmentController@index')->name('Admin/Appointments');
Route::get('Admin/ConfirmAppointments', 'Admin\AppointmentController@ConfirmAppointments')->name('Admin/ConfirmAppointments');

Route::get('Admin/ClosedAppointments', 'Admin\AppointmentController@ClosedAppointments')->name('Admin/ClosedAppointments');

Route::post('Admin/Appointments/Email', 'Admin\AppointmentController@Email')->name('Admin/Appointments/Email');
Route::post('Admin/Appointments/UpdateSchedule', 'Admin\AppointmentController@UpdateSchedule')->name('Admin/Appointments/UpdateSchedule');


Route::post('Admin/Appointments/Message', 'Admin\AppointmentController@Message')->name('Admin/Appointments/Message');

Route::get('Admin/Appointments/Calendar', 'Admin\AppointmentController@calendar')->name('Admin/Appointments/Calendar');


Route::get('Admin/Appointments/Add', 'Admin\AppointmentController@create')->name('Admin/Appointments/Add');

Route::post('Admin/Appointments/Store', 'Admin\AppointmentController@store')->name('Admin/Appointments/Store');

Route::post('Admin/Appointments/EditSession', 'Admin\AppointmentController@editsession')->name('Admin/Appointments/EditSession');

Route::get('Admin/Appointments/Edit', 'Admin\AppointmentController@edit')->name('Admin/Appointments/Edit');

Route::post('Admin/Appointments/Delete', 'Admin\AppointmentController@delete')->name('Admin/Appointments/Delete');

Route::post('Admin/Appointments/Update', 'Admin\AppointmentController@update')->name('Admin/Appointments/Update');

Route::post('Admin/Appointment/EditRemarkSession', 'Admin\AppointmentController@EditRemarkSession')->name('Admin/Appointment/EditRemarkSession');

Route::post('Admin/Appointment/RefEditRemarkSession', 'Admin\AppointmentController@RefEditRemarkSession')->name('Admin/Appointment/RefEditRemarkSession');


Route::get('Admin/Appointments/RescheduledAppointment/{id}', 'Admin\AppointmentController@RescheduledAppointment')->name('Admin/Appointments/RescheduledAppointment');

Route::get('Admin/Appointments/Calendars', 'Admin\AppointmentController@Calendars')->name('Admin/Appointments/Calendars');
Route::post('Admin/Appointments/Appointment-Done', 'Admin\AppointmentController@AppointmentDone')->name('Admin/Appointments/Appointment-Done');
//APPOINTMENT SECTIONS ENDS



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
