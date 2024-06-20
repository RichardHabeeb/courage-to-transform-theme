
build:=build
css:= $(build)/assets/css

$(css):
	mkdir -p $(build)/assets/css


node_modules:=node_modules
$(node_modules):
	npm install



$(css)/%.css: less/%.less $(node_modules) $(css) less/*.less
	npm run --silent lessc -- $< > $@

$(css)/%.min.css: less/%.less $(node_modules) $(css) less/*.less
	npm run --silent lessc -- --clean-css $< > $@



clean:
	rm -rf node_modules build

all: style.css
.PHONY: all
