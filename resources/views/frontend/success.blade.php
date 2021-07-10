@extends('frontend.layout.master')

@section('title','Success')

@section('content')
    <!-- Success Start -->
    <div class="success">
        <div class="container">
            <div class="section-header text-center success-header">
                <h2>Successfull Students</h2>
                <p>আমাদের কোর্স থেকে শিখে যারা বিভিন্ন জায়গায় চাকরি/ইন্টার্ন পেয়েছে তাদের মধ্যে কয়েকজন এর প্রোফাইল নিচে দেয়া হলো</p>
            </div>
            <div class="row">
                @foreach($successful_students as $items)
                <div class="col-md-6">
                    
                    <div id="accordion-1">
                        <div class="card wow " data-wow-delay="0.1s" style="flex-direction: row;">
                        
                            <div>
                                <img src="{{$items->image}}" alt="" class="success-img">
                            </div>
                            <div class="card-body" >
                                <h3>{{$items->name}}</h3>
                                <h6>{{$items->designation}}</h6>

                                {{$items->comment}}
                                <span class="dots">...</span>
                                <span class="more">
                                  আমাদের কোর্স থেথেকে শিখে এর প্রোফাইল নিচে দেয়া হলো আমাদের কোর্স থেথেকে শিখে এর প্রোফাইল নিচে দেয়া হলো আমাদের কোর্স থেথেকে শিখে এর প্রোফাইল নিচে দেয়া হলো
                                            </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
                <!--Success ends-->

<!--Pagination starts-->
<nav aria-label="Page navigation example ">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="{{route('success')}}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{route('successP2')}}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{route('successP3')}}">3</a></li>
    <li class="page-item">
      <a class="page-link" href="{{route('success')}}">Next</a>
    </li>
  </ul>
</nav>
  <!--pagination ends-->

@endsection
