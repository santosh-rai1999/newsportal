<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
    .title-container {
  width: 100%;
  overflow: hidden;
}

.lining {
  white-space: nowrap; /* Prevents text from wrapping to a new line */
  overflow: hidden;    /* Hides any overflow beyond the container's width */
  text-overflow: ellipsis; /* Adds an ellipsis (...) if the text overflows */
}
.image {

    filter: grayscale() blur(3px);
    transition: 3s;
}
.image:hover{
    background-color: rgba(186, 165, 165, 0.7);
    filter: none;
}
.photo {
    filter: grayscale() blur(3px);
    transition: 3s;
}
.photo:hover{
    background-color: rgba(186, 165, 165, 0.7);
    filter: none;
}
.monkey {
    filter: grayscale() blur(3px);
    transition: 3s;
}
.monkey:hover {
    background-color: rgba(186, 165, 165, 0.7);
    filter: none;
}


    </style>

</head>
<body>
    <x-navbar-component/>

    <main>
        {{$slot}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
          $(document).ready(function(){
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

    <footer class="bg-blue-400 py-10 mt-10">
        <div class="container grid grid-cols-3 gap-10 m-auto ">
            <div>
                <img src="https://cdn.pixabay.com/photo/2014/09/28/11/25/imac-464739_1280.jpg" class="image"  alt="">
                <div class="px-2 font-thin">
                    <p>"Failure is not the opposite of success,it's the part of success"</p>
                </div>
            </div>


            <div>
                <img src="https://cdn.pixabay.com/photo/2019/06/18/05/45/office-4281470_1280.jpg" class="photo" alt="">
                <div class="px-16 font-thin">
                    <p>"If you dream it,You can do it!!"</p>
                </div>
            </div>

            <div>
                <img src="https://cdn.pixabay.com/photo/2020/12/28/15/30/ipad-5867566_1280.png" class="monkey" alt="">
                <div class="px-6 font-thin">
                    <p>"The starting point of all achievement is desire"</p>
                </div>
            </div>
        </div>

    </footer>
    <div class="bg-blue-300">
        <div class="container flex justify-center m-auto text-white py-2">
            <a href="">Copyright &copy News Portal All-Rights Reserved</a>
        </div>
    </div>

</body>

</html>
