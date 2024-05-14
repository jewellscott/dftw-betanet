const mantras = [
      "memento vivere",
      "audere est facere",
      "sapere aude",
      "sic itur ad astra",
      "splendor sine occasu",
      "audere est facere",
      "ex animo",
      "fac fortia et patere",
      "fortes fortuna adiuvat",
      "incepto ne desistam",
      "non progredi est regredi",
      "nosce te ipsum",
      "non sum qualis eram",
      "festina lente",
];

let randomMantra = "";

let mantraString = document.getElementById("mantra");

function getRandomMantra() {
      randomMantra = mantras[Math.floor(Math.random() * mantras.length)];
      console.log(`Random mantra: ${randomMantra}`);
      return randomMantra;
    };

mantraString.textContent = `✷ ${getRandomMantra()} ✷`;