all: mkdir index blog css
mkdir:
	rm -Rf build
	mkdir -p build
index:
	php index.php > build/index.html
blog:
	php blog.php > build/blog.html
css:
	cp main.css build/main.css