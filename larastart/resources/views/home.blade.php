@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <ul>
                      @foreach($tasks as $task)
                         <li>{{$task->task}}
                             
                             @if($task->done==1)
                             <a href="{{route('delete',['id'=>$task->id])}}" class="btn btn-danger">Delete</a>
                             
                             @else 
                             <a href="{{route('delete',['id'=>$task->id])}}" class="btn btn-danger">Delete</a>
                             <a href="{{route('edit',['id'=>$task->id])}}" class="btn btn-danger">Update</a>
                             <a href="{{route('done',['id'=>$task->id])}}" class="btn btn-primary">done</a>

                            @endif
                         </li>

                      @endforeach
                      
                        </ul> 
                        {{$tasks->links()}}    
                    </div>
                   <div class="container">
                   <form action="{{route('insert')}}" method="post" >
                       @csrf
                       <div class="form-group">
                           <input type="text" name="task" class="form-control" placeholder="Enter task" required>
                       </div>
                       <div class="form-group">
                           <input type="submit" name="Add" class="btn btn-primary btn-block" >
                       </div>
                   </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
