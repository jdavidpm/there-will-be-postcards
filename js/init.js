$( document ).ready(function() {
  $('select').formSelect();
  $('.carousel').carousel();
  $('.datepicker').datepicker();
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.materialboxed').materialbox();
  $('.slider').slider({
    indicators: false,
    height: 600,
    duration: 500,
    interval: 2000
  });
  $('.tooltipped').tooltip();
  $('.dropdown-trigger').dropdown({
      constrainWidth: false,
      coverTrigger: false,
      closeOnClick: true,
      alignment: 'right'
    }
  );
});