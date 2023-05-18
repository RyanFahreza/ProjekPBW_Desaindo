function toggleLike(btn) {
  // get the like icon and count elements inside the button
  var icon = btn.querySelector('.like-icon');
  var count = btn.querySelector('.like-count');
  
  // toggle the 'clicked' class on the button
  btn.classList.toggle('clicked');
  
  // update the like count based on the button state
  if (btn.classList.contains('clicked')) {
    count.textContent = parseInt(count.textContent) + 1;
  } else {
    count.textContent = parseInt(count.textContent) - 1;
  }
  
  // animate the like icon
  icon.classList.add('animate');
  setTimeout(function() {
    icon.classList.remove('animate');
  }, 500);
}