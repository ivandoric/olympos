group :development do 
guard :livereload do 
watch(%r{.+\.(css|js|html?)$}) 
end  

if File.exists?("./config.rb") 
# Compile on start. 
puts 'compass compile --time --quiet' 
guard :compass do 
watch(%r{(.*)\.s[ac]ss$}) 
end 
end 
end