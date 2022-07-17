<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $records,$fname,$mname,$lname,$course,$studentRec;
    public $updateMode = false;
    public $update_id=0;

    public function render()
    {
        $this->records = Student::all();
        return view('livewire.students');
    }

    public function resetInputFields(){
        $this->fname='';
        $this->mname='';
        $this->lname='';
        $this->course='';
        $this->update_id='';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'course' => 'required',
        ]);
      
        Student::create($validatedDate);
        
        session()->flash('message', 'Record created Successfully.');
        $this->resetInputFields();
        
      
    }

    public function cancel()
    {
        $this->resetInputFields();
        $this->updateMode = false;

    }

    public function update(){
        Student::where('id',$this->update_id)->update([
            'id' => $this->update_id,
            'fname' => $this->fname,
            'mname' => $this->mname,
            'lname' => $this->lname,
            'course' => $this->course

         ]); 
         $this->updateMode = false;
         session()->flash('message', 'Record updated Successfully.');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->update_id=$id;
        $this->studentRec=Student::findOrFail($id);
        $this->fname=$this->studentRec['fname'];
        $this->mname=$this->studentRec['mname'];
        $this->lname=$this->studentRec['lname'];
        $this->course=$this->studentRec['course'];

    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
  
}
