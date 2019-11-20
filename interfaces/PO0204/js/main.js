const video = document.querySelector('#video');
const btnPlay = document.querySelector('#btnPlay');
const btnPause = document.querySelector('#btnPause');
const btnStop = document.querySelector('#btnStop');
const btnMute = document.querySelector('#btnMute');
const rngVol = document.querySelector('#rngVol');
const prgTimer = document.querySelector('#prgTimer');

function play() {
  video.play();
}

function pause() {
  video.pause();
}

function stop() {
  video.pause();
  video.currentTime = 0;
}

function mute() {
  video.muted = !video.muted;
  btnMute.innerText = video.muted ? 'Unmute' : 'Mute';
}

function changeVol() {
  video.volume = rngVol.value / 100;
}

function timer() {
  prgTimer.value = video.currentTime * 100 / video.duration;
}
