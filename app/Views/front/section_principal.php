    <!-- ocupa tanto el pricipal como el footer -->
    <section class="principal">
        <!-- section principal -->
        <section class="h-100 ">
            <div class="row h-100">
                <div class="col-sm-6 p-0 d-flex justify-content-center align-items-center div-1 h-100">
                    <div class="card p-2 rounded-5 min-ancho">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 h-100">
                            <h3 class="card-title titulo-card text-warning">Bienvenido a GymFit</h3>
                            <p class="card-text parrafo-card text-light my-5">Tu camino hacia una vida más saludable comienza aquí</p>
                            <a href="section_servicios" class="btn btn-primary boton-card">¡Únete ahora!</a>
                        </div>
                    </div>
                </div>
                <!-- img principal, desaparece al ser tamaño celular -->
                <div class="col-sm-6 img-section1 align-self-center  d-flex justify-content-center align-items-center p-5 h-100 ">
                    <div class="card img-section1 p-5 fondo-img">
                        <img class="rounded-5 img-section1" src="assets/img/section-principal/img1.jpeg"  alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- section del carrosel -->
        <section>
            <div id="carouselExampleCaptions" class="carousel slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- cree 3 img que representa a los servicios -->
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <img src="assets/img/section-principal/carrosel1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Clases Grupales</h5>
                            <p>Variedad de clases para todos los niveles.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/section-principal/carrosel2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Entrenamiento Personal</h5>
                            <p>Entrenadores certificados para ayudarte a alcanzar tus metas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/section-principal/carrosel3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Programas de Nutrición</h5>
                            <p>Planificación de dietas personalizadas.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    