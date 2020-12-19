@extends('layouts.app')
@section('content')
<style>

.skills{
  width: 100%;
  max-width: 100%;
  padding: 0 20px;
  margin-left: 3%;
}

.skill-name{
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  margin: 40px 0;
}

.skill-bar{
  height: 40px;
  background: #cacaca;
  border-radius: 8px;
  max-width: 171%;
}

.skill-per{
  height: 40px;
  background-color: #0fbcf9;
  border-radius: 8px;
  width: 0;
  transition: 1s linear;
  position: relative;
  text-align: center;
  font-weight: 800;
}

.skill-per::before{
  content: attr(per);
  position: absolute;
  padding: 4px 6px;
  background-color: #000;
  color: #fff;
  font-size: 12px;
  border-radius: 4px;
  top: -35px;
  right: 0;
  transform: translateX(50%);
}

.skill-per::after{
  content: '';
  position: absolute;
  width: 10px;
  height: 10px;
  background-color: #000;
  top: -16px;
  right: 0;
  transform: translateX(50%) rotate(45deg);
  border-radius: 2px;
}

.media-select{
    min-width: 100%;
    min-height: 45px;
    border-width: 3px;
    border-color: rgba(50, 50, 50, 0.14);
    margin-top: 16px;
    margin-left: 3%;

}
.title-cat{
  font-size: 36px;
  margin-top: 60px;
  text-align: center;
}

@media(max-width:992px){
 .title-cat{
   font-size: 30px;
   margin-top: 72px;
 }
}

@media(max-width:430px){
 .title-cat{
  font-size: 20px;
  margin-top: 100px;
 }
}
</style>

  

<div class="container">
    <div class="row">
             <div class="col-md-12 col-sm-12">

                    <h4 class="" style="text-align: center" >Most used Social Medias Type for the  <b>{{ $industryid->industryname }}</b> According our Database </h4>
                                        
                    <select name="record"   class="media-select">
                        @foreach($int as $categoryselect)
                        <option value="{{ $categoryselect->id  }}"
                            @if(session('industryname') == $categoryselect->id)
                                selected="selected"
                            @endif >
                            {{ $categoryselect->industryname }}
                        </option>
                    @endforeach
                    </select>
          
                {{-- <h3>Percentage of  <b>{{ $industryid->industryname }}</b> Advertisement that use Advertisement Type  </h3> --}}
            
  <div class="skills" >
      @foreach($intantype as $type)
      <div class="skill">
        <div class="skill-name">{{number_format($type->total,0)}}% of {{$type->industryname}} advertisements used {{$type->socialmedia}} </div>
        <div class="skill-bar">
         @if($type->social_id == 1)
        <div class="skill-per" style="background-color: rgb(250, 39, 197)" per="{{$type->total}}">{{$type->socialmedia}}</div>
        @elseif($type->social_id == 2)
        <div class="skill-per" style="background-color: rgb(77, 236, 128)" per="{{$type->total}}">{{$type->socialmedia}}</div>
        @elseif($type->social_id == 3)
        <div class="skill-per" style="background-color: rgb(183, 238, 18)" per="{{$type->total}}">{{$type->socialmedia}}</div>
        @else
        <div class="skill-per" style="background-color: rgb(201, 164, 15)" per="{{$type->total}}">{{$type->socialmedia}}</div>

        @endif

        </div>
        @endforeach
      </div>

    

      
    </div>
                    


            </div>

    </div>

</div>

@endsection

@section('javascripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
      $('.skill-per').each(function(){
        var $this = $(this);
        var per = $this.attr('per');
        $this.css("width",per+'%');
        $({animatedValue: 0}).animate({animatedValue: per},{
          duration: 1000,
          step: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          },
          complete: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          }
        });
      });
    </script>

<script>
        var dropdown = document.getElementsByClassName("dropdownse");
    var attribute;
    var myFunction = function() {
    attribute = this.getAttribute("data-target");
        var x = document.getElementById(attribute);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }

    };
    for (var i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener('click', myFunction, false);
    }

    </script>

    <script>
    $('#industryname').change(function(){
        location.href = $(this).find(":selected").attr('data-id');
    });

    </script>

    <script>
    $("[name='record']").on("change", function (e) {
        let id = $(this).val();
        window.location.href = window.location.origin + '/data'+'/industry/socialmedia/'+ id;
    });
</script>
@endsection