 <div class="lift-tab col-md-offset-1 col-md-11">
   
   <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#escalator" aria-controls="escalator" role="tab" data-toggle="tab">浮梯</a></li>
      <li role="presentation"><a href="#elevator" aria-controls="elevator" role="tab" data-toggle="tab">直梯</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="escalator">
        <?php if(isset($escalators)){

          foreach ($escalators as $key => $lift) { ?>

            <span><?php echo $lift['lid']; ?></span>

          <?php }


          } ?>
      </div>
      <div role="tabpanel" class="tab-pane" id="elevator">
        

      </div>
    </div>
 </div>
