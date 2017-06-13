<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <body>
        <textarea cols="80" id="editor1" name="editor1" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
        <?php
        // Include CKEditor class.
        include_once "../../ckeditor.php";
        // Create class instance.
        $CKEditor = new CKEditor();
        // Path to CKEditor directory, ideally instead of relative dir, use an absolute path:
        //   $CKEditor->basePath = '/ckeditor/'
        // If not set, CKEditor will try to detect the correct path.
        $CKEditor->basePath = '../../';
        // Replace textarea with id (or name) "editor1".
        $CKEditor->replace("editor1");
        ?>
    </body>
</html>
