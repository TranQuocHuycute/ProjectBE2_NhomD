<div class="style-6">
    <!-- module 6 -->
    <div class="football">
        <!-- List football -->
        <ul class="list-group list_football">
            @foreach($games as $game)
            <li class="list-group-item">
                <div class="foot">
                    <!-- foot header -->
                    <div class="row foot_header">
                        <div class="col-md-2 img_flag">
                            <img src="images/avata.jpg" alt="" class="img-fluid img_football">
                        </div>
                        <div class="col-md-6 name_football">

                            <div><b><a href="#" class="country_name">{{$game->country}}</a></b></div>
                            <div><b><a href="#" class="team_name">{{$game->name}}</a></b></div>
                        </div>
                        <div class="col-md-4 sofaScore_ratings"><b>SofaScore ratings</b></div>
                    </div>

                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>{{$game->HomeTeam}}</div>
                                <div>{{$game->AwayTeam}}</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>{{$game->HomeScore}}</div>
                                    <div>{{$game->AwayScore}}</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            @endforeach
           
        </ul>
    </div>
    <!-- module 6 -->
</div>