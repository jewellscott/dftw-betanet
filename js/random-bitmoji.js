function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max)) + 1;
}

document.addEventListener("DOMContentLoaded", () => {
  const jewell = document.querySelector("#random-bitmoji");
  if (jewell) {
    jewell.src = "https://peprojects.dev/beta-one/jewell-hosted/bitmoji-resized/numbered/bitmoji" + getRandomInt(174) + ".png";
  }

  const bitmoji404 = document.querySelector("#bitmoji404");
  if (bitmoji404) {
    bitmoji404.src = "https://peprojects.dev/beta-one/jewell-hosted/bitmoji-resized/404/bitmoji" + getRandomInt(48) + ".png";
  }
});
