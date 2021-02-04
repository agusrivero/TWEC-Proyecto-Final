<div class="container-fluid w-75" id="container">
    <div id="carousel-main" class="carousel slide m-auto" data-ride="carousel">
        <ol class="carousel-indicators" id="carousel-indicators">
        </ol>
        <div class="carousel-inner mb-5" id="carousel-inner">
        </div>
        <a class="carousel-control-prev" href="#carousel-main" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-main" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script>
    let images = [
        {
            url: "./imagenes/Guitarristas/bb_king.jpg",
            name: "BB King",
            value: "Lucille",
            ref: "lucille"
        },
        {
            url: "./imagenes/Guitarristas/AngusYoung.JPG",
            name: "Angus Young",
            value: "Gibson SG",
            ref: "gibson-sg"
        },
        {
            url: "./imagenes/Guitarristas/slash_2.jpeg",
            name: "Slash",
            value: "Gibson Les Paul",
            ref: "gibson-lespaul"
        },
        {
            url: "./imagenes/Guitarristas/eric_clapton.jpg",
            name: "Eric Clapton",
            value: "Fender Stratocaster",
            ref: "fender-stratocaster"
        },
        {
            url: "./imagenes/Guitarristas/brian_may.jpg",
            name: "Brian May",
            value: "Red Special",
            ref: "red-special"
        },
        {
            url: "./imagenes/Guitarristas/james_hetfield.jpg",
            name: "James Hetfield",
            value: "ESP Snakebyte",
            ref: "snakebyte"
        },
        {
            url: "./imagenes/Guitarristas/dimebag_darrell.jpg",
            name: "Dimebag Darrel",
            value: "Dean Guitar",
            ref: "dimebag"
        },
        {
            url: "./imagenes/Guitarristas/paul_gilbert.jpg",
            name: "Paul Gilbert",
            value: "Ibanez",
            ref: "ibanez"
        }
    ]

    for(let i = 0; i<images.length; i++){
        let carousel = document.getElementById('carousel-inner');

        let carouselItem = document.createElement("div");

        carouselItem.classList.add('carousel-item');
        if(i===0){
            carouselItem.classList.add('active');
        }
        carouselItem.innerHTML = `<a href="#${images[i].ref}"><img class="d-block w-100" src="${images[i].url}" alt="33 slide"/></a>`;

        let carouselCaption = document.createElement('div');
        carouselCaption.classList.add('carousel-caption');
        carouselCaption.innerHTML = `<h2>${images[i].name}</h2><p>${images[i].value}</p>`;

        let carouselMain = document.getElementById('carousel-indicators');
        let li = document.createElement("li");
        li.setAttribute("data-target", "#carousel-main");
        li.setAttribute("data-slide-to", i);
        if(i === 0){
            li.classList.add('active');
        }

        carouselMain.appendChild(li);
        carouselItem.appendChild(carouselCaption);
        carousel.appendChild(carouselItem);
    }
</script>