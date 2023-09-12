{{-- This page is created using tailwing css --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0ed3cf">
    <title>Blood Donation</title>
    <link rel="icon" type="image/x-icon" href="{{ url('/frontend/images/bds-favicon-real.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link type="text/css" rel="stylesheet" href="{{ url('css/odometer.css') }}" />
    <script src="{{ url('js/odometer.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('css/lightgallery.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ url('css/lg-thumbnail.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ url('css/lg-fullscreen.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <style>
        .alert-success{
            background-color: rgb(255, 182, 182);
            padding: 14px;
        }
    </style>

</head>

<body class="bg-gray-900" cz-shortcut-listen="true">

    {{-- nav-header --}}

    <header class="sticky top-0 z-50 w-full">

        <nav class="border-gray-200 py-2.5 bg-gray-200 backdrop-filter backdrop-blur-lg bg-opacity-60">
            <div class="container flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ url('/frontend/images/logo0.png') }}" class="h-6 mr-3 sm:h-9" alt="Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-gray-900">MY LOGO</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col md:flex-row">

                        <li>
                            <a href="{{ route('welcome') }}">
                                <button type="button"
                                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Home</button>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('donate.blood') }}">
                                <button type="button"
                                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Donate Blood</button>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('blood_request') }}">
                                <button type="button"
                                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Blood Request</button>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('login') }}">
                                <button type="button"
                                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">
                                <button type="button"
                                    class="text-white bg-gradient-to-br from-pink-500 to-red-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Register
                                    </button>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="flex items-center lg:order-2">
            <a href="{{ route('donner.index') }}">
                <button type="button"
                    class="text-white bg-gradient-to-br from-pink-500 to-red-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reg
                    as donor</button>
            </a>
            <a href="{{ route('admin_login') }}">
                <button type="button"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-small  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</button>
            </a>
        </div> --}}
            </div>
        </nav>
    </header>

    {{-- Main Section --}}

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="blood-request-form">
        <form action="{{ route('create_blood') }}">
            @csrf
            @method('GET')
            <div class="my-form">
                <h1 style="text-align: center;font-size:24px;font-weight:bold;">Blood Donation Form</h1>
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <select id="my-select" name="blood_type">
                    <option value="">Select A Blood Type</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>





    {{-- Main Section --}}



    {{-- footer --}}

    <footer class="bg-white dark:bg-gray-800 text-center text-white">
        <div class="container p-4">
            <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-4">
                <div class="lg:mb-0 mb-4">
                </div>
                <div class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                    {{-- <a href="#"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ url('/frontend/images/logo.png') }}" class="h-6 mr-3 sm:h-9"
                            alt="Landwind Logo" />
                        BDS KSK
                    </a> --}}
                    <span class="block text-sm text-center text-red-500">Donate blood Save lives</span>
                    <ul class="flex justify-center mt-3 space-x-3">
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="my-6 text-gray-700 dark:text-white sm:mx-auto lg:my-8">
                    <h3 class="font-medium mb-2 uppercase">Urgent Purposes :</h3>
                    <p class="mb-4">
                        <strong>My Phone-1 :</strong> 9803354132
                    </p>
                    <p class="mb-4">
                        <strong>My Phone-2 :</strong> 9803354132
                    </p>
                </div>
                <div class="lg:mb-0 mb-4">
                </div>
            </div>
        </div>
    </footer>

    <script>
        if (localStorage.getItem('color-theme') === 'light' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: light)').matches)) {
            var artical_images = document.getElementsByClassName('artical_logo');
            for (let index = 0; index < artical_images.length; index++) {
                artical_images[index].src = artical_images[index].src.replace('dark', 'light');
            }
        }
        var observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting === true)
                setTimeout(function() {
                    odometer_1.innerHTML = 1445;
                    odometer_2.innerHTML = 986;
                    odometer_3.innerHTML = 1357;
                    odometer_4.innerHTML = 796;
                }, 200);
        }, {
            threshold: [0]
        });
        observer.observe(document.getElementById("counter_box"));
    </script>
    @if ($errors->any() || isset($data))
        <script>
            document.getElementById("contact").scrollIntoView({
                behavior: 'smooth'
            });
        </script>
    @endif
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="{{ url('js/lightgallery.min.js') }}"></script>
    <script src="{{ url('js/lg-thumbnail.min.js') }}"></script>
    <script src="{{ url('js/lg-fullscreen.min.js') }}"></script>
    <script type="text/javascript">
        lightGallery(document.getElementById('event-box'), {
            plugins: [lgThumbnail, lgFullscreen],
            speed: 500,
            // ... other settings
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var url = "{{ route('register') }}";
        $('#contact_form').on('submit', function(e) {
            e.preventDefault();

            $("#contact_submit").text('Sending ...');

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function(msg) {
                    $("#contact_submit").text('Send Message');
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-right',
                        customClass: {
                            popup: 'colored-toast'
                        },
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true
                    })
                    Toast.fire({
                        iconColor: 'green',
                        icon: 'success',
                        title: 'Email Send Successfully!'
                    });
                    $("#contact_form")[0].reset();
                },
                error: function(data) {
                    var response = JSON.parse(data.responseText);
                    var errorString = '<ul class="list-disc">';
                    $.each(response.errors, function(key, value) {
                        errorString += '<li class="font-mono text-red-700">' + value + '</li>';
                    });
                    errorString += '</ul>';
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: errorString,
                    })
                    // alert(errorString);
                }
            });
        });
    </script>
    <script>
        const successfulLookup = position => {
            const {
                latitude,
                longitude
            } = position.coords;
            fetch(
                    `https://api.opencagedata.com/geocode/v1/json?q=${latitude}+${longitude}&key=4e45cfb7703c4d5e82787ba6d4d3252a`
                    )
                .then(response => response.json())
                .then((data) => {
                    $("input[name=user_adress]").val(data.results[0].formatted);
                });
        }
        const failedLookup = error => {
            $("input[name=user_adress]").val('User did not allow its location :(');
        }
        if (window.navigator.geolocation) {
            window.navigator.geolocation.getCurrentPosition(successfulLookup, failedLookup);
        }
    </script>
</body>

</html>
