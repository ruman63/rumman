---
extends: _layouts.post
section: content
title: Building static websites using Jigsaw
date: 2018-11-12
read: 5
---

[Jigsaw](https://jigsaw.tighten.co) is a framework for building modern _static_ websites, using the similar tooling that powers [Laravel](https://laravel.com) application. It supports Blade templating (just as same as Laravel) along with the markdown, which is great for content-driven pages (like article, blog post, or documentation pages). Jigsaw makes it very simple to create a blade layout and fill it in with markdown. It makes use of [laravel-mix](https://github.com/jeffreyway/laravel-mix) to compile assets.

Let's get started with our first static website built with jigsaw.

---

## Getting Started

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