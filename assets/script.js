document.addEventListener("DOMContentLoaded", function(){
    const form = document.getElementById("updateForm");
    if(form){
        form.addEventListener("submit", function(e){
            e.preventDefault();
            let formData = new FormData(form);

            fetch("update.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("status").innerHTML = data;
            });
        });
    }
});
