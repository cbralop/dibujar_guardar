document.addEventListener("DOMContentLoaded", () => {
    mono();
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        var ctx = document.getElementById("canvas");
        var image = ctx.toDataURL(); // data:image/png....

        document.getElementById('base64').value = image;
        guardarDibujo();
   });
});

function mono(){
    var wrapper = document.getElementById("signature-pad");

    var canvas = wrapper.querySelector("canvas");
    var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(255, 255, 255)'
    });

    function resizeCanvas() {
        var ratio =  Math.max(window.devicePixelRatio || 1, 1);
      
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
      
        signaturePad.clear();
    }    

    window.onresize = resizeCanvas;
    resizeCanvas();
}

function guardarDibujo(){
    const base64 = document.getElementById('base64').value;
    const fecha = new Date();
    const nombre = fecha.getFullYear()+fecha.getDate()+fecha.getMonth();
    $.post("controllers/guardarDibujos.php",
    {base64: base64, nombre: nombre},
        function(result){
            console.log(result);
            setTimeout(() => {
                document.getElementById("img_signature").src = "dibujos/"+result;
                limpiar();
            }, 500);
        }
    );
}

function limpiar(){
    mono();
}
