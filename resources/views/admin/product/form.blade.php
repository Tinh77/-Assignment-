<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
            integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Product From</h1>
    </div>
    <div class="row">
        <form action="/admin/product" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <lable>Name  : </lable>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <lable>Price : </lable>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <lable >Category : </lable>
                <select name="categoryId" id="">
                    <option value="1">Lợn</option>
                    <option value="2">LápTop</option>
                    <option value="3">Iphone</option>
                    <option value="4">Ipad</option>
                    <option value="4">Bánh</option>
                </select>
            </div>
            <div class="form-group">
                <lable>Description : </lable>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
                <lable>Image: </lable>
                <input type="text" name="image" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>

</body>
</html>