<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bali Coffee Club CMS - @yield('page_title')</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
    @yield('head-section')
    <script defer src="https://unpkg.com/alpinejs@3.5.0/dist/cdn.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/6l7fp7dzfs6n7ria7v22e68z1frwo2500uwixn1rrdsdy6f9/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body>

    @include('Components.Admin.admin_navbar')
    <main>
        @yield('page_content')
    </main>
    <script>
        tinymce.init({
            selector: 'textarea#blogpostContent',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',

        });
    </script>

</body>

</html>
