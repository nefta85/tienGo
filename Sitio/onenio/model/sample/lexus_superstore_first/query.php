<?php 

$query['pavmegamenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `code`='pavmegamenu' and `key` = 'pavmegamenu_module'";

$query['pavmegamenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `code`='pavmegamenu_params' and `key` = 'params'";
$query['pavmegamenu'][] =  " 
INSERT INTO `".DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 0, 'pavmegamenu_params', 'pavmegamenu_params', '[{\"submenu\":1,\"subwidth\":700,\"id\":90,\"align\":\"aligned-left\",\"group\":0,\"cols\":1,\"rows\":[{\"cols\":[{\"widgets\":\"wid-25\",\"colwidth\":3};
";

$query['pavverticalmenu'][]  = "DELETE FROM `".DB_PREFIX ."setting` WHERE `code`='pavverticalmenu_params' and `key` = 'params'";
$query['pavverticalmenu'][] =  " 
INSERT INTO `".DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 0, 'pavverticalmenu_params', 'params', '[{\"submenu\":1,\"subwidth\":600,\"cols\":1,\"group\":0,\"id\":43,\"rows\":[{\"cols\":[{\"widgets\":\"wid-7\",\"colwidth\":6},{\"widgets\":\"wid-8\",\"colwidth\":6}]},{\"cols\":[{\"widgets\":\"wid-9\",\"colwidth\":6},{\"widgets\":\"wid-11\",\"colwidth\":6,\"colclass\":\"hidden-class\"}]}]},{\"submenu\":1,\"subwidth\":500,\"id\":44,\"cols\":1,\"group\":0,\"rows\":[{\"cols\":[{\"widgets\":\"wid-12\",\"colwidth\":12}]}]},{\"submenu\":1,\"cols\":1,\"group\":0,\"id\":46,\"rows\":[{\"cols\":[{\"type\":\"menu\",\"colwidth\":12}]}]},{\"submenu\":1,\"cols\":1,\"group\":0,\"id\":49,\"rows\":[{\"cols\":[{\"type\":\"menu\",\"colwidth\":12}]}]},{\"submenu\":1,\"cols\":1,\"group\":0,\"id\":52,\"rows\":[{\"cols\":[{\"type\":\"menu\",\"colwidth\":12}]}]}]', 0);
";

$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."layout_route` (`layout_route_id`, `layout_id`, `store_id`, `route`) VALUES
(33, 12, 0, 'pavblog/%');
";
$query['pavblog'][] ="
INSERT INTO `".DB_PREFIX ."layout` (`layout_id`, `name`) VALUES
(14, 'Pav Blog');
";
?>

