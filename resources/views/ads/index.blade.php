@extends('layouts.app')

@section('content')
<style>
    .ad-select{
    min-height: 38px;
    min-width: 54px;
    border-radius: 4px;
    border-width: 1px;
    }

    .span-facebook{
            color: #fff;
    background-color:   #0066ff;
            display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

    
    .span-instagram{
            color: #fff;
    background-color:     #663300;
            display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

        .span-reddit{
    color: #fff;
    background-color:    #e62e1a;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

          .span-twitter{
    color: #fff;
    background-color:  #3399ff;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

              .span-quora{
    color: #fff;
    background-color:  #b8001a;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

    
              .span-quora{
    color: #fff;
    background-color:  gray;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }
  
              .span-percentage-high{
    color: #fff;
    background-color: #f2300d;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

      
    .span-percentage-low{
    color: #fff;
    background-color:  #ff9933;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }

     .span-percentage-na{
    color: #fff;
    background-color:black;
    display: inline-block;
    padding: .25em .4em;
    font-size: 90%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    }



   
</style>

  <h4 class="text-center">Advertisement Database</h4>    
    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Company</th>
                        {{-- <th>Text</th> --}}
                        <th>Industry</th>
                        <th>Target Audience</th>
                        <th>Ad Type</th>
                        <th>Percentage Off</th>
                        <th>Social Media</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ads as $ad)
                    <tr>
                        <td> <img  src="/images/{{$ad->image}}" height="100px" width="100px" alt=""> </td>
                        <td> <span style="font-weight: bold;">{{$ad->company}}</span></td>
                        {{-- <td>{{$ad->primary}}</td> --}}

                        <td style="font-weight: bold">{{$ad->industry->industryname}}</td>
                        <td>
                             @foreach($ad->tags as $tag)
                             
                        <span class="badge badge-dark">{{$tag->tagname}}</span>
                        <br>
                          @endforeach
                        </td>



                        <td>{{$ad->adtypename}}</td>

                    @if(is_null($ad->percentage_id))
                        <td> <span class="span-percentage-na">N/A</span></td>
                        @else
                    @if($ad->percentnumber > 20)
                     <td> <span class="span-percentage-high">{{$ad->percentnumber }}%</span> </td>
                    @else
                          <td> <span class="span-percentage-low">{{$ad->percentnumber }}%</span> </td>
                          @endif
                       @endif        
                        @if($ad->socialmedia == "Facebook")
                    <td> <span class="span-facebook">{{$ad->socialmedia}} </span> </td>
                        @elseif($ad->socialmedia == "Instagram")
                     <td> <span class="span-instagram">{{$ad->socialmedia}} </span> </td>
                        @elseif($ad->socialmedia == "Reddit")
                     <td> <span class="span-reddit">{{$ad->socialmedia}} </span> </td>
                          @elseif($ad->socialmedia == "Twitter")
                     <td> <span class="span-twitter">{{$ad->socialmedia}} </span> </td>
                          @elseif($ad->socialmedia == "Quora")
                     <td> <span class="span-quora">{{$ad->socialmedia}} </span> </td>
                     @else
                         <td> <span class="span-media">{{$ad->socialmedia}} </span> </td>
                        @endif

                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                          <th>Image</th>
                        <th>Company</th>
                        {{-- <th>Text</th> --}}
                        <th>Industry</th>
                        <th>Target Audience</th>
                        <th>Ad Type</th>
                        <th>Percentage Off</th>
                        <th>Social Media</th>


                    </tr>
                </tfoot>
            </table>  
         
           </div>
       </div> 
    </div>

    {{-- <livewire:ad-table> --}}
@endsection


@section('javascripts')

<script>


</script>

@endsection