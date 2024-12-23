<x-layout>
    <div class="min-vh-100 bg-danger d-flex align-items-center"
        style="background: url({{ asset('storage/images/Slide1.JPG') }}); background-size: cover; background-position: center">

        <div class="container">
            <div class="row">
                <div class="col-5 p-5">
                    <div class="">
                        <h1 class="display-1"><b>Welcome To <span class="text-info">Tranquila</b></span></h1>
                        <p class="lead text-danger">Explore the local attractions or simply enjoy the peace of our
                            surroundings. With a commitment to exceptional service, we strive to make your stay as
                            enjoyable as possible. Join us at Tranquila Hotel, where every moment is a chance to relax,
                            celebrate, and create cherished memories.</p>
                        <div class="d-flex flex-row justify-content-around">
                            <button class="btn btn-info me-2 w-50">
                                <h5 class="text-white">Learn more</h5>
                            </button>
                            <button class="btn btn-info ms-2 w-50">
                                <h5 class="text-white">Book now</h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-7 p-5">
                    <div class="d-flex">
                        <iframe src="https://www.google.com" frameborder="0" width="640" height="360"
                            scrolling="no" allowfullscreen></iframe>
                    </div>
                </div>
            </div>


        </div>
</x-layout>


{{-- <x-layout>
    <div class="min-vw-100 min-vh-100 bg-warning"><!--Min-height 100vh---->
        <style>
            /* Add some custom styling to the caption */
            .carousel-caption-fixed {
                position: absolute;
                top: 50%;
                left: 30%;
                transform: translate(-50%, -50%);
                color: white;
                font-size: 24px;
                font-weight: bold;
                z-index: 10;
                background-color: rgba(0, 0, 0, 0.5);
                /* Semi-transparent black */
                padding: 10px 20px;
                /* Add some padding */
                border-radius: 5px;
                /* Optional: rounded corners */
            }

            .carousel-inner {
                position: relative;
            }

            .carousel-item img {
                width: 100%;
                height: 100vh;
                object-fit: cover;
                filter: brightness(100%);
                /* Darken/Brighten images to make text more visible */
            }

            .carousel-item {
                width: 100%;
                height: 100vh;
                object-fit: cover;
            }

            /**For input type=date***/
            .custom-date-input {
                width: 300px;
                /* Change to your desired width */
                height: 40px;
                /* Change to your desired height */
                font-size: 16px;
                /* Adjust font size */
            }

            .bookingdate {
                display: flex;
                justify-content: center;
                /* Center horizontally */
                align-items: center;
                /* Center vertically */
                height: 10vh;
                /* Full viewport height */
            }

            /**Book with Us text**/
            .bookwithus {
                color: #ff0000;
                font-family: 'Roboto', sans-serif;
                font-weight: 700;
            }
        </style>
        <div class="container mt-5">
            <!--h2 class="text-center">Bootstrap Carousel with Overlay Caption</h2-->

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100 h-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- Fixed caption overlayed on top of the carousel -->
                <div class="carousel-caption-fixed">
                    WELCOME HOME TO TRANQUILA HOTEL <br>
                    <p>
                        Insert small description here
                    </p>
                </div>
            </div>
        </div>
    </div><br>
    <h1 align="center" class="bookwithus">Book with Us</h1><br>
    <div class="bookingdate">
        <input type="date" class="custom-date-input" id="startdate" name="startdate">&nbsp;&nbsp;&nbsp;
        <input type="date" class="custom-date-input" id="enddate" name="enddate"> &nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger">SEARCH</button>
    </div>
</x-layout>
 --}}
