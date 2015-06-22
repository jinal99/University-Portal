@extends('layouts.main')
@section('content')
<div id="holder">
        <img src="images/slide-3.jpg" id="slideshow" alt="Loading SlideShow...Please Wait..."/>
</div>
<p>
<div class="indexCardPP"><p style="padding-top:20px">{{HTML::image('images/progressivePrograms.png')}}</p><p>PROGRESSIVE PROGRAMS<p></div> 
<div class="indexCardOE"><p style="padding-top:20px">{{HTML::image('images/onlineEducation.png')}}</p><p>ONLINE EDUCATION<p></div> 
<div class="indexCardCU"><p style="padding-top:20px">{{HTML::image('images/contactUS.png')}}</p><p>CONTACT US</p></div>
</p>

@stop