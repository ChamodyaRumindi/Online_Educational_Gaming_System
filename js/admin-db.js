function dbCounter(id, start, end, duration) {
  if (end != 0 && end > 5) {
    let obj = document.getElementById(id),
      count = start,
      range = end - start,
      increment = end > start ? 1 : -1,
      step = Math.abs(Math.floor(duration / range)),
      timer = setInterval(() => {
        count += increment;
        obj.textContent = count;
        if (count == end) {
          clearInterval(timer);
        }
      }, step);
  } else {
    obj = document.getElementById(id);
    obj.textContent = end;
  }
}
