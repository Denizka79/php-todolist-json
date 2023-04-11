let completeIndicator = document.querySelectorAll(".complete");
    
for (let i = 0; i < completeIndicator.length; i++) {
    completeIndicator[i].addEventListener("change", function() {
        this.parentNode.submit();
    });
}