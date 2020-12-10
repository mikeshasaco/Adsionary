@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-3">
             <div class="list-group" style="margin-top:138px;">
                 {{-- <a href="{{route('admin.dashboard')}}" class="list-group-item ">Dashboard</a>
                <a href="{{route('aduser')}}" class="list-group-item ">Merchant</a>
                <a href="{{route('adcustomer')}}" class="list-group-item ">Customer</a>
                <a href="{{route('category.create')}}" class="list-group-item ">Create Category</a>
                <a href="{{route('adproduct')}}" class="list-group-item ">Coupons</a>
                <a href="{{route('subscription.payout')}}" class="list-group-item">Subscription Statistic</a>
                <a href="{{route('gender.create')}}" class="list-group-item">Gender</a>
                 <a href="{{route('adtype.create')}}" class="list-group-item">Create Ad Type</a>
 --}}
                 <a href="{{route('ad.create')}}" class="list-group-item ">Create Advertisement</a>
                 <a href="{{route('adtype.create')}}" class="list-group-item">Create Advertisement Type</a>
                 <a href="{{route('percentage.create')}}" class="list-group-item">Create Percentage</a>
                 <a href="{{route('color.create')}}" class="list-group-item">Create Color</a>


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