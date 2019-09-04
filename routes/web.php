<?php

Auth::routes();

Route::group(['middleware'=>'auth'],function(){

    Route::get('/registration',[
        'as' => 'registerWiew',
        'uses' => 'Auth\ProfilController@registerView'
    ]);

    Route::get('/profil',[
        'as' => 'profil',
        'uses' => 'Auth\ProfilController@profil'
    ]);


//    Route::get('/registration/{update}',[
//        'as' => 'registerWiew',
//        'uses' => 'Auth\ProfilController@registerView'
//    ])->where('uodate','update');

    Route::post('/registerValid',[
        'as'=>'registerValid',
        'uses'=>'Auth\ProfilController@registerValid'
    ]);

     Route::post('/updateProfil',[
         'as'=>'updateProfil',
         'uses'=>'Auth\ProfilController@updateProfil'
     ]);

    Route::get('/', 'DashboardController@index')->name('home');
    Route::get('/index', 'DashboardController@index')->name('home');

    route::get('/sensibilisation', [
        'as' => 'listS',
        'uses' => 'SensibilisationController@listSensibilisation'
    ]);

    Route::group(['middleware'=>'membre'],function(){

        route::get('/listRecense/{id}',[
            'as' => 'listRecense',
            'uses' => 'RecenseController@listRecense'
        ])->where('id','[0-9]+');
        
        route::get('/addRecense/{id}',[
            "as" => "addRecense",
            "uses" => "RecenseController@addRecenseView"
        ])->where('id','[0-9]+');
        
        route::post('/addRecense/valid/{id}',[
            "as" => "validRecense",
            "uses" => "RecenseController@validRecense"
        ])->where('id','[0-9]+');

            Route::group(['middleware'=>'respo'],function(){

                route::post('/updateCommunaute/valid/{id}',[
                    'as' => 'updateCommunauteValid',
                    'uses' => 'CommunauteController@updateCommunauteValid'
                ])->where('id','[0-9]+');
            
                route::get('/updateCommunauteView/{id}',[
                    'as' => 'updateCommunauteView',
                    'uses' => 'CommunauteController@updateCommunauteView'
                ])->where('id','[0-9]+');
                
                //->where('id','[0-9]+')
                //->where('slug','[a-z0-9\-]+')
                route::get('/addSensibilisation', [
                    'as' => 'addS',
                    'uses' => 'SensibilisationController@addSensibilisation'
                ]);
                
                route::post('/addSensibilisation/valid',[
                    'as' => 'validS',
                    'uses' => 'SensibilisationController@validSensibilisation'
                ]);
                
                route::get('/deleteSensibilisation/{id}',[
                    'as' => 'deleteS',
                    'uses' => 'SensibilisationController@deleteSensibilisation'
                ])->where('id','[0-9]+');
                
                route::post('/updateSensibilisation/{id}',[
                    'as' => 'updateS',
                    'uses' => 'SensibilisationController@updateSensibilisation'
                ])->where('id','[0-9]+');
        
                route::get('/updateView/{id}',[
                    'as' => 'updateView',
                    'uses' => 'SensibilisationController@updateView'
                ])->where('id','[0-9]+');
        
                route::get('/deleteRecense/{sensi}/{id}',[
                    'as' => 'deleteRecense',
                    'uses' => 'RecenseController@deleteRecense'
                ])->where('id','[0-9]+')->where('sensi','[0-9]+');

                route::get('/deleteMembre/{id}',[
                    'as' => 'deleteMembre',
                    'uses' => 'MembreController@deleteMembre'
                ])->where('id','[0-9]+');
            });
    });

    Route::group(['middleware'=>'admin'],function(){

        route::get('/deleteCommunaute/{id}',[
            'as' => 'deleteCommunaute',
            'uses' => 'CommunauteController@deleteCommunaute'
        ])->where('id','[0-9]+');
        
        route::get('/addCommunauteView',[
            'as' => 'addCommunauteView',
            'uses' => 'CommunauteController@addCommunauteView'
        ]);

        route::post('/addCommunaute/valid',[
            'as' => 'validCommunaute',
            'uses' => 'CommunauteController@addCommunauteValid'
        ]);
    });
    
    route::get('/listCommunaute',[
        'as' => 'listCommunaute',
        'uses' => 'CommunauteController@listCommunaute'
    ]);

    route::get('/listMembre',[
        'as' => 'listMembre',
        'uses' => 'MembreController@listMembre'
    ]);
});


