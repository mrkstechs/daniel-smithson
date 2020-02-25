const playBtn = document.querySelector('#play');
const pauseBtn = document.querySelector('#pause');
const nextBtn = document.querySelector('#next');
const preBtn = document.querySelector('#prev');
const vidTitle = document.querySelector('#vid-title');
const vidIndex = document.querySelector('#vid-index');
var player;
onYouTubeIframeAPIReady = () => {
    player = new YT.Player('player', {
        playerVars:{
            autoplay: 0,
            controls: 1
        },
        events: {
            'onReady' : onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}
onPlayerReady = event => {
    event.target.cuePlaylist({
        listType: 'playlist',
        list: 'PLF2bXJor0khMn65A0nEZmO8u8KPkSrBpY'
    });
    playBtn.addEventListener('click', () => player.playVideo());
    pauseBtn.addEventListener('click', () => player.pauseVideo());
    preBtn.addEventListener('click', () => {
        vidTitle.innerText = player.getVideoData().title;
        player.previousVideo()
    });
    nextBtn.addEventListener('click', () => {
        let vidArray = event.target.getPlaylist();
        let currentVid = event.target.getPlaylistIndex();
        if(player.getPlaylistIndex() == vidArray.length - 1){
            //vidIndex.innerText = currentVid + 1 + '/' + vidArray.length;
            player.playVideoAt(0);
            vidTitle.innerText = player.getVideoData().title;
        } else {
            //vidIndex.innerText = currentVid + 1 + '/' + vidArray.length;
            player.nextVideo();
            vidTitle.innerText = player.getVideoData().title;
        }
    });
};
onPlayerStateChange = event => {
    let vidArray = event.target.getPlaylist();
    let currentVid = event.target.getPlaylistIndex();
    switch (event.data) {
        case YT.PlayerState.CUED:
            vidTitle.innerText = player.getVideoData().title;
            vidIndex.innerText = currentVid + 1 + '/' + vidArray.length;
            player.playVideo();
            break;
        case YT.PlayerState.PLAYING:
            playBtn.style.opacity = 0;
            playBtn.style.zIndex = 0;
            pauseBtn.style.opacity = 1;
            pauseBtn.style.zIndex = 1;
            vidTitle.innerText = player.getVideoData().title;
            vidIndex.innerText = currentVid + 1 + '/' + vidArray.length;
            break;
        case YT.PlayerState.PAUSED:
            playBtn.style.opacity = 1;
            playBtn.style.zIndex = 1;
            pauseBtn.style.opacity = 0;
            pauseBtn.style.zIndex = 0;
            break;
        default:
            break;
    }
}
