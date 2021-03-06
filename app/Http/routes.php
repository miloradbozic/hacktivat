<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
*/

Route::group(['namespace' => 'Api'], function () {
    Route::get('/api/story/all', ['as' => 'api.story.all', 'uses' => 'StoryController@all']);
    Route::post('/api/story/upload', ['as' => 'api.story.upload', 'uses' => 'StoryController@upload']);
    Route::post('/api/story/save', ['as' => 'api.story.save', 'uses' => 'StoryController@save']);
    Route::get('/api/story/{userId}', ['as' => 'api.story.user', 'uses' => 'StoryController@user']);
    Route::get('/api/tour/all', ['as' => 'api.tour.all', 'uses' => 'TourController@all']);
    Route::post('/api/tour/save', ['as' => 'api.tour.save', 'uses' => 'TourController@save']);
    Route::get('/api/tour/{userId}', ['as' => 'api.tour.user', 'uses' => 'TourController@user']);
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/dashboard', [
        'as' => 'dashboard', 'uses' => 'Admin\DashboardController@index'
    ]);

    Route::get('/story/approved', [
        'as' => 'story.approved', 'uses' => 'Admin\StoryController@approved'
    ]);

    Route::get('/story/pending', [
        'as' => 'story.pending', 'uses' => 'Admin\StoryController@pending'
    ]);

    Route::get('/story/details/{id}', [
        'as' => 'story.details', 'uses' => 'Admin\StoryController@details'
    ]);

    Route::get('/story/approve/{id}', [
        'as' => 'story.approve', 'uses' => 'Admin\StoryController@approve'
    ]);

    Route::get('/story/decline/{id}', [
        'as' => 'story.decline', 'uses' => 'Admin\StoryController@decline'
    ]);

    Route::get('/tour/all', [
        'as' => 'tour.all', 'uses' => 'Admin\TourController@all'
    ]);

    Route::get('/tour/details/{id}', [
        'as' => 'tour.details', 'uses' => 'Admin\TourController@details'
    ]);

    Route::get('/', [
    'as' => 'home', 'uses' => 'PageController@home'
        ]);

    Route::get('/api', [
    'as' => 'api', 'uses' => 'PageController@api'
        ]);

    Route::group(['prefix' => 'api'], function() {
        Route::get('github', [
            'uses' => 'GithubController@getPage',
            'as'   => 'api.github',
            'middleware' => ['auth']
        ]);

        Route::get('twitter', [
            'uses' => 'TwitterController@getPage',
            'as'   => 'api.twitter',
            'middleware' => ['auth']
        ]);

        Route::get('lastfm', [
            'uses' => 'LastFmController@getPage',
            'as'   => 'api.lastfm'
        ]);

        Route::get('nyt', [
            'uses' => 'NytController@getPage',
            'as'   => 'api.nyt'
        ]);

        Route::get('steam', [
            'uses' => 'SteamController@getPage',
            'as'   => 'api.steam'
        ]);

        Route::get('stripe', [
            'uses' => 'StripeController@getPage',
            'as'   => 'api.stripe'
        ]);

        Route::get('paypal', [
            'uses' => 'PaypalController@getPage',
            'as'   => 'api.paypal'
        ]);

        Route::get('twilio', [
            'uses' => 'TwilioController@getPage',
            'as'   => 'api.twilio'
        ]);

        Route::post('twilio', [
            'uses' => 'TwilioController@sendTextMessage'
        ]);

        Route::get('scraping', [
            'uses' => 'WebScrapingController@getPage',
            'as'   => 'api.scraping'
        ]);

        Route::get('yahoo', [
            'uses' => 'YahooController@getPage',
            'as'   => 'api.yahoo'
        ]);

        Route::get('clockwork', [
            'uses' => 'ClockworkController@getPage',
            'as'   => 'api.clockwork'
        ]);

        Route::post('clockwork', [
            'uses' => 'ClockworkController@sendTextMessage'
        ]);

        Route::get('aviary', [
            'uses' => 'AviaryController@getPage',
            'as'   => 'api.aviary'
        ]);

        Route::get('lob', [
            'uses' => 'LobController@getPage',
            'as'   => 'api.lob'
        ]);

        Route::get('slack', [
            'uses' => 'SlackController@getPage',
            'as'   => 'api.slack'
        ]);

        Route::get('facebook', [
            'uses' => 'FacebookController@getPage',
            'as'   => 'api.facebook',
            'middleware' => ['auth']
        ]);

        Route::get('linkedin', [
            'uses' => 'LinkedInController@getPage',
            'as'   => 'api.linkedin',
            'middleware' => ['auth']
        ]);

        Route::get('foursquare', [
            'uses' => 'FoursquareController@getPage',
            'as'   => 'api.foursquare'
        ]);

        Route::get('instagram', [
            'uses' => 'InstagramController@getPage',
            'as'   => 'api.instagram',
            'middleware' => ['auth']
        ]);

        Route::get('tumblr', [
            'uses' => 'TumblrController@getPage',
            'as'   => 'api.tumblr'
        ]);
    });

    Route::post('/slack/message', [
        'uses' => 'SlackController@sendMessageToTeam',
        'as'   => 'slack.message'
    ]);

    Route::post('/tweet/new', [
        'uses' => 'TwitterController@sendTweet',
        'as'   => 'tweet.new',
        'middleware' => ['auth']
    ]);

    Route::get('/login', [
        'uses' => 'Auth\AuthController@getLogin',
        'as'   => 'auth.login',
        'middleware' => ['guest']
    ]);

    Route::post('/login', [
        'uses' => 'Auth\AuthController@postLogin',
        'middleware' => ['guest']
    ]);

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    // Social Authentication
    Route::get('/auth/{provider}', 'OauthController@authenticate');

    Route::get('/account', [
        'uses' => 'AccountController@getAccountPage',
        'as'   => 'account.dashboard',
        'middleware' => ['auth']
    ]);

    Route::post('/account/profile', [
        'uses' => 'AccountController@updateProfile',
        'as'   => 'account.profile',
        'middleware' => ['auth']
    ]);

    Route::post('/account/photo', [
        'uses' => 'AccountController@updateAvatar',
        'as'   => 'account.avatar',
        'middleware' => ['auth']
    ]);

    Route::post('/account/password', [
        'uses' => 'AccountController@changePassword',
        'as'   => 'account.password',
        'middleware' => ['auth']
    ]);

    Route::post('/account/delete/now', [
        'uses' => 'AccountController@deleteAccount',
        'as'   => 'account.delete.now',
        'middleware' => ['auth']
    ]);


    Route::get('/account/confirm/delete', [
        'uses' => 'AccountController@redirectToConfirmDeletePage',
        'as'   => 'account.confirm.delete',
        'middleware' => ['auth']
    ]);

    Route::get('/account/delete/later', [
        'uses' => 'AccountController@dontDeleteAccount',
        'as'   => 'account.dont.delete',
        'middleware' => ['auth']
    ]);

    Route::get('/signup', [
        'uses' => 'Auth\AuthController@getRegister',
        'as'   => 'auth.register',
        'middleware' => ['guest']
    ]);

    Route::get('logout', [
        'uses' => 'Auth\AuthController@logout',
        'as' => 'logout',
    ]);

    Route::post('/signup', [
        'uses' => 'Auth\AuthController@postRegister',
        'middleware' => ['guest']
    ]);

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::post('/contact', [
        'uses' => 'ContactController@sendMessage',
        'as'   => 'contact'
    ]);
});
