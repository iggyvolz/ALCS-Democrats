all: index blog
index:
	php index.php > index.html
blog:
	php blog.php > blog.html