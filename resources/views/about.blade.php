
@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TMwVRIBSSBiB6v8Zk3mIFdAaFf5IhhkHDYFUmWPhcA6VFA8AVUHsJN6veXq45pgb" crossorigin="anonymous">
    <title>Your Furniture Store</title>
    <style>
        body {
            background-color: #f8f9fa; /* Bootstrap background color */
        }

        #about {
            width:100%;
            height:30rem !important;
            background: url('https://www.matelpro.com/15419-image_zoom/miroir-de-salle-a-manger-design-180-cm-laque-noir-talara.jpg') center/cover no-repeat; /* Replace 'path/to/your/image.jpg' with the actual path to your image */
            color: black; /* White text color for better readability on the background image */
            padding: 60px 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0.7;

        }

        section#about h2 {
            color: black; /* White text color for headings */
        }

        section#about p {
            font-size: 18px;
        }
        .container {
            width:100%;
            background-color: white;
            padding: 20px; /* Adjust the padding as needed */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
            opacity: 2;
        }
    </style>
</head>
<body>

    <!-- Your existing content -->

    <section id="about" >
        <div class="container">
            <h2 class="mb-4">About Us</h2>
            <p>
                Welcome to the "About Us" page. This is where you can provide information about your company, mission, vision, and the team behind the scenes.
                Customize this section with your own content.
            </p>
        </div>
    </section>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
</body>
</html>

@endsection
