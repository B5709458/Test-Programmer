
function calculateNow(strNumber) {
    var validateError = true, validateInputIsEmpty = true, outputStr = '';

    var input = $(strNumber).find('input.input_formula').val();

    $(strNumber).find('input.validate').each(function () {
        if ($.trim($(this).val()) == '') {
            validateInputIsEmpty = false;
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
        }
    });

    if (validateInputIsEmpty) {
        try {
            var result = eval(input);
        } catch (errorMessage) {
            if (errorMessage instanceof SyntaxError) {
                validateError = false;
            }
        }
        if (validateError) {
            outputStr += 'Your formula is <b>' + input + '</b>, Result is <b>' + parseFloat(result) + '</b>';
            $('#display_output').empty();
            $('#display_output').append(outputStr);
        } else {
            outputStr = 'Your formula is <b>' + input + '</b>, Result is <b>Syntax Error</b>';
            $('#display_output').empty();
            $('#display_output').append(outputStr);
        }
    } else {
        outputStr = '';
        outputStr += '<b class="txt-alert">Please enter your formula.</b>'
        $('#display_output').empty();
        $('#display_output').append(outputStr);
    }
}