<?php $this->load->view('header'); ?>

<div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            检修记录列表
        </div>
        <div class="panel-body">
        <div class="btn-control">
            <a href="<?php echo site_url('maintenance/add'); ?>" class="btn btn-success">新增 检修记录</a> 
        </div>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>序号</th>
                    <th>内部编号</th>
                    <th>检查人</th>
                    <th>检查日期</th>
                    <th>发现问题</th>
                    <th>原因分析</th>
                    <th>整改部门</th>
                    <th>责任人</th>
                    <th>整改期限</th>
                    <th>整改措施</th>
                    <th>整改状态</th>
                    <th>操作</th>
                </tr>
                <?php foreach($lm_maintenance as $l){ ?>
                <tr>
                    <td><?php echo $l['id']; ?></td>
                    <td><?php echo $l['lid']; ?></td>
                    <td><?php echo $l['maintenance_man']; ?></td>
                    <td><?php echo $l['check_date']; ?></td>
                    <td><?php echo $l['problem']; ?></td>
                    <td><?php echo $l['cause']; ?></td>
                    <td><?php echo $l['charge_partment']; ?></td>
                    <td><?php echo $l['charge_man']; ?></td>
                    <td><?php echo $l['deadline']; ?></td>
                    <td><?php echo $l['deal']; ?></td>
                    <td><?php 

                    if($l['status'] == M_STATE_NORMAL){
                        echo '正常检修，未发现问题';
                    }else if($l['status'] == M_STATE_PROBLEM){
                        echo '发现问题，正在整改';
                    }else if($l['status'] == M_STATE_SOVLED){
                        echo '整改完成，问题处理完成';
                    }else{
                        echo '状态不明';
                    }
                    ?></td>
                    <td>
                        <a href="<?php echo site_url('maintenance/edit/'.$l['id']); ?>" class="btn btn-info">编辑</a> 
                        <a href="<?php echo site_url('maintenance/remove/'.$l['id']); ?>" class="btn btn-danger btn-delete">删除</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
        

       
    </div>
</div>

<?php $this->load->view('footer'); ?>



