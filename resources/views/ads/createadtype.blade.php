@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-3">
             <div class="list-group" style="margin-top:138px;">
     
                <a href="{{route('tag.create')}}" class="list-group-item">Create Tag</a>
                 <a href="{{route('ad.create')}}" class="list-group-item ">Create Advertisement</a>
                 <a href="{{route('percentage.create')}}" class="list-group-item">Create Percentage</a>

                 <a href="{{route('industry.create')}}" class="list-group-item ">Create Industry</a>

         
             </div>
        </div>
        <div class="col-md-9">
                <div class="well">
                  <h2 style="margin-top:85px;">Add Advertisement Type</h2>

                <form method="post" action="{{route('adtype.store')}}"  style="margin-top:2%;" >
                        {{ csrf_field() }}
                        <div class="form-group" >
                            <label for="name control-label">Name</label>
                            <input type="text" class="form-control" id="adtype" placeholder="Enter AD Type" name="adtypename">
                       
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection