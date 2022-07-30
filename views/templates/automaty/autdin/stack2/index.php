<div class="wrapper">
  <div class="box" style="
  padding-top: 212px;
  ">
    <div style="
    position: fixed;
    top: 56px;
    background: #fff;
    padding-right: 260px;
    ">
      <h2>Автоматические выключатели на дин рейку (евростандарт)</h2>
      <?php $this->nav() ?>
      <table id = "<?php echo $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-bottom: 0;">
        <thead>
          <tr>
            <th class="b-dark red title" colspan="10">
              IEK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              АСКО&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              E-NEXT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              КЭАЗ
            </th>
          </tr>
          <tr>
            <th class="b-dark title">#</th>
            <th class="b-purpur black title" colspan="2">IEK</th>
            <th class="b-green black title"colspan="2">АСКО</th>         
            <th class="b-blue black title" colspan="2">E-NEXT</th>
            <th class="b-yellow black title" colspan="2">КЭАЗ</th>          
            <th class="b-dark title">#</th>
          </tr>

          <tr class="bordered">
            <th class="b-dark"></th>
            <th class="b-purpur option" colspan="2">ВА 47-29</th>
            <th class="b-green option" colspan="2">ВА-2017(2001)</th>
            <th class="b-blue option" colspan="2">e.mcb.st</th>
            <th class="b-yellow option" colspan="2">ВМ-63</th>          
            <th class="b-dark"></th>
          </tr>
        </thead>  
      </table>
    </div>
    <table class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <tbody>
        <?php //var_dump($this->data);die; ?>
        <?php foreach($this->data as $key => $value): ?>
          <tr id="<?php echo $value['id'] ?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){ echo 'class="bordered"';}; ?>>
            <td class="b-red"><span field="param1"><?php echo $value['param1'];?></span>p<span field="param3"><?php echo $value['param3'];?></span>A</td>
            <td class="b-purpur sku" field="sku4"><?php echo $value['sku4']; ?></td><td class="b-purpur"><span class="qty"><?php $this->get($value['sku4']) ?></span></td>
            <td class="b-green sku" field="sku1"><?php echo $value['sku1']; ?></td><td class="b-green"><span class="qty"><?php $this->get($value['sku1']) ?></span></td>            
            <td class="b-blue sku" field="sku3"><?php echo $value['sku3']; ?></td><td class="b-blue"><span class="qty"><?php $this->get($value['sku3']) ?></span></td>
            <td class="b-yellow sku" field="sku2"><?php echo $value['sku2']; ?></td><td class="b-yellow"><span class="qty"><?php $this->get($value['sku2']) ?></span></td>
            <td class="b-red"><span field="param1"><?php echo $value['param1'].'p';?></span><span field="param3"><?php echo $value['param3'].'A';?></span></td>            
          </tr>
        <?php endforeach; ?>
      </tbody>    
<!--       <thead>
        <tr>
          <th class="b-dark"></th>
          <th class="b-purpur black title" colspan="2">IEK</th>
          <th class="b-green black title"colspan="2">АСКО</th>         
          <th class="b-blue black title" colspan="2">E-NEXT</th>
          <th class="b-yellow black title" colspan="2">КЭАЗ</th>
          <th class="b-dark"></th>            
        </tr>
      </thead> -->
    </table>
  </div>
</div>