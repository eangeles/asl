$(document).ready(function(){
    var confirmpPassword = document.querySelector('#confirmPassword');
    var confirmEmail = document.querySelector('#confirmEmail');
    var password = document.querySelector('#password');
    var email = document.querySelector('#email');
    var username = document.querySelector('#username');


    $(document).on("click", '.editClick', function(){
        var songId = $(this).data('id');
        $('#songId').val(songId);

    });

    $(document).on("click", '.editVideo', function(){
        var vId = $(this).data('video-id');
        $('#vId').val(vId);
    });
    $(document).on("click", '.deleteSong', function(){
        var songId = $(this).data('song-id');
        $('#deleteSongId').val(songId);
    });
    $(document).on("click", '.deleteVideo', function(){
        var vId = $(this).data('video-id');
        $('#deleteVideoId').val(vId);
    });

    confirmpPassword.onkeyup =  function(){
        var pass = password.value == confirmPassword.value ? true : false;
        var error = confirmPassword.parentNode.querySelector(".error");
        if(!pass){
            //console.log('false');
            error.style.display = 'block';
        }else{
            error.style.display = 'none';
            //console.log('true');
        }

    };
    confirmEmail.onkeyup =  function(){
        var pass = email.value == confirmEmail.value ? true : false;
        var error = confirmEmail.parentNode.querySelector(".error");
        if(!pass){
            //console.log('false');
            error.style.display = 'block';
        }else{
            error.style.display = 'none';
            //console.log('true');
        }
    };

    username.onkeyup = function(){
        var error = username.parentNode.querySelector(".error");
        var taken = username.parentNode.querySelector(".taken");

        $.ajax({
            url: '/ajax/usernameCheck',
            type: "POST",
            data: "username=" + username.value,
            success: function(msg){
               // console.log(msg);

                if(msg == 'ok'){
                    taken.style.display ='none';

                }else{
                    taken.style.display ='block';
                }
            }

        });
        return false;
    };




});


