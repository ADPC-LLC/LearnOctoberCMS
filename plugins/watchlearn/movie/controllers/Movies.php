<?php namespace Watchlearn\Movie\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Movies extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'watchlearn.movie.manage_movie' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Watchlearn.Movie', 'Movie Library', 'Movies');
    }
}
