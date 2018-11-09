---
extends: _layouts.post
section: content
title: Building static websites using Jigsaw
cover: programming-cover.jpg
date: 2018-11-12
tags: [Web Development, Site Generator, Jigsaw]
read: 5
---
[Jigsaw](https://jigsaw.tighten.co) is a framework for building modern _static_ websites, using the similar tooling that powers [Laravel](https://laravel.com) application. It supports Blade templating (just as same as Laravel) along with the markdown, which is great for content-driven pages (like article, blog post, or documentation pages). Jigsaw makes it very simple to create a blade layout and fill it in with markdown. It makes use of [laravel-mix](https://github.com/jeffreyway/laravel-mix) to compile assets. 🙂

Let's [get started](#started) with our first static website built with jigsaw.

![Tech Blog Image](/assets/images/covers/gnome-cover.png)

---

## Getting Started                  {#started}

Initialise the jigsaw project following these steps:

#### Step 1: Create Project Directory
```bash
mkdir my-site && cd my-site
```

#### Step 2: Install Jigsaw using Composer
```bash
composer require tightenco/jigsaw
```

#### Step 3: Scaffold default Jigsaw Project
```bash
./vendor/bin/jigsaw init
```

There are somethings you can do after this guide:
- First thing
- Second Thing
- Third Thing
- Fourth Thing

```php
public function getTestDone($test)
{
    return $test->done() || $this->test->done();
}
```

There are somethings you can do after this guide:
1. First thing
    1. tehre
    2. here
2. Second Thing
3. Third Thing
4. Fourth Thing

some `inline` code 

Thank you for coming along. 🙂