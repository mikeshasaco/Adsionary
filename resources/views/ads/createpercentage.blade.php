@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-3">
             <div class="list-group" style="margin-top:138px;">
 
                 <a href="{{route('ad.create')}}" class="list-group-item ">Create Advertisement</a>
                 <a href="{{route('adtype.create')}}" class="list-group-item">Create Advertisement Type</a>

             </div>
        </div>
        <div class="col-md-9">
                <div class="well">
                  <h2 style="margin-top:85px;">Add Percentage</h2>

                <form method="post" action="{{route('percentage.store')}}"  style="margin-top:2%;" >
                        {{ csrf_field() }}
                        <div class="form-group" >
                            <label for="name control-label">Percentage</label>
                            <input type="number" class="form-control" id="percentnumber" placeholder="Enter Percentage" name="percentnumber">
                       
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection