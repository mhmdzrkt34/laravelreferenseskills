<?php



namespace App\View\Components;
use Illuminate\View\Component;


class TestComponent extends Component{


    public $par;


    public function __construct($par){

        $this->par = $par;



    }

    public function render(){


        return view("Components.test-component");

        

    }



}