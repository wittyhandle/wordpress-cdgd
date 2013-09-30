include_recipe "wordpress"

directory "#{node['wordpress']['dir']}/wp-content" do
  recursive true
  action :delete
end

#ln -s /wp-share/wp-content /var/www/wordpress/wp-content
link "#{node['wordpress']['dir']}/wp-content" do
  to "/wp-share"
  action :create
end

# provide the .htaccess file for Wordpress to use
cookbook_file "#{node['wordpress']['dir']}/.htaccess" do
  source ".htaccess"
  mode 0666
  action :create_if_missing
end