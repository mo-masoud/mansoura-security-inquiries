<!DOCTYPE html>
<html>

<head>
    <title>جاري التحويل...</title>
</head>

<body>
    <div style="text-align: center; margin-top: 20%;">
        <h1>جاري تحويلك إلى البوابة الإلكترونية للإستعلامات</h1>
        <h2>إذا لم يتم تحويلك تلقائياً، اضغط <a href="{{ $url }}">هنا</a></h2>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            // Open the URL in a new tab
            window.open('{{ $url }}', '_blank');

            // Redirect the user to the dashboard after 1 second
        }
    </script>
</body>

</html>
