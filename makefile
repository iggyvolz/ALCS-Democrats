hash:=$(shell git rev-parse --short HEAD)
all: mkdir index blog donate css js
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
push: all
	git checkout gh-pages && mv build/* . && git add * && git commit -m "Update to $(hash)" && git push && git checkout master || git checkout master