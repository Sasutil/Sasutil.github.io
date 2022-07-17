<div>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">First Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter First Name" wire:model="fname">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Middle Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Middle Name" wire:model="mname">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Last Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Last Name" wire:model="lname">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Course:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course" wire:model="course">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
       
        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </form>
</div>