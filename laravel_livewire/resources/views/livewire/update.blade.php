<div>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">First Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fname}}" wire:model="fname">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Middle Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$mname}}" wire:model="mname">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Last Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$lname}}" wire:model="lname">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Course:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$course}}" wire:model="course">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
       
        <button wire:click.prevent="update({{ $update_id }})" class="btn btn-warning">Update</button>
        <button wire:click.prevent="cancel()" class="btn btn-warning">Cancel</button>
    </form>
</div>