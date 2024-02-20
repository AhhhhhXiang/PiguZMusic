<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        require 'includes/cdn_linker.php';
        require 'include/dbh.inc.php';
    ?>
    <title>Piguz Music</title>
</head>
<body>
    <?php echo "Hello everyone!" ?>
    <?php echo "This is content." ?>
    <?php echo "I am Mingze" ?>
    <?php echo "I am Dylan" ?>
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
                        <div class="main_content">
                            <div class ="align-item-right">
                                <div class ="album-boxes">



                                <h1>HOME</h1>
                                <br>
                                <h5><u>RECENTLY ADDED</u></h5>
                                <div class = "slider-container">
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
                                    <button class="view-more-btn" onclick="showMore()">View More</button>
                                    <button class="prev-btn" onclick="changeSlide(-1)"><</button>
                                    <button class="next-btn" onclick="changeSlide(1)">></button>         
                                </div>                             
                                <br>
                                <br>
                                <br>


                                <!--SECTION-->
                                <h5><u>NEW ALBUM</u></h5>
                                <div class = "slider-container">
                                    <div class="grid-container" id="new-album-container">
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
                                    <button class="album-view-more-btn" onclick="showMoreAlbum()">View More</button>
                                    <button class="album-prev-btn" onclick="changeAlbumSlide(-1)"><</button>
                                    <button class="album-next-btn" onclick="changeAlbumSlide(1)">></button> 
                                </div>
                                <br>
                                <br>
                                <br>



                                <h5><u>NEW SONGS</u></h5>
                                <div class = "slider-container">
                                    <div class="grid-container" id="new-song-container">
                                        <div class="grid-item" >
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
                                    <button class="song-view-more-btn" onclick="showMoreSongs()">View More</button>
                                    <button class="song-next-btn" onclick="changeSongSlide(1)">></button>
                                    <button class="song-prev-btn" onclick="changeSongSlide(-1)"><</button>
                                </div>
                                <br>
                                <br>
                                <br>



                                <h5><u>YOUR FAVOURITE ARTIST</u></h5>
                                <div class = "slider-container">
                                    <div class="grid-container" id = "new-artist-container">
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
                                <button class="artist-view-more-btn" onclick="showMoreArtists()">View More</button>
                                <button class="artist-next-btn" onclick="changeArtistSlide(1)">></button>
                                <button class="artist-prev-btn" onclick="changeArtistSlide(-1)"><</button>
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


                    /*NAVIGATION SECTIONS */

                    let currentSlide = 0;
                    let currentAlbumSlide = 0;
                    let currentSongSlide = 0;
                    let currentArtistSlide = 0;

                    const addScrollNum = 3; // total number of albums
                    const albumScrollNum = 3; // total number of albums
                    const songsScrollNum = 5; // total number of songs
                    const artistScrollNum = 3; //total bumber of artist

                    // declare the number of songs and album
                    let totalItem; 
                    let totalAlbums;
                    let totalSongs;
                    let totalArtists;



                    /* Recently Added */
                    function changeSlide(direction) {
                        const slider = document.querySelector('.grid-container');
                        const sliderWidth = document.querySelector('.grid-item').offsetWidth;

                        currentSlide += direction;

                        if (currentSlide < 0) {
                            currentSlide = 0;
                        } else if (currentSlide >= addScrollNum) {
                            currentSlide = addScrollNum - 1;
                        }

                        const translateValue = -currentSlide * sliderWidth;
                        slider.style.transform = `translateX(${translateValue}px)`;
                        updateArrowVisibility();
                    }

                    function showMore() {
                        const viewMoreBtn = document.querySelector('.view-more-btn');
                        totalItem = document.querySelectorAll('.grid-item').length;

                        if (currentSlide * 4 + 8 < totalItem) {
                            currentSlide++;
                            changeSlide(1);
                        } else {
                            console.log("ShowMore Click Success");
                        }
                    }

                    function updateArrowVisibility() {
                        const prevBtn = document.querySelector('.prev-btn');
                        const nextBtn = document.querySelector('.next-btn');

                        prevBtn.style.display = currentSlide === 0 ? 'none' : 'block';
                        nextBtn.style.display = currentSlide === addScrollNum - 1 ? 'none' : 'block';
                    }



                    /*Album Section */
                    function changeAlbumSlide(direction) 
                    {
                        const albumSlider = document.getElementById('new-album-container');
                        const albumSliderWidth = albumSlider.offsetWidth;
                        const maxTranslation = albumSlider.scrollWidth - albumSliderWidth;

                        currentAlbumSlide += direction;

                        if (currentAlbumSlide < 0) {
                            currentAlbumSlide = 0;
                        } else if (currentAlbumSlide >= albumScrollNum) {
                            currentAlbumSlide = albumScrollNum - 1;
                        }

                        const translateValue = -currentAlbumSlide * (albumSliderWidth / albumScrollNum); // Adjusted calculation
                        albumSlider.style.transform = `translateX(${translateValue}px)`;

                        updateAlbumArrowVisibility();
                    }

                    function showMoreAlbum() {
                    totalAlbums = document.querySelectorAll('#new-album-container .grid-item').length;

                    if (currentAlbumSlide + 4 < totalAlbums) {
                        currentAlbumSlide++;
                        changeAlbumSlide(1);
                    } else {
                        console.log("Album section click success");
                    }
                    }

                    function updateAlbumArrowVisibility() {
                    const albumPrevBtn = document.querySelector('.album-prev-btn');
                    const albumNextBtn = document.querySelector('.album-next-btn');

                    albumPrevBtn.style.display = currentAlbumSlide === 0 ? 'none' : 'block';
                    albumNextBtn.style.display = currentAlbumSlide === albumScrollNum - 1 ? 'none' : 'block';
                    }


                    /**Song Section */
                    function changeSongSlide(direction) 
                    {
                        const songsSlider = document.getElementById('new-song-container');
                        const songsSliderWidth = document.querySelector('#new-song-container .grid-item').offsetWidth;
                        totalSongs = document.querySelectorAll('#new-song-container .grid-item').length;

                        currentSongSlide += direction;

                        if (currentSongSlide < 0) {
                            currentSongSlide = 0;
                        } else if (currentSongSlide >= totalSongs) {
                            currentSongSlide = totalSongs - 1;
                        }

                        const songTranslateValue = -currentSongSlide * songsSliderWidth;
                        songsSlider.style.transform = `translateX(${songTranslateValue}px)`;
                        updateSongArrowVisibility();
                        }

                        function showMoreSongs() {
                            totalSongs = document.querySelectorAll('#new-song-container .grid-item').length;
                            if (currentSongSlide + 4 < totalSongs) 
                            {
                                currentSongSlide++;
                                changeSongSlide(1);
                            } else 
                            {
                                console.log("ShowMoreSongs Click Success");
                            }
                        }

                        function updateSongArrowVisibility() {
                        const songPrevBtn = document.querySelector('.song-prev-btn');
                        const songNextBtn = document.querySelector('.song-next-btn');

                        songPrevBtn.style.display = currentSongSlide === 0 ? 'none' : 'block';
                        songNextBtn.style.display = currentSongSlide === totalSongs - 4 ? 'none' : 'block';
                        }



                    /**Artist Section */
                    function changeArtistSlide(direction) 
                    {
                        const artistsSlider = document.getElementById('new-artist-container');
                        const artistsSliderWidth = document.querySelector('#new-artist-container .grid-item').offsetWidth;
                        totalArtists = document.querySelectorAll('#new-artist-container .grid-item').length;

                        currentArtistSlide += direction;

                        if (currentArtistSlide < 0) {
                            currentArtistSlide = 0;
                        } else if (currentArtistSlide >= totalArtists) {
                            currentArtistSlide = totalArtists - 1;
                        }

                        const artistTranslateValue = -currentArtistSlide * artistsSliderWidth;
                        artistsSlider.style.transform = `translateX(${artistTranslateValue}px)`;
                        updateartistArrowVisibility();
                        }
 
                        function showMoreArtists() {                       
                            totalArtists = document.querySelectorAll('#new-artist-container .grid-item').length;

                            if (currentArtistSlide + 4 < totalArtists) {
                                currentArtistSlide++;
                                changeArtistSlide(1);
                            } else {
                                console.log("ShowMoreartists Click Success");
                            }
                        }

                        function updateartistArrowVisibility() {
                        const artistPrevBtn = document.querySelector('.artist-prev-btn');
                        const artistNextBtn = document.querySelector('.artist-next-btn');

                        artistPrevBtn.style.display = currentArtistSlide === 0 ? 'none' : 'block';
                        artistNextBtn.style.display = currentArtistSlide === totalArtists - 4 ? 'none' : 'block';
                        }
                    


                    document.addEventListener("DOMContentLoaded", function() {
                        const prevBtn = document.querySelector('.prev-btn');
                        const albumPrevBtn = document.querySelector('.album-prev-btn');                                               
                        const songPrevBtn = document.querySelector('.song-prev-btn');
                        const artistPrevBtn = document.querySelector('.artist-prev-btn');

                        prevBtn.style.display = 'none';
                        albumPrevBtn.style.display = 'none';
                        songPrevBtn.style.display = 'none';
                        artistPrevBtn.style.display = 'none';
                    });
                </script>
            </div>
        </div>
</body>
</html>