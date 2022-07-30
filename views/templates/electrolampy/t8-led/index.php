<h2>Лампы Т8 LED</h2>
<table id="<?php echo $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col" colspan="19" class="center st">Лампы Т8 LED</th>
    </tr>
    <tr class="bordered">
      <th bgcolor="#f2f3f4" colspan="4" font color="black" class="b-grey center qty" style="color:DarkBlue">характеристики</th>
      <th colspan="2" class="b-yellow center black"><nobr>Delux (1 год)</nobr></th>
      <th colspan="2" class="b-green center black"><nobr>Евросвет (1 год)</nobr></th>
      <th colspan="2" class="b-purpur center black"><nobr>TNSy (1 год)</nobr></th>
      <th colspan="2" class="b-grey center black"><nobr>Lebron (2 года)</nobr></th>
      <th colspan="2" class="b-sea center black"><nobr>OPTIMA (2 года)</nobr></th>
      <th colspan="2" class="b-brown center black"><nobr>PHILIPS (1 год)</nobr></th>
      <th colspan="3" class="b-blue center black">VIDEX</th>
    </tr>  
  </thead>
  <tbody>
    <?php foreach ($this->data as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td colspan="2" class="b-red center qty"><span field="param1"><?php echo $value['param1'] ?></span> Вт <span field="param3"><?php echo $value['param3'] ?></span> мм</td>
        <td colspan="2" field="param2" class="b-blue center qty"><?php echo $value['param2'] ?></td>

        <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku1']); ?></td>

        <td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
        <td class="b-green qty"><?php $this->get($value['sku2']); ?></td>

        <td field="sku3" class="b-purpur sku"><?php echo $value['sku3'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku3']); ?></td>

        <td field="sku4" class="b-grey sku"><?php echo $value['sku4'] ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku4']); ?></td>

        <td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku5']); ?></td>

        <td field="sku6" class="b-brown sku"><?php echo $value['sku6'] ?></td>
        <td class="b-brown qty"><?php $this->get($value['sku6']); ?></td>

        <td field="sku7" class="b-blue sku"><?php echo $value['sku7'] ?></td>
        <td field="name7" class="b-blue name"><?php echo $value['name7'] ?></td>
        <td class="b-blue qty"><?php $this->get($value['sku7']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
