# Test-Images `1.0.0-beta`

PHP script which generates unique random images for testing uploaders, etc.
The purpose of this is to generate images which will have a unique checksum for
systems that care about this type of thing.  It is VERY Likely that the generated
images will be unique.

## Usage

Navigate to your clone.  Run index.php from the CLI.  You should get output like this:

```
$ php index.php

START!
Moving previous batch to old/
Generating fresh images.......................
All set, thank you!
```

Add arguments for scale, and also count.  For example, this will generate 5 (default) images at 640x480:

```php index.php 640 480```

Add arguments for scale, and also count.  For example, this will generate ten images at 320x240:

```php index.php 320 240 10```

## License

The MIT License (MIT)

Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
