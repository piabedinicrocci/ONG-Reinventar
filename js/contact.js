
$(document).ready(function() {
    $('#contact').on('submit', function(e){
        e.preventDefault();
        $.ajax({
           type: "POST",
           url: "https://reinventartandil.com", // TODO
           data: $(this).serialize(),
           success: function() {
            alert('Recibimos tu consulta, te la responderemos a la brevedad.'); 
            window.location.href = '/';
           },
           error: function() {
            alert('Recibimos tu consulta, te la responderemos a la brevedad.'); 
            window.location.href = '/';   
            }
        });
    });
});
