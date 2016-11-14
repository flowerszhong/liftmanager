 <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo asset_file_url('img/admin-icon.png'); ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo site_url('admin/index'); ?>" >
                        <i class="icon-user"></i> 管理员列表
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="<?php echo site_url('station/index'); ?>">
                        <i class="icon-tasks"> </i> 车站管理    
                    </a>
                </li>
                <li class="panel ">
                    <a href="<?php echo site_url('lift/index') ?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-list-ol"></i> 电梯管理
                    </a>
                </li>

                <li class="panel">
                    <a href="<?php echo site_url('maintenance/index'); ?>">
                        <i class="icon-list-ul"></i> 检修记录
                    </a>
                </li>
                <li class="panel">
                    <a href="#">
                        <i class="icon-cogs"></i> 个人设置
                    </a>
                </li>
                <li><a href="login.html"><i class="icon-signin"></i> 退出登录 </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->

