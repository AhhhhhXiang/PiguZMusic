<?php

require_once 'includes/config.php';
if(!isset($_SESSION["user_id"]))
{
    header('Location: login_register.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">
        <?php require 'includes/cdn_linker.php'?>

        <title>PiguZMusic - Homepage</title>
    </head>
    <body>
        <div class="home_pg">
            <div id="main_wrapper">
                <!-- Sidebar Area -->
                <?php require 'fixed_layout/sidemenu.php'?>

                <!-- Main Content Area -->
                <div class="content_wrapper">
                    <!-- Top Bar -->
                    <?php require 'fixed_layout/topspace.php'?>

                    <!-- Content Here -->
                    <div class="main_content" id="core">
                        <div id="main_index">
                            <div class="page_header pb_sec">
                                <h1>HOME</h1>
                            </div>
                            <div class="index_wrapper_1 pb_sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="title_bar">
                                                <h1 class="big_title">New Track</h1>
                                                <button class="sub-btn">Read More</button>
                                            </div>
                                            
                                            <div class="recently_slide"></div>
                                            <div class="recently_modals"></div>
                                            <script>
                                                getDatas();
                                                function getDatas() {
                                                    let playlistxhr = new XMLHttpRequest();
                                                    playlistxhr.open("GET", "<?php echo $domain; ?>APIs/UserPlaylist/getUserPlaylist.php?userId=<?php echo $_SESSION["user_id"] ?>");
                                                    playlistxhr.setRequestHeader("Accept", "/");
                                                    var playlistData = "";
                                                    playlistxhr.onreadystatechange = function () {
                                                        if (playlistxhr.readyState === 4 && this.status == 200) {
                                                            playlistData = playlistxhr.responseText;
                                                            var playlistLists = JSON.parse(playlistData);
                                                            var playlistResult = playlistLists["data"]["userplaylists"]; // Fixed typo here, should be playlistLists instead of lists

                                                            let xhr = new XMLHttpRequest();
                                                            xhr.open("GET", "<?php echo $domain; ?>APIs/Track/getAllTracks.php?modules[]=genre&modules[]=artist");
                                                            xhr.setRequestHeader("Accept", "/");
                                                            var data = "";
                                                            xhr.onreadystatechange = function () {
                                                                if (xhr.readyState === 4 && this.status == 200) {
                                                                    data = xhr.responseText;
                                                                    var lists = JSON.parse(data);
                                                                    console.log(lists);

                                                                    lists["data"]["tracks"].forEach(function(track, index, arr) {
                                                                        showTracks(track, playlistResult, index, arr);
                                                                    });
                                                                    slickTrack();
                                                                }
                                                            };
                                                            xhr.send();
                                                        }
                                                    };
                                                    playlistxhr.send();
                                                }
                                                
                                                function showTracks(track, playlists, index, arr)
                                                {
                                                    var imgPath = "<?php echo $domain . $getImagePath?>" + "\\" + arr[index].thumbnail_path;
                                                    var trackPath = "<?php echo $domain . $getTrackPath?>" + "\\" + arr[index].music_path;

                                                    $(document).ready(function(){
                                                        console.log(arr[index]);
                                                        loadMusic(index, imgPath, trackPath, arr[index].id, arr[index].name, arr[index].artists[0].name);
                                                    })  
                                                    
                                                    var htmlContent = '<div class="s_box">' +
                                                                        '<div class="s_img_wrapper" onclick="runMusic(' + index  
                                                                                + ')">' +
                                                                            '<img src="' + imgPath + '" alt="">' +
                                                                            '<div class="floatBtn add_dropdown">' +
                                                                                '<i class="fa fa-play" id="play" aria-hidden="true"></i>' +
                                                                                //'<button type="button" data-bs-toggle="modal" data-bs-target="#addtracktoplaylist" data-trackid="'+ track.id +'" id="addToPlaylist")"><i class="fa fa-plus" aria-hidden="true"></i></button>' +
                                                                            '</div>' +
                                                                        '</div>' +
                                                                        '<div class="text_wrapper text-center mt-3">' +
                                                                            '<div class="text_info">' + arr[index].name + '</div>' +
                                                                            '<div class="text_info">Category: ' + arr[index].genre[0].name + '</div>' +
                                                                            '<div class="text-info"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-'+arr[index].id+'">+</button></div>'+
                                                                        '</div>' +
                                                                    '</div>';
                                                    
                                                    var trackModal = '<div class="modal fade" id="exampleModal-'+arr[index].id+'" tabindex="-1" aria-labelledby="exampleModalLabel-'+arr[index].id+'" aria-hidden="true">' +
                                                                        '<div class="modal-dialog">' +
                                                                            '<div class="modal-content">' +
                                                                            '<div class="modal-header">' +
                                                                                '<h1 class="modal-title fs-5" id="exampleModalLabel-'+arr[index].id+'">Save to playlist</h1>' +
                                                                                '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>' +
                                                                            '</div>' +
                                                                            '<div class="modal-body">' +
                                                                            '<p>All playlist</p>'+
                                                                            '<input type="hidden" value="'+arr[index].id+'">'+
                                                                            '<div>'+
                                                                            playlists.map(function(element) {
                                                                                return '<span class="btn btn-default btn-playlist" onclick="addTrackToPlaylist(\''+element.playlist.id+'\', \''+arr[index].id+'\')">' + element.playlist.name + '</span>';
                                                                            }).join('') +
                                                                            '</div>'+
                                                                            '<input type="hidden" id="playlistInput">'+
                                                                            '</div>' +
                                                                            '<div class="modal-footer">' +
                                                                            '</div>' +
                                                                            '</div>' +
                                                                        '</div>' +
                                                                    '</div>'

                                                    $('.recently_slide').append(htmlContent);
                                                    $('.recently_modals').append(trackModal);
                                                }

                                                function addTrackToPlaylist(playlistId, trackId)
                                                {
                                                    $('#playlistInput').val(playlistId);
                                                    var data = 
                                                    {
                                                        playlistId: playlistId,
                                                        trackId: trackId
                                                    }

                                                    var formData = new FormData();
                                                    for (var item in data) {
                                                        formData.append(item, data[item]);
                                                    }

                                                    $.ajax({
                                                        url:"./APIs/PlaylistTrack/createPlaylistTrack.php",
                                                        method:"POST",
                                                        data:formData,
                                                        contentType: false,
                                                        processData: false,
                                                        success:function(response)
                                                        {
                                                            location.href = "playlist.php";
                                                        }
                                                    });
                                                }

                                                function slickTrack(){
                                                    $('.recently_slide').slick({
                                                        infinite: false,
                                                        slidesToShow: 4,
                                                        slidesToScroll: 1,
                                                        edgeFriction: 0.5
                                                    });
                                                }
                                                
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="index_wrapper_2 pb_sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="title_bar">
                                                <div class="big_title">Recommended Playlist</div>
                                                <button class="sub-btn">View More</button>
                                            </div>
                                            
                                            <div class="playlist_slide"></div>
                                            <script>
                                                getPlaylist();
                                                
                                                function getPlaylist() {
                                                    console.log("getPlaylist");
                                                    datas = [];
                                                    let xhr = new XMLHttpRequest();
                                                    xhr.open("GET", "<?php echo $domain; ?>APIs/Playlist/getAllPlaylists.php");
                                                    xhr.setRequestHeader("Accept", "/");
                                                    var data = "";
                                                    xhr.onreadystatechange = function () {
                                                        if (xhr.readyState === 4 && this.status == 200) {
                                                            data = xhr.responseText;
                                                            var lists = JSON.parse(data);

                                                            lists["data"]["playlists"].forEach(showPlaylist);
                                                            slickPlaylist();
                                                        }
                                                    };
                                                    xhr.send();
                                                }

                                                function showPlaylist(playlist, index, arr)
                                                {
                                                    var imgPath = "<?php echo $domain . $getImagePath?>" + "\\" + arr[index].path;
                                                    
                                                    var htmlContent = '<div class="s_box playlistBox">' +
                                                                        '<div class="s_img_wrapper">' +
                                                                            '<img src="' + imgPath + '" alt="">' +
                                                                            '<i class="fa fa-play" aria-hidden="true"></i>' +
                                                                        '</div>' +
                                                                        '<div class="text_wrapper text-center mt-3">' +
                                                                            '<div class="text_info">' + arr[index].name + '</div>' +
                                                                            '<div class="text_info">' + arr[index].description + '</div>' +
                                                                        '</div>' +
                                                                    '</div>';

                                                    $('.playlist_slide').append(htmlContent);
                                                }

                                                function slickPlaylist(){
                                                    $('.playlist_slide').slick({
                                                        infinite: false,
                                                        slidesToShow: 3,
                                                        slidesToScroll: 1,
                                                        edgeFriction: 0.5
                                                    });
                                                }
                                                
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="index_wrapper_3 pb_sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="title_bar">
                                                <h1 class="big_title">Top Artist</h1>
                                                <button class="sub-btn">View More</button>
                                            </div>
                                            <div class="artist_slide"></div>
                                            <script>
                                                getArtist();
                                                
                                                function getArtist() {
                                                    console.log("getArtist");
                                                    datas = [];
                                                    let xhr = new XMLHttpRequest();
                                                    xhr.open("GET", "<?php echo $domain; ?>/APIs/Artist/getAllArtists.php");
                                                    xhr.setRequestHeader("Accept", "/");
                                                    var data = "";
                                                    xhr.onreadystatechange = function () {
                                                        if (xhr.readyState === 4 && this.status == 200) {
                                                            data = xhr.responseText;
                                                            var lists = JSON.parse(data);

                                                            lists["data"]["artists"].forEach(showArtist);
                                                            slickArtist();
                                                        }
                                                    };
                                                    xhr.send();
                                                }

                                                function showArtist(artist, index, arr)
                                                {
                                                    var imgPath = "<?php echo $domain . $getImagePath?>" + "\\" + arr[index].path;
                                                    
                                                    var htmlContent =   '<div class="s_box rounded">' +
                                                                            '<div class="s_img_wrapper">' +
                                                                                '<img src="' + imgPath + '" alt="">' +
                                                                            '</div>' +
                                                                        '</div>';

                                                    $('.artist_slide').append(htmlContent);
                                                }

                                                function slickArtist(){
                                                    $('.artist_slide').slick({
                                                        infinite: false,
                                                        slidesToShow: 4,
                                                        slidesToScroll: 1,
                                                        edgeFriction: 0.5
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                            
                            <div class="index_wrapper_4">
                                <h1 class="big_title mb-4">Genres</h1>
                                <div class="genre-slide"></div>
                            </div>
                            <script>
                                getGenre();
                                                
                                function getGenre() {
                                    console.log("getGenre");
                                    datas = [];
                                    let xhr = new XMLHttpRequest();
                                    xhr.open("GET", "<?php echo $domain; ?>APIs/Genre/getAllGenres.php");
                                    xhr.setRequestHeader("Accept", "/");
                                    var data = "";
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && this.status == 200) {
                                            data = xhr.responseText;
                                            var lists = JSON.parse(data);

                                            lists["data"]["genres"].forEach(showGenre);
                                        }
                                    };
                                    xhr.send();
                                }

                                function showGenre(genre, index, arr)
                                {
                                    $('.genre-slide').append('<button class="genre_btn">'+ genre.name +'</button>');
                                }
                            </script>
                        </div>
                    </div>

                    <!-- Search Here -->
                    <div class="main_content d-none" id="search">
                        <div class="search_trigger d-flex align-items-start">
                            <h2 class="mb-5" id="search_result">Best Match</h2>
                            <div id="close_search" style="cursor: pointer"><i class="fa fa-times"></i></div>
                        </div>
                        <h3 class="mb-3">Artist</h3>
                        <div class="artist_area">
                            <div class="container-fluid">
                                <div class="row align-items-center"></div>
                            </div>
                        </div>
                        <h3 class="mb-3 mt-5">Track</h3>
                        <div class="track_area d-flex justify-content-center flex-column">
                            <div class="search_track_wrapper">
                                <div class="container-fluid">
                                    <div class="row"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Player Control -->
                <?php require 'fixed_layout/musicplayer.php'?>
                <script>
                    // Added space on top and bottom of content box
                    $(document).ready(function(){
                        var topBarHeight = $(".top_bar").outerHeight() + 50;
                        var playerBarHeight = $(".player_wrapper").outerHeight() + 50;
                        $(".main_content").css({
                            'padding-top' : topBarHeight,
                            'padding-bottom' : playerBarHeight
                        });

                        

                    });
                </script>
            </div>
        </div>
    </body>
</html>