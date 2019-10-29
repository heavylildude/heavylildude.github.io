function openMenu() {
  var menu = document.querySelector('#menu_container');
  var menu_left = window.getComputedStyle(menu, null).getPropertyValue('left');
  if (menu_left == '-200px') {
    document.querySelector('#menu_container').style.left = '0';
    document.querySelector('#close_menu').style.display = 'block';
  } else {
    document.querySelector('#menu_container').style.left = '-200px';
    document.querySelector('#close_menu').style.display = 'none';
  }
}


// DO THIS WHEN PAGE LOAD
window.onload = function() {
  document.querySelector('#navigation').innerHTML = nav;
  document.querySelector('#top_part').innerHTML = top_part;
  document.querySelector('#mid_part').innerHTML = bottom_part;

  // EVENTS
  document.querySelector('#main_menu').addEventListener("click", function() {
    openMenu();
  });
  
  document.querySelector('#close_menu').addEventListener("click", function() {
    openMenu();
  });
  
}


