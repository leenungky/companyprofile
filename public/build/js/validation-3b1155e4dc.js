/**
 * Validate all Form
 * @param  {[formSelecter]} formElement  [description]
 * @param  {[array]} rules [array rules]
 * @return {[boolean]}       [true, false]
 */
function validate(formElement,rules){
    var isValid = true;
    if (formElement==undefined) {
        console.log('Form Element Selector is Required');
        return false;
    }
    if (rules==undefined) {
        console.log('Rules is Required');
        return false;
    }

    // Serialize form element
    var formArray = $(formElement).serializeArray();

    // console.log(formArray);
    // console.log(rules.phone);
    // console.log(Object.keys(rules).length);
    // console.log('-----validate-----');

    formArray.forEach(function(item){
        if (item.name in rules) {
            // remove previous alert
            $('input[name='+item.name+']').parent().children('strong').remove();
            $('#alert-'+item.name).html('');
            var error = validateRule(item,rules[item.name]);
            if (error!='') {
                var txt = '<strong><small style="color:red">'+error+'</small></strong>';
                // get parent
                var parent = $('input[name='+item.name+']').parent();
                var childError = $(document).find('#alert-'+item.name);
                if (childError.length>0) {
                    childError.html(txt);
                } else {
                    $('input[name='+item.name+']').parent().append(txt);
                }

                if(isValid==true) isValid=false;
            }
        }
    });
    return isValid;
}

/**
 * Validate One Item in All Rules
 * @param  {[type]} itemForm [description]
 * @param  {[type]} rulesObj [description]
 * @return {[type]}          [description]
 */
function validateRule(itemForm, rulesObj){
    // console.log('---validate rule-----');
    // console.log(itemForm);
    // console.log(rulesObj);
    if (rulesObj=='') {
        console.log('Rule for '+itemForm.name+' is Required');
        return false;
    }
    var ruleArray = rulesObj.split('|');
    // console.log('----------rule-----------');
    var errorArr = Array();
    var errorForm = '';
    for (var i = 0; i < ruleArray.length; i++) {
        var errorText = rules(itemForm.value,ruleArray[i]);
        if (errorText!='') {
            errorArr.push(errorText)
        }
    }
    if (errorArr.length>0) {
        errorForm = errorArr.join(',');
    }
    return errorForm;
}

/**
 * Validate one item, one rule
 * @param  {[type]} itemValue [description]
 * @param  {[type]} rule      [description]
 * @return {[type]}           [description]
 */
function rules(itemValue,rule){
    var errorText='';
    var ruleString = rule.split(':');
    switch (ruleString[0]) {
        case 'alpha':
            var regex = /^[a-zA-Z]+$/;
            if (!regex.match(regex)) {
                errorText = 'Only contains alphabetic';
            }
            break;
        case 'alphanum':
            var alphaNum = /^[0-9a-zA-Z]+$/;
            if(!itemValue.match(alphaNum)){
                errorText = 'Only contains Number and String';
            }
            break;
        case 'digits_between':
            var minValue = parseInt(ruleString[1]);
            var maxValue = parseInt(ruleString[2]);
            if (itemValue.length < minValue || itemValue.length > maxValue) {
                errorText = 'Length between '+minValue+' and '+maxValue;
            }
            break;
        case 'email':
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test(itemValue)==false) {
                errorText = 'Invalid Email Address';
            }
            break;
        case 'min':
            var minValue = parseInt(ruleString[1]);
            if (itemValue.length < minValue) {
                errorText = 'Minimum length is '+minValue;
            }
            break;
        case 'numeric':
            if (!itemValue.match(/^\d+$/)) {
                errorText = 'Numeric Only';
            }
            break;
        case 'required':
            if (itemValue==undefined) {
                errorText = 'Required';
            }
            if (itemValue=='' || itemValue.length==0) {
                errorText ='Required';
            }
            break;
        case 'same':
            var nameSame = ruleString[1];
            var prevValue = $('input[name='+nameSame+']').val();
            if (prevValue!=itemValue) {
                errorText = 'Value must same with '+nameSame;
            }
            break;

        default: errorText = 'Undefined Rule';
    }
    return errorText;
}
