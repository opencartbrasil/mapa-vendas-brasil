<?php
$this->load->model('user/user_group');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'dashboard/map_brazil');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'dashboard/map_brazil');