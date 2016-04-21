hash:=$(shell git rev-parse --short HEAD)
all: mkdir index blog donate css register join facebook images twitter
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
register:
	php register.php > build/register.html
join:
	php join.php > build/join.html
facebook:
	cp facebook.html build/facebook.html
	cp -R facebook_files build/facebook_files
twitter:
	cp twitter.html build/twitter.html
	cp -R twitter_files build/twitter_files
images:
	cp -R img build/img
push: all
	git checkout gh-pages && mv build/* . && git add * && git commit -m "Update to $(hash)" && git push && git checkout master || git checkout master
