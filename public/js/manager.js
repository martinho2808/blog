    function getUrlParam(param) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }
    
    function excludeField() {
        var editingValue = getUrlParam('editing');
        
        var editingInput = document.getElementById('editing-input');
        editingInput.value = editingValue;
        
        var form = document.getElementById('my-form');
        form.submit();
    }