@foreach($alumni_data as $alumni)

{{--        <div class="col-lg-4 col-md-6">--}}
{{--            <a href="{{route('front_alumni', ['alumni_id' => $alumni->id])}}">--}}
{{--                <div class="single-team-member">--}}
{{--                                            <img  src="{{asset('assets/img/team/team-1.jpg')}}" alt="Image">--}}
{{--                    <img height="450" width="416"--}}
{{--                         src="{{ $alumni->user->photo_url != null ? url('storage'.$alumni->user->photo_url):'/assets/img/null/avatar.jpg'}}"--}}
{{--                         alt="Image">--}}

{{--                    <div class="team-content">--}}
{{--                        <div class="team-social">--}}
{{--                            <a href="#" class="control">--}}
{{--                                <i class="ri-share-fill"></i>--}}
{{--                            </a>--}}

{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="{{$alumni->facebook_id}}" target="_blank">--}}
{{--                                        <i class="ri-facebook-fill"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                                                    <li>--}}
{{--                                                                        <a href="https://www.instagram.com/" target="_blank">--}}
{{--                                                                            <i class="ri-instagram-line"></i>--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{$alumni->linkedin_id}}" target="_blank">--}}
{{--                                        <i class="ri-linkedin-fill"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                                                    <li>--}}
{{--                                                                        <a href="https://twitter.com/" target="_blank">--}}
{{--                                                                            <i class="ri-twitter-fill"></i>--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="team-name">--}}
{{--                            <h3>{{$alumni->name}}</h3>--}}
{{--                            <span>{{$alumni->designation}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
    <div class="col-md-4">
        <a href="{{route('front_alumni', ['alumni_id' => $alumni->id])}}">
            <div class="card" style="width: 18rem">
                <img
                    src="{{ $alumni->user->photo_url != null ? url('storage'.$alumni->user->photo_url):'/assets/img/null/avatar.jpg'}}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$alumni->name}}</h5>
                    <p>{{$alumni->department}} {{substr($alumni->batch, -2)}}'</p>
                    <h5 class="card-title"></h5>
                    {{--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
                    {{--                    card's content.</p>--}}
                    {{--                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                </div>
            </div>
        </a>
    </div>

@endforeach
