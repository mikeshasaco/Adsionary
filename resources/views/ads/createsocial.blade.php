@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-3">
             <div class="list-group" style="margin-top:138px;">
  
                 <a href="{{route('ad.create')}}" class="list-group-item ">Create Advertisement</a>
                 <a href="{{route('adtype.create')}}" class="list-group-item">Create Advertisement Type</a>
                 <a href="{{route('percentage.create')}}" class="list-group-item">Create Percentage</a>


             </div>
        </div>
        <div class="col-md-9">
                <div class="well">
                  <h2 style="margin-top:85px;">Add Social Media</h2>

                <form method="post" action="{{route('social.store')}}"  style="margin-top:2%;" >
                        {{ csrf_field() }}
                        <div class="form-group" >
                            <label for="name control-label">Enter Social Media</label>
                            <input type="text" class="form-control" id="socialmedia" placeholder="Enter Social Media" name="socialmedia">
                       
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection