<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Crud Operators</h1>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Please Enter Your Name" name="name"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Please Enter Your Email Address" name="email"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Please Enter Your Mobile Number" name="mobile"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Please Enter Your Password" name="password"
                    autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>