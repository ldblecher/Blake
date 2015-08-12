function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 500,
                header = document.querySelector("#topbar");
                dropdown = document.querySelector("#subul");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
                classie.add(dropdown,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                    classie.remove(dropdown,"smaller");
                }
            }
        });
    }
    window.onload = init();