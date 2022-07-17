<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.addstudent')
    @endif
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->fname }}</td>
                <td>{{ $record->mname }}</td>
                <td>{{ $record->lname }}</td>
                <td>{{ $record->course }}</td>
                <td>
                <button wire:click="edit({{ $record->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $record->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach  
        </tbody>
    </table>
</div>