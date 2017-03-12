 <style>
#lifts-tab span{
  border:1px solid #ddd;
  padding: 5px;
  margin-right: 5px;
  cursor: pointer;
}

#lifts-tab span:hover,#lifts-tab span.selected{
  background-color: gray;
  color:#fff;
}
 </style>

 <div class="lift-tab col-md-offset-1 col-md-11" id="lifts-tab">
   
   <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#escalator" aria-controls="escalator" role="tab" data-toggle="tab">扶梯</a></li>
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
        <?php if(isset($elevators)){

          foreach ($elevators as $key => $lift) { ?>

            <span><?php echo $lift['lid']; ?></span>

          <?php }


          } ?>

      </div>
    </div>
 </div>
