<?php $id=1 ?>
<div >
        <div class="top-player">
            <h2>TOP PLAYERS</h2>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#rating" role="tab"
                        aria-controls="home" aria-selected="true">Rating</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#goals" role="tab"
                        aria-controls="profile" aria-selected="false">Goals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#assists" role="tab"
                        aria-controls="contact" aria-selected="false">Assists</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active table-responsive" id="rating" role="tabpanel"
                    aria-labelledby="home-tab">
                    <table class="table">
                        <tr>
                            <td class="text-center">#</td>
                            <td></td>
                            <td></td>
                            <td class="text-center">Rating</td>
                        </tr>
                        @foreach ($player as $player)
                        <tr>
                       
                            <td class="text-center align-middle">{{$id++}}</td>
                            <td><img src="https://api.sofascore.app/api/v1/player/3306/image" class="img-player" width="42" height="42" alt=""
                                    width="21" height="21"></td>
                            <td class="align-middle">
                                <h4 class="title-player">{{ $player->name }}</h4>
                                <p class="d-flex"><img src="{{ $player->flags }}" alt="" width="18" height="18"> <span
                                        class="pt-1 pl-1">{{ $player->country }}</span></p>
                            </td>
                            <td class="text-center align-middle"><span class="rating">7.7</span></td>
                         
                        </tr>
                        @endforeach
                    </table>

                    <button class="show-more" type="button">Show more</button>

                </div>
                <!-- GOALS -->
                
            </div>
        </div>
    </div>
