<!DOCTYPE html>
<html>
<body>

$(document).ready(function() {
    //code here
$('input[type=password]').keyup(function() {
// keyup code here
var pswd = $(this).val();
//validate the length
if ( pswd.length < 8 ) {
$('#length').removeClass('valid').addClass('invalid');
} else {
$('#length').removeClass('invalid').addClass('valid');
}
//validate letter
if ( pswd.match(/[A-z]/) ) {
$('#letter').removeClass('invalid').addClass('valid');
} else {
$('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
$('#capital').removeClass('invalid').addClass('valid');
} else {
$('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
$('#number').removeClass('invalid').addClass('valid');
} else {
$('#number').removeClass('valid').addClass('invalid');
}
});

$('input[type=password]').focus(function() {
      $('#pswd_info').show();
      //validate the length
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
//validate letter
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}
});
$('input[type=password]').blur(function() {
    // blur code here
      $('#pswd_info').hide();
      //validate the length
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
//validate letter
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}

});

$('input[type=password]').keyup(function() {
  // keyup event code here
});
$('input[type=password]').focus(function() {
  // focus code here
});
$('input[type=password]').blur(function() {
  // blur code here
});


</body>
</html>
