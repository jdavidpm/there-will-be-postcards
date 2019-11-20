$( document ).ready(function() {
  $('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
  });
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

  $('.chips').chips();
  $('.chips-initial').chips({
    data: [{
      tag: 'Apple',
    }, {
      tag: 'Microsoft',
    }, {
      tag: 'Google',
    }],
  });
  $('.chips-placeholder.chips-autocomplete').chips({
    placeholder: 'Friend\'s e-mails',
    secondaryPlaceholder: '+e-mail',
    autocompleteOptions: {
      data: {
        'Apple': null,
        'Microsoft': null,
        'Google': null
      },
      limit: Infinity,
      minLength: 1
    }
  });

});