
<div class="row">
    <div class="small_bar_left"></div>
    <div class="header_bar2"></div>

</div>

<div id="middle_two">
    <div class="row">
        <div class="small-4 columns column_content">
            <a href="#" data-reveal-id="popup_song_list"><i class="icon-headphones"></i></a>
            <a id="upload_songs_a" class="uppercase" href="#" data-reveal-id="popup_song_list"><h3>My Songs</h3></a>
            <p></p>
        </div>
        <div class="small-4 columns column_content">
            <a href="/" data-reveal-id="popup_video_list"><i class="icon-camera-retro"></i></a>
            <a href="/" data-reveal-id="popup_video_list"><h3 class="uppercase">My Videos</h3></a>
            <p></p>
        </div>
        <div class="small-4 columns column_content">
            <i class="icon-play-circle"></i>
            <h3 class="uppercase">My Playlist</h3>
            <p></p>
        </div>
    </div>
</div>
<div id="middle_three">
    <div class="row">
        <div class="small-4 columns column_content">
            <a href="" data-reveal-id="popup_upload_song"><i class="icon-upload"></i></a>
            <a id="upload_songs_a" class="uppercase" href="#" data-reveal-id="popup_upload_song"><h3>Upload Songs</h3></a>
            <p>Upload mp3 files for you and the world to listen to.</p>
        </div>
        <div class="small-4 columns column_content">
            <a href="#" data-reveal-id="popup_upload_video"><i class="icon-upload-alt"></i></a>
            <a href="#" data-reveal-id="popup_upload_video"><h3 class="uppercase">Upload Videos</h3></a>
            <p>You can upload .mov and .mp4 videos, and see how much
                the world likes it!</p>
        </div>
        <div class="small-4 columns column_content">
            <i class="icon-user"></i>
            <h3 class="uppercase">Personalise Profile</h3>
            <p>Make your music profile page unique with the ability to upload
                your photos.</p>
        </div>
    </div>
</div>

<!-- MODAL JQUERY -->
<!-- Song Upload -->
<div id="popup_upload_song" class="reveal-modal small">
    <div class="header_bar">
        <h3>Upload</h3>
    </div>
    <div id="login_container">
        <form data-abide action="/user/uploads/" enctype="multipart/form-data" class="login" method="post">

            <?php echo $error;?>
            <h6>Upload:</h6>
            <input type="file" class="song" name="userfile">
            <input type="hidden" name="id" value="<?php echo $userId?>">
            <div id="artistField">
                <h6>Artist:</h6>
                <input type="text" required pattern="alpha" class="artist" name="song_artist" placeholder="Artist Name">
                <small class="error">Artist name is required and must be a string.</small>
            </div>
            <div id="songTitleField">
                <h6>Song Title:</h6>
                <input type="text" required pattern="alpha" class="song_title" name="song_title" placeholder="Song Name">
                <small class="error">Title is required and must be a string.</small>
            </div>
            <div id="albumField">
                <h6>Album:</h6>
                <input type="text" required pattern="alpha" class="album_title" name="song_album" placeholder="Album Name">
                <small class="error">Album name is required and must be a string.</small>
            </div>
            <div id="yearField">
                <h6>Date Release:</h6>
                <input type="date" required pattern="date" class="song_release" name="song_release">
                <small class="error">Please select a date.</small>
            </div>
            <br />
            <input type="submit" value="Upload">
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Edit Song -->
<div id="popup_edit_song" class="reveal-modal small">
    <div class="header_bar">
        <h3>Edit Song Info</h3>
    </div>
    <div id="login_container">
        <form data-abide id="test" action="/user/update/" enctype="multipart/form-data" class="login" method="post">
            <input type="hidden" id="songId" name="songId" value="">
            <div id="eArtistField">
                <h6>Artist:</h6>
                <input type="text" required pattern="alpha" class="artist" id="song_art" name="edit_song_artist" value="" placeholder="Artist Name">
                <small class="error">Artist name is required and must be a string.</small>
            </div>
            <div id="eTitleField">
                <h6>Song Title:</h6>
                <input type="text" required pattern="alpha" class="song_title" name="edit_song_title" placeholder="Song Name">
                <small class="error">Title is required and must be a string.</small>
            </div>
            <div id="eAlbumField">
                <h6>Album:</h6>
                <input type="text" required pattern="alpha" class="album_title" name="edit_song_album" placeholder="Album Name">
                <small class="error">Album name is required and must be a string.</small>
            </div>
            <div id="eYearField">
                <h6>Date Release:</h6>
                <input type="date" required pattern="date" class="song_release" name="edit_song_release">
                <small class="error">Please select a date.</small>
            </div>

            <br />
            <input type="submit" value="Edit">
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Edit Video -->
<div id="popup_edit_video" class="reveal-modal small">
    <div class="header_bar">
        <h3>Edit Video Info</h3>
    </div>
    <div id="login_container">
        <form data-abide id="test" action="/user/updateVideo/" enctype="multipart/form-data" class="login" method="post">
            <input type="hidden" id="vId" name="vId" value="">
            <div id="edit_vTitleField">
                <h6>Video Title:</h6>
                <input type="text" required pattern="alpha" class="video_title" name="edit_video_title" placeholder="Video Title">
                <small class="error">Title is required and must be a string.</small>
            </div>
            <div id="edit_vArtistField">
                <h6>Artist:</h6>
                <input type="text" required pattern="alpha" class="artist" id="edit_video" name="edit_video_artist" placeholder="Artist Name">
                <small class="error">Artist name is required and must be a string.</small>
            </div>

            <br />
            <input type="submit" value="Edit">
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Video Upload -->
<div id="popup_upload_video" class="reveal-modal small">
    <div class="header_bar">
        <h3>Upload</h3>
    </div>
    <div id="login_container">
        <form data-abide action="/user/upload/" enctype="multipart/form-data" class="login" method="post">

            <?php echo $error;?>
            <h6>Upload:</h6>
            <input type="file" class="song" name="userfile">
            <input type="hidden" name="videoId" value="<?php echo $userId?>">
            <div id="vTitleField">
                <h6>Title:</h6>
                <input type="text" required pattern="alpha" class="vTitle" name="vTitle" placeholder="Video Title">
                <small class="error">Title is required and must be a string.</small>
            </div>
            <div id="vArtistField">
                <h6>Artist Name:</h6>
                <input type="text"  required pattern="alpha" class="artistName" name="vArtist" placeholder="Artist Name">
                <small class="error">Artist name is required and must be a string.</small>
            </div>

            <br />
            <input type="submit" value="Upload">
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Song list -->
<div id="popup_song_list" class="reveal-modal medium">
    <div class="header_bar">
        <h3>Song List</h3>
    </div>
    <div id="song_list">
        <form action="/" class="songList" enctype="multipart/form-data" method="post">
            <table id="view_my_songs" class="list">
                <thead>
                <tr>
                    <th width="25%">Name</th>
                    <th width="25%">Artist</th>
                    <th width="25%">Album</th>
                    <th width="10%">Year Released</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                    <?php
                    foreach($songlist as $row){
                        if($row['userId'] == $userId){
                            echo '<tbody class="">';
                            echo '<tr class="accordion">';
                            echo '<td>'.$row['title'].'</td>';
                            echo '<td>'.$row['artist'].'</td>';
                            echo '<td>'.$row['albumName'].'</td>';
                            echo '<td>'.$row['year'].'</td>';
                            echo '<td><a class="editClick" data-reveal-id="popup_edit_song" href="#" data-id="'.$row['songId'] .'">EDIT</a> | <a href="/" class="deleteSong" data-reveal-id="popup_song_confirmation" data-song-id="'.$row['songId'] .'">DELETE </a></td>';
                            echo '</tr>';
                            echo '<tr class=""><td><audio class="player" controls> <source src="/song_uploads/'.$row['file'].'" type="audio/mp3"> </audio> </td></tr>';
                            echo '</tbody>';
                        }
                    }
                    ?>
            </table>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Video list -->
<div id="popup_video_list" class="reveal-modal medium">
    <div class="header_bar">
        <h3>Video List</h3>
    </div>
    <div id="song_list">
        <form action="/" class="songList" enctype="multipart/form-data" method="post">
            <table id="view_my_songs" class="list">
                <thead>
                    <tr id="tr">
                         <th width="50%">Title</th>
                         <th width="40%">Artist</th>
                         <th width="10%">Action</th>
                     </tr>
                </thead>
                <?php
                foreach($videoList as $row){
                    if($row['userId'] == $userId){
                        echo '<tbody>';
                        echo '<tr class="accordion">';
                        echo '<td>'.$row['title'].'</td>';
                        echo '<td>'.$row['artist'].'</td>';
                        echo '<td><a class="editVideo" data-reveal-id="popup_edit_video" href="#" data-video-id="'.$row['videoId'] .'">EDIT</a> | <a href="/" class="deleteVideo" data-reveal-id="popup_video_confirmation" data-video-id="'.$row['videoId'] .'">DELETE </a></td>';
                        echo '</tr>';
                        echo '<tr class=""><td>
                        <video id="example_video_1" class="video-js vjs-default-skin"
                           controls preload="auto" width="640" height="264"
                           poster="http://video-js.zencoder.com/oceans-clip.png"
                           data-setup="{"example_option":true}">

                           <source src="/video_uploads/'.$row['file'].'" type="video/webm" />
                           <source src="/video_uploads/'.$row['file'].'" type="video/mp4" />
                           <source src="/video_uploads/'.$row['file'].'" type="video/ogg" />
                        </video>
                        </td></tr>';
                        echo '</tbody>';
                    }
                }
                ?>
            </table>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Delete Song Confirmation -->
<div id="popup_song_confirmation" class="reveal-modal small">
    <div class="header_bar">
        <h3>Confirmation</h3>
    </div>
    <div id="login_container">
        <form action="/user/deleteSong/" enctype="multipart/form-data" class="confirmation" method="post">
            <p>Are you sure you want to delete?</p>
            <div id="confirm_buttons">
                <br /> <input type="submit" value="Yes">
                or
                <a href="#" data-reveal-id="popup_song_list" ><input id="no" type="submit" value="No"></a>
            </div>

            <input type="hidden" id="deleteSongId" name="deleteSongId" value="">
        </form>

        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Delete Video Confirmation -->
<div id="popup_video_confirmation" class="reveal-modal small">
    <div class="header_bar">
        <h3>Confirmation</h3>
    </div>
    <div id="login_container">
        <form action="/user/deleteVideo/" enctype="multipart/form-data" class="confirmation" method="post">
            <p>Are you sure you want to delete?</p>
            <div id="confirm_buttons">
                <br /> <input type="submit" value="Yes">
                or
                <a href="#" data-reveal-id="popup_video_list" ><input id="no" type="submit" value="No"></a>
            </div>

            <input type="hidden" id="deleteVideoId" name="deleteVidId" value="">
        </form>

        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>

<!-- Song list -->
<div id="popup_browse_song_list" class="reveal-modal medium">
    <div class="header_bar">
        <h3>Song List</h3>
    </div>
    <div id="song_list">
        <form action="/" class="songList" enctype="multipart/form-data" method="post">
            <table id="view_my_songs" class="list">
                <thead>
                <tr id="tr">
                    <th width="25%">Name</th>
                    <th width="25%">Artist</th>
                    <th width="25%">Album</th>
                    <th width="10%">Year Released</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                <?php
                foreach($songlist as $row){

                    echo '<tbody class="">';
                    echo '<tr class="accordion">';
                    echo '<td>'.$row['title'].'</td>';
                    echo '<td>'.$row['artist'].'</td>';
                    echo '<td>'.$row['albumName'].'</td>';
                    echo '<td>'.$row['year'].'</td>';
                    echo '<td></td>';
                    echo '</tr>';
                    echo '<tr class=""><td><audio class="player" controls> <source src="/song_uploads/'.$row['file'].'" type="audio/mp3"> </audio> </td></tr>';
                    echo '</tbody>';

                }
                ?>
            </table>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
<!-- Browse Video list -->
<div id="popup_browse_video_list" class="reveal-modal medium">
    <div class="header_bar">
        <h3>Video List</h3>
    </div>
    <div id="song_list">
        <form action="/" class="songList" enctype="multipart/form-data" method="post">
            <table id="view_my_songs" class="list">
                <thead>
                <tr id="tr">
                    <th width="50%">Title</th>
                    <th width="40%">Artist</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                <?php
                foreach($videoList as $row){

                        echo '<tbody>';
                        echo '<tr class="accordion">';
                        echo '<td>'.$row['title'].'</td>';
                        echo '<td>'.$row['artist'].'</td>';
                        echo '<td></td>';
                        echo '</tr>';
                        echo '<tr class=""><td>
                        <video id="example_video_1" class="video-js vjs-default-skin"
                           controls preload="auto" width="640" height="264"
                           poster="http://video-js.zencoder.com/oceans-clip.png"
                           data-setup="{"example_option":true}">

                           <source src="/video_uploads/'.$row['file'].'" type="video/webm" />
                           <source src="/video_uploads/'.$row['file'].'" type="video/mp4" />
                           <source src="/video_uploads/'.$row['file'].'" type="video/ogg" />
                        </video>
                        </td></tr>';
                        echo '</tbody>';

                }
                ?>
            </table>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
</div><!-- END WRAPPER -->

<!-- accordion -->
<script>
    $(function() {
        var $list = $('.list');
        $list.find("tr").not('.accordion').hide();
        $list.find("tr").eq(0).show();
        $list.find(".accordion").click(function(){
            $(this).fadeTo("fast", 1) ;
            $list.find('.accordion').not(this).siblings().fadeOut(500);
            $(this).siblings().fadeToggle(500);
            $(this).addClass('active');
            $list.find('.accordion').not(this).removeClass('active');
            $list.find('.accordion').not(this).css("opacity", 0.33);
            $list.find('.accordion').not(this).hover(function(){
                    $(this).fadeTo("fast", 1);},
                function(){$(this).fadeTo("fast", 0.33);
                });
        });
    });
</script>
