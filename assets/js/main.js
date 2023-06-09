$(document)

// Register
.on("submit", "form.js-register", function(event)
{
    event.preventDefault();
    
    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
        email: $("input[type='email']",_form).val(),
        password: $("input[type='password']",_form).val()
    };

    if(dataObj.email.length < 6)
    {
        _error
        .html("Please enter a valid email address!")
        .show();
        return false;
    }
    // else if(dataObj.password[0] != data.assword[1])
    // {
    //     _error
    //     .text("Please make sure both passwords are the same")
    //     .show();
    //     return false;
    // }
    else if(dataObj.password.length < 10)
    {
        _error
        .html("Please make your password is least 10 characters long")
        .show();
        return false;
    }
    
    // Assuming the code gets this far we can start the ajax process
    _error.hide();

    $.ajax({
        type: 'POST',
        url: '/phpLoginCourse/ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data)
    {
        //Whatever data is?
        if (data.redirect !== undefined)
        {
            window.location = data.redirect;
        }
        else if(data.error !== undefined)
        {
            _error
            .html(data.error)
            .show();
            console.log(data.error);
        }
    })
    .fail(function ajaxFailed(e)
    {
        //This Failed
        console.log(e);
    })
    .always(function alwaysDoThis(data)
    {
        //Always do  
        console.log('Always');        
    })
    return false;
})

// Login
.on("submit", "form.js-login", function(event)
{
    event.preventDefault();
    
    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
        email: $("input[type='email']",_form).val(),
        password: $("input[type='password']",_form).val()
    };

    if(dataObj.email.length < 6)
    {
        _error
        .text("Please enter a valid email address!")
        .show();
        return false;
    }
    else if(dataObj.password.length < 10)
    {
        _error
        .text("Please make your password is least 10 characters long")
        .show();
        return false;
    }
    
    // Assuming the code gets this far we can start the ajax process
    _error.hide();
    
    $.ajax({
        type: 'POST',
        url: '/phpLoginCourse/ajax/login.php',
        data: dataObj,
        timeout: 5000,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data)
    {
        //Whatever data is?
        if (data.redirect !== undefined)
        {
            window.location = data.redirect;
        }
        else if(data.error !== undefined)
        {
            console.log(data.error);
            const error = data.error;
            _error
            .html(error)
            .show();
        }
    })
    .fail(function ajaxFailed(e)
    {
        //This Failed
        console.log(e);
    })
    .always(function alwaysDoThis(data)
    {
        //Always do  
        console.log('Always');        
    })
    
    return false;
})