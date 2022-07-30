<h4>НАКЛАДНЫЕ</h4>
<div class="box0">
  <table id="<?= $this->view; ?>_tab1" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="19" class="b-dark title">Р О З Е Т К И</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">Т И П</th>
        <th colspan="4" class="b-green black title">VIKO</th>
        <th colspan="4" class="b-purpur black title">VIDEX</th>
        <th colspan="4" class="b-grey black title">GISelt</th>
        <th colspan="4" class="b-sea black title">БЕЛАРУСЬ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data['tab1'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['tab1'][$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td colspan="3" field="param2" class="b-yellow option"><?php echo $value['param2'] ?></td>

          <td colspan="2" field="name1" class="b-green name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
          <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>

          <td colspan="2" field="name3" class="b-purpur name"><?php echo $value['name3'] ?></td>
          <td field="sku3" class="b-purpur sku"><?php echo $value['sku3'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku3']) ?></td>

          <td colspan="2" field="name4" class="b-grey name"><?php echo $value['name4'] ?></td>
          <td field="sku4" class="b-grey sku"><?php echo $value['sku4'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku4']) ?></td>

          <td colspan="2" field="name2" class="b-sea name"><?php echo $value['name2'] ?></td>
          <td field="sku2" class="b-sea sku"><?php echo $value['sku2'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku2']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



<div class="box0">
  <table id="<?= $this->view; ?>_tab2" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="19" class="b-dark title">В Ы К Л Ю Ч А Т Е Л И</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">Т И П</th>
        <th colspan="4" class="b-green black title">VIKO</th>
        <th colspan="4" class="b-purpur black title">VIDEX</th>
        <th colspan="4" class="b-grey black title">GISelt</th>
        <th colspan="4" class="b-sea black title">БЕЛАРУСЬ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data['tab2'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['tab2'][$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td colspan="3" field="param2" class="b-yellow option"><?php echo $value['param2'] ?></td>

          <td colspan="2" field="name1" class="b-green name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
          <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>

          <td colspan="2" field="name3" class="b-purpur name"><?php echo $value['name3'] ?></td>
          <td field="sku3" class="b-purpur sku"><?php echo $value['sku3'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku3']) ?></td>

          <td colspan="2" field="name4" class="b-grey name"><?php echo $value['name4'] ?></td>
          <td field="sku4" class="b-grey sku"><?php echo $value['sku4'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku4']) ?></td>

          <td colspan="2" field="name2" class="b-sea name"><?php echo $value['name2'] ?></td>
          <td field="sku2" class="b-sea sku"><?php echo $value['sku2'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku2']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>