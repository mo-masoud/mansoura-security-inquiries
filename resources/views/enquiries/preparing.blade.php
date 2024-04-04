<!DOCTYPE html>
<html>

<head>
    <title>جاري التحويل...</title>
</head>

<body>
    <div style="text-align: center; margin-top: 20%;">
        <h1>جاري تحويلك إلى البوابة الإلكترونية للإستعلامات</h1>
        <h2>إذا لم يتم تحويلك تلقائياً، اضغط <a style="color: blue;" onclick="redirect()" href="#">هنا</a></h2>
    </div>

    <script type="text/javascript">
        function redirect() {
            window.open('{{ $url }}', '_blank');

            setTimeout(function() {
                window.location.href = '/';
            }, 1000);
        }
        // Redirect to the portal after document is loaded
        document.addEventListener('DOMContentLoaded', function() {
            window.open('{{ $url }}', '_blank');
        });
    </script>
</body>

</html>
