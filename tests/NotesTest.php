<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class Notes extends TestCase
{
    use WithoutMiddleware;
    
    public function testnotes_list()
    {
        //HAVING (CONDICIONES( 
        
        Note::create(['note'=>'My first note']);
        Note::create(['note'=>'Second note']);
        
        //WHEN ( ACCIONES)
        
        $this->visit('notes')
                
        //THEN
                
                ->see('My first note')
                ->see('My second note');
    }
    public function test_create_note(){
        
        //Route::post("notes);
        //when
        $this ->post("notes")
                //then
                ->see("Creating a note");
    }
}
