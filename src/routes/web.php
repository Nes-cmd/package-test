<?php

Route::get('contact', [Nesru\warka\controllers\ContactController::class, 'index']);
Route::post('contact/submit', [Nesru\warka\controllers\ContactController::class, 'submit'])->name('contact.submit');
?>