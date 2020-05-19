$(document).on('ajax:success', function(e, xhr){
    if(!$('#modal').length){
        $('body').append($('<div class="modal" id="modal"></div>'))
    }
    $('#modal').html(xhr).modal('show');

    $('#modal').on('hidden.bs.modal', function () {
        $('.dataTable').DataTable().ajax.reload();
    })

    $('#datePick').flatpickr({dateFormat: "d-m-Y", "locale": 'pt'});

    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");


        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#gerarSenha").on("click", function(){
        $("#password").val(CreateRandomPassword( 12 , true, true, true, ''));
    })
    function CreateRandomPassword(Length, isUpperAlpha, isLowerAlpha, isNumaric ,SpecialChars)
    {
        var _allowedChars = "";
        if (isUpperAlpha != false)
            _allowedChars += "ABCDEFGHJKLMNOPQRSTUVWXYZ";
        if (isLowerAlpha != false)
            _allowedChars += "abcdefghijkmnopqrstuvwxyz";
        if (isNumaric != false)
            _allowedChars += "0123456789";
        _allowedChars += SpecialChars;
        if(!Length)
            Length = 8
        var chars = "";
        allowedCharCount = _allowedChars.length;
        if(allowedCharCount == 0)
            return " ";
        for (var i = 0; i < Length; i++)
        {
            chars += _allowedChars[Math.floor(Math.random() * Math.floor(allowedCharCount))];
        }

        return chars;
    }
});

