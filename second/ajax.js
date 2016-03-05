/**
 * Created by Alinka on 05.03.2016.
 */
$(document).ready(function() {

    $('button').on('click', function(){

        var first = $('#first').val();
        var second = $('#second').val();
        var action = $(this).text();

        $('#result').val('');

        $.ajax({

            url: 'result.php',
            type: 'POST',
            data : {
                first: first,
                second: second,
                action: action
            },
            success: function (data) {
                $('#result').val(data);
            }
        });

    });

});