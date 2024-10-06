<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    #footer {

        bottom: 0;
        width: 100%;
        z-index: 1000;
    }

    .content {
        min-height: 100vh; /* Ensure the content area takes at least the full height of the viewport */
        padding-bottom: 4rem; /* Adjust based on the height of your footer */
        box-sizing: border-box;
    }
</style>
<body>
    <footer id="footer" style="background-color: #2c92ff;" class="text-light py-4">
        <div style="display: flex" class="container">
            <div class="inner" style="margin-right: 10rem;">
                <h5 class="mb-2 ">Opening Hours</h5>
            <p class="mb-0">Monday - Friday: 8:00 AM - 5:00 PM</p>
            <p class="mb-0">Saturday: 9:00 AM - 1:00 PM</p>
            <p class="mb-0">Sunday: Closed</p>
            </div>
            <div class="inner" style="margin-right: 10rem;">
                <h5 class="mb-2">Contact Us</h5>
            <p class="mb-0">123 Main Street, City, State, Zip</p>
            <p class="mb-0">Phone: (123) 456-7890</p>
            <p class="mb-0">Email: info@dentalclinic.com</p>
            </div>
            <div class="inner">
                <h5 class="mb-2">Follow Us</h5>
                <div style="display: flex; gap: 2rem;" class="icon">
                    <h4 class="mb-0"><i class="fab fa-facebook-square"></i></h4>
                    <h4 class="mb-0"><i class="fab fa-instagram"></i></h4>
                    <h4 class="mb-0"><i class="fab fa-youtube"></i></h4>
                </div>                
            </div>
        </div>
    </footer>
</body>
</html>
