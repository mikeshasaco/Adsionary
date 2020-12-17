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

              .span-test1{
    color: #fff;
    background-color:  rgb(136, 23, 241);
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


            .span-test2{
    color: #fff;
    background-color:  rgb(54, 173, 247);
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

    
            .span-test3{
    color: #fff;
    background-color:  rgb(138, 248, 151);
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

      
            .span-test4{
    color: #fff;
    background-color:  rgb(250, 149, 66);
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
            .span-test5{
    color: #fff;
    background-color:  rgb(245, 14, 156);
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

            .industry-test1{
    color: #fff;
    background-color:  rgb(6, 63, 91);
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

            .industry-test2{
    color: #fff;
    background-color:  rgb(55, 149, 7);
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
   
              .industry-test3{
    color: #fff;
    background-color:  rgb(26, 4, 96);
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

            .industry-test4{
    color: #fff;
    background-color:  rgb(95, 22, 9);
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
   
               .industry-test5{
    color: #fff;
    background-color:  rgb(233, 213, 145);
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

       
               .span-company{
    color: #fff;
    background-color: #5161ce;
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

  <h5 class="text-center">Database Analytics for Advertisements</h5>    
    <h6 class="text-center"> <i>(Know what your competitors Advertisements look like)</i> </h6>  
 <h6 class="text-center"> <i>(Free to Use)</i> </h6>    
  

    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Company Name: </th>           
                         <th>Image: </th>
                        <th>Industry: </th>
                        <th> Target Audience: </th>
                        <th>Advertisement Type:</th>
                        <th>Percentage Off: </th>
                        <th>Social Media: </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($ads as $ad)
                    <tr>
                        <td> <span class="span-company">{{$ad->company}}</span></td>
                         <td> <img class="data-image-table"   id="data-image"  src="https://adsionary.s3.us-east-2.amazonaws.com/Adsionary/{{$ad->image}}" height="100px" width="100px" alt=""> </td>
                        {{-- <td> <img class="data-image-table"   id="data-image"  src="/images/{{$ad->image}}" height="100px" width="100px" alt=""> </td> --}}

                         {{-- <td> <img class="data-image-table"   id="data-image"  src="https://vouch.sfo2.digitaloceanspaces.com/home/forge/adsionary.com/storage/app/public/Adsionary/{{$ad->image}}" height="100px" width="100px" alt=""> </td> --}}

                         @if($ad->industry_id == 1)
                        <td> <span class="industry-test1">{{$ad->industry->industryname}}</span> </td>
                        @elseif($ad->industry_id == 2)
                        <td> <span class="industry-test2">{{$ad->industry->industryname}}</span> </td>
                        @elseif($ad->industry_id == 3)
                        <td> <span class="industry-test3">{{$ad->industry->industryname}}</span> </td>
                        @elseif($ad->industry_id == 4)
                        <td> <span class="industry-test4">{{$ad->industry->industryname}}</span> </td>
                        @else 
                         <td> <span class="industry-test5">{{$ad->industry->industryname}}</span> </td>
                         @endif

                         
                        <td>
                             @foreach($ad->tags as $tag)
                             
                        <span class="badge badge-dark">{{$tag->tagname}}</span>
                        <br>
                          @endforeach
                        </td>


                        {{-- <td> <img class="data-image-table"   id="data-image"  src="/images/{{$ad->image}}" height="100px" width="100px" alt=""> </td> --}}

                        {{-- <td>{{$ad->primary}}</td> --}}

                     



                        @if($ad->adtype_id == 1)
                        <td> <span class="span-test1">{{$ad->adtypename}}</span></td>
                        @elseif($ad->adtype_id == 2)
                        <td> <span class="span-test2">{{$ad->adtypename}}</span></td>
                         @elseif($ad->adtype_id == 3)
                        <td> <span class="span-test3">{{$ad->adtypename}}</span></td>  
                         @elseif($ad->adtype_id == 4)
                        <td> <span class="span-test4">{{$ad->adtypename}}</span></td>  
                        @else
                        <td> <span class="span-test5">{{$ad->adtypename}}</span></td>  
                        @endif



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
                        <th>Company Name: </th>           
                         <th> Image: </th>
                        <th>Industry: </th>
                        <th> Target Audience: </th>
                        <th>Advertisement Type:</th>
                        <th>Percentage Off: </th>
                        <th>Social Media: </th>
                    </tr>
                </tfoot>
            </table>  
         
           </div>
       </div> 
    </div>

          @include('inc.registermodal')


    {{-- <livewire:ad-table> --}}
@endsection


@section('javascripts')
{{-- 
<script>
    $(document).ready(function(){    
   $("img").click(function(){    
        $("img").animate({height: "300px"});
    });
});

</script> --}}





@endsection