<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ineducator | Train online from leading industry experts</title>
    <?php include('includes/inc-css.php'); ?>

</head>

<body>

    <?php include('includes/navbar.php'); ?>
    <section class="login-register">
        <div class="text-center section-title">
            <h1>
                <b>Login & Register</b>
            </h1>
        </div>
        <div class="container  px-1">
            <div class="row">
                <div class="col-md-6 col-12 login-col">
                    <div class="title">Login</div>
                    <form action="#">
                        <div class="user_details">

                            <p class="fs-6 mt-2">Already have an account then kindly login to proceed to pay.</p>
                            <div class="input_box">
                                <span class="datails">Email</span>
                                <input type="text" placeholder="Enter your Email" required>
                            </div>

                            <div class="input_box">
                                <span class="datails">Password</span>
                                <input type="text" placeholder="Enter your Password" required>
                            </div>
                            <div class="ms-auto">
                                <span class="fs-6 float-right"><a class="text-primary" data-toggle="collapse"
                                        data-target="#forgotPasswordForm" aria-expanded="false"
                                        aria-controls="forgotPasswordForm">Forgot Password ??</a></span>
                            </div>

                        </div>
                        <div class="button">
                            <input type="submit" value="Proceed To Pay">
                        </div>

                    </form>
                    <div class="collapse mt-3" id="forgotPasswordForm">
                        <div class="card card-body">
                            <span class="title">Forgot Password</span>
                            <form action="#">
                                <div class="user_details">
                                    <div class="input_box">
                                        <label class="details">Email</label>
                                        <input type="text" placeholder="Enter your Email to Get OTP" required>
                                    </div>
                                </div>
                                <div class="button">
                                    <input type="submit" value="Send OTP">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div>
                        <div class="toggle-button">
                            <label class="check_on_div " data-bs-toggle="collapse" href="#collapseRegister"
                                role="button" aria-expanded="false" aria-controls="collapseRegister">
                                <input type="radio" value="reg" name="pay_type_radio" id="registerRadio"
                                    checked="checked">
                                Register
                            </label>
                        </div>
                        <div class="toggle-button">
                            <label class="check_on_div " data-bs-toggle="collapse" href="#collapseGuest" role="button"
                                aria-expanded="true" aria-controls="collapseGuest">
                                <input type="radio" value="guest" id="guestRadio" name="pay_type_radio">
                                Checkout As Guest
                            </label>
                        </div>
                        <div class="collapse show" id="collapseRegister">
                            <div class="card card-body my-4" style="border: none;
  background-color: var(--accent);">
                                <div class="title">Register Here</div>
                                <p class="fs-6 mt-2">Don't have an account you can register, be a registered
                                    customer and proceed with the payment process.</p>
                                <form action="#">
                                    <div class="user_details">
                                        <div class="input_box">
                                            <span class="datails">Full Name</span>
                                            <input type="text" placeholder="enter your name" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Email</span>
                                            <input type="text" placeholder="enter your Email" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Job Title</span>
                                            <input type="text" placeholder="enter your job title" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Phone Number</span>
                                            <input type="text" placeholder="enter your Phone" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Password</span>
                                            <input type="text" placeholder="enter your Password" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Confirm Password</span>
                                            <input type="text" placeholder="Confirm your Password" required>
                                        </div>
                                        <div id="captcha-form" method="post" action="" class="">
                                            <div class="d-flex align-items-center">
                                                <canvas id="captcha" width="200" height="80"></canvas>
                                                <button type="button" class="btn btn-secondary" id="refresh-captcha">
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                            </div>

                                            <div class="">
                                                <label for="captcha-input" class="form-label">Enter Captcha</label>
                                                <input type="text" class="form-control" id="captcha-input" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button">
                                        <input type="submit" value="Register">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="collapse" id="collapseGuest">
                            <div class="card card-body my-4" style="border: none;
  background-color: var(--accent);">
                                <div class="title">Shipping Details</div>
                                <form action="#">
                                    <div class="user_details">
                                        <div class="input_box">
                                            <span class="datails">Full Name</span>
                                            <input type="text" placeholder="enter your name" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Email</span>
                                            <input type="text" placeholder="enter your Email" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Job Title</span>
                                            <input type="text" placeholder="enter your job title" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Phone Number</span>
                                            <input type="text" placeholder="enter your Phone" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Address 1</span>
                                            <input type="text" placeholder="enter your address 1" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Address 2</span>
                                            <input type="text" placeholder="enter your address 2" required>
                                        </div>
                                        <div class="input_box">
                                            <label class="datails" for="inputState">Country</label>
                                            <select class="form-control" id="inputState">
                                                <option value="SelectState">Select Country</option>
                                            </select>
                                        </div>
                                        <div class="input_box">
                                            <label class="datails" for="inputState">State</label>
                                            <select class="form-control" id="inputState">
                                                <option value="SelectState">Select State</option>
                                            </select>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">City</span>
                                            <input type="text" placeholder="enter your city" required>
                                        </div>
                                        <div class="input_box">
                                            <span class="datails">Zip Code</span>
                                            <input type="text" placeholder="enter city zipcode" required>
                                        </div>
                                    </div>

                                    <div class="button">
                                        <input type="submit" value="Register">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php include('includes/footer.php'); ?>
    <?php include('includes/inc-js.php'); ?>


</body>

</html>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('input[name="pay_type_radio"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            document.getElementById('collapseRegister').classList.toggle('show', radio.value ===
                'reg');
            document.getElementById('collapseGuest').classList.toggle('show', radio.value ===
                'guest');
        });
    });
});


</script>