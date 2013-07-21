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
            <i class="icon-camera-retro"></i>
            <h3 class="uppercase">My Videos</h3>
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
            <a href="#" data-reveal-id="popup_upload_song"><i class="icon-upload"></i></a>
            <a id="upload_songs_a" class="uppercase" href="#" data-reveal-id="popup_upload_song"><h3>Upload Songs</h3></a>
            <p>Upload songs for you and the world to listen</p>
        </div>
        <div class="small-4 columns column_content">
            <i class="icon-upload-alt"></i>
            <h3 class="uppercase">Upload Videos</h3>
            <p>You can upload music videos, and see how much
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
        <form action="/user/uploads/" enctype="multipart/form-data" class="login" method="post">

            <?php echo $error;?>
            <h6>Upload:</h6>
            <input type="file" class="song" name="userfile">
            <h6>Artist:</h6>
            <input type="text" class="artist" name="song_artist" value="Artist Name">
            <h6>Song Title:</h6>
            <input type="text" class="song_title" name="song_title" value="Song Name">
            <h6>Album:</h6>
            <input type="text" class="album_title" name="song_album" value="Album Name">
            <h6>Year Release:</h6>
            <input type="number" class="song_release" name="song_relase" value="2013">
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
                    <th width="10%">Play</th>
                </tr>
                </thead>
                    <?php
                    foreach($songlist->result() as $row){
                        echo '<tbody>';
                        echo '<tr class="accordion">';
                        echo '<td>'.$row->name.'</td>';
                        echo '<td>Limit</td>';
                        echo '<td>No Limits</td>';
                        echo '<td>2013</td>';
                        echo '<td></td>';
                        echo '</tr>';
                        echo '<tr class=""><td><audio class="player" controls> <source src="/song_uploads/'.$row->name.'" type="audio/mp3"> </audio> </td></tr>';
                        echo '</tbody>';
                    }
                    ?>
            </table>
        </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>

<div id="popup_play" class="reveal-modal small">
    <div class="header_bar">
        <h3>Audio Player</h3>
    </div>
    <div id="login_container">
        <audio controls>
            <source src="../song_uploads/<?php echo $song[1]->name;?>" type="audio/mp3">
        </audio>
        <?php echo $song[2]->name; ?>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</div>
</div><!-- END WRAPPER -->