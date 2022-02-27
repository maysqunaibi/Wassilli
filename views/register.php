<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <title>Wassilli</title>
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h4>New here?</h4>
                <h6 class="font-weight-light">
                  Signing up is easy. It only takes a few steps
                </h6>
                <form
                  class="pt-3"
                  method="POST"
                  name="register"
                  action="../controlers/signup.php"
                >
                  <div class="form-group">
                    <input
                      type="text"
                      name="username"
                      class="form-control form-control-lg"
                      id="username"
                      placeholder="Username"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control form-control-lg"
                      id="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <select
                      name="country"
                      class="form-control form-control-lg"
                      id="country"
                    >
                      <option value="">Country</option>
                      <option value="US">United States of America</option>
                      <option value="UK">United Kingdom</option>
                      <option value="IN">India</option>
                      <option value="GR">Germany</option>
                      <option value="AR">Argentina</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      name="password"
                      class="form-control form-control-lg"
                      id="password"
                      placeholder="Password"
                    />
                  </div>

                  <div class="mt-3">
                    <input
                      type="submit"
                      name="register"
                      class="
                        btn btn-block btn-primary btn-lg
                        font-weight-medium
                        auth-form-btn
                      "
                      value="SIGN UP"
                    />
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Already have an account?
                    <a href="../login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="footer text-center mt-4 py-4 font-weight-light font-size-small">
        Copyright © 2021 - All Rights Reserved Wassilli - BU.
      </div>
    </div>
    <script src="vendors/base/vendor.bundle.base.js"></script>

    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
  </body>
</html>
