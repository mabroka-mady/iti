<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<body>
<div class="container">
<form>
    <div class="form-group">
        <label for="eil1">الاسم</label>
        <input type="text" class="form-control" id="exl1" name="">
    </div>
    <div class="form-group">
        <label for="eil1">تاريخ الميلاد</label>
        <input type="text" class="form-control" id="exl1" name="">
    </div>
    <div class="form-group">
        <label for="gender">النوع</label>

        <div class="row">
            <input type="radio" class="" id="name" name="gender" value"m"/>ذكر
        <input type="radio" class="" id="name" name="gender"value"f"/>انثى
    </div>
    <div class="form-group">
        <label for="name">الحاله الاجتماعيه</label>
        <select name="status" id="status" class="from.control">
            <option value="s" selected> اعزب</option>
            <option value="m">متزوج</option>
            <option value="d">مطلق</option>
            <option value="w"> ارمل </option>
        </select>
    </div>

    <div class="form-group"id="wives-no">
        <label for="x">عدد الزوجات</label>
        <input type="number" class="form-control" id="x" name="x">
    </div>

    <div class="form-group" id="husband_name" >
        <label for="name">اسم الزوج</label>
        <input type="text" class="form-control" id="name" name="" />
    </div>

    <div class="form-group">
        <label for="children_no">عدد الاولاد</label>
        <input type="number" class="form-control" id="children_no" name="children_no"/>
    </div>

    <div class="form-group">
        <label for="eil1">اسماء الزوجات</label>
        <input type="number" class="form-control" id="wives" name="wives" value="1"max="4">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>