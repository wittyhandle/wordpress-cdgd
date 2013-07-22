name "wordpress"
description "Nodes that run php with apache and mysql"
run_list("recipe[yum]", "recipe[vim]", "recipe[ntp]", "recipe[mike_iptables]", "recipe[mike_apache]", "recipe[php]", "recipe[apache2::mod_php5]", "role[database]")
