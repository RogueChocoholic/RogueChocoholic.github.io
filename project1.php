<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert | Update | Delete | Search</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bg">
        <div class="container">
            <div class="contentContainer row">
                <div class="col-md-8 col-lg-5 col-10 offset-1 offset-md-2 offset-lg-1">
                    <form action="insert.php" method="POST">
                        <div class="d-flex justify-content-center mt-5">
                            <div class="insertContainer shadow rounded-4">
                                <h2 class="offset-3 mt-3">Register Product</h2>

                                <div class="row mt-5 ">
                                    <p class="col-4 text-end">Item Name</p>
                                    <div class="col-6">
                                        <input type="text" class="form-control formHeightSet" name="item_name">
                                    </div>
                                </div>

                                <div class="row mt-3 ">
                                    <p class="col-4 text-end">Brand Name</p>
                                    <div class="col-6">
                                        <input type="text" class="form-control formHeightSet" name="brand_name">
                                    </div>
                                </div>

                                <div class="row mt-3 ">
                                    <p class="col-4 text-end">Category</p>
                                    <div class="col-6">
                                        <input type="text" class="form-control formHeightSet" name="category">
                                    </div>
                                </div>

                                <div class="row mt-3 ">
                                    <p class="col-4 text-end">Qty</p>
                                    <div class="col-6">
                                        <input type="text" class="form-control formHeightSet" name="qty">
                                    </div>
                                </div>

                                <div class="row mt-3 ">
                                    <p class="col-4 text-end">Price</p>
                                    <div class="col-6">
                                        <input type="text" class="form-control formHeightSet" name="price">
                                    </div>
                                </div>

                                <button class="btn btn-success offset-5 col-5 mt-5" type="submit">Add Item</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-lg-5 col-md-8 col-10 offset-1 offset-md-2 offset-lg-0">
                    <form action="update.php" method="POST">
                        <div class="position-block">
                            <div class="d-flex justify-content-center ">
                                <div class="updateContainer mt-5 shadow rounded-4">
                                    <h2 class="offset-3 mt-3">Update Items</h2>

                                    <div class="row mt-5 ">
                                        <p class="col-4 text-end">Item Name</p>
                                        <div class="col-6">
                                            <input type="text" class="form-control formHeightSet" name="item_name">
                                        </div>
                                    </div>

                                    <div class="row mt-3 ">
                                        <p class="col-4 text-end">Property</p>
                                        <div class="col-6">
                                            <select class="form-select" aria-label="Default select example" name="property">
                                                <option value="1">Item Name</option>
                                                <option value="2">Brand Name</option>
                                                <option value="3">Category</option>
                                                <option value="3">Qty</option>
                                                <option value="3">Price</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-3 ">
                                        <p class="col-4 text-end">Value</p>
                                        <div class="col-6">
                                            <input type="text" class="form-control formHeightSet" name="value">
                                        </div>
                                    </div>

                                    <a class="btn btn-warning col-5 offset-5 mt-5" href="#scrollspytest" type="submit">Update</a>
                                </div>
                            </div>

                    </form>

                    <form action="delete.php" method="POST">
                        <div class="position-block">
                            <div class="d-flex justify-content-center">
                                <div class="deleteContainer mt-1 shadow rounded-4">

                                    <div class="row d-flex align-items-center">
                                        <h2 class="offset-2 mt-1 col-6" id="scrollspytest">Delete Item</h2>
                                        <button class="btn btn-danger btnSizeReduce col-2" type="submit">Delete</button>
                                    </div>

                                    <div class="row mt-2 ">
                                        <p class="col-4 text-end">Item Name</p>
                                        <div class="col-6">
                                            <input type="text" class="form-control formHeightSet" name="item_name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </form>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center">
                <div>@kovi practice</div>
            </div>
        </div>


    </div>
    </div>

</body>

</html>