<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/checkout.css">
</head>

<body>


    <title>Day 002 - Credit Card Checkout</title>
  <body>
    <div class="checkout-container">
      <div class="left-side">
        <div class="text-box">
          <h1 class="home-heading">Home Decor</h1>
          <p class="home-price"><em>249.50 USD </em></p>
          <hr class="left-hr" />
          <p class="home-desc"><em>Entire home </em>for <em>2 guest</em></p>
          <p class="home-desc">
            <em>Tue, July 23, 2022 </em>to <em>Thu, July 25, 2022</em>
          </p>
        </div>
      </div>

      <div class="right-side">
        <div class="receipt">
     <h1 class="receipt-heading"><b>PLEASE PROVIDE THE FOLLOWING DATA</b></h1>
          <div>
            <form
            class="form-box"
            enctype="text/plain"
            method="get"
            target="_blank"
          >
            <div>
              <label for="full-name">First Name</label>
              <input
                id="name"
                name="fname"
                placeholder=" Enter Your First Name"
                required
                type="text"
              />
            </div>

            <div>
                <label for="full-name">Second Name</label>
                <input
                  id="name"
                  name="sname"
                  placeholder=" Enter Your Second Name"
                  required
                  type="text"
                />
              </div>

              <div>
                <label for="full-name"> Email</label>
                <input
                  id="name"
                  name="email"
                  placeholder="Enter Your Email"
                  required
                  type="Email"
                />
              </div>

              <div>
                <label for="full-name">Phone Number</label>
                <input
                  id="name"
                  name="Pno"
                  placeholder="Enter Your Phone No."
                  required
                  type=""
                />
              </div>

              <div>
                <label for="full-name">First Address</label>
                <input
                  id="name"
                  name="faddress"
                  placeholder=" Enter Your First Address "
                  required
                  type="text"
                />
              </div>

              <div>
                <label for="full-name">Second Address</label>
                <input
                  id="name"
                  name="saddress"
                  placeholder=" Enter Your Second Address "
                  required
                  type="text"
                />
              </div>








          </form>

          </div>
        </div>

        <div class="payment-info">
          <h3 class="payment-heading"><b>PAYMENT INFORMATION</b></h3>
          <form
            class="form-box"
            enctype="text/plain"
            method="get"
            target="_blank"
          >
            <div>
              <label for="full-name">Full Name</label>
              <input
                id="full-name"
                name="full-name"
                placeholder=""
                required
                type="text"
              />
            </div>

            <div>
              <label for="credit-card-num"
                >Card Number
                <span class="card-logos">
                  <i class="card-logo fa-brands fa-cc-visa"></i>
                  <i class="card-logo fa-brands fa-cc-amex"></i>
                  <i class="card-logo fa-brands fa-cc-mastercard"></i>
                  <i class="card-logo fa-brands fa-cc-discover"></i> </span
              ></label>
              <input
                id="credit-card-num"
                name="credit-card-num"
                placeholder="1111-2222-3333-4444"
                required
                type="text"
              />
            </div>

            <div>
              <p class="expires">Expires on:</p>
              <div class="card-experation">
                <label for="expiration-month">Month</label>
                <select id="expiration-month" name="expiration-month" required>
                  <option value="">Month:</option>
                  <option value="">January</option>
                  <option value="">February</option>
                  <option value="">March</option>
                  <option value="">April</option>
                  <option value="">May</option>
                  <option value="">June</option>
                  <option value="">July</option>
                  <option value="">August</option>
                  <option value="">September</option>
                  <option value="">October</option>
                  <option value="">November</option>
                  <option value="">Decemeber</option>
                </select>

                <label class="expiration-year">Year</label>
                <select id="experation-year" name="experation-year" required>
                  <option value="">Year</option>
                  <option value="">2023</option>
                  <option value="">2024</option>
                  <option value="">2025</option>
                  <option value="">2026</option>
                </select>
              </div>
            </div>

            <div>
              <label for="cvv">CVV</label>
              <input
                id="cvv"
                name="cvv"
                placeholder="415"
                type="text"
                required
              />
              <a class="cvv-info" href="#">What is CVV?</a>
            </div>

            <button class="btn">
              <i class="fa-solid fa-lock"></i> CheckOut
            </button>
          </form>

          <p class="footer-text">
            <i class="fa-solid fa-lock"></i>
            Your credit card infomration is encrypted
          </p>
        </div>
      </div>
    </div>
  </body>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
