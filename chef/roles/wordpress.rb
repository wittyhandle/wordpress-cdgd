name "wordpress"
description "Nodes that run php with apache and mysql"
run_list("role[base]", "role[php]", "recipe[mike_apache]", "recipe[apache2::mod_php5]", "role[database]")