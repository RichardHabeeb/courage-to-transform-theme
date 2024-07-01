
build:=build
$(build):
	@mkdir -p $@

node_modules:=node_modules
$(node_modules):
	@npm install


$(build)/style.css: less/style.less $(node_modules) $(build) less/*.less
	@echo "[LESS] $@"
	@npm run --silent lessc -- $< > $@.max.css
	@npm run --silent cleancss -- -O2 $@.max.css > $@


theme:=$(build)/theme.zip
$(theme): $(build)/style.css $(build)
	@rm -f $@
	@echo "[ZIP] style.css"
	@cd $(build) && zip -v theme.zip style.css
	@echo "[ZIP] assets"
	@zip -urv $(build)/theme assets
	@echo "[ZIP] backend"
	@cd backend && zip -urv ../$(build)/theme *
	@zip -uv $(build)/theme theme.json *



clean:
	@rm -rf node_modules build $(theme)

all: $(theme)
.PHONY: all
