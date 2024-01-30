<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include 'includes/cdn_linker.php'?>
        <?php include 'include/dbh.inc.php'?>

        <title>PiguZMusic - Homepage</title>
    </head>
    <body>
        <div class="playlist_pg">
            <div id="main_wrapper">
                <!-- Sidebar Area -->
                <div class="sidebar_wrapper">
                    <div class="sidebar_menu">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-home" aria-hidden="true"></i> Home</li>
                            <li><i class="fa fa-th-large" aria-hidden="true"></i> Category</li>
                            <li><i class="fa fa-list" aria-hidden="true"></i> Playlist</li>
                        </ul>
                    </div>
                    <hr>
                    <!-- mock 1 -->
                    <div class="sidebar_pop">
                        <div class="pop_box">
                            <div class="pop_num">1.</div>
                            <div class="pop_img"><img class="img-fluid" src="https://dummyimage.com/500x500/" alt=""></div>
                            <div class="pop_state"><i class="fa fa-pause" aria-hidden="true"></i></div>
                        </div>
                    </div>

                    <!-- mock 2 -->
                    <div class="sidebar_pop">
                        <div class="pop_box">
                            <div class="pop_num">2.</div>
                            <div class="pop_img"><img class="img-fluid" src="https://dummyimage.com/500x500/" alt=""></div>
                            <div class="pop_state"></div>
                        </div>
                    </div>

                    <!-- mock 3 -->
                    <div class="sidebar_pop">
                        <div class="pop_box">
                            <div class="pop_num">3.</div>
                            <div class="pop_img"><img class="img-fluid" src="https://dummyimage.com/500x500/" alt=""></div>
                            <div class="pop_state"><div class="square"></div></div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="content_wrapper">
                    <!-- Top Bar -->
                    <div class="top_bar fixed-top">
                        <div class="search_wrapper">
                            <input type="text" size="50">
                            <i class="fa fa-search" aria-hidden="true" style="color:#fff"></i>
                        </div>
                        <div class="profile_wrapper">
                            <div class="profile_box">
                                <img class="img-fluid" src="https://dummyimage.com/300x300/" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Content Here -->
                    <div class="main_content" style="margin-top: 110px;margin-bottom: 100px;">
                        <div class ="align-item-right">
                            <div class ="album-boxes">
                                <h1>HOME</h1>
                                <br>
                                <h5><u>RECENTLY ADDED</u></h5>
                                <div class="grid-container">
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <h5><u>NEW ALBUM</u></h5>
                                <div class="grid-container">
                                    <div class="grid-item">
                                    <div class="size_of_img2">
                                        <img class="main_img2" src="https://dummyimage.com/950x950/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img2">
                                        <img class="main_img2" src="https://dummyimage.com/950x950/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img2">
                                        <img class="main_img2" src="https://dummyimage.com/950x950/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <h5><u>NEW SONGS</u></h5>
                                <div class="grid-container">
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img">
                                        <img class="main_img" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                        <div class = "align-info-to-center">
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <h5><u>YOUR FAVOURITE ARTIST</u></h5>
                                <div class="grid-container">
                                    <div class="grid-item">
                                    <div class="size_of_img3">
                                        <img class="main_img3" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img3">
                                        <img class="main_img3" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img3">
                                        <img class="main_img3" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                    </div>
                                    <div class="grid-item">
                                    <div class="size_of_img3">
                                        <img class="main_img3" src="https://dummyimage.com/900x900/" alt="">
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <br>
                        <br>

                        <p style="color:#fff;"></p>
                    </div>

                    <!-- Player Control -->
                    <div class="player_wrapper fixed-bottom">
                        <div class="player_bar">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-9 player_main">
                                        <div class="slider_bar"></div>
                                        <div class="player_lower">
                                            <div class="time_text"> 1:45 </div>
                                            <div class="player_control">
                                                <i class="fa fa-step-backward" aria-hidden="true"></i>
                                                <i class="fa fa-pause" aria-hidden="true"></i>
                                                <i class="fa fa-step-forward" aria-hidden="true"></i>
                                            </div>
                                            <div class="time_text"> 3:00 </div>
                                        </div>
                                    </div>
                                    <div class="col-3 player_sub">
                                        <div class="player_col">
                                            <div class="track_img">
                                                <img class="img-fluid" src="https://dummyimage.com/1200x900/" alt="">
                                            </div>
                                            <div class="track_info">
                                                <div class="track_name"><p>Poppin' Shukin'</p></div>
                                                <div class="tract_artist"><p>Artist: Sample</p></div>
                                                <div class="track_category"><p>Category: J-POP</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://unpkg.com/dragscroll/dist/dragscroll.min.js"></script>
                <script>
                    $(document).ready(function(){
                        var topBarHeight = $(".top_bar").outerHeight();
                        var playerBarHeight = $(".player_wrapper").outerHeight();
                        $(".main_content").css({
                            'margin-top' : topBarHeight,
                            'margin-bottom' : playerBarHeight
                        });
                    })
                    
                </script>
            </div>
        </div>
    </body>
</html>