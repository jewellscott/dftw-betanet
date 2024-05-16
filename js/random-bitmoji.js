function getRandomInt(max) { // number between 1 & max
  return (Math.floor(Math.random() * Math.floor(max)))+1;
}
    
let jewell = document.getElementById("random-bitmoji");
jewell.src = "../jewell-hosted/bitmoji-resized/numbered/bitmoji" + getRandomInt(174) + ".png";

let stephanie = document.getElementById("stephanie-bitmoji");
stephanie.src = "../../jewell-hosted/bitmoji/stephanie/" + getRandomInt(12) + ".png";