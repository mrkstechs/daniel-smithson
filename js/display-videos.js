var vid0_player;
onYouTubeIframeAPIReady = () => {
  vid0_player = new YT.Player('vid-one-player', {
    videoId: vid0
  });
}