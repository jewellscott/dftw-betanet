function getRandomInt(max) { // number between 1 & max
  return (Math.floor(Math.random() * Math.floor(max)))+1;
}
    
let jewell = document.getElementById("random-bitmoji");
jewell.src = "https://pe-projects/beta-one/jewell-hosted/bitmoji-resized/numbered/bitmoji" + getRandomInt(174) + ".png";