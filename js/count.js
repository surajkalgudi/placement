document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 0, 663, 2500);
 counter("count2", 0, 591, 2500);
 counter("count3", 0, 561, 2500);
 counter("count4", 0, 561, 2500);
 counter("count5", 0, 662, 2500);
 counter("count6", 0, 595, 2500);
 counter("count7", 0, 608, 2500);
 counter("count8", 0, 840, 2500);
});
