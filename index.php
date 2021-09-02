<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF FORM</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="makepdf.php" method="post" class="offset-md-3 col-md-6">
            <h1>Create your own PDF</h1>
            <p>Fill out the details below and the PDF will download.</p>

            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                </div>

            </div>

            <div class="mb-2">
                <input type="text" name="email" placeholder="Email" class="form-control" required>

            </div>

            <div class="mb-2">
                <input type="text" name="phone " placeholder="Phone" class="form-control" required>

            </div>

            <div class="mb-2">
                <textarea type="text" name="message" placeholder="Your Message" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>

        </form>
    </div>
</body>
</html>