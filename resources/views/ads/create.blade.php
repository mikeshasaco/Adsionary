@extends('layouts.app')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
             <div class="list-group" style="margin-top:138px;">
                 <a href="{{route('industry.create')}}" class="list-group-item ">Industry</a>
                {{-- <a href="{{route('aduser')}}" class="list-group-item ">Merchant</a>
                <a href="{{route('adcustomer')}}" class="list-group-item ">Customer</a>
                <a href="{{route('category.create')}}" class="list-group-item ">Create Category</a>
                <a href="{{route('adproduct')}}" class="list-group-item ">Coupons</a>
                <a href="{{route('subscription.payout')}}" class="list-group-item">Subscription Statistic</a> --}}
                 <a href="{{route('adtype.create')}}" class="list-group-item">Create Ad Type</a>
                <a href="{{route('tag.create')}}" class="list-group-item">Create Tag</a>
                {{-- <a href="{{route('gender.create')}}" class="list-group-item">Gender</a> --}}
                <a href="{{route('percentage.create')}}" class="list-group-item">Create Percentage</a>
                 <a href="{{route('social.create')}}" class="list-group-item">Create Social Media</a>
                 <a href="{{route('color.create')}}" class="list-group-item">Create Color</a>


             </div>
        </div>
        <div class="col-md-9">
                <div class="well">
                  <h2 style="margin-top:85px;">Create Ad </h2>

         
                <form method="post" enctype="multipart/form-data" action="{{route('ad.store')}}">
                        {{ csrf_field() }}
                <div class="form-group custom-file">
                                <input type="file" name="image" class="form-control custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Upload  Image</label>
                                @if ($errors->has('image'))
                                    <small class="text-danger">{{ $errors->first('image') }}</small>
                                @endif
                            </div>


                       <div class="form-group" >
                            <label for="name control-label">Company Name</label>
                            <input type="text" class="form-control" id="adtypename" placeholder="Enter Primary Text" name="company">
                        </div>

                        <div class="form-group" >
                            <label for="name control-label">Primary Text</label>
                            <input type="text" class="form-control" id="adtypename" placeholder="Enter Primary Text" name="primary">
                        </div>

                        <div class="form-group">
                             <label for="">Percentage</label>
                             <select class="form-control" name="percentage_id">
                            <option value=""></option>
                            @foreach($percentages as $percentage)
                           <option value="{{ $percentage->id }}">{{ $percentage->percentnumber }}</option>
                             @endforeach
                             </select>
                         </div>

                         
                         <div class="form-group">
                             <label for="">Colors</label>
                             <select class="form-control" name="color_id">
                            <option value=""></option>
                            @foreach($colors as $color)
                           <option value="{{ $color->id }}">{{ $color->colorname }}</option>
                             @endforeach
                             </select>
                         </div>

                    
                        <div class="form-group">
                             <label for="">Social Media</label>
                             <select class="form-control" name="social_id">
                            <option value=""></option>
                            @foreach($socials as $social)
                           <option value="{{ $social->id }}">{{ $social->socialmedia }}</option>
                             @endforeach
                             </select>
                         </div>



                                              
                         <div class="form-group">
                             <label for="">Industry</label>
                             <select class="form-control" name="industry_id">
                            @foreach($industries as $industry)
                           <option value="{{ $industry->id }}">{{ $industry->industryname }}</option>
                             @endforeach
                             </select>
                         </div>

                         <div class="form-group">
                             <label for="">Advertisement Type</label>
                             <select class="form-control" name="adtype_id">
                            @foreach($adtype as $type)
                           <option value="{{ $type->id }}">{{ $type->adtypename }}</option>
                             @endforeach
                             </select>
                         </div>

                           <div class="form-group">
                             <label for="">Detail Targeting</label>
                             <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                            @foreach($tags as $tag)
                           <option value="{{ $tag->id }}">{{ $tag->tagname }}</option>
                             @endforeach
                             </select>
                         </div>

                         

                      
                        <input type="submit" value="Submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('javascripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
    $('.select2-multi').select2();
</script>

@endsection