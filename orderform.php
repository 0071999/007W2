<?php include "template.php"
    /** @var $productNames */
/** @var $conn */ ?>

    <title>Order Form</title>
<body>

<div class="container-fluid">
    <h1 class="text-primary">Order Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
            <div class="row">
                <!--Customer Details-->

                <div class="col-md-6">
                    <h2>Customer Details</h2>
                    <p>Please enter your details:</p>
                    <label for="customerNameFirst" class="form-label">First Name</label>
                    <input class="form-control" id="customerNameFirst" name="customerNameFirst"
                           placeholder="...">
                    <label for="customerNameSecond" class="form-label">Second Name</label>
                    <input class="form-control" id="customerNameSecond" name="customerNameSecond"
                           placeholder="...">
                    <label for="customerAddress" class="form-label">Address</label>
                    <input class="form-control" id="customerAddress" name="customerAddress"
                           placeholder="...">
                    <label for="customerPhone" class="form-label">Phone Number</label>
                    <input class="form-control" id="customerPhone" name="customerPhone"
                           placeholder="...">
                    <label for="customerEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="customerEmail" name="customerEmail"
                           placeholder="name@email.com">

                </div>
                <div class="col-md-6">
                    <h2>Products</h2>
                    <!--Product List-->
                    <p>Please enter the quantities of each product:</p>
                    <label for="orderProduct1" class="form-label"><?php echo $productNames["product1"]; ?> </label>
                    <input type="number" class="form-control"id="orderProduct1" name="orderProduct1"
                           value="0">
                    <label for="orderProduct2" class="form-label"><?php echo $productNames["product2"]; ?> </label>
                    <input type="number" class="form-control" id="orderProduct2" name="orderProduct2"
                           value="0">
                    <label for="orderProduct3" class="form-label"><?php echo $productNames["product3"]; ?> </label>
                    <input type="number" class="form-control" id="orderProduct3" name="orderProduct3"
                           value="0">
                    <label for="orderProduct4" class="form-label"><?php echo $productNames["product4"]; ?> </label>
                    <input type="number" class="form-control" id="orderProduct4" name="orderProduct4"
                           value="0">
                    <label for="orderProduct5" class="form-label"><?php echo $productNames["product5"]; ?> </label>
                    <input type="number" class="form-control" id="orderProduct5" name="orderProduct5"
                           value="0">

                </div>
            </div>
        </div>
        <input type="submit" name="formSubmit" value="Submit">
    </form>
</div>
<?
{
//write to db
$OrderNumber = "1"; // TODO : Fix to generate new one.
$customerID = "1"; // TODO: Fix to load current customerID
$productID = 5; //TODO: Load Dynamically

$sqlStmt = $conn->prepare("INSERT INTO Orders (OrderID, OrderNumber, CustomerID, ProductID, Quantity) VALUES (:OrderNumber, :CustomerID, :ProductID, :Quantity)
   $sqlStmt->bindParam( 'OrderNumber', "o1");
   $sqlStmt->bindParam( 'CustomerID', "1");
   $sqlStmt->bindParam( 'ProductID', "5");
   $sqlStmt->bindParam( 'Quantity', $productQuantity5);
$sqlStmt->execute();
    }