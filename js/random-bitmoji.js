function getRandomInt(max) { // number between 1 & max
  return (Math.floor(Math.random() * Math.floor(max)))+1;
}
    
let img = document.getElementById("random-bitmoji");
img.src = "../jewell-hosted/bitmoji-resized/numbered/bitmoji" + getRandomInt(174) + ".png";