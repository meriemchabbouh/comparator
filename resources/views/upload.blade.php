<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    Product name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Product photos (can attach more than one):
    <br />
    <input type="file" name="photos[]" accept="image/*" multiple />
    <br /><br />
    <input type="submit" value="Upload" />
</form>
 