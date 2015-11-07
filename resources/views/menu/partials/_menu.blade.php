<nav class="w4 " >
    <div class="bar">
        <div class="wrap">
            <div class="left">
                <ul class="">
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            Jobs
                        </a>
                        <ul class="">
                            <li class="ir ijobs">
                                <a href="#" rel="nofollow" >
                                    Jobs
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            Cars
                        </a>
                        <ul class="">
                            <li class="ir cars">
                                <a href="#" rel="nofollow" target="_blank">
                                    CarsIreland.ie
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Used Car Search
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Car Dealers
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            Deals
                        </a>
                        <ul class="">
                            <li class="ir grabone">
                                <a href="#" rel="nofollow" target="_blank">
                                    Grabone.ie
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Dublin
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Cork
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Galway
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Limerick
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" >
                                    Kerry
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" >
                                    South East
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" >
                                    GrabOne Escapes
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" >
                                    GrabOne Store
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            Dating
                        </a>
                        <ul class="">
                            <li class="ir dates">
                                <a href="#" rel="nofollow" target="_blank">
                                    TheMeetingPoint.ie
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Mature
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Gay
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            Death Notices
                        </a>
                        <ul class="">
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    iNotices.ie
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" target="_blank">
                                    Deaths
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" >
                            FIT magazine
                        </a>
                        <ul class="">
                            <li class="ir fitmag">
                                <a href="#" rel="nofollow" >
                                    Fit magazine
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" >
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow" >
                                    Magazine
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="right">
                <ul class="">
                    <li>
                        <a href="#" target="_blank">
                            Subscribe
                        </a>
                        <ul class="">
                            <li>
                                <a href="#" >
                                    Digital Edition
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    Home Delivery
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>