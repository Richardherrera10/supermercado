@extends("layout")
@section("title", "Productos")

@section("content")
    <div class="container py-5">
        <div class="row text-center text-white mb-5">
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Jugo de Naranja Tampico Grande</h5>
                                <p class="font-italic text-muted mb-0 small"> Delicioso jugo de naranja para las mañanas</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">Q27.00</h6>
                                </div>
                            </div><img  alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2" src={{URL::asset('/img/tampico.png')}}>
                        </div> <!-- End -->
                    </li> <!-- End -->

                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Galletas Oreo </h5>
                                <p class="font-italic text-muted mb-0 small"> Paquete de galletas Oreo para comer con leche</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">Q23.00</h6>
                                </div>
                            </div><img  alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2" src={{URL::asset('/img/oreo.jpg')}}>
                        </div> <!-- End -->
                    </li> <!-- End -->

                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Papel de Baño marca Scott acolchado triple hoja</h5>
                                <p class="font-italic text-muted mb-0 small"> Papel de Baño</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">Q35.00</h6>
                                </div>
                            </div><img alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2" src={{URL::asset('/img/scott.jpg')}}>
                        </div> <!-- End -->
                    </li> <!-- End -->

                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Gaseosa Grapette 3L </h5>
                                <p class="font-italic text-muted mb-0 small"> Agua grapette grande</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">Q27.00</h6>
                                </div>
                            </div><img alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2" src={{URL::asset('/img/gaseosa.png')}}>
                        </div> <!-- End -->
                    </li> <!-- End -->

                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">Pasta Ina</h5>
                                <p class="font-italic text-muted mb-0 small"> Spaguetti marca Ina 150 gr</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">Q27.00</h6>
                                </div>
                            </div><img alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2" src={{URL::asset('/img/pasta.jpg')}}>
                        </div> <!-- End -->
                    </li> <!-- End -->

                </ul> <!-- End -->
            </div>
        </div>
    </div>
@endsection
