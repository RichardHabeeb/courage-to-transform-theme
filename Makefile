
build:=build
css:= $(build)/assets/css

$(css):
	mkdir -p $(build)/assets/css


node_modules:=node_modules
$(node_modules):
	npm install



$(css)/%.css: less/%.less $(node_modules) $(css)
	npm run --silent lessc -- $< > $@

$(css)/%.min.css: less/%.less $(node_modules) $(css)
	npm run --silent lessc -- --clean-css $< > $@

$(node_modules)/normalize.css/normalize.css: $(node_modules)
$(css)/normalize.min.css: $(node_modules)/normalize.css/normalize.css $(css)
	npm run --silent lessc -- --clean-css $< > $@





clean:
	rm -rf node_modules build

all: style.css
.PHONY: all
