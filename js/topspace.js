function showViewMoreTracks(index, totalPages, input, domain)
{
    if(index != totalPages)
    {
        $('.track_area').append('<button id="ViewMore-' + index + '" onclick="nextTenTracks('+index+', '+ totalPages +', \'' + input +'\' '+', \'' + domain  +'\')">View More</button>');
    }
}

function nextTenTracks(index, totalPages, input, domain)
{
    $.ajax({
        url:"./APIs/Track/getAllTracks.php?modules[]=genre&modules[]=artist&page="+(index+1),
        method:"GET",
        data:{title:input,
              modules:['artist']},
        success:function(response)
        {
            // Example of retrieving first element data.
            var results = JSON.parse(response);
            if(results.statusCode === 200)
            {
                var trackResult = results["data"]["tracks"];
                trackResult.forEach(function(track, index, arr) {
                    showSearchTrack(track, domain, index, arr);
                });
            }
            else
            {  
                $('.search_track_wrapper').find('.row').append(results.message);
                console.log(results.statusCode);
                console.log(results.message);
            }
        }
    });

    $("#ViewMore-"+index).remove();
    if(totalPages == index - 1)
    {
        showViewMoreTracks(index+1, totalPages);
    }
}

function showSearchTrack(track, domain, index, arr)
        {
            var imgPath = domain + "\\" + arr[index].thumbnail_path;
            var trackPath = domain + "\\" + arr[index].music_path;
            var artist = "Artist";
            
            var htmlContent =   '<div class="col-lg-3">' +
                                    '<div class="search_track_box">' +
                                        '<div class="search_track_img" onclick="loadMusic(' + "'" + arr[index].id + "'" 
                                                                                            + "," + "'" + imgPath + "'"
                                                                                            + "," + "'" + artist + "'" 
                                                                                            + "," + "'" + trackPath + "'" 
                                                                                            + ')">' +
                                            '<img src="' + imgPath + '" alt="">' +
                                            '<i class="fa fa-play" aria-hidden="true"></i>' +
                                        '</div>' +
                                    '<div class="text_wrapper text-center mt-3">' +
                                        '<div class="text_info">' + arr[index].name + '</div>' +
                                        '<div class="text_info">Artist: ' + artist + '</div>' +
                                        '<div class="text_info">Category: ' + arr[index].genre[0].name + '</div>' +
                                    '</div>' +
                                '</div>';

            $('.search_track_wrapper').find('.row').append(htmlContent);
        }