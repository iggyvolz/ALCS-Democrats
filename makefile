all: mkdir index blog donate css
mkdir:
	rm -Rf build
	mkdir -p build
index:
	php index.php > build/index.html
blog:
	php blog.php > build/blog.html
donate:
	php donate.php > build/donate.html
css:
	cp main.css build/main.css