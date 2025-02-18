# Android APK Builder

هذا المشروع يسمح لك برفع مشروع Android (Java/Kotlin) بصيغة ZIP وتحويله إلى ملف APK تلقائيًا.

## كيفية الاستخدام
1. قم برفع ملف المشروع عبر `form.html` أو باستخدام `index.php` مباشرة.
2. سيتم فك الضغط وتشغيل `gradlew assembleDebug` لإنشاء APK.
3. عند نجاح العملية، ستحصل على رابط تحميل ملف APK.

## متطلبات التشغيل
- استضافة تدعم Docker (مثل Railway).
- Java JDK 17+.
- Gradle وAndroid SDK مثبتان.
