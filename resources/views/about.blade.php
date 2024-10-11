<x-layout>
    <style>
        .my-image {
            max-width: 100%;
            /* Ensures the image doesn't exceed the container */
            height: auto;
            /* Maintains the aspect ratio */
            border: 2px solid #007bff;
            /* Optional: Add a border */
            border-radius: 10px;
            /* Optional: Add rounded corners */
        }
    </style>
    <h1>About Tranquila Hotel</h1>
    <div class="col-md-9">
        <img src="{{ asset('images/aboutus.jpg') }}" class="card-img-top" height="480vh" alt="">
    </div>
    <div class="col-md-9 w-10">
        <p>
            At Tranquila Hotel, we believe that true relaxation and luxury come from a perfect blend of comfort,
            nature,
            and world-class service. Nestled in a serene location surrounded by lush greenery, our hotel offers
            an oasis
            of calm away from the hustle and bustle of city life. Designed with a focus on elegance and modern
            comfort,
            Tranquila Hotel features spacious rooms, soothing decor, and all the amenities you need for a
            peaceful and
            rejuvenating stay. Whether you're here for a weekend getaway or an extended retreat, we are
            committed to
            providing a tranquil experience that nourishes both body and mind.
            <br><br>
            Our dedicated staff is passionate about hospitality, striving to create a warm and welcoming
            atmosphere for
            every guest. From our luxurious spa services to the carefully curated dining options, everything at
            Tranquila Hotel is designed to cater to your relaxation and well-being. Whether you're exploring the
            surrounding natural beauty or unwinding in our relaxing lounge areas, we aim to make your stay an
            unforgettable escape. At Tranquila Hotel, your comfort and satisfaction are our top priorities, and
            we look
            forward to making your visit a memorable one.
        </p>
    </div>
</x-layout>
