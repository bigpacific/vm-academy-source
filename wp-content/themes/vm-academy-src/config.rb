# Require any additional compass plugins? Uncomment the following line
# require "/Library/Ruby/Gems/1.8/gems/compass-X.XX.X/lib/compass-plugin-name.rb";

# Set this to the root of your project when deployed:
http_path = "/"

# Set the images directory relative to your http_path or change
# the location of the images themselves using http_images_path:
http_images_dir = "/images"

# Production Assets URL
http_images_path = "http://localhost/images"

# Compass will automatically add cache busters to your images based on image timestamps. 
# This will keep browser caches from displaying the wrong image if you change the image but not the url. 
# If you don’t want this behavior, it's easy to configure or disable:
# UNCOMMENT THE NEXT THREE LINES
#asset_cache_buster do |http_path, real_path|
#  nil
#end

# Project Assets Location
css_dir = "/"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"

# Development
output_style = :expanded
environment = :development

# Production
# output_style = :compressed
# environment = :production

# To enable relative paths to assets via compass helper functions Uncomment the following line:
relative_assets = true

line_comments = false
color_output = false

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass scss scss && rm -rf sass && mv scss sass
output_style = :expanded # by Compass.app 