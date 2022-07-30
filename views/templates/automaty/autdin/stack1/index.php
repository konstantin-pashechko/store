
<div class="wrapper" style="
padding-top: 212px;
">
  <div style="
  position: fixed;
  top: 56px;
  background: #fff;
  padding-right: 15px;
  ">
    <h2>Автоматические выключатели на дин рейку (евростандарт)</h2>
<?php $this->nav() ?>
    <table id = "<?php echo $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-bottom: 0;">
      <thead>
        <tr>
          <th class="b-dark red title" colspan="16">
            Schneider&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ETI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            EATON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            General Electric
          </th>
        </tr>
        <tr>
          <th class="b-dark title">#</th>
          <th class="b-green black title"colspan="6">Schneider</th>
          <th class="b-blue black title" colspan="2">ETI</th>
          <th class="b-purpur black title" colspan="2">EATON</th>
          <th class="b-yellow black title" colspan="4">General Electric</th>
          <th class="b-dark title">#</th>
        </tr>

        <tr class="bordered">
          <th class="b-dark"></th>
          <th class="b-dgreen option" colspan="2">ВА-63</th>
          <th class="b-lgreen option" colspan="2">RESI9</th>
          <th class="b-dgreen option" colspan="2">IK60</th>        
          <th class="b-blue option" colspan="2">ETIMAT</th>
          <th class="b-purpur option" colspan="2">HL4</th>
          <th class="b-dyellow option" colspan="2">DG</th>
          <th class="b-lyellow option" colspan="2">G</th>
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
          <td class="b-red"><span field="param1"><?php echo $value['param1'];?></span>p<span field="param3"><?php echo $value['param3'] ?></span>A</td>
          <td class="b-dgreen sku" field="sku1"><?php echo $value['sku1']; ?></td><td class="b-dgreen"><span class="qty"><?php $this->get($value['sku1']) ?></span></td>
          <td class="b-lgreen sku" field="sku2"><?php echo $value['sku2']; ?></td><td class="b-lgreen"><span class="qty"><?php $this->get($value['sku2']) ?></span></td>
          <td class="b-dgreen sku" field="sku3"><?php echo $value['sku3']; ?></td><td class="b-dgreen"><span class="qty"><?php $this->get($value['sku3']) ?></span></td>
          <td class="b-blue sku" field="sku6"><?php echo $value['sku6']; ?></td><td class="b-blue"><span class="qty"><?php $this->get($value['sku6']) ?></span></td>
          <td class="b-purpur sku" field="sku7"><?php echo $value['sku7']; ?></td><td class="b-purpur"><span class="qty"><?php $this->get($value['sku7']) ?></span></td>
          <td class="b-dyellow sku" field="sku4"><?php echo $value['sku4']; ?></td><td class="b-dyellow"><span class="qty"><?php $this->get($value['sku4']) ?></span></td>
          <td class="b-lyellow sku" field="sku5"><?php echo $value['sku5']; ?></td><td class="b-lyellow"><span class="qty"><?php $this->get($value['sku5']) ?></span></td>
          <td class="b-red"><span field="param1"><?php echo $value['param1'].'p';?></span><span field="param3"><?php echo $value['param3'].'A';?></span></td>            
        </tr>
      <?php endforeach; ?>
    </tbody>    
<!--     <thead>
      <tr>
        <th class="b-dark"></th>
        <th class="b-green option" colspan="6">Schneider</th>        
        <th class="b-blue option" colspan="2">ECOMAT</th>
        <th class="b-purpur option" colspan="2">EATON</th>
        <th class="b-yellow option" colspan="4">General Electric</th>
        <th class="b-dark"></th>            
      </tr>
    </thead> -->
  </table>
</div>