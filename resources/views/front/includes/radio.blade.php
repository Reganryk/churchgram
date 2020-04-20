<div class="mhn-player" style="border-radius: 8px;">
<div class="album-art"></div>
<div class="play-list">


    <a href="#" class="play"
        data-id="1"
        data-album=""
        data-artist="Wiz Khalifa feat. Charlie Puth"
        data-title="See You Again"
        data-albumart="http://static.djbooth.net/pics-tracks/wiz-khalifa-see-you-again.jpg"
        data-url="http://trendingmp3.com/music/user_folder/Wiz%20Khalifa%20See%20You%20Again%20Feat%20Charlie%20Puth%20-%201426839506.mp3"></a>

    <a href="#" class="play"
        data-id="2"
        data-album="Fifty Shades of Grey"
        data-artist="Ellie Goulding"
        data-title="Love Me Like You Do"
        data-albumart="http://cdnrf.securenetsystems.net/file_radio/album_art/B/1/5/51B2BHP42pDL.jpg"
        data-url="http://freemp3.se/music/user_folder/Love%20Me%20Like%20You%20Do%20By%20Ellie%20Goulding%20-%201424762922.mp3"></a>



</div>
<div class="audio"></div>
<div class="current-info">
    <div class="song-artist"></div>
    <div class="song-album"></div>
    <div class="song-title"></div>
</div>
<div class="controls">
      <span class=""><span class="play-current-time">00:00</span> / <span class="play-total-time">00:00</span></span>
<a href="#" class="toggle-play-list"><i class="fa fa-list-ul"></i></a>
<div class="progress"><div class="bar"></div></div>
<div class="action-button text-center">
    <a href="#" class="prev"><i class="fa fa-step-backward"></i></a>
    <a href="#" class="play-pause"><i class="fa fa-pp"></i></a>
    <a href="#" class="stop"><i class="fa fa-stop"></i></a>
    <a href="#" class="next"><i class="fa fa-step-forward"></i></a>
    <input type="range" class="volume" min="0" max="1" step="0.1" value="0.5" data-css="0.5">
</div>

</div>
</div>




<style type="text/css">
*,:after,:before{box-sizing:border-box}
.pull-left{float:left}
.pull-right{float:right}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

.track{
    width:2px;
    margin-right:5px;
    background:rgba(0,0,0,0);
    transition:background 250ms linear;
}
.track:hover,
.track.dragging{
    background:#d9d9d9;
    background:rgba(0,0,0,.15);
}
.handle{
    right:0;
    width:2px;
    background:#999;
    transition:width 250ms;
    background:rgba(255,255,255,.2);
}

.mhn-player{
    width:100%;
    height:420px;
    padding:15px;
    position:relative;



}
.mhn-player .album-art,
.mhn-player .album-thumb{
    background:url() no-repeat center / 50%;
}
.mhn-player .album-art{
     width:100%;
    height:240px;
    overflow:hidden;
    position:relative;
    border:1px solid #FFFFFF;
}
.mhn-player .album-art img{
    width:100%;
    display:block;
}
.mhn-player .album-art:before{
    top:30px;
    left:50%;
    width:200px;
    content:'music';
    font-size:72px;
    font-weight:600;
    position:absolute;
    margin-left:-100px;
    color:rgba(28, 175, 154,.9);
}
.mhn-player .album-art:after{
    top:0;
    left:0;
    content:'';
    width:inherit;
    height:inherit;
    position:absolute;
    background:linear-gradient(to bottom, rgba(27, 132, 231,.1),  rgba(27, 132, 231,7));
}
.mhn-player .album-art img{
    width:100%;
    position:relative;
}
.mhn-player .album-art.blur img{
    -webkit-filter:blur(3px);
    -moz-filter:blur(3px);
    filter:blur(3px);
}
.mhn-player a{
    color:inherit;
    text-decoration:none;
}
.mhn-player .play-list{
    top:15px;
    left:15px;
    right:15px;
    display:none;
    bottom:245px;
    overflow-y:auto;
    position:absolute;
    width:auto!important;
    background:rgba(28, 175, 154,.4);
    padding-right:1px!important;
}
.mhn-player .play-list a{
    color:#fff;
    display:block;
    overflow:hidden;
    padding:6px 10px;
    white-space:nowrap;
    text-overflow:ellipsis;
    transition:all .4s ease-in-out 0s;
}
.mhn-player .play-list a:hover{
    background:rgba(255,255,255,.2);
}
.mhn-player .play-list a.active{
    color:#2ecc71;
}
.mhn-player .play-list .album-thumb{
    width:35px;
    height:35px;
    overflow:hidden;
    margin-right:10px;
    border:1px solid #666;
}
.mhn-player .play-list .album-thumb img{
    width:100%;
    display:block;
}
.mhn-player .play-list .songs-info{
    max-width:240px;
    text-shadow:0 2px 2px #000;
}
.mhn-player .play-list .songs-info .song-title{
    font-size:16px;
}
.mhn-player .play-list .songs-info .songs-detail{
    font-size:13px;
    overflow:hidden;
    text-overflow:ellipsis;
}

.mhn-player .current-info{
    left:30px;
    right:30px;
    color:#fff;
    bottom:160px;
    margin-left:-15px;
    margin-right:-15px;
    position:absolute;
    text-shadow:0 2px 4px #000;
}
.mhn-player .current-info>div{
    margin-top:10px;
}
.mhn-player .current-info .song-title{
    font-size:24px;
    margin-top:10px;
    font-weight:400;
}
.mhn-player .current-info .fa{
    min-width:30px;
    font-size:18px;
    text-align:center;
    font-weight:normal;
}
.mhn-player .controls{
    margin-top:30px;
    position:relative;
}
.mhn-player .controls .toggle-play-list{
    right:5px;
    width:40px;
    color:#fff;
    height:40px;
    bottom:100px;
    border-radius:50%;
    line-height:40px;
    text-align:center;
    position:absolute;
    background-color:crimson;
}
.mhn-player .controls .fa-pp:before{
    content:'\f04b';
}
.mhn-player .controls .active .fa-pp:before{
    content:'\f04c';
}
.mhn-player .controls .progress{
    height:1px;
    margin:15px 0;
    position:relative;
    background:#262626;
}
.mhn-player .controls .duration{
    color:#ccc;
    font-size:14px;
}
.mhn-player .controls .progress .bar{
    width:0;
    display:block;
    height:inherit;
    background:#bc3958;
    box-shadow:0 0 5px 0 #bc3958;
}
.mhn-player .controls .action-button a{
    width:40px;
    height:40px;
    font-size:14px;
    margin-right:5px;
    border:2px solid;
    line-height:35px;
    border-radius:50%;
    text-align:center;
    display:inline-block;
}
.mhn-player .controls .action-button a:hover,
.mhn-player .controls .action-button a.active{
    color:#ccc;
}
.mhn-player .controls .action-button a .fa{
    font-size:inherit;
}


.volume{
    height:10px;
    width:100%;
    margin:0 10px;
    font-size:14px;
    cursor:pointer;
    display:inline-block;
    -webkit-appearance:none;
    background:transparent;
}
.volume::-webkit-slider-runnable-track{
    height:.5em;
    background:#d8d8d8;
    border-radius:.25em;
    -webkit-appearance:none;
}
.volume::-moz-range-track{
    border:none;
    height:.5em;
    background:#d8d8d8;
    border-radius:.25em;
}
.volume::-ms-track{
    border:none;
    height:.5em;
    color:transparent;
    background:#d8d8d8;
    border-radius:.25em;
}
.volume::-webkit-slider-thumb{
    -webkit-appearance:none;
    position:relative;
    margin:-.25em;
    border:none;
    /* Firefox, IE */
    width:1em;
    height:1em;
    border-radius:.5em;
}
.volume::-moz-range-thumb{
    border:none;
    /* Firefox, IE */
    width:1em;
    height:1em;
    cursor:ew-resize;
    border-radius:.5em;
}
.volume::-ms-thumb{
    border:none;
    /* Firefox, IE */
    width:1em;
    height:1em;
    border-radius:.5em;
}
.volume::-ms-fill-lower, .volume::-ms-fill-upper{
    border-radius:5em;
    background:transparent;
}
.volume::-ms-tooltip{
    display:none;
}
.volume::-ms-fill-lower{
    background:#f05e7b;
}
.volume::-webkit-slider-thumb{
    background:#dc143c;
}
.volume::-moz-range-thumb{
    background:#dc143c;
}
.volume::-ms-thumb{
    background:#dc143c;
}

.volume::-webkit-slider-runnable-track{
    background-size:50% 100%;
    background-repeat:no-repeat;
    background-image:linear-gradient(#f05e7b, #f05e7b);
}
.volume::-moz-range-track{
    background-size:50% 100%;
    background-repeat:no-repeat;
    background-image:linear-gradient(#f05e7b, #f05e7b);
}
.volume[data-css="0"]::-webkit-slider-runnable-track{background-size:0% 100%}
.volume[data-css="0"]::-moz-range-track{background-size:0% 100%}
.volume[data-css="0.1"]::-webkit-slider-runnable-track{background-size:10% 100%}
.volume[data-css="0.1"]::-moz-range-track{background-size:10% 100%}
.volume[data-css="0.2"]::-webkit-slider-runnable-track{background-size:20% 100%}
.volume[data-css="0.2"]::-moz-range-track{background-size:20% 100%}
.volume[data-css="0.3"]::-webkit-slider-runnable-track{background-size:30% 100%}
.volume[data-css="0.3"]::-moz-range-track{background-size:30% 100%}
.volume[data-css="0.4"]::-webkit-slider-runnable-track{background-size:40% 100%}
.volume[data-css="0.4"]::-moz-range-track{background-size:40% 100%}
.volume[data-css="0.5"]::-webkit-slider-runnable-track{background-size:50% 100%}
.volume[data-css="0.5"]::-moz-range-track{background-size:50% 100%}
.volume[data-css="0.6"]::-webkit-slider-runnable-track{background-size:60% 100%}
.volume[data-css="0.6"]::-moz-range-track{background-size:60% 100%}
.volume[data-css="0.7"]::-webkit-slider-runnable-track{background-size:70% 100%}
.volume[data-css="0.7"]::-moz-range-track{background-size:70% 100%}
.volume[data-css="0.8"]::-webkit-slider-runnable-track{background-size:80% 100%}
.volume[data-css="0.8"]::-moz-range-track{background-size:80% 100%}
.volume[data-css="0.9"]::-webkit-slider-runnable-track{background-size:90% 100%}
.volume[data-css="0.9"]::-moz-range-track{background-size:90% 100%}
.volume[data-css="1"]::-webkit-slider-runnable-track{background-size:100% 100%}
.volume[data-css="1"]::-moz-range-track{background-size:100% 100%}

</style>

<script type="text/javascript">



$(function(){
    Audio.init();
});

var intval;
var autoplay;
var Audio = {
    init:function(){
        this.info.init();
        this.player();
        this.scrollbar();
    },
    formatTime:function(secs){
        var hr,min,sec;
        hr  = Math.floor(secs / 3600);
        min = Math.floor((secs - (hr * 3600))/60);
        sec = Math.floor(secs - (hr * 3600) - (min * 60));

        min = min>9?min:'0'+min;
        sec = sec>9?sec:'0'+sec;
        return min+':'+sec;
    },
    info:{
        init:function(){
            $('.play-list .play').each(function(){
                var album,albumart,artist,title;
                album=$(this).data('album');
                albumart=$(this).data('albumart');
                artist=$(this).data('artist');
                title=$(this).data('title');

                album=album?'<span class="album">'+album+'</span>':'Unknown Album';
                albumart=albumart?'<img src="'+albumart+'">':'';
                artist=artist?'<span class="song-artist">'+artist+'</span>':'Unknown Artist';
                title=title?'<div class="song-title">'+title+'</div>':'Unknown Title';

                $(this).html('<div class="album-thumb pull-left">'+albumart+'</div><div class="songs-info pull-left">'+title+'<div class="songs-detail">'+artist+' - '+album+'</div></div></div>');
            });
        },
        load:function(id,album,artist,title,albumart,mp3){
            var currentTrack, totalTrack;
            totalTrack = $('.play-list>a').length;
            currentTrack = $('.play-list a').index($('.play-list .active'))+1;
            $('.play-position').text(currentTrack+' / '+totalTrack);
            albumart=albumart?'<img src="'+albumart+'">':'';
            album=album?album:'Unknown Album';
            title=title?title:'Unknown Title';
            artist=artist?artist:'Unknown Artist';
            $('.album-art').html(albumart);
            $('.current-info .song-album').html('<i class="fa fa-music"></i> '+album);
            $('.current-info .song-title').html('<i class="fa fa-headphones"></i> '+title);
            $('.current-info .song-artist').html('<i class="fa fa-user"></i> '+artist);
            if(mp3)
            $('.audio').html('<audio class="music" data-id="'+id+'" src="'+mp3+'"></audio>');
        }
    },
    player:function(){
        var id, album, artist, albumart, title, mp3;
        $('.play-list .play').each(function(){
            $(this).on('click',function(e){
                e.preventDefault();
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                clearInterval(intval);
                id = $(this).data('id');
                album = $(this).data('album');
                artist = $(this).data('artist');
                albumart = $(this).data('albumart');
                title = $(this).data('title');
                mp3 = $(this).data('url');
                Audio.info.load(id,album,artist,title,albumart,mp3);
                Audio.play($('.music'));
                $('.music').prop('volume',$('.volume').val());
                Audio.playlist.hide();
            });
        });
        $('.play-pause').on('click',function(e){
            e.preventDefault();
            if($('.audio').is(':empty')){
                $('.play-list a:first-child').click();
            }else{
                var music = $('.music')[0];
                if(music.paused){
                    setInterval(intval);
                    Audio.play($('.music'));
                    $(this).addClass('active');
                }else{
                    clearInterval(intval);
                    Audio.pause($('.music'));
                    $(this).removeClass('active');
                }
            }
        });

        $('.stop').on('click',function(e){
            e.preventDefault();
            clearInterval(intval);
            Audio.stop($('.music'));
            $('.music')[0].currentTime=0;
            $('.progress .bar').css('width',0);
        });
        $('.volume').on('change',function(){
            var vol, css;
            vol = $(this).val();
            $(this).attr('data-css',vol);
            $('.music').prop('volume',vol);
        });
        $('.prev').on('click',function(e){
            var index, firstIndex;
            e.preventDefault();
            index = $('.play-list a').length - $('.play-list a').index();
            firstIndex = $('.play-list a').length - $('.play-list a').index($('.play-list a.active'));
            if(index==firstIndex){
                $('.play-list a:last-child').click();
            }else{
                Audio.prev();
            }
        });
        $('.next').on('click',function(e){
            var index, lastIndex;
            e.preventDefault();
            index = $('.play-list a').length;
            lastIndex = $('.play-list a').index($('.play-list a.active'))+1;
            if(index==lastIndex){
                $('.play-list a:first-child').click();
            }else{
                Audio.next();
            }
        });
        $('.toggle-play-list').on('click',function(e){
            e.preventDefault();
            var toggle = $(this);
            if(toggle.hasClass('active')){
                Audio.playlist.hide();
            }else{
                Audio.playlist.show();
            }
        });
    },
    playlist:{
        show:function(){
            $('.play-list').fadeIn(500);
            $('.toggle-play-list').addClass('active');
            $('.album-art').addClass('blur');
        },
        hide:function(){
            $('.play-list').fadeOut(500);
            $('.toggle-play-list').removeClass('active');
            $('.album-art').removeClass('blur');
        }
    },
    play:function(e){
        var bar, current, total;
        e.trigger('play').bind('ended',function(){
            $('.next').click();
        });
        intval = setInterval(function(){
        current = e[0].currentTime;
        $('.play-current-time').text(Audio.formatTime(current));

        bar = (current/e[0].duration)*100;
        $('.progress .bar').css('width',bar+'%');

        },1000);

        var totalDur = setInterval(function(t){
            if($('.audio .music')[0].readyState>0){
                total = e[0].duration;
                $('.play-total-time').text(Audio.formatTime(total));
                clearInterval(totalDur);
            }
        }, 1000);
        $('.play-pause').addClass('active');
    },
    pause:function(e){
        e.trigger('pause');
        $('.play-pause').removeClass('active');
    },
    stop:function(e){
        e.trigger('pause').prop('currentTime',0);
        $('.play-pause').removeClass('active');
    },
    mute:function(e){
        prop('muted',!e.prop('muted'));
    },
    volumeUp:function(e){
        var volume = e.prop('volume')+0.2;
        if(volume >1){
            volume = 1;
        }
        e.prop('volume',volume);
    },
    volumeDown:function(e){
        var volume = e.prop('volume')-0.2;
        if(volume <0){
            volume = 0;
        }
        e.prop('volume',volume);
    },
    prev:function(){
        var curr = $('.music').data('id');
        var prev = $('a[data-id="'+curr+'"]').prev();
        if(curr && prev){
            prev.click();
        }
    },
    next:function(){
        var curr = $('.music').data('id');
        var next = $('a[data-id="'+curr+'"]').next();
        if(curr && next){
            next.click();
        }
    },
    scrollbar:function(){
        if(typeof $.fn.enscroll !== 'undefined'){
            $('.play-list').enscroll({
                showOnHover:true,
                verticalTrackClass:'track',
                verticalHandleClass:'handle'
            });
        }
    }
}

</script>
