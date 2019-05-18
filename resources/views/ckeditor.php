<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
    CKEDITOR.config.extraPlugins = 'justify';
    CKEDITOR.config.extraPlugins = 'easyimage';
    CKEDITOR.config.extraPlugins = 'image2';
    CKEDITOR.config.extraPlugins = 'page2images';
</script>
</body>
</html>
