<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Activity;
use App\Adapter\ArrayResultAdapter;
use App\Adapter\DatabaseResultAdapter;
use App\Adapter\MySqliResultAdapter;
use App\Container\Container;
use App\EventListener\System;
use App\EventListener\TestEvent;
use App\EventListener\TestListener;
use App\Factory\Worker;
use App\Factory\WorkerFactory;
use App\Singleton\Company;
use App\Taxi\AbstractTaxi;
use App\Taxi\AdvancedTaxi;
use App\Taxi\Person;
use App\Taxi\Student;
use App\Taxi\Taxi;
use App\User;

Route::get('/event-listener', function() {

    $system = new System;
    $system->register(TestListener::class, TestEvent::class);


    $system->fire(new TestEvent);

});


Route::get('/container', function() {

    Container::register(Person::class, function() {

        return new Person("Namik", 25);

    });

    Container::register('home_url', function() {

        return 'http://localhost:8000/';

    });

    Container::register(DatabaseResultAdapter::class, function() {

        return new ArrayResultAdapter;

    });

    $adapter1 = Container::resolve(DatabaseResultAdapter::class);
    $adapter2 = Container::resolve(DatabaseResultAdapter::class);
    $adapter3 = Container::resolve(DatabaseResultAdapter::class);
    $adapter4 = Container::resolve(DatabaseResultAdapter::class);
    $adapter5 = Container::resolve(DatabaseResultAdapter::class);

    dump($adapter1, $adapter2, $adapter3, $adapter4, $adapter5);

});

Route::get('/adapter', function() {

    $link = mysqli_connect('localhost', 'root', '', 'laravel');

    $users = mysqli_query($link, "
        SELECT *
        FROM users
    ");

    $adapter = new MySqliResultAdapter;

    /** @var Object[] $objects */
    $objects = $adapter->adapt($users);

    dump($objects);

});

Route::get('/taxi', function() {

    $taxi = new Taxi;

    $person = new Person('Namik', 25);
    $student = new Student('Edim', 21, 'SSST');

    dump($taxi, $person, $student);

    $taxi->takeGuest($person);

    dump($taxi);

    $taxi->drive();

    $taxi->leaveGuest();

    dump($taxi);



    $taxi->takeGuest($student);

    dump($taxi);

    $taxi->drive();

    $taxi->leaveGuest();

    dump($taxi);
});


Route::get('/singleton-pattern', function() {

    /** @var Company $company */
    $company = Company::getInstance('SSST');

    dump($company);

});

Route::get('/factory-pattern', function() {

    $workerFactory = new WorkerFactory();

    $worker = new Worker('Namik', 10);

    $worker = $workerFactory->instantiate('Namik', 10);

});

Route::get('/static-vs-self', function() {

    $isTheSame = AdvancedTaxi::printCommunicationCenter();

    dump($isTheSame);
});

Route::get('/advanced-taxi', function () {

    $taxi = new AdvancedTaxi();

    $person = new Person('Namik', 25);
    $taxi->setDrivable($person);

    $taxi->drive();

    $taxi->leaveObject();

});


Route::get('/', function () {

    /** @var Activity $activity */
    $activity = Activity::where('user_id', '=', 1)
        ->orderBy('id', 'DESC')
        ->first();

    dump($activity->user);


});

Auth::routes();

Route::get('/home', 'HomeController@index');
