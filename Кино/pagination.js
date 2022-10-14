
var counters = document.querySelectorAll("#ID_pagin_span");

function buttonPrew() {
  counters[0].textContent = parseInt(counters[0].textContent) - 1;
  pagin = counters[0].textContent
}

function buttonNext() {
  counters[0].textContent = parseInt(counters[0].textContent) + 1;
  pagin = counters[0].textContent
}