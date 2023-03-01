// Get the canvas and video elements
var canvas = document.getElementById('canvas');
var video = document.getElementById('videoElement');

// Get the camera feed and display it in the video element
navigator.mediaDevices.getUserMedia({ video: true })
  .then(function (stream) {
    video.srcObject = stream;
    video.play();
  })
  .catch(function (err) {
    console.log(`An error occurred: ${err}`);
  });

// Capture an image from the video feed and display it on the canvas
function captureImage() {
  var context = canvas.getContext('2d');
  context.drawImage(video, 0, 0, canvas.width, canvas.height);
  var dataUrl = canvas.toDataURL();
        document.getElementById('img').src = dataUrl;
}
