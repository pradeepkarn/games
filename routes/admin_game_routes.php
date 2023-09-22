<?php 

$admin_game_routes =[
// games
'/admin/game/create' => 'Game_ctrl@create@name.gameCreate',
'/admin/game/create/save-by-ajax' => 'Game_ctrl@save@name.gameStoreAjax',
'/admin/game/list' => 'Game_ctrl@list@name.gameList',
'/admin/game/trash-list' => 'Game_ctrl@trash_list@name.gameTrashList',
'/admin/game/edit/{id}' => 'Game_ctrl@edit@name.gameEdit',
'/admin/game/delete-more-img-ajax' => 'Game_ctrl@delete_more_img@name.gameDeleteMoreImgAjax',
'/admin/game/trash/{id}' => 'Game_ctrl@move_to_trash@name.gameTrash',
'/admin/game/restore/{id}' => 'Game_ctrl@restore@name.gameRestore',
'/admin/game/delete/{id}' => 'Game_ctrl@delete_trash@name.gameDelete',
'/admin/game/edit/{id}/save-by-ajax' => 'Game_ctrl@update@name.gameUpdateAjax',
'/admin/game/toggle-marked-page' => 'Game_ctrl@toggle_trending@name.gameToggleMarked',
];