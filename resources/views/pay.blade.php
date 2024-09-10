<!DOCTYPE html>
<html>
<head>
  <title>Choix de paiement</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    .payment-methods {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .payment-methods button {
      margin: 0 10px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .payment-methods button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Choisissez un mode de paiement</h2>

    <div class="payment-methods">
        <a href ="{{url('/calcul')}}"><button  class="btn btn-danger">payement en  éspece</button></a>
        <a href ="stripe"><button  class="btn btn-danger">payement en ligne</button></a>

    </div>

    <script>
      function selectPayment(paymentMethod) {
        // Logique de sélection du mode de paiement
        console.log('Mode de paiement sélectionné:', paymentMethod);
      }
    </script>
  </div>
</body>
</html>
