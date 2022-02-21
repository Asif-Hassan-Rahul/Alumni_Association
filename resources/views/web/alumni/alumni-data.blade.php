@foreach($alumni_data as $alumni)

    <div class="col-lg-4 col-md-6">
        <a href="{{route('front_alumni', ['alumni_id' => $alumni->id])}}">
            <div class="single-team-member">
                {{--                        <img  src="{{asset('assets/img/team/team-1.jpg')}}" alt="Image">--}}
                <img height="450" width="416" src="{{ $alumni->user->photo_url != null ? url('storage'.$alumni->user->photo_url):'/assets/img/null/avatar.jpg'}}" alt="Image">

                <div class="team-content">
                    <div class="team-social">
                        <a href="#" class="control">
                            <i class="ri-share-fill"></i>
                        </a>

                        <ul>
                            <li>
                                <a href="{{$alumni->facebook_id}}" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            {{--                                    <li>--}}
                            {{--                                        <a href="https://www.instagram.com/" target="_blank">--}}
                            {{--                                            <i class="ri-instagram-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            <li>
                                <a href="{{$alumni->linkedin_id}}" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            {{--                                    <li>--}}
                            {{--                                        <a href="https://twitter.com/" target="_blank">--}}
                            {{--                                            <i class="ri-twitter-fill"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                        </ul>
                    </div>

                    <div class="team-name">
                        <h3>{{$alumni->name}}</h3>
                        <span>{{$alumni->designation}}</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

@endforeach
