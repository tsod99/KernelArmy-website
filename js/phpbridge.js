

function callPHP(functionName, params)
{
    return jQuery.ajax({
        type: "POST",
        url: '../includes/jsbridge',
        dataType: 'json',
        data: {functionname: functionName, arguments: params}
    });
    
}

