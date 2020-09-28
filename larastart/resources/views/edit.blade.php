@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   <div class="container">
                   <form action="{{route('update',['id'=>$task->id])}}" method="post" >
                       @csrf
                       <div class="form-group">
                           <input type="text" name="task" class="form-control" value="{{$task->task}}" >
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
