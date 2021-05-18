<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Dashboard</title>
</head>
<body>
    <h1>Post Blog</h1>
    <form action="/post" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="">
        <label for="post-type">Post type</label>
        <input type="text" name="post-type" id="">
        <textarea class="editor" name="post-content"></textarea>
        <input type="submit" value="Submit">
    </form>
    <h1>View Blog</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Post-type</th>
            <th>Description</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->post_type }}</td>
            <td>{!! Str::limit($post->post, 100, $end='.......') !!}</td>
        </tr>
        @endforeach
    </table>
    <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
    <script src= {{ asset('ckeditor5/build/ckeditor.js') }}></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> --}}
    <script>ClassicEditor
        .create( document.querySelector( '.editor' ), {
            
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'imageInsert',
                    'alignment'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
            
            
        } )
        .then( editor => {
            window.editor = editor;
    
            
            
            
    
            
            
            
        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.warn( 'Build id: o6j28yqge3dd-wwwnxnz4ps61' );
            console.error( error );
        } );
</script>
</body>
</html>