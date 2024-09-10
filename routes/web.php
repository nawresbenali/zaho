<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\conducteurContrroler;
use App\Http\Controllers\adminContrroler;
use App\Http\Controllers\passagerContrroler;
use App\Http\Controllers\CovoiturageContrroler;
use App\Http\Controllers\paiementContrroler;
use App\Http\Controllers\contactContrroler;
use App\Http\Controllers\voitureContrroler;
use App\Http\Controllers\reservationContrroler;
use App\Http\Controllers\reclamationContrroler;
use App\Http\Controllers\trajetContrroler;
use App\Http\Controllers\etoileContrroler;
use App\Http\Controllers\compositionContrroler;
use App\Http\Controllers\contactconducteurContrroler;
use App\Http\Controllers\calculContrroler;
use App\Http\Controllers\StripePaymentController;














/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('ajoutadmin', function () {
    return view('ajoutadmin');
});




Route::get('modifieradmin', function () {
    return view('modifieradmin');
});

Route::get('modifierconducteur', function () {
    return view('modifierconducteur');
});
Route::get('modifierpassager', function () {
    return view('modifierpassager');
});
Route::get('ajoutconducteur', function () {
    return view('ajoutconducteur');
});
Route::get('ajoutpassager', function () {
    return view('ajoutpassager');
});
Route::get('ajoutcomposition', function () {
    return view('ajoutcomposition');
});
Route::get('ajoutpaiement', function () {
    return view('ajoutpaiement');
});
Route::get('ajoutrecherche', function () {
    return view('ajoutrecherche');
});
Route::get('modifierpaiement', function () {
    return view('modifierpaiement');
});
Route::get('covoiturageques', function () {
    return view('covoiturageques');
});
Route::get('registreadmin', function () {
    return view('registreadmin');
});
Route::get('logout', function () {
    return view('logout');
});
Route::get('loginadmin', function () {
    return view('loginadmin');
});
Route::get('welcomconducteur', function () {
    return view('welcomconducteur');
});


Route::get('facture', [calculContrroler::class, 'getmodel'])->name('facturemodel');


Route::get('listecomposition', [compositionContrroler::class, 'getcomposition']);


Route::get('listeconducteur', [conducteurContrroler::class, 'getconducteur'])->name('listeconducteur');
Route::get('listeadmin', [adminContrroler::class, 'getAdmin']);
Route::get('listepassager', [passagerContrroler::class, 'getpassager']);
Route::get('listcovoiturage', [CovoiturageContrroler::class, 'getCovoiturage']);
Route::get('listepaiement', [paiementContrroler::class, 'getpaiement']);
Route::get('listecontact', [contactContrroler::class, 'getcontact']);
Route::get('ourchauffeur', [conducteurContrroler::class, 'getconducteurfront']);
Route::get('about', [compositionContrroler::class, 'getcompositionfront']);
Route::get('calcul', [calculContrroler::class, 'getcalcul']);
Route::post('calcul', [calculContrroler::class, 'getcalcul']);

Route::get('voiture', [voitureContrroler::class, 'getvoiturefront']);
Route::get('detailsMessage/{id}', [ContactContrroler::class, 'getmessage']);

Route::get('listMessage/{id}', [contactconducteurContrroler::class, 'getmessagee']);

Route::get('chauffeur', [conducteurContrroler::class, 'getchauffeur']);
Route::get('listereclamation', [reclamationContrroler::class, 'getreclamation']);


Route::get('listevoiture', [voitureContrroler::class, 'getvoiture']);
Route::get('listereservation', [reservationContrroler::class, 'getreserver']);
Route::get('/', [reservationContrroler::class, 'index']);
Route::get('listerecherche', [trajetContrroler::class, 'gettrajet']);
Route::get('listeetoile', [etoileContrroler::class, 'getetoile']);
Route::get('listecontactconducteur', [contactconducteurContrroler::class, 'getcontactconducteur']);
Route::get('reclamations', [reclamationContrroler::class, 'getreclamationn']);



Route::get('/trajet', [trajetContrroler ::class, 'rechercher']);
Route::post('/addadmin', [adminContrroler::class, 'ajoutadmin']);
Route::post('/addvoiture', [voitureContrroler::class, 'ajoutvoiture']);
Route::post('/addconducteur', [conducteurContrroler::class, 'ajoutconductteur']);

Route::post('/addcomposition', [compositionContrroler::class, 'ajoutcomposition']);
Route::post('/addpassager', [passagerContrroler::class, 'ajoutpassager']);
Route::post('/addcovoiturage', [CovoiturageContrroler::class, 'ajoutcovoiturage']);
Route::post('/addreserver', [reservationContrroler::class, 'resserver']);
Route::post('/addtrajet', [trajetContrroler::class, 'ajoutrecherche']);
Route::post('/addcontactconducteur/{id}', [contactconducteurContrroler::class, 'ajoutcontactconducteur'])->name('addcontactconducteur');

Route::post('/calculateTripPrice', [trajetContrroler::class, 'ajoutrecherche']);
Route::post('/calcul/create', [calculContrroler::class, 'calculateTripPrice'])->name('create');



Route::get('/suppAdmin/{id}', [adminContrroler::class, 'deleteAdmin']);
Route::get('/supppassager/{id}', [passagerContrroler::class, 'deletepassager']);
Route::get('suppconducteur/{id}', [conducteurContrroler::class, 'deleteconducteur']);
Route::get('suppcovoiturage/{id}', [CovoiturageContrroler::class, 'deletecovoiturage']);
Route::get('suppcontact/{id}', [ContactContrroler::class, 'deletecontact']);
Route::get('suppreclamation/{id}', [reclamationContrroler::class, 'deletereclamation']);
Route::get('suppreservation/{id}', [reservationContrroler::class, 'deletereservation']);
Route::get('supptrajet/{id}', [trajetContrroler::class, 'deletetrajet']);
Route::get('supvoiture/{id}', [voitureContrroler::class, 'deletevoiture']);
Route::get('suppcont/{id}', [contactconducteurContrroler::class, 'deletemessage']);
Route::get('/search5', [contactconducteurContrroler::class, 'search5']);







Route::get('modifieradmin/{id}', [adminContrroler::class, 'getAdminid']);

Route::post('/modifadmin', [adminContrroler::class, 'updateadmin']);
Route::get('/modefpass/{id}', [passagerContrroler::class, 'getpassagerid']);
Route::post('/modifierpassager', [passagerContrroler::class, 'updatepassager']);
Route::get('/modefcovoiturage/{id}', [CovoiturageContrroler::class, 'getcovid']);
Route::post('/modifiercovoiturage', [CovoiturageContrroler::class, 'updatecovoiturage']);
Route::get('/modifcond/{id}', [conducteurContrroler::class, 'getconducteurid']);
Route::post('/modifierconducteur', [conducteurContrroler::class, 'updateconducteur']);
Route::get('modefvoiture/{id}', [voitureContrroler::class, 'getvoitureid']);
Route::post('/modifervoiture', [voitureContrroler::class, 'updatevoiture']);

Route::get('modeftrajet/{id}', [trajetContrroler::class, 'gettrajetid']);

Route::post('/modifiertrajet', [trajetContrroler::class, 'updatetrajet']);

Route::post('/addcontact', [contactContrroler::class, 'ajoutcontact']);
Route::get('reclamation', [reclamationContrroler::class, 'getreclamationfront']);

Route::post('/addreclamation', [reclamationContrroler::class, 'ajoutreclamation']);
Route::get('/search0', [conducteurContrroler::class, 'search0']);
Route::get('/search', [passagerContrroler::class, 'search']);
Route::get('/search2', [conducteurContrroler::class, 'search2']);
Route::post('/search4', [voitureContrroler::class, 'search4']);
Route::get('/searchvoiture', [voitureContrroler::class, 'searchvoiture']);
Route::get('/searchtt', [trajetContrroler::class, 'searchtt']);

Route::get('/searchadmine', [adminContrroler::class, 'searchadmine']);
Route::get('/searchreservation', [reservationContrroler::class, 'searchreservation']);
Route::get('/searchreclamation', [reclamationContrroler::class, 'searchreclamation']);
Route::get('/searchcontact', [contactContrroler::class, 'searchcontact']);






Route::get('imprimepassager',[passagerContrroler::class,'pdfpassager']);
Route::get('imprimconducteur',[conducteurContrroler::class,'pdfconducteur']);
Route::get('imprimvoiture',[voitureContrroler::class,'pdfvoiture']);
Route::get('imprimadmin',[adminContrroler::class,'pdfadmin']);
Route::get('imprimreservation',[reservationContrroler::class,'pdfresrvation']);
Route::get('imprimreclamation',[reclamationContrroler::class,'pdfreclamation']);
Route::get('imprimcontact',[contactContrroler::class,'pdfcontact']);







Route::get('covoiturage', function () {
    return view('covoiturage');
});
Route::get('about', function () {
    return view('about');
});
Route::get('pay', function () {
    return view('pay');
});

Route::get('trajet', function () {
    return view('trajet');
});
Route::get('login', function () {
    return view('login');
});
Route::get('registre', function () {
    return view('registre');
});
Route::get('404', function () {
    return view('404');
});
Route::get('recherche', function () {
    return view('recherche');
});


Route::get('modifiercovoiturage', function () {
    return view('modifiercovoiturage');
});
Route::get('theme', function () {
    return view('theme');
});
Route::get('contact', function () {
    return view('contact');
});


Route::get('my_account', function () {
    return view('my_account');
});
Route::get('registreconducteur', function () {
    return view('registreconducteur');
});

Route::get('home', function () {
    return view('home');
});

Route::get('service', function () {
    return view('service');
});
Route::get('listings_details', function () {
    return view('listings_details');
});
Route::get('listings', function () {
    return view('listings');
});
Route::get('addlisting', function () {
    return view('addlisting');
});
Route::get('theme2', function () {
    return view('theme2');
});
Route::get('listereservationpa', [reservationContrroler::class, 'getreserverpayement']);
Route::get('accepter/{id}', [reservationContrroler::class, 'accepter']);
Route::get('refuse/{id}', [reservationContrroler::class, 'refuse']);



Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');


Route::get('detailMessage/{id}', [contactContrroler::class, 'detailMessage']);




Route::get('/res', [conducteurContrroler::class, 'res']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search-trajet', [App\Http\Controllers\trajetContrroler::class, 'searchTrajet']);
Route::get('/bloquerconducteur/{id}', [conducteurContrroler::class, 'bloque']);
Route::get('/activerconducteur/{id}', [conducteurContrroler::class, 'active']);
