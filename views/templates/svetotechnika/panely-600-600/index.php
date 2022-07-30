
<table class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="19" class="st">Растровый 600х600 LED</th>
    </tr>
    <tr class="bordered">
      <th colspan="4" class="title b-white">Характеристики</th>
      <th colspan="3" class="title b-green"><nobr>Евросвет</nobr></th>
      <th colspan="3" class="title b-yellow"><nobr>Optima</nobr></th>
      <th colspan="3" class="title b-blue"><nobr>TNSy</nobr></th>
      <th colspan="3" class="title b-purpur"><nobr>Videx</nobr></th>
      <th colspan="3" class="title b-sea"><nobr>Delux</nobr></th>
    </tr>    
  </thead>
  <tbody>
    <?php foreach($this->data as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
        
        <td field="param1" class="b-red option"><?php echo ($value['param1']==0)?'':$value['param1']; ?></td>
        <td field="param3" class="b-grey option"><?php echo ($value['param3']==0)?'':$value['param3']; ?></td>
        <td field="param2" colspan="2" class="b-yellow black title"><?php echo $this->replace($value['param2']) ?></td>

        <td  field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>
        <td field="name1" class="b-green white option"><?php echo $value['name1'] ?></td>

        <td  field="sku2" class="b-yellow sku"><?php echo $value['sku2'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku2']) ?></td>
        <td field="name2" class="b-yellow white option"><?php echo $value['name2'] ?></td>
        
        <td  field="sku3" class="b-blue sku"><?php echo $value['sku3'] ?></td>
        <td class="b-blue qty"><?php $this->get($value['sku3']) ?></td>
        <td field="name3" class="b-blue white option"><?php echo $value['name3'] ?></td>

        <td  field="sku4" class="b-purpur sku"><?php echo $value['sku4'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku4']) ?></td>
        <td field="name4" class="b-purpur white option"><?php echo $value['name4'] ?></td>

        <td  field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>
        <td field="name5" class="b-sea white option"><?php echo $value['name5'] ?></td>
      </tr>   
    <?php endforeach; ?>
  </tbody>
</table>