# Pattern Images

Place block pattern default images here. These images should be added in the
patterns's PHP file like this:

```php
<img src="<?php echo get_theme_file_uri( 'assets/images/patterns/image.png' ); ?>" alt="" class="wp-image-49" width="225"/>
```

Using a local image asset ensures that the default image is available when
the pattern is added to a page even if ther user deletes the image from the
media library.
