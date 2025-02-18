<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحويل مشروع Android إلى APK</title>
</head>
<body>
    <h2>رفع ملف مشروع Android (ZIP)</h2>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="zip_file" required>
        <button type="submit">رفع وبناء APK</button>
    </form>
    <p id="status"></p>
    <script>
        document.getElementById('uploadForm').onsubmit = async function(event) {
            event.preventDefault();
            let formData = new FormData(this);
            document.getElementById('status').innerText = 'جاري الرفع...';
            
            let response = await fetch('index.php', {
                method: 'POST',
                body: formData
            });

            let result = await response.json();
            if (result.success) {
                document.getElementById('status').innerHTML = `تم الإنشاء! <a href="${result.apk}" download>تحميل APK</a>`;
            } else {
                document.getElementById('status').innerText = 'فشل في بناء APK!';
            }
        };
    </script>
</body>
</html>
