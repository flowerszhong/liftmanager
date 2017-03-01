 <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo asset_file_url('img/admin-icon.png'); ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $this->display_name; ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> 在线
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">
                <?php if($this->admin_power>1){ ?>

                <li class="<?php echo activate_menu('admin') . ' panel'; ?>">
                    <a href="<?php echo site_url('admin/index'); ?>"  >
                        <i class="icon-user"></i> 管理员列表
                    </a>                   
                </li>



                <li class="<?php echo activate_menu('station') . ' panel'; ?>">
                    <a href="<?php echo site_url('station/index'); ?>">
                        <i class="icon-tasks"> </i> 车站管理    
                    </a>
                </li>
                <li class="<?php echo activate_menu('lift') . ' panel'; ?>">
                    <a href="<?php echo site_url('lift/index') ?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-list-ol"></i> 电梯管理
                    </a>
                </li>

                <?php } ?>
                

                <li class="<?php echo activate_menu('escalator') . ' panel'; ?>">
                    <a href="<?php echo site_url('escalator/index'); ?>">
                        <i class="icon-list-ul"></i> 扶梯基础资料
                    </a>
                </li>


                <li class="<?php echo activate_menu('elevator') . ' panel'; ?>">
                    <a href="<?php echo site_url('elevator/index'); ?>">
                        <i class="icon-list-ul"></i> 垂直电梯基础资料
                    </a>
                </li>


                <li class="<?php echo activate_menu('maintenance') . ' panel'; ?>">
                    <a href="<?php echo site_url('maintenance/index'); ?>">
                        <i class="icon-list-ul"></i> 电梯故障维修记录
                    </a>
                </li>
                <li class="<?php echo activate_menu('setting') . ' panel'; ?>">
                    <a href="<?php echo site_url('setting/index'); ?>">
                        <i class="icon-cogs"></i> 个人设置
                    </a>
                </li>
                <li><a href="<?php echo site_url('login/logout'); ?>"><i class="icon-signin"></i> 退出登录 </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->

