<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .title-container {
            width: 100%;
            overflow: hidden;
        }

        .lining {
            white-space: nowrap;
            display: block;
            /* Prevents text from wrapping to a new line */
            overflow: hidden;
            /* Hides any overflow beyond the container's width */
            text-overflow: ellipsis;
            line-clamp: 2;
            /* Adds an ellipsis (...) if the text overflows */
        }

        /* .image {
    filter: grayscale() blur(2px);
    transition: 1s;
}
.image:hover{
    filter: none;
    transform: scale(1.1)
}
.photo {
    filter: grayscale() blur(2px);
    transition: 3s;
}
.photo:hover{
    filter: none;
    transform: scale(1.1)
} */
        .monkey {
            filter: grayscale() blur(2px);
            transition: 3s;
        }

        .monkey:hover {
            filter: none;
            transform: scale(1.1)
        }
    </style>

</head>

<body>
    <x-navbarcomponent />

    <main>
        {{ $slot }}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('#reload_captcha').click(function() {
                    $.ajax({
                        type: 'GET',
                        url: '/load-captcha',
                        success: function(data) {
                            $('.captcha span').html(data.captcha);
                        }
                    })
                });
            });
        </script>
    </main>

    <footer class="bg-gray-600 py-10 mt-10">
        <div class="container grid md:grid-cols-3 gap-10 m-auto ">
            <div>
                <div class="container border-spacing-0">
                    <div class="card">
                        <div class="card-body m-4">
                            <h5 class="text-center text-2xl">About Us</h5>
                            <p class="text-white">"In a world where news is disseminated by corporate media with highly
                                selective filters, it is essential that we obtain wide sources of information, and that
                                we concentrate on those which reveal the mechanisms of power and concealment."</p>
                            <h5 class="text-center">&copy News Khabar Online</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="card ">
                        <div class="card-body m-4 d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="m-5 text-2xl text-center">Contact Us<i
                                        class="fa-solid fa-phone text-2xl px-2"></i></h5>
                            </div>
                            <div>
                                <a href="https://www.facebook.com"><i
                                        class="fa-brands fa-facebook text-4xl ml-10"></i></a>
                                <a href="https://www.instagram.com"><i
                                        class="fa-brands fa-instagram text-4xl ml-10"></i></a>
                                <a href="https://www.youtube.com"><i
                                        class="fa-brands fa-youtube text-4xl ml-10 "></i></a>
                                <a href="https://twitter.com/i/flow/login"><i
                                        class="fa-brands fa-twitter text-4xl ml-10"></i></a>
                            </div>
                            <div class="m-5 py-5 px-5">
                                <a href="https://mail.google.com/mail/u/0/#inbox">
                                    <h5>E-mail:newskhabaronline@np.com</h5>
                                    <h5>Phone no:9825394959</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14242.648482944307!2d87.2862987!3d26.8188851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef4175e4f26a95%3A0x9b8526c7c4c7bc1c!2sCode%20IT!5e0!3m2!1sen!2snp!4v1694776849040!5m2!1sen!2snp"
                    width="100%ss" height="230" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="px-16 font-thin text-center">
                    {{-- <p>"Google map to,Code IT" </p> --}}
                </div>
            </div>

        </div>

    </footer>
    <div class="bg-blue-300">
        <div class="container flex justify-center m-auto text-white py-2">
            <a href="/">Copyright &copy News Khabar Online All-Rights Reserved</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
