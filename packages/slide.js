var btn52 = document.getElementsByClassName("ebtn");
    var slide = document.getElementById("slide");

    btn52[0].onclick = function() {
        slide.style.transform = "translateX(0px)";

        for(i=0;i<4;i++){
            btn52[i].classList.remove("pactive");
        }
        this.classList.add("pactive");
    }

    btn52[1].onclick = function() {
        slide.style.transform = "translateX(-800px)";
        for(i=0;i<4;i++){
            btn52[i].classList.remove("pactive");
        }
        this.classList.add("pactive");
    }

    btn52[2].onclick = function() {
        slide.style.transform = "translateX(-1600px)";
        for(i=0;i<4;i++){
            btn52[i].classList.remove("pactive");
        }
        this.classList.add("pactive");
    }

    btn52[3].onclick = function() {
        slide.style.transform = "translateX(-2400px)";
        for(i=0;i<4;i++){
            btn52[i].classList.remove("pactive");
        }
        this.classList.add("pactive");
    }