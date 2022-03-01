<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> xin chao cac ban </h1>
    @php
        $message= 'dat hang thanh cong'
    @endphp
    {{-- Day la cau lenh cmt --}}

@include('parts.notice')

</body>

<script>
                   Hello, @{{$name}}
</script>

</html>
