function getBeloved(){return '"postcards/p0.jpg"'; }
function getRecent(){return '"postcards/p1.jpg"'; }
function getRecommend(){return '"postcards/p0.jpg"'; }

$( document ).ready(function(){
  $('input.autocomplete').autocomplete({
    data:{
      "Christmas": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
  });
  $('.dropdown-trigger').dropdown({
    constrainWidth: false,
    coverTrigger: false,
    closeOnClick: true,
    alignment: 'right'
    }
  );
  $('.chips-initial').chips({
    data: [{tag: 'Christmas',}, {tag: 'Valentines',}, {tag: 'Birthday',}],
  });
  $('.chips-placeholder.chips-autocomplete').chips({
    placeholder: 'Friend\'s e-mails',
    secondaryPlaceholder: '+e-mail',
    autocompleteOptions:{
      data:{
        'Apple': null,
        'Microsoft': null,
        'Google': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
  $('.slider').slider({
    indicators: false,
    height: 600,
    duration: 500,
    interval: 2000
  });
  $('select').formSelect();
  $('.carousel').carousel();
  $('.datepicker').datepicker();
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.materialboxed').materialbox();
  $('.tooltipped').tooltip();
  $('.chips').chips();

  //get slider images
  $('#mostBeloved').prepend('<img src=' + getBeloved() + ' class="responsive-img">')
  $('#ourRecommend').prepend('<img src=' + getRecommend() + ' class="responsive-img">')
  $('#mostRecent').prepend('<img src=' + getRecent() + ' class="responsive-img">')

});