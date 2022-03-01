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


    <!-- @for ($i = 0; $i <= 10; $i++)
<p> Phan tu thu {{ $i }}</p>
@endfor
                                      <?php $i = 0; ?>
                                      //viet vong lap while
                                      @while ($i <= 10)
<p>Phan tu thu {{ $i }}</p>
                                                         @php $i++; @endphp
@endwhile -->
    <!-- @if ($number >= 10)
<p> Day la gia tri hop le</p>
@else
<p> gia tri khong hop le</p>
@endif -->
    <!-- @switch ($number)
    @case (1)
        <p> So thu nhat</p>
    @break

    ;

    @default
        <p> so con lai</p>
@endswitch -->
    @php
        echo $number - 33;
    @endphp
    {{-- Day la cau lenh cmt --}}



</body>

<script>

</script>

</html>
