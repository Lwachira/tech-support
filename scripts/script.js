$('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor

    }
);
$('.collapsible').collapsible();

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
format: 'yyyymmdd',
 formatSubmit: 'yyyymmdd',
  hiddenPrefix: 'prefix__',
  hiddenSuffix: '__suffix'
});

$(document).ready(function() {
    $('select').material_select();
});