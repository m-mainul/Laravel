<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes() {
    	// return $this->hasMany(Note::class);
    	return $this->hasMany('App\Models\Note');
    }

    // Here Note $note means we expect Note instance
    // This method will create new note in database
    public function addNote(Note $note) {
    	
        $note->user_id = Auth::id();
        
    	return $this->notes()->save($note);
    	
    }

    // This is useful if path is so completed
    public function path() {
        // return $this;
        // return $this->id;
        return '/cards/' . $this->id;
    }
}
