<!--UZO-->
<table id="<?php echo $this->view ?>_uzo" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="17" class="title">УЗО</th>
    </tr>
    <tr class="bordered">
      <th scope="row" class="b-red black title">Полюсов</th>
      <th colspan="2" scope="row" class="b-blue black title">Производитель</th>

      <th colspan="2" class="b-green option">16A</th>
      <th colspan="2" class="b-yellow option">25A</th>
      <th colspan="2" class="b-purpur option">32A</th>
      <th colspan="2" class="b-grey option">40A</th>
      <th colspan="2" class="b-sea option">63A</th>
      <th colspan="2" class="b-yellow option">80A</th>
      <th colspan="2" class="b-green option">100A</th>
    </tr>  
  </thead>
  <tbody>
    <?php foreach ($this->data['uzo'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['uzo'][$key+1]['param2']){echo 'class="bordered"';} ?>>

        <td field="param2" colspan="
        " class="b-red option"><?php echo $value['param2'] ?></td>
        <td colspan="2" field="param4" class="b-blue name"><?php echo $this->replace($value['param4']) ?></td>

        <td field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="b-yellow sku"><?php echo $value['sku2'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="b-purpur sku"><?php echo $value['sku3'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="b-grey sku"><?php echo $value['sku4'] ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>

        <td field="sku6" class="b-yellow sku"><?php echo $value['sku6'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku6']) ?></td>

        <td field="sku7" class="b-green sku"><?php echo $value['sku8'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku8']) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!--Дифф. автоматы-->
<table id="<?php echo $this->view ?>_dif" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="17" class="title">Дифф. автоматы</th>
    </tr>
    <tr class="bordered">
      <th class="b-red black title">Полюсов</th>
      <th colspan="2" class="b-blue black title">Производитель</th>
      <th colspan="2" class="b-purpur option">10A</th>
      <th colspan="2" class="b-green option">16A</th>
      <th colspan="2" class="b-yellow option">20A</th>
      <th colspan="2" class="b-purpur option">25A</th>
      <th colspan="2" class="b-grey option">32A</th>
      <th colspan="2" class="b-sea option">40A</th>
      <th colspan="2" class="b-yellow option">50A</th>
    </tr>  
  </thead>
  <tbody>
    <?php foreach ($this->data['dif'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['dif'][$key+1]['param2']){echo 'class="bordered"';} ?>>

        <td field="param2" class="b-red option"><?php echo $value['param2'] ?></td>
        <td colspan="2" field="param4" class="b-blue name"><?php echo $this->replace($value['param4']) ?></td>

        <td field="sku7" class="b-purpur sku"><?php echo $value['sku7'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku7']) ?></td>

        <td field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="b-yellow sku"><?php echo $value['sku2'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="b-purpur sku"><?php echo $value['sku3'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="b-grey sku"><?php echo $value['sku4'] ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>

        <td field="sku6" class="b-yellow sku"><?php echo $value['sku6'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku6']) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

