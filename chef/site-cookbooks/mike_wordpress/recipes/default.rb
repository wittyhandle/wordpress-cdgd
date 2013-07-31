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