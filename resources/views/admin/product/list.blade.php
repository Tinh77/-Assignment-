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

</head>
<body>
<div class="container">
    <div class="row">
        <h1>Login Category</h1>
    </div>
    <div class="row">
        <ul>
            @foreach($list_obj as $obj)
                <li>{{$obj -> name}}
                    <img src="{{$obj -> image}}" alt="" width="150px">
                    <a href="/admin/product/{{$obj -> id}}/edit">Edit</a>
                    <a href="#/admin/product/{{$obj -> id}}" id="{{$obj -> id}}" class="delete-link">Delete</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var deleteLinks = document.getElementsByClassName("delete-link");
    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].onclick = function () {
            var choice = confirm("Bạn chắc có muốn xóa sản phẩm này không");
            if (choice) {
                var id = this.id;
                var xhttp = new XMLHttpRequest();
                var data = '_token={{csrf_token()}}';
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(JSON.parse(this.responseText).message);
                        window.location.reload();
                    }
                }
                xhttp.open("DELETE", "http://localhost:8000/admin/product/" + id, true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(data);
            }
        }
    }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
</body>
</html>