/* control button name editing */
/*If there are no restrictions, he will submit the information collected in unnecessary forms. */

/* function for get url data */
function getUrlParam(param) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }
    
    function excludeField() {
        /* use functions */
        var editingValue = getUrlParam('editing');
        /* get need to submit valuee */
        var editingInput = document.getElementById('editing-input');
        editingInput.value = editingValue;
        
        /* only submit needed value */
        var form = document.getElementById('my-form');
        form.submit();
    }